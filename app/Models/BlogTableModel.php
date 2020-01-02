<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTableModel extends Model
{
    protected $table = "blog";
    protected $primaryKey = "id";
    protected $guarded = [];
}
