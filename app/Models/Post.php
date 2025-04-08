<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'category_id', 'image', 'uploaded_by', 'status'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function upload_files()
    {
        return $this->belongsTo(UploadFile::class, 'image');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'uploaded_by', 'id');
    }
}
