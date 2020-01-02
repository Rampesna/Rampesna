<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSettingsTableModel extends Model
{
    protected $table = "general_settings";
    protected $primaryKey = "id";
    protected $guarded = [];
}
