<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastChampions extends Model
{
    use HasFactory;
    protected $table = 'Past_Champions';
    protected $primaryKey = 'id';
    protected $timeStamp = true;
    protected $guard = [];
}
