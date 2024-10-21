<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbctque extends Model
{
    use HasFactory;

    protected $table= 'Mbctque';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'language'
    ];
}
