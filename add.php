<!DOCTYPE html>
<html lang="en">
  <?php session_start();
   $quizname = $_GET['qname']; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="add.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Edit questions</title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                            <?php if(isset($_SESSION['admin-name'])) {?>
                            <span class="nav-link"><?php echo $_SESSION['admin-name'] ?></span>
                            <?php } 
                            else {?>
                            <span class="nav-link">Name</span>
                            <?php } ?>
                            </li>
                            <li class="nav-item">
                            <?php if(isset($_SESSION['admin-name'])){
                                echo '<a class="nav-link" href="logout.php">Logout</a>';
                            }
                            else{
                                echo '<a class="nav-link" href="loginForm.php">Login</a>';
                            }?>
                        </li>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="edit-box col-lg-8">
                <form action="add.php">
                    <div class="form-group">
                        <label for="comment">Add question : </label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-5">
                          <label for="usr">Option 1 :</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-5">
                          <label for="usr">Option 2 :</label>
                          <input type="text" class="form-control">
                        </div>     
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-5">
                          <label for="usr">Option 3 :</label>
                          <input type="text" class="form-control" >
                        </div>
                        <div class="form-group col-lg-5">
                          <label for="usr">Option 4 :</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-5">
                          <label for="usr">Answer :</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                </form>
            </div>
            <div class="quest col-lg-4">
                    <?php
                    if(isset($_SESSION['admin-name'])){?>
                    <div class="quest-head"><span><?php echo $quizname;?></span></div>
                    <div class="jumbotron">
                        <div class="questions">
                            <ul>
                              <li>1</li>
                              <li>1</li>
                              <li>1</li>
                              <li>1</li>
                              <li>1</li>
                              <li>1</li>
                            </ul>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <button class="btn btn-primary form-group">Previous</button>
                    </div>
                    <div class="col-lg-2">
                      <button class="btn btn-primary form-group">Next</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
            </div>
          <?php } ?>  
    </div>
</body>
</html>