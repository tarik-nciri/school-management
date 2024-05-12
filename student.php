<?php
    require_once 'config.php';
    //delete
    //delete
    if (isset($_POST['delet'])) {

        $stid = $_POST['stid'];
        $sql = $pdo->prepare("DELETE FROM student WHERE id = ? ");
        $result = $sql->execute([$stid]);
        header('location:student.php');
        exit();
    }
    if (isset($_POST['update'])) {
        $stid = $_POST["sid"];
        $stName = $_POST['stName'];
        $stEmail = $_POST['stEmail'];
        $stDOB = $_POST['stDOB'];
        $stadresse = $_POST['stadresse'];
        $stpassword = $_POST['stpassword'];
        $stteacher = $_POST['stteacher'];
        $query = $pdo->prepare("UPDATE student set name = ? , Email = ? , DOB = ? , adresse = ? , Password = ? , teacher = ? where id = ?");
        $result = $query->execute([$stName,$stEmail,$stDOB,$stadresse,$stpassword,$stteacher,$stid]);
        header('Location: index.php');
        }else {
            echo "Database Error: " ;
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teachers</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white; box-shadow:0 1px 2px 0 grey">
            <a class="navbar-brand" href="#">management schole</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-light my-2 my-sm-0 " type="submit"><a style="text-decoration: none; color:black" href="login.php" href="login.php">log out</a></button>
                </form>
            </div>
        </nav>


        <div class="title">Manage teachers</div>
        <div class="parent">
            <div class="left">
                <div class="w3-sidebar  w3-bar-block" style="width:16%; background-color:rgb(51, 58, 115);">
                    <h4 class="w3-bar-item"><svg style="width: 35px; color:white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H256V416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z" />
                        </svg> School MS</h4>
                    <a href="#" style="color:white" class="w3-bar-item w3-button"><svg style="width: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
                        </svg> Dashboard</a>
                    <a href="index.php" style="color:white" class="w3-bar-item w3-button"><svg style="width: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" />
                        </svg> Teachers</a>
                    <a href="student.php" style="color:white" class="w3-bar-item w3-button"><img src="man.png" width="25px" alt=""> Students</a>
                    <a href="marks.php" style="color:white" class="w3-bar-item w3-button"><img src="check-mark.png" width="25px" alt=""> Marks</a>
                    <a href="#" style="color:white" class="w3-bar-item w3-button"><img src="schedule.png" width="25px" alt=""> Schedules</a>
                    <a href="#" style="color:white" class="w3-bar-item w3-button"><svg style="width: 25px; color:white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H256V416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z" />
                        </svg> Departments</a><br><br><br><br><br><br><br><br>
                    <a href="login.php" style="color:white" class="w3-bar-item w3-button"><img src="logout.png" width="25px" alt=""> Logout</a>
                </div>
            </div>
            <div class="rigth">
                <div class="container1">
                    <form action="" method="post">
                        <input type="hidden" id="sid" name="sid" value="">
                        <div class="form-group">
                            <label for="TName">student Name:</label>
                            <input type="text" id="stName" name="stName" required>
                        </div>
                        <div class="form-group">
                            <label for="stEmail">student Email:</label>
                            <input type="email" id="stEmail" name="stEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="stDOB">student Date of Birth:</label>
                            <input type="date" id="stDOB" name="stDOB" required>
                        </div>
                        <div class="form-group">
                            <label for="stadresse">student adresse:</label>
                            <input type="text" id="stadresse" name="stadresse" required>
                        </div>
                        <div class="form-group">
                            <label for="stpassword">student Password:</label>
                            <input type="password" id="stpassword" name="stpassword" required>
                        </div>
                        <div class="form-group">
                            <label for="stteacher">student teacher:</label>
                            <input type="text" id="stteacher" name="stteacher" required>
                        </div>
                        <DIV class="buttons">
                            <button class="btn btn-warning" type="submit" style="padding:5px 30px;" name="update">Update</button>
                            <button class="btn btn-primary" type="submit" style="padding:5px 30px;" name="save">Save</button>
                        </DIV>
                    </form>
                </div>
                <div class="container2">
                    <h3>
                        <center>student list</center>
                    </h3>
                    <?php
                    if (isset($_POST['save'])) {
                        $stName = $_POST['stName'];
                        $stEmail = $_POST['stEmail'];
                        $stDOB = $_POST['stDOB'];
                        $stadresse = $_POST['stadresse'];
                        $stpassword = $_POST['stpassword'];
                        $stteacher = $_POST['stteacher'];
                        $query = "INSERT INTO student (id,Name,Email,DOB,adresse,Password,teacher) VALUES (null,'$stName','$stEmail','$stDOB','$stadresse','$stpassword','$stteacher')";
                        if ($pdo->query($query)) {
                            echo "Record inserted successfully";
                        } else {
                            echo  "Error in query";
                        }
                    }

                    $content = "SELECT * from  student";
                    $result = $pdo->prepare($content);
                    $result->execute();
                    if ($result->rowcount() > 0) {
                    echo "<table border='1' id='tabstu'  width='5px'>
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>name</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>adresse</th>
                            <th>password</th>
                            <th>teacher</th>
                            <th>Delet</th>
                        </tr>
                    </thead>
                    <tbody>";
                        while ($data = $result->fetch()) {
                            echo "<tr>
                            <td>" . $data['id'] . "</td>
                            <td>" . $data['Name'] . "</td>
                            <td>" . $data['Email'] . "</td>
                            <td>" . $data['DOB'] . "</td>
                            <td>" . $data['adresse'] . "</td>
                            <td>" . $data['Password'] . "</td>
                            <td>" . $data['teacher'] . "</td>
                            <td>
                            <form action='' method='post'>
                            <input type='hidden' name='stid' value=" . $data['id'] . " >
                            <input class='delet' type='submit' name='delet' value='&#x2613;'>
                            </form>
                            </td>

                    </tbody>
                    </tr>";
                        }
                        echo "</tbody><table>";
                    } else {
                        echo "<p class='mt-4'>Aucun stagiaire trouvé.</p>";
                    }

                    ?>
                </div>
            </div>
        </div>


    </body>
    <script src="script.js"></script>

    </html>