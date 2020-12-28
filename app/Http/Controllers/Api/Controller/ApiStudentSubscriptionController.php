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
    public function  index()
    {
        return response([
            'student_identity' => StudentSubscription::orderBy('created_at', 'DESC')->get()
        ], 200);
    }

    public function store(StudentSubscriptionRequest $request)
    {
        try {
            $student = StudentSubscription::where('phone_number', $request->input('phone_number'))->get();
            if (isset($student) && $request->isMethod('POST')){
                $student = new StudentSubscription($request->validated());
                $student->save();
                $request->input('email') != null ?
                    $request :
                    ' '
                ;
            }

            return response([
                'student_identity' => $student
            ], 200);
        } catch (\Exception $exception){
            return response([
                'code' => $exception->getCode(),
                'message' => $exception->getMessage()
            ]);
        }
    }
}