<?php
namespace MVC\Models;
use MVC\Core\Model;
use MVC\Config\Database;
class Task extends Model
{
    protected int $id;
    protected string $title;
    protected string $description;
    protected string $created_at;
    protected string $updated_at;
//    function __construct( string $title="")
//    {
//        $this->title=$title;
//    }
   public function getData($data){
       return $this->{$data}; 
   }
   public function getId(){
    return $this->id;
   }
   public function setId($id){
    $this->id=$id;
}
   public function getTitle(){
       return $this->title;
   }
   public function setData($data=null,$value=null){
       if(gettype($data)!="array"){
           $this->{$data}=$value;
       }else{
           foreach ($data as $key => $value2){
               $this->{$key}= $value2;
           }
       }
   }
   public function setTitle($title){
       $this->title=$title;
   }
   public function setDes($description){
       $this->description=$description;
   }
   public function getDes(){
       return $this->description;
   }
   public function setCreatedAt($created_at){
     $this->created_at=$created_at;
   }
   public function getCreatedAt(){
    return $this->created_at;
   }
   public function setUpdatedAt($updated_at){
    $this->updated_at=$updated_at;
  }
  public function getUpdatedAt(){
   return $this->updated_at;
  }
    // public function create($title, $description)
    // {
    //     $sql = "INSERT INTO tasks (title, description, created_at, updated_at) VALUES (:title, :description, :created_at, :updated_at)";

    //     $req = Database::getBdd()->prepare($sql);

    //     return $req->execute([
    //         'title' => $title,
    //         'description' => $description,
    //         'created_at' => date('Y-m-d H:i:s'),
    //         'updated_at' => date('Y-m-d H:i:s')

    //     ]);
    // }

    // public function showTask($id)
    // {
    //     $sql = "SELECT * FROM tasks WHERE id =" . $id;
    //     $req = Database::getBdd()->prepare($sql);
    //     $req->execute();
    //     return $req->fetch();
    // }

    // public function showAllTasks()
    // {
    //     $sql = "SELECT * FROM tasks";
    //     $req = Database::getBdd()->prepare($sql);
    //     $req->execute();
    //     return $req->fetchAll();
    // }

    // public function edit($id, $title, $description)
    // {
    //     $sql = "UPDATE tasks SET title = :title, description = :description , updated_at = :updated_at WHERE id = :id";

    //     $req = Database::getBdd()->prepare($sql);

    //     return $req->execute([
    //         'id' => $id,
    //         'title' => $title,
    //         'description' => $description,
    //         'updated_at' => date('Y-m-d H:i:s')

    //     ]);
    // }

    // public function delete($id)
    // {
    //     $sql = 'DELETE FROM tasks WHERE id = ?';
    //     $req = Database::getBdd()->prepare($sql);
    //     return $req->execute([$id]);
    // }
}
