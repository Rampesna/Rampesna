<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesTableModel extends Model
{
    protected $table = "services";
    protected $primaryKey = "id";
    protected $guarded = [];
}
