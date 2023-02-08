<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [ 'fieldName', 'fond' ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }


    public  function uploadFile ($file)
    {
        if ($file == null) return;

        $ext = $file->extension();
        if (! in_array($ext, ['jpg'])) return;

        $fileName = 'fond-' . Str::random(5) . '.' . $ext;
        $path = 'images/';
        $file->storeAs($path, $fileName, 'uploads');

        $this->removeFile();
        $this->file_path = 'uploads/' . $path . $fileName;
        $this->save();
    }

    public function  removeFile()
    {
        if ($this->fond != null) {
            $path = str_replace ('uploads/', '', $this->fond);
            Storage::disk('uploads')->delete($path);
            $this->fond = null;
        }
    }

    public  function getFile()
    {
        if ($this->avatar) {
            return asset($this->fond);
        }
        return asset('assets/file/empty.jpg');
    }

}
