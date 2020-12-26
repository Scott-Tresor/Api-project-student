<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, mixed|null $data)
 * @method static find($data)
 */
class StudentResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'username',
        'name',
        'promotion'
    ];
}
