<?php
namespace MVC\Models;
use MVC\Core\Model;
use MVC\Config\Database;
class Student extends Model
{
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