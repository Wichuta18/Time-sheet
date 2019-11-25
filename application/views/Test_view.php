<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical</h2>
  <form method="Post" action="<?php echo base_url()?>test_con/form_validation">
    <?php 
    if($this->uri->segment(2) == "inserted"){
        echo '<p class="text-success">Success</p>';
    }
    ?>
  <div class="form-group">
      <label for="projectCode">ProjectCode</label>
      <input type="text" class="form-control" id="projectCode" placeholder="Enter ProjectCode" name="projectCode">
      <span class="text-danger"><?php echo form_error("projectCode");?></span>
    </div>
    <div class="form-group">
      <label for="projectName">ProjectName</label>
      <input type="text" class="form-control" id="projectName" placeholder="Enter ProjectName" name="projectName">
      <span class="text-danger"><?php echo form_error("projectName");?></span>
    </div>
    <div class="form-group">
      <label for="budget">Budget:</label>
      <input type="text" class="form-control" id="budget" placeholder="Enter Budget" name="budget">
      <span class="text-danger"><?php echo form_error("budget");?></span>
    </div>
    <div class="form-group">
      <label for="total">Total:</label>
      <input type="text" class="form-control" id="total" placeholder="Enter Total" name="total">
      <span class="text-danger"><?php echo form_error("total");?></span>
    </div>
    <button type="submit" name="insert" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
