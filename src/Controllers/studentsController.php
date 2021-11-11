<?php
namespace MVC\Controllers;
use MVC\Core\ControllerStudent;
use MVC\Models\Student;

class studentsController extends  ControllerStudent
{
    
    function index()
    {
       

        $students = new Student();

        $d['students'] = $students->showAllStudent();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["name"]))
        {
          

            $student= new Student();

            if ($student->create($_POST["name"], $_POST["dob"], $_POST["sex"]))
            {
                header("Location: " . WEBROOT . "students/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
      
        $student= new Student();

        $d["student"] = $student->showStudent($id);

        if (isset($_POST["name"]))
        {
            if ($student->edit($id, $_POST["name"], $_POST["dob"], $_POST["sex"]))
            {
                header("Location: " . WEBROOT . "students/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Student.php');

        $student = new Student();
        if ($student->delete($id))
        {
            header("Location: " . WEBROOT . "students/index");
        }
    }
}
?>