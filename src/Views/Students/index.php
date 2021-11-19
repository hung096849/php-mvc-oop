<h1>Students</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/students/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new student</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Sex</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($students as $student)
        {
            $id         = $student->getId();
            $name      = $student->getName();
            $dob       = $student->getDob();
            $sex       = $student->getSex();
            echo '<tr>';
            echo "<td>" .$id . "</td>";
            echo "<td>" .$name . "</td>";
            echo "<td>" .$dob . "</td>";
            echo "<td>" . ($sex==1?"Male":"Female") . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/students/edit/" . $id . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/students/delete/" . $id. "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>