<h1>Add student</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name">
    </div>

    <div class="form-group">
        <label for="dob">Dob</label>
        <input type="date"  class="form-control" id="dob" placeholder="Enter a date" name="dob">
    </div>

  
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">SEX</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="male" value="1" >
          <label class="form-check-label" for="male">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="female" value="0">
          <label class="form-check-label" for="female">
          Female
          </label>
        </div>
      </div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>