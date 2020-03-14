<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">    
    <title>Login Page</title>
</head>
<body>
  <div class="container">
        <div class="jumbotron">
        <div class="card col-*-*">
            <div class="card-header">Login</div>
            <div class="card-body">
                <div class="form">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                          <label for="email">Email address:</label>
                          <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" placeholder="Enter password" id="pass" name="password" required>
                        </div>
                          <label class="radio-inline"><input type="radio" name="admin" value="1">Admin</label></br>
                          <label class="radio-inline"><input type="radio" name="admin" value="2">Candidate</label>
                        <input type="submit" class="btn btn-primary">
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>