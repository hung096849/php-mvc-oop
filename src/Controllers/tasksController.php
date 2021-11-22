<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\Task;
use MVC\Models\TaskRespository;

class TasksController extends  Controller
{
    // $taskResourceModel = new \MVC\TaskResourceModel();
    // public function save($model) {
    //     return  $taskResourceModel->save($model);
    // }
    function index()
    {
        // $tasks = new Task();
        $tasks = new TaskRespository();
        $d['tasks'] = $tasks->getAll($tasks);
        // $d['tasks'] = $tasks->showAllTasks();
        $this->set($d);
        $this->render("index");
    }
    function create()
    {

        if (isset($_POST["title"])) {
            // $task= new TaskRespository();
            $task = new Task();
            $title = $_POST["title"];
            $description = $_POST["description"];
            $created_at = date('Y-m-d h:i:sa');
            $updated_at = date('Y-m-d h:i:sa');
            $task->setTitle($title);
            $task->setDes($description);
            $task->setCreatedAt($created_at);
            $task->setUpdatedAt($updated_at);
            //   echo '<pre>';
            //   print_r($task);
            // die;

            $taskrespo = new TaskRespository();
            // if ($task->create($_POST["title"], $_POST["description"]))
            if ($taskrespo->add($task)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->render("create");
    }
    function edit($id)
    {

        $taskrespo = new TaskRespository();
        // $d["task"] = $task->showTask($id);
        $d["task"] = $taskrespo->get($id);
        if (isset($_POST["title"])) {
            $task = new Task();
            $title = $_POST["title"];
            $description = $_POST["description"];
            $created_at = date('Y-m-d h:i:sa');
            $updated_at = date('Y-m-d h:i:sa');
            $task->setTitle($title);
            $task->setDes($description);
            $task->setCreatedAt($created_at);
            $task->setUpdatedAt($updated_at);
            if ($taskrespo->edit($task)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }
    function delete($id)
    {
        require(ROOT . 'Models/Task.php');
        // $task = new Task();
        $task = new TaskRespository();
        $task->delete($id);
        header("Location: " . WEBROOT . "tasks/index");
    }
}
