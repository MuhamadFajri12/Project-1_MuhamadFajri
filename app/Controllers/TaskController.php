<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TaskController extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Task List'
        ];
        echo view('page_tasks',$data);

    }
}
