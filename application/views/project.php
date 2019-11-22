<div id="colorlib-main">
  <div style="background-image: url(../public/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="js-fullheight d-flex justify-content-center align-items-center">
      <div class="col-md-12">
        <div class="desc">
          <!-- Search form -->
          <form class="form-inline md-form form-sm active-cyan- mt-4">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search project name" aria-label="Search">
            <button type="button" class="btn btn-dark">Search</button>
            <!-- <i class="fas fa-search" aria-hidden="true"></i> -->
          </form>
          <br> <br>
          <!-- <button type="button" class="btn btn-outline-success btn-rounded waves-effect"><i class="fas fa-cogs pr-2" aria-hidden="true"data-toggle="modal" data-target="#addProject"></i>Add Project</button><br><br>             -->
          <div class="container">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create Project</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div  role="form" id="add_project" method="post">
                    <form>
                      <div class="form-group">
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
                    <button type="button" id="savePro" class="btn btn-info btn-lg">Save Project</button>
                  </div>
                </div>
              </div>
            </div><br>
            <br>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Project Code#</th>
                  <th scope="col">Project name</th>
                  <th scope="col">Client</th>
                  <th scope="col">Budget</th>
                  <th scope="col">Total duration</th>
                  <th scope="col">Team</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            <!-- <p class="mb-4">I am A Blogger Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
            <!-- <p><a href="#" class="btn-custom">More About Me <span class="ion-ios-arrow-forward"></span></a></p> -->
            
            <script>
              $(document).ready(function() {
                $('#savePro').click(function() {
                  var proCode = $('#proCode').val();
                  var ProName = $('#ProName').val();
                  var Budget = $('#Budget').val();
                  var Total = $('#Total').val();
                  alert(lname);
                  $.ajax({
                    method: "POST",
                    url: "insert.php",
                    data: $('#add_project').serialize(),
                    beforeSend: function() {
                      $('#response').html('<span class="text-info">Loading response...</span>');
                    },
                    success: function(data) {
                      $('form').trigger("reset");
                      $('#response').fadeIn().html(data);
                      setTimeout(function() {
                        $('#response').fadeOut("slow");
                      }, 5000);
                    }
                  });

                });
              });
            </script>