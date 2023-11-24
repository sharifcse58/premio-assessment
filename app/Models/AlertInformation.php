<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertInformation extends Model
{
    protected $table = 'alert_informations';
    protected $guarded = ['id'];

    use HasFactory;
}
