<?php
namespace MVC\Models;
use MVC\Core\ResourceModel;
class StudentResourceModel extends ResourceModel {

public function __construct() {
    $this->_init("student", "studentId");
}

}