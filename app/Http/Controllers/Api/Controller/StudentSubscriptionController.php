<?php

namespace App\Http\Controllers\Api\Controller;
use App\Models\StudentResult;
use Illuminate\Http\Request;

/**
 * Class StudentSubscriptionController
 * @package App\Http\Controllers\Api\Controller
 */
class StudentSubscriptionController
{

    public function store(Request $request)
    {
        $student = new StudentResult();
    }
}