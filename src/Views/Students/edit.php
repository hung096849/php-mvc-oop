<h1>Edit student</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if (isset($student["name"])) echo $student["name"];?>">
    </div>

    <div class="form-group">
        <label for="dob">Dob</label>
        <input type="date" class="form-control" id="dob" placeholder="Enter a dob" name="dob" value ="<?php if (isset($student["dob"])) echo $student["dob"];?>">
    </div>

    
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">SEX</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex" value=<?php if (isset($student["sex"])) echo $student["sex"];?> checked>
          <label class="form-check-label" for="mail">
            mail
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex" value=<?php if (isset($student["sex"])) echo $student["sex"];?>>
          <label class="form-check-label" for="femail">
          Femail
          </label>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>