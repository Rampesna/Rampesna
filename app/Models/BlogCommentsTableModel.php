<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCommentsTableModel extends Model
{
    protected $table = "blog_comments";
    protected $primaryKey = "id";
    protected $guarded = [];
}
