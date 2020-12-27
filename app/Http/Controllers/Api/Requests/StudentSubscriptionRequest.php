<?php


namespace App\Http\Controllers\Api\Requests;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StudentSubscriptionRequest
 * @package App\Http\Controllers\Api\Requests
 */
class StudentSubscriptionRequest extends  FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => 'required|min:3',
            'name' => 'required|min:3',
            'sex' => 'required',
            'birthdays_student' => 'date_format:Y-m-d',
            'nationality' => 'required',
            'phoneNumber' => 'required|integer|max:20',
            'email' => 'required|email|unique:students',
            'address' => 'required',
            'town_student' => 'required',
            'school_name' => 'required',
            'state_student' => 'required',
            'bac_code' => 'required|unique:students|max:16',
            'option' => 'required',
            'subscription_date' => 'date_format:Y',
            'percent' => 'required|integer',
            'Department1' => 'required',
            'Department2' => 'required'
        ];
    }
}