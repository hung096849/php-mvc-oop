<?php
namespace MVC\Models;
use MVC\Models\TaskResourceModel;
use MVC\Config\Database;
use PDO;
class TaskRespository extends Task implements TaskResourceModel {

    public function add($model){
        $this->model=$model;
    }
    public function edit($model){
        $this->model=$model;
    }
    public function get($id){
        $this->id=$id;
    }
    public function delete($model){
        $this->model=$model;
    }
    public function getAll($model){
        $this->model=$model;
        
    }
    
}