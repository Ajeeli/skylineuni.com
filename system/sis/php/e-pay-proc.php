<?php

if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../db_connection.php');
    
    $stdID = $_SESSION['student']['id'];
    $stdProgramID = $_SESSION['student']['programID'];
            
    //$PaymentDept = $mysqli->query("SELECT Payment_dept FROM student WHERE student_id = '$stdID' LIMIT 1")->fetch_object()->PaymentDept;
    
    $sql = "SELECT fname, email, country, payment_dept FROM student WHERE student_id = '$stdID' LIMIT 1";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            
            $name = $row['fname'];
            $email = $row['email'];
            $country = $row['country'];
            $PaymentDept = $row['payment_dept'];
        }
    }
    ?>

<div class = "col-12 table-responsive">
    <table class = "table table-striped table-bordered table-hover mt-4 text-center">
        <thead>
            <tr>
                <th scope = "col">Student ID</th>
                <th scope = "col">Name</th>
                <th scope = "col">Payments Dept</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope = "col"><?php echo $stdID; ?></td>
                <td scope = "col"><?php echo $name; ?></td>
                <td scope = "col">
                    <?php
                        if ($PaymentDept > 0) {
                            echo "$" . $PaymentDept;
                        } else {
                            echo $PaymentDept; 
                        }
                    ?>
                </td>
            </tr>

    <?php
    
   if ($PaymentDept > 0){
       
       ?>

            <tr>
                <form class="paypal" action="../php/e-pay-proc-final.php" method="post" id="paypal_form">
                    <td colspan = "2"><input type = "number" name = "amount" min = "0" max = "<?php echo $PaymentDept; ?>" placeholder = "Enter Amount to Pay (Max: $<?php echo $PaymentDept; ?>)" class = "form-control" required style = "border: 2px ridge #007BFF;"></td>
                    <td scope = "col">
                        <!-- Paypal hidden inputs (sent to paypal) -->
                        <div class = "form-row">
                            <input type="hidden" name="dept" value="<?php echo $PaymentDept; ?>" />
                            <input type="submit" name="submit" value="SUBMIT PAYMENT" class="btn btn-primary form-control" id = "paypal-submit-btn" />
                        </div>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>

        <?php
       
   } else {
        ?>
        <tr>
            <td colspan = "3">All Depts Paid</td>
        </tr>
        <?php
   }
}

$mysqli->close();
?>