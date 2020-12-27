<?php

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\Requests\StudentSubscriptionRequest;
use App\Models\StudentSubscription;

/**
 * Class ApiStudentSubscriptionController
 * @package App\Http\Controllers\Api\Controller
 */
class ApiStudentSubscriptionController
{
    public function store(StudentSubscriptionRequest $request)
    {
        try {
            $student = StudentSubscription::where('phoneNumber', $request->input('phoneNumber'))->get();
            if (isset($student) && request()->isMethod('POST')){
                $student = new StudentSubscription($request->validated());
            }
        } catch (\Exception $exception){
            return response([
                'code' => $exception->getCode(),
                'message' => $exception->getMessage()
            ]);
        }
    }
}