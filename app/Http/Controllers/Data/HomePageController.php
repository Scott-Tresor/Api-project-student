<?php


namespace App\Http\Controllers\ViewModels;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomePageController extends Controller
{
    protected const Entity = [];
    protected const VIEWS = [];

    public function index(): \Illuminate\Contracts\View\View
    {
        return View::make('index');
    }
}