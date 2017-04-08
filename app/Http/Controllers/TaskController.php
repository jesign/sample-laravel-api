<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){
    	return Task::all();
    }
    public function store(Request $request){
    	$task = new Task;
    	$task->description = $request->description;
    	$task->completed = $request->completed;
    	return $task->save();
    }
}
