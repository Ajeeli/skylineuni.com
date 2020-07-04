<?php
    $title = "CORPORATE DONERS";
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
?>

<body>
    <section class="sections">
        <div class = "container my-5 py-3">
            <div class = "row">
                <!-- Side-Bar Menu -->
                <div class = "col-3 pt-5 side-bar-menu">
                    <nav>
                        <ul>
                            <a href = "partners_and_donors.php"><li>Partners and Donors</li></a>
                            <a href = "corporate_donors.php"><li class = "activeLink">Corporate Donors</li></a>
                            <a href = "academic_partners.php"><li>Academic Partners</li></a>
                            <a href = "strategic_partners.php"><li>Strategic Partners</li></a>
                            <a href = "become_donor.php"><li>Become a Donor</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">The Corporate Donors</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td>varden Mills’</td>
                                    </tr>
                                    <tr>
                                        <td>PB Foundation</td>
                                    </tr>
                                    <tr>
                                        <td>Kevlon’s Corporate</td>
                                    </tr>
                                    <tr>
                                        <td>Innerdoor’s</td>
                                    </tr>
                                    <tr>
                                        <td>VSC Health Foundation</td>
                                    </tr>
                                    <tr>
                                        <td>Dahl’s Corporate</td>
                                    </tr>
                                    <tr>
                                        <td>Jelta Charity</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
    
<?php
   include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>