<!DOCTYPE html>
<?php 
session_start();
include 'dbconnect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="admin-dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body onload="loadQuizes()">
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
            <?php if(isset($_SESSION['admin-name'])){
            ?>
            <div class="col-lg-3 create-quiz">
                <button class="btn btn-primary form-group" onclick="newQuiz()">Create Quiz</button>
            </div>
            <?php } else{?>
                <div class="col-lg-3 create-quiz">
                <button class="btn btn-primary form-group" onclick="loginFirst()">Create Quiz</button>
            </div>
            <?php }?>
            <div class="col-lg-4" class="newQuiz" id="newQuiz"></div>
            <?php if(isset($_SESSION['admin-name'])){?>
            <div class="col-lg-5 quizes">
                <div class="quiz-head"><span>Your Quizes</span></div>
                <div class="quiz-box" id="quiz-box">     
                    <div id="quiz" onclick="editQuiz()"></div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <script>

        function newQuiz()
        {
            var input = "";
            input += "<label>Enter Quiz Name : </label><br>";
            input += "<input class='form-control form-group' id='quizname' required>"
            input += "<button class='btn btn-primary form-group' onclick='createQuiz()'>Submit</button>"
            document.getElementById("newQuiz").innerHTML = input;
        }
        function loginFirst(){
            var a = confirm("Please login to create a quiz");
            if(a==true){
                location.href = "./loginForm.php";
            }
        }

        function createQuiz()
        {
            var name = document.getElementById("quizname").value;
            var obj = name;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200){
                var quizname = this.responseText;
                window.alert(quizname+" created");
            }
            };
            xmlhttp.send();
            xmlhttp.open("GET", "createQuiz.php?obj="+obj, true);
            loadQuizes();
        }

        function editQuiz(name){
            //var name = document.getElementById('quiz').name;
            window.alert(name);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var nothing = this.responseText;
            }
            };
            xmlhttp.open("GET", "add.php?qname="+name, true);
            xmlhttp.send();
            location.href = "./add.php";
        }
        
        function loadQuizes(){
            var temp = " ";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {   
                var quiz = JSON.parse(this.responseText);
                for(i in quiz)
                {
                    var div = document.createElement("div");
                    var qname = document.createTextNode(quiz[i].quizname);
                    div.appendChild(qname);
                    document.getElementById("quiz").appendChild(div);
                }  
            }
            };
            xmlhttp.open("GET", "loadQuizes.php", true);
            xmlhttp.send();
        }        

        function editQuiz(){
            console.log(document.getElementById("quiz").value);
        }

    </script>
</body>
</html>
