<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public $timestamps = false; // yung gamit nito kapag tatanggalin mo yung column timestamps sa table mo 
    //public $table = 'laro'; // you need to define this method if u r not following the naming convention

}
