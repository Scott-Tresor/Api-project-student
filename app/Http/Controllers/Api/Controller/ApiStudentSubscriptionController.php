<?php

namespace App\Http\Controllers\Api\Controller;


use App\Models\StudentSubscription;

/**
 * Class ApiStudentSubscriptionController
 * @package App\Http\Controllers\Api\Controller
 */
class ApiStudentSubscriptionController
{
    public function store()
    {
        try {
            $student = StudentSubscription::where('uid', request()->input('uid'))->get();
        } catch (\Exception $exception){
            return response([
                'code' => $exception->getCode(),
                'message' => $exception->getMessage()
            ]);
        }
    }
}