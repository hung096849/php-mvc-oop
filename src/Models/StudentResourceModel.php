<?php
namespace MVC\Models;
use MVC\Core\ResourceModel;
use MVC\Models\Student;
class StudentResourceModel extends ResourceModel {

    public function __construct() {
        $this->_init('students','id',new Student());
    }

}