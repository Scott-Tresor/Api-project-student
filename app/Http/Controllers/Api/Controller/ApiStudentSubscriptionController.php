<?php

namespace App\Http\Controllers\Api\Controller;

use App\Http\Requests\StudentSubscriptionRequest;
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
            'student' => StudentSubscription::orderBy('created_at', 'DESC')->get()
        ], 200);
    }

    public function store(StudentSubscriptionRequest $request)
    {
        dd('tresor');
        try {
            $student = StudentSubscription::where('phone_number', $request->input('phone_number'))->get();
            if (isset($student)){
                if ($request->isMethod('POST')){
                    $student = new StudentSubscription($request->validated());
                    $student->save();
                }
            }
            return response([
                'student' => $student
            ]);
        } catch (\Exception $exception){
            return response([
                'code' => $exception->getCode(),
                'message' => $exception->getMessage()
            ]);
        }
    }
}