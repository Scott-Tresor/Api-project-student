<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentSubscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'username' => 'required|min:3',
            'firstname' => 'required|min:3',
            'sex' => 'required',
            'birthdays_student' => 'required|date',
            'birth_place' => 'required|min:4',
            'phone_number' => 'required|unique:student_subscriptions|integer',
            'email' => 'required|email',
            'address' => 'required',
            'town_student' => 'nullable|string',
            'school_name' => 'required|string',
            'state_student' => 'nullable|string',
            'bac_code' => 'required|unique:student_subscriptions|max:16',
            'option' => 'required|string',
            'percent' => 'required|integer',
            'department1' => 'required|string',
            'department2' => 'nullable|string'
        ];
    }
}
