<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $question = Question::all();
        $category = Category::all();
        return view('welcome',compact('category','question'));
    }
}
