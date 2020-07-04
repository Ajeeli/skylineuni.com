<?php 
// Classes

class dbconn {
    
    private $dbip = "localhost";
    private $dbname = "genie";
    private $dbuser = "root";
    private $dbpass = "";

    function __construct() {
        $this->ConnectAndGetLink();
    }

    function ConnectAndGetLink(){
        return $DBconnection = mysqli_connect($this->dbip,$this->dbuser,$this->dbpass,$this->dbname);
    }
    function getResults($queryPar){
        $results = mysqli_query($this->ConnectAndGetLink(), $queryPar);
        mysqli_close($this->ConnectAndGetLink());
        return $results;
    }
    
    function sendQuery($queryPar){      
        if(mysqli_query($this->ConnectAndGetLink(), $queryPar)){
            return true;
        }else{
            return false;
        }
        mysqli_close($this->ConnectAndGetLink());
    }
}

class forms {

    // property declaration
    public $location;

    // method declaration
    public function signin($email, $password) {
        include ('../dbconn.php');

        $noError = true;
        $sql = false;
        $query = false;

        if (isset($_POST['submit'])) {
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                echo "no email";
                $noError = false;
            }
            if(isset($_POST['password'])) {
                $password = $_POST['password'];
            } else {
                echo "no password";
                $noError = false;
            }
        } else {
            echo "no submit";
            $noError = false;
        }

        if ($noError) {
            $sql = "SELECT email, password FROM registrants WHERE email = '$email' AND password = '$password'";
            $query = mysqli_query($mysqli, $sql);

            /* fetch associative array */
            //while ($row = mysqli_fetch_assoc($query)) {} used for multiple results and printing
            $row = mysqli_fetch_assoc($query);
                if ($email == $row['email'] && $password == $row['password']) {
                    echo "Login Successful";
                    echo $row['email'];
                } else {
                    echo "Login Unsuccessful";
                    echo $row['email'];
                }
            } else {
                echo "no query";
            }
        }
    }

?>