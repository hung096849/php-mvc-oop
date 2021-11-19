<h1>Edit task</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value ="<?php if (isset($task)) echo $task->getTitle();?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description" value ="<?php if (isset($task)) echo $task->getDes();?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>