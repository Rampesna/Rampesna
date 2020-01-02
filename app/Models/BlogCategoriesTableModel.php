<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategoriesTableModel extends Model
{
    protected $table = "blog_categories";
    protected $primaryKey = "id";
    protected $guarded = [];
}
