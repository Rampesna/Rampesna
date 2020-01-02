<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioTableModel extends Model
{
    protected $table = "portfolio";
    protected $primaryKey = "id";
    protected $guarded = [];
}
