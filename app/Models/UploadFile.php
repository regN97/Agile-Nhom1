<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    protected $table = 'upload_files';
    protected $fillable = ['file_name', 'file_path', 'file_type', 'uploaded_by'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'image', 'id');
    }
}
