<?php
namespace MVC\Models;
use MVC\Core\Model;
use MVC\Config\Database;
class Task extends Model
{
    private $id;
    private $title;
    private $description;
    public function __set($id, $title,$description)
    {
        $this->id=$id;
        $this->title=$title;
        $this->description=$description;
    }
    public function __get()
    {
       return  $this->id;
       return   $this->title;
       return   $this->description;
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
?>