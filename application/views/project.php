<?php
$connect = mysqli_connect("localhost", "root", "", "timesheet");
$query = "SELECT * FROM projects";
$result = mysqli_query($connect, $query);
?>
<div id="colorlib-main">
  <div style="background-image: url(../public/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="js-fullheight d-flex justify-content-center align-items-center">
      <div class="col-md-12">
        <div class="desc">
          <form class="form-inline md-form form-sm active-cyan- mt-4">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search project name" aria-label="Search">
            <button type="button" class="btn btn-dark">Search</button>
          </form>
          <br><br>
          <div class="container">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_data_Model" data-whatever="@getbootstrap">Create Project</button>
            
            <div id="add_data_Model" class="modal fade" >
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="model-body">
                    <form role="form-control" id="add_project" method="post">
                      <div class="form-group" >
                        <label for="recipient-name" class="col-form-label">Enter project code:</label>
                        <input type="text" class="form-control" id="proCode">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Enter project name:</label>
                        <input type="text" class="form-control" id="ProName">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Budget expenses:</label>
                        <input type="text" class="form-control" id="Budget">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Total duration:</label>
                        <input type="text" class="form-control" id="Total">
                        <div class="input-group-append">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Team:</label>
                        <select class="custom-select" id="inputGroupSelect04">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="savePro" class="btn btn-info btn-lg">Save Project</button>
                  </div>
                </div>
              </div>
              </div>
              </div>
            </div><br>
            <br>
            <div id="project_table">
              <table class="table table-hover">
                
                  <tr>
                    <th scope="col">Project Code#</th>
                    <th scope="col">Project name</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Total duration</th>
                    <th scope="col">Team</th>
                  </tr>
                  <?php
                while($row = mysqli_fetch_array($result))
                {
                ?>
                <tr>
                  <td><?=$row->ProjectCode ?></td>
                  <td><?=$row->ProjectName ?></td>
                  <td><?=$row->Budget ?></td>
                  <td><?=$row->Total_dur ?></td>
                  <td><?=$row->Team ?></td>
                </tr>
                <?php
                }
                ?>
              </table>
            </div>


            <script>
              $(document).ready(function() 
              {
                    $('#add_project').on('submit', function(event) 
                    {
                        event.prevenDefault();
                        if ($ '#proCode').val() == "") 
                        {
                          alert("Project code is required");
                        } 
                        else if ($('#ProName').val() == '') 
                        {
                          alert("Project name is required");
                        } 
                        else if ($('#Budget').val() == '') 
                        {
                          alert("Budget expenses  is required");
                        } 
                        else if ($('#Total').val() == '') 
                        {
                          alert("Total duration  is required");
                        } 
                        else 
                        {
                          $.ajax({
                          url: "insert_project.php",
                          method: "POST"
                          data: $('add_project').serialize(),
                          success: function(data) 
                          {
                            $('#add_project')[0].reset();
                            $('#add_data_Model').model('hide');
                            $('#project_table').html(data);
                          }
                          })
                        }
                    }
                  });               
                  </script>
      