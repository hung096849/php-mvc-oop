<?php
namespace MVC\Core;
use MVC\Config\Database;
use PDO;

class ResourceModel implements ResourceModelInterface {
    private $table;
    private $id;
    private $model;
    
    public function _init($table, $id, $model=null){
        $this->table=$table;
        $this->id=$id;
        $this->model=$model;
        
    }
    public function getAll(){
        $myClass=get_class($this->model);
        $myTable=$this->table;
        $sql = "SELECT * FROM $myTable";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS, $myClass);
    }
    public function get($id){
        $myId=$this->id;
        $myClass=get_class($this->model);
        $myTable=$this->table;
        $sql = "SELECT * FROM $myTable WHERE $myId =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchObject($myClass);
    }
    public function delete($id){
        $myId=$this->id;
        $myTable=$this->table;
        $sql = "DELETE FROM $myTable WHERE $myId =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
       
    }
    public function save($model) {
          $arrayModel= $model->getProperties($model);
          $myId=$this->id;
          $myTable=$this->table;
          $stringModel = "" ;
          foreach($arrayModel as $key =>$value){
              $stringModel .= $key . "=:".$key;
              $stringModel .=",";
          }
          $stringModel =substr($stringModel, 0, -1);
          echo '<pre>';
        
          if(!isset($arrayModel[$this->id])||($arrayModel[$this->id]==null)){
              $sql= "INSERT INTO $myTable SET $stringModel";
          }else{
              $id = $arrayModel[$myId];
              $sql = "UPDATE $myTable SET $stringModel WHERE $myId= $id";
          }
          $req = Database::getBdd()->prepare($sql);
          print_r($arrayModel);
          echo $sql;
          return $req->execute($arrayModel);
         }
   
}