<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        return $this->taskService->getAllTasks();
    }

    public function store(StoreTaskRequest $request)
    {
        return $this->taskService->createTask($request->all());
    }

    public function show($id)
    {
        return $this->taskService->getTaskById($id);
    }

    public function update(UpdateTaskRequest $request, $id)
    {
        return $this->taskService->updateTask($id, $request->all());
    }

    public function destroy($id)
    {
        return response()->json($this->taskService->deleteTask($id));
    }
}
