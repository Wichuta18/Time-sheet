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
  <div id="colorlib-main">
    <div style="background-image: url(../public/images/bg_1.jpg);" data-stellar-background-ratio="0.5"></div>
    <div class="container">
      <h2>Vertical</h2>
      <button type="button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
      <br><br>
      <div class="table-responsive">
        <table class="table table-hover">
          <tr>
            <th scope="col">ProjectCode</th>
            <th scope="col">ProjectName</th>
            <th scope="col">Budget</th>
            <th scope="col">Total</th>
          </tr>
          <?php
          if ($select_data->num_rows() > 0) {
            foreach ($select_data->result() as $row) {
              ?>
              <tr>
                <td><?php echo $row->projectCode; ?></td>
                <td><?php echo $row->projectName; ?></td>
                <td><?php echo $row->budget; ?></td>
                <td><?php echo $row->total_dur; ?></td>
              </tr>
            <?php
              }
            } else {
              ?>
            <tr>
              <td colspan="3">No Data</td>
            </tr>
          <?php
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>


<div id="userModal" class="modal fade">
  <div class="modal-dialog">
    <form id="user_form" method="Post" action="<?php echo base_url() ?>form_validation">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Project</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
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
          <input type="submit" name="action" class="btn btn-info btn-lg" value="Add" />
          <button type="button" class="btn btn-default" data-disimiss="modal">close</button>
        </div>
      </div>
    </form>
  </div>
</div>
<br><br>