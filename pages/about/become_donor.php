<?php
$title = "BECOME A DONOR";
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
                            <a href = "corporate_donors.php"><li>Corporate Donors</li></a>
                            <a href = "academic_partners.php"><li>Academic Partners</li></a>
                            <a href = "strategic_partners.php"><li>Strategic Partners</li></a>
                            <a href = "become_donor.php"><li class = "activeLink">Become a Donor</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->

                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">Support Us With Your Donation</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <!-- Section description -->
                            <p class = "main-text">
                            Skyline University is dedicated to make education possible for all people. Skyline University believes that education is a right for every human, and thus it must stay free. You can be part of this hope, your donation can provide education to poor people who only wish to learn and be more productive to their families and societies. If you wish to help, please select a payment method that suits you from the methods listed below.
                            </p>
                        </div>
                    </div>
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black pb-3">Online Payment</h3>
                            <!-- Section description -->
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick" />
                                <input type="hidden" name="hosted_button_id" value="RGPJ7USJCPSF2" />
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                                <img alt="" border="0" src="https://www.paypal.com/en_BH/i/scr/pixel.gif" width="1" height="1"/>
                            </form>
                        </div>
                    </div>
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Bank Transfer</h3>
                            <!-- Section description -->
                            <p class = "main-text"><b>BANK NAME:</b> Nationwide</p>
                            <p class = "main-text"><b>NAME:</b> Raouf Al-Samarraie</p>
                            <p class = "main-text"><b>IBAN:</b> GB73 NAIA: 070246 11302761</p>
                            <p class = "main-text"><b>BIC:</b> NAIAGB21</p>
                            <p class = "main-text"><b>SWIFT CODE:</b> MIDLGB22</p>
                            <p class = "main-text"><b>ACCOUNT NUMBER:</b> 11302761</p>
                            <p class = "main-text"><b>SORT CODE:</b> 070246</p>
                            <p class = "main-text"><b>ADDRESS:</b> 19 BENNETTS HILL, BIRMINGHAM, B2 5QR, United Kingdom</p>
                        </div>
                    </div>
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Bank Transfer (Alternative)</h3>
                            <!-- Section description -->
                            <p class = "main-text"><b>BANK NAME:</b> Maybank</p>
                            <p class = "main-text"><b>SWIFT CODE/ BIC:</b> MBBEMYKL</p>
                            <p class = "main-text"><b>ACCOUNT NAME:</b> Open World sdn. Bhd.</p>
                            <p class = "main-text"><b>ACCOUNT NUMBER:</b> 562263018479</p>
                            <p class = "main-text"><b>ADDRESS:</b> No. 7 &amp; 9, Jalan 9/9C, Seksyen 9, Bandar Baru Bangi, 43650 Bangi, Selangor, Malaysia</p>
                        </div>
                    </div>
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Worldremit (Online Bank Transfer)</h3>
                            <!-- Section description -->
                            <p class = "main-text">You may pay online via the following website; using the bank details above</p>
                            <p class = "main-text"><a href = "https://www.worldremit.com/" target = "_blank">https://www.worldremit.com</a></p>
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