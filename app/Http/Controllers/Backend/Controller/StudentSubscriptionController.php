<?php

namespace App\Http\Controllers\Api\Controller;
use App\Http\Controllers\ViewModels\HomePageController;
use App\Models\StudentResult;
use Illuminate\Http\Request;

/**
 * Class ApiStudentSubscriptionController
 * @package App\Http\Controllers\Api\Controller
 */
class StudentSubscriptionController extends HomePageController
{
    protected const Entity = StudentResult::class;

    public function index(): \Illuminate\Contracts\View\View
    {
        return parent::index();
    }

    public function store(Request $request)
    {
    }
}