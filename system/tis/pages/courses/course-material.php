<?php
    // Title
    $title = "COURSE MATERIALS";

    // $_POST Variables
    $CourseID = $_POST['CourseID'];
    $CourseName = $_POST['CourseName'];
    $TutorID = $_POST['TutorID'];
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <!-- Meta Tags -->
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0, fit-to-shrink=no, user-scalable=no">
    <meta name = "description" content = "Skyline Online University SOU is a high standard university that allows people from all around the world to educate themselves at near zero costs, it is organized by high level teachers and professors">
    <meta name = "author" content = "Skyline Technologies W.L.L">
    <meta name = "keywords" content = "skytechbh, skyline, skyline technologies, bahrain, worldwide, university, online university, cheap university, good university">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Fonts -->
    <!-- CSS Link -->
    <link type = "text/css" rel = "stylesheet" href = "../../css/style.css">
    <!-- Title -->
    <title><?php echo $title; ?></title>
</head>
    
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3><?php echo $CourseName; ?></h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="courses.php"> Courses</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $CourseName; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "row frame-body" style = "border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div class = "col-12 my-3" id = "player-section">
                <?php 
                    include ('../../inc/vimeo-player.php');
                ?>
            </div>
        </div>
    </div>
</body>