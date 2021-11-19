<?php
use MVC\Models\Task;
?>
<h1>Tasks</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/tasks/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
        <tr>
            <th>ID</th>
            <th>Task</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
      
        foreach ($tasks as $task)
        {
            $id         = $task->getId();
            $title      = $task->getTitle();
            $description = $task->getDes();
            echo '<tr>';
            echo "<td>" . $id . "</td>";
            echo "<td>" . $title . "</td>";
            echo "<td>" . $description . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/tasks/edit/" . $id . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/tasks/delete/" . $id. "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>