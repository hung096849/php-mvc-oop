<?php
namespace MVC\Models;
use MVC\Core\ResourceModel;
use MVC\Models\Task;
class TaskResourceModel extends ResourceModel {

    public function __construct() {
        $this->_init('tasks','id',new Task());
    }
  
    }