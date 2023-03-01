<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        return $this->belongsToMany(User::class, 'teams', 'field_id', 'user_id');
    }

    public  function uploadFile ($file)
    {
        if ($file == null) return;

        $ext = $file->extension();
        if (! in_array($ext, ['jpg', 'jpeg', 'png'])) return;

        //$fileName = basename($file,  PATHINFO_FILENAME) . '.' . $ext;
        $fileName = 'fild-' . $this->id  . '-'. Str::random(5) . '.' . $ext;
        $path = 'images/';
        $file->storeAs($path, $fileName, 'uploads');

        $this->removeFile();
        $this->fond = 'uploads/' . $path . $fileName;
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
        if ($this->fond) {
            return asset($this->fond);
        }
        return  false;
        //return asset('uploads/file/empty.jpg'); //заглушка
    }

    public  function getFileName()
    {
        if ($this->fond) {
            $url = asset($this->fond);
            $fileName = basename($url);
            return $fileName;
        }
        return  false;
    }

}
