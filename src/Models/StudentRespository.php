<?php
namespace MVC\Models;
use MVC\Models\StudentResourceModel;
use MVC\Models\Student;
use MVC\Config\Database;
use PDO;
class StudentRespository extends Student {

    public function add($model){
        $studentResourceModel=new StudentResourceModel();
        return $studentResourceModel->save($model);
    }
    public function edit($model){
        $studentResourceModel=new StudentResourceModel();
        return $studentResourceModel->save($model);
    }
    public function get($id){
        $studentResourceModel=new StudentResourceModel();
        return $studentResourceModel->get($id);
       
    }
    public function delete($id){
        $studentResourceModel=new StudentResourceModel();
        return $studentResourceModel->delete($id);
    }
    public function getAll($model){
        $studentResourceModel=new StudentResourceModel();
        return $studentResourceModel->getAll($model);
    }
    
}