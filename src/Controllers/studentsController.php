<?php

namespace MVC\Controllers;

use MVC\Core\ControllerStudent;
use MVC\Models\Student;
use MVC\Models\StudentRespository;

class StudentsController extends  ControllerStudent
{

    function index()
    {


        // $students = new Student();
        $students = new StudentRespository();
        // $d['students'] = $students->showAllStudent();
        $d['students'] = $students->getAll($students);
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["name"])) {
            $student = new Student();
            $name = $_POST["name"];
            $dob = $_POST["dob"];
            $sex = $_POST["sex"];
            $student->setName($name);
            $student->setDob($dob);
            $student->setSex($sex);
            $studentrespo = new StudentRespository();
            if ($studentrespo->add($student)) {
                header("Location: " . WEBROOT . "students/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $student = new Student();
        $studentrespo = new StudentRespository();
        // $d["student"] = $student->showStudent($id);
        $d["student"] = $studentrespo->get($id);
        if (isset($_POST["name"])) {
            $name = $_POST["name"];
            $dob = $_POST["dob"];
            $sex = $_POST["sex"];
            $student->setName($name);
            $student->setDob($dob);
            $student->setSex($sex);
            $studentrespo->edit($student);
            header("Location: " . WEBROOT . "students/index");
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Student.php');
        // $student = new Student();
        $student = new StudentRespository();
        $student->delete($id);

        header("Location: " . WEBROOT . "students/index");
    }
}
