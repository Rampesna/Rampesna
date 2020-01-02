<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTagsTableModel extends Model
{
    protected $table = "blog_tags";
    protected $primaryKey = "id";
    protected $guarded = [];
}
