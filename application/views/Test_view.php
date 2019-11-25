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
    <button type="button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
</body>

</html>
<div id="userModal" class="modal fade">
  <div class="modal-dialog">
    <form id="user_form" method="Post" action="<?php echo base_url() ?>test_con/form_validation">
      <?php
      if ($this->uri->segment(2) == "inserted") {
        echo '<p class="text-success">Success</p>';
      }
      ?>
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add User</h4>
        </div>
        <div class="modal-body">
          <label for="projectCode">ProjectCode</label>
          <input type="text" class="form-control" id="projectCode" placeholder="Enter ProjectCode" name="projectCode">
          <span class="text-danger"><?php echo form_error("projectCode"); ?></span>
          <br>
          <label for="projectName">ProjectName</label>
          <input type="text" class="form-control" id="projectName" placeholder="Enter ProjectName" name="projectName">
          <span class="text-danger"><?php echo form_error("projectName"); ?></span>
          <br>
          <label for="budget">Budget:</label>
          <input type="text" class="form-control" id="budget" placeholder="Enter Budget" name="budget">
          <span class="text-danger"><?php echo form_error("budget"); ?></span>
          <br>
          <label for="total">Total:</label>
          <input type="text" class="form-control" id="total" placeholder="Enter Total" name="total">
          <span class="text-danger"><?php echo form_error("total"); ?></span>
          <br>
        </div>
        <div class="modal-footer">
          <input type="submit" name="action" class="btn btn-info btn-lg value=" Add" />
          <button type="button" class="btn btn-default" data-disimiss="modal">close</button>
        </div>
      </div>
  </div>
</div>



















