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

        ];
    }
}