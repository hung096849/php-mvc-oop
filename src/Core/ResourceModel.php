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
        return $req->fetchAll($req->fectchAll(PDO::FETCH_CLASS, $myClass));
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
        ///đầu tiên get object var biến model thành array giống dòng 49
        ///biến array thành string giống dòng 56
          $properties= $model->getProperties($model);
          $myId=$this->id;
          $myTable=$this->table;
          $arrayModel = array(
            "id"=>"null",
            "title"=>"This is title",
            "name"=>"This is name"
        );
        $a=implode("",$arrayModel);
        $b=str_replace($arrayModel,$a,"id=:id,title=:title,name=:name");
        //   $arrayModel = array($model);
        //   $string=is_string($properties);
          $id = $arrayModel[$myId];
          $stringModel = "title=:title, name=:name";
          if($arrayModel["myId"]==null){
              $sql= "INSERT INTO $myTable SET $stringModel";
          }else{
              $sql = "UPDATE $myTable SET $stringModel WHERE $myId= $id";
          }
          $req = Database::getBdd()->prepare($sql);
          return $req->execute($arrayModel);
         }
   
}