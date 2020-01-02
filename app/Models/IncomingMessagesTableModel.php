<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomingMessagesTableModel extends Model
{
    protected $table = "incoming_messages";
    protected $primaryKey = "id";
    protected $guarded = [];
}
