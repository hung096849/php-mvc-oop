<?php
namespace MVC\Models;
use MVC\Core\Model;
use MVC\Config\Database;
class Student extends Model
{
    protected int $id;
    protected string $name;
    protected string $dob;
    protected bool $sex;
    
//    function __construct( string $name="")
//    {
//        $this->name=$name;
//    }
public function getId(){
    return $this->id;
   }
   public function setId($id){
    $this->id=$id;
}
   public function getData($data){
       return $this->{$data};
   }
   public function getName(){
       return $this->name;
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
   public function setName($name){
       $this->name=$name;
   }
   public function setDob($dob){
       $this->dob=$dob;
   }
   public function getDob(){
       return $this->dob;
   }
   public function setSex($sex){
    $this->sex=$sex;
}
public function getSex(){
    return $this->sex;
}
    // public function create($name, $dob, $sex)
    // {
    //     $sql = "INSERT INTO students (name, dob, sex) VALUES (:name, :dob, :sex)";

    //     $req = Database::getBdd()->prepare($sql);

    //     return $req->execute([
    //         'name' => $name,
    //         'dob' => $dob,
    //         'sex' => $sex

    //     ]);
    // }

    // public function showStudent($id)
    // {
    //     $sql = "SELECT * FROM students WHERE studentId =" . $id;
    //     $req = Database::getBdd()->prepare($sql);
    //     $req->execute();
    //     return $req->fetch();
    // }

    // public function showAllStudent()
    // {
    //     $sql = "SELECT * FROM students";
    //     $req = Database::getBdd()->prepare($sql);
    //     $req->execute();
    //     return $req->fetchAll();
    // }

    // public function edit($id, $name, $dob, $sex)
    // {
    //     $sql = "UPDATE students SET name = :name, dob = :dob , sex = :sex WHERE studentId = :studentId";

    //     $req = Database::getBdd()->prepare($sql);

    //     return $req->execute([
    //         'studentId' => $id,
    //         'name' => $name,
    //         'dob' => $dob,
    //         'sex' => $sex
    //     ]);
    // }

    // public function delete($id)
    // {
    //     $sql = 'DELETE FROM students WHERE studentId = ?';
    //     $req = Database::getBdd()->prepare($sql);
    //     return $req->execute([$id]);
    // }
}
?>