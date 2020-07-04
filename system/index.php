<?php
    session_start();
    if (isset($_SESSION['executive']['id']) && !empty($_SESSION['executive']['id'])) {
        session_unset($_SESSION['executive']['id']);
    } else if (isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
        session_unset($_SESSION['student']['id']);
    } else if (isset($_SESSION['tutor']['id']) && !empty($_SESSION['tutor']['id'])) {
        session_unset($_SESSION['tutor']['id']);
    }
    $title = "INFORMATION SYSTEM LOGIN";
?>

<!DOCTYPE html>
<html lang = "en" style = "height: 100%;">
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
    <link type = "text/css" rel = "stylesheet" href = "assets/style.css">
    <!-- JS Links -->
    <!-- PHP Links -->
    <!-- Title -->
    <title><?php echo $title; ?></title>
<style>
      
    </style>
    <!-- Custom styles for this template -->
</head>
<body class="text-center login-body">
    <form class="form-signin" action = "assets/loginProcess.php" method = "post">
        <img class="mb-4" src="/docs/4.2/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal white-text">Information System</h1>
        <!-- Error message if credentials are not correct -->
        <p id = "errorMsg" class = "loginMsg">Invalid Email or Password</p>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name = "inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name = "inputPassword" class="form-control" placeholder="Password" required>
        <!-- Remember me checkbox
        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked>
            <label class="custom-control-label" for="customCheck">Remember me</label>
        </div>
        End of Remember me checkbox -->
        <button class="btn btn-lg btn-primary btn-block" type="submit" name = "submit">Sign in</button>
        <a href = "../index.php"><p class = "white-text mt-3"><i class="fas fa-arrow-circle-left" style = "vertical-align: middle;"></i> Back to website</p></a>
        <p class="mt-5 mb-3 silver-text">&copy; <?php echo date('Y') - 1 . '-' . date('Y')?></p>
    </form>
    <!-- Check credentials, if wrong display error message -->
    <?php 
        if(isset($_SESSION['sysLogin']['EISLogin']) && ($_SESSION['sysLogin']['EISLogin'] == false)) {
            ?>
            <script type = "text/javascript">
                //alert("both");
                var errorMsg = document.getElementById("errorMsg");
                errorMsg.className = "loginErrorMsg";
            </script>
            <?php
            session_unset($_SESSION['sysLogin']['EISLogin']);
        } else if(isset($_SESSION['sysLogin']['TISLogin']) && ($_SESSION['sysLogin']['TISLogin'] == false)) {
            ?>
            <script type = "text/javascript">
                //alert("both");
                var errorMsg = document.getElementById("errorMsg");
                errorMsg.className = "loginErrorMsg";
            </script>
            <?php
            session_unset($_SESSION['sysLogin']['TISLogin']);
        } else if(isset($_SESSION['sysLogin']['SISLogin']) && ($_SESSION['sysLogin']['SISLogin'] == false)) {
            ?>
            <script type = "text/javascript">
                //alert("both");
                var errorMsg = document.getElementById("errorMsg");
                errorMsg.className = "loginErrorMsg";
            </script>
            <?php
            session_unset($_SESSION['sysLogin']['SISLogin']);
        }
?>
</body>
</html>