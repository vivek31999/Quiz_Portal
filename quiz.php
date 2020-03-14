<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="quiz.css">
    <title>Quiz</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Quiz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                            <?php if(isset($_SESSION['name'])) {?>
                            <span class="nav-link"><?php echo $_SESSION['name'] ?></span>
                            <?php } 
                            else {?>
                            <span class="nav-link">Name</span>
                            <?php } ?>
                            </li>
                            <li class="nav-item">
                            <?php if(isset($_SESSION['name'])){
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
          
        <div class="row quiz-box">
            <div class="col-lg-9 col-md-8 col-sm-6  quiz-bar">
                <div class="row">
                    <div class="col jumbotron quest-box">
                        Questions
                    </div>
                </div>
                <div class="row">
                    <div class=" col quest1" >
                        <div class="jumbotron">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option1
                            </label>
                        </div>
                    </div>
                    <div class=" col quest2">
                        <div class="jumbotron">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col quest3">
                        <div class="jumbotron">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option3
                            </label>
                        </div>
                    </div>
                    <div class="col quest4">
                        <div class="jumbotron">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option4
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  timer">
                <div class="jumbotron">
                        timer
                </div> 
                <div class="progress">
                    <div class="progress-bar" style="width:30%">20%</div>
                  </div>
                </br>
                <div class="navButton">
                    <button class="btn btn-outline-success">Previous</button>
                    <button class="btn btn-outline-success">Next</button>
                </div>
                </br>
                <div class="submit">
                    <button class="btn btn-outline-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
