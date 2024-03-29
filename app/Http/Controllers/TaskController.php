<?php

namespace App\Http\Controllers;
use App\Models\Task; // Ditambahkan

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {}
        public function index()
        {
            $pageTitle = 'Task List';
            $tasks = Task::all(); // Diperbarui
            return view('tasks.index', [
                'pageTitle' => $pageTitle,
                'tasks' => $tasks,
            ]);
        }
    
        public function create()
        {
            $pageTitle = 'Create Task';
            return view('tasks.create', ['pageTitle' => $pageTitle]);
        }
    
        public function edit($id)
        {
            $pageTitle = 'Edit Task';
            $task = Task::find($id); // Diperbarui
    
            return view('tasks.edit', ['pageTitle' => $pageTitle, 'task' => $task]);
        }
    }
