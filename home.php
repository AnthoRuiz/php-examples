<html>
<head>
        <meta charset="UTF-8">
    <!-- vinculo a bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="css/loginStyles.css">
    <title></title>
</head>
  <body>
      <div class="container">
      <div class="row">
          <div class="col-sm-7 col-md-7 col-md-offset-2">
              <div class="account-wall">
              <h4 class="text-center login-title">All Users From Data Base</h4>
                  <br>
                  
                      <table class="table table-bordered">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Password</th>
                          </tr>
                      </thead>

                      <?php  
                      include("Connection.php");
                      $con = new Connection();
                      $con->getAllUsers();

                      ?>

                      
                      </table>
              </div>
          </div>
      </div>
  </div>

  </body>
</html>