<?php
session_start();

if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../db_connection.php');
    
    $stdID = $_SESSION['student']['id'];
    $stdProgramID = $_SESSION['student']['programID'];
    
    if(isset($_POST['submit'])) {
        $amount = $_POST['amount'];
        $dept = $_POST['dept'];
        $newDept = $dept - $amount;
        
        $_SESSION['newDept'] = $newDept;
    }
}

    $title = "E-PAYMENTS";
    $cssLink = "../css/";
    include("../inc/header.php");
?>
<body class = "system-body sis-system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3 class = "sis-orange-text">E-Payments</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb sis-breadcrumb">
                        <li class="breadcrumb-item"><a href="../pages/dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">E-Payments</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
            <div class = "row frame-header py-3">
                <div class = "col-6">
                </div>
                <div class="col-6 dropdown text-right">
                </div>
            </div>
            <div class = "row frame-body">
                 <div class = "col-12 text-center my-3">

                    <p>Amount to pay: $<?php echo $amount; ?></p> 
                    <p>Please select a method to pay</p>

                    <!-- Paypal Component -->
                    <div id="paypal-button" style = "text-align: center;"></div>
                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                    <script>

                    paypal.Button.render({
                        // Configure environment
                        env: 'sandbox', // sandbox | production
                        client: {
                            sandbox: 'AXIN24RCeBUloZQq0A87j2dm3R2qq2Mz273jBAHwcFslzrZ1Q_eQUWPkI3aql3xg1hesjyZdzFoUC56R',
                            production: 'demo_production_client_id'
                        },
                        // Customize button (optional)
                        locale: 'en_US',
                        style: {
                            size: 'medium',
                            color: 'blue',
                            shape: 'rect',
                        },

                        // Set up a payment
                        payment: function(data, actions) {
                            return actions.payment.create({
                                transactions: [{
                                    amount: {
                                        total: <?php echo $amount; ?>,
                                        currency: 'USD'
                                    }
                                }]
                            });
                        },
                        // Execute the payment
                        onAuthorize: function(data, actions) {
                            return actions.payment.execute().then(function() {
                                // Show a confirmation message to the buyer
                                window.alert('Thank you, an electronic receipt has been sent to your email!');
                                window.location.replace("e-pay-proc-final2.php");
                            });
                        }
                    }, '#paypal-button');

                    </script>

                <!-- End of Paypal Component -->
                </div>
            </div>
        </div>
    </div>
</body>
<?php

$mysqli->close();
?>