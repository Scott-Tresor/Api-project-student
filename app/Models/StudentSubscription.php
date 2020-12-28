<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, mixed $input)
 * @method static orderBy(string $string, string $string1)
 */
class StudentSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'firstname',
        'sex',
        'birthdays_student',
        'birth_place',
        'phone_number',
        'email',
        'address',
        'school_name',
        'bac_code',
        'option',
        'percent',
        'department1'
    ];
}
