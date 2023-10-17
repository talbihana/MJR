<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activite extends Model
{
    use HasFactory;
    protected $table = 'activites';
    protected $primaryKey = 'id';
    protected $fillable = ['SP', 'LS', 'AC'];
}
