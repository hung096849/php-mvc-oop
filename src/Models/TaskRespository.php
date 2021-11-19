<?php
namespace MVC\Models;
use MVC\Models\TaskResourceModel;
use MVC\Config\Database;
use PDO;
class TaskRespository extends Task  {
   
    public function add($model){
        // $taskResourceModel=new TaskResourceModel();
        // return  $taskResourceModel->add($model);
        $taskResourceModel=new TaskResourceModel();
        return $taskResourceModel->save($model);
    }
    public function edit($model){
        $taskResourceModel=new TaskResourceModel();
        return $taskResourceModel->save($model);
    }
    public function get($id){
        $taskResourceModel=new TaskResourceModel();
        return $taskResourceModel->get($id);
    }
    public function delete($id){
        $taskResourceModel=new TaskResourceModel();
        return $taskResourceModel->delete($id);
    }
    public function getAll($model){
        $taskResourceModel=new TaskResourceModel();
        return $taskResourceModel->getAll($model);
    }
    
}