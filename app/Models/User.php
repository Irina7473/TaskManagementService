<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'name', 'email', 'password', 'fields_id' ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  function uploadFile ($file)
    {
        if ($file == null) return;

        $ext = $file->extension();
        if (! in_array($ext, ['jpg'])) return;

        $fileName = 'avatar-' . Str::random(5) . '.' . $ext;
        $path = 'images/';
        $file->storeAs($path, $fileName, 'uploads');

        $this->removeFile();
        $this->file_path = 'uploads/' . $path . $fileName;
        $this->save();
    }

    public function  removeFile()
    {
        if ($this->avatar != null) {
            $path = str_replace ('uploads/', '', $this->avatar);
            Storage::disk('uploads')->delete($path);
            $this->avatar = null;
        }
    }

    public  function getFile()
    {
        if ($this->avatar) {
            return asset($this->avatar);
        }
        return asset('assets/file/empty.jpg');
    }

    public function fields()
    {
        return $this->hasMany(Field::class);
    }


}
