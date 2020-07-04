<?php
    // includes
    $title = "ABOUT US";
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
?>

<section class="sections">
    <div class="container my-5 py-3">
        <div class="row">
            <div class="col-md-10 mx-md-auto col-12 text-center">
                <h6 class="space-text">HELLO!</h6>
                <h2 class="special-header mb-5">Who We Are</h2>
                <p class="easy-text">
                    Skyline University is one of the first Universities based completely on modern Information and Communication Technologies. Skyline University has a clear mission: to provide extremely affordable world class education to aspiring students all over the world.
                </p>
                <p class="easy-text">
                    Skyline University uses the Internet, to allow students to follow its rigorous programs regardless of their physical locations. It thus aims at alleviating the lack of capacity in the existing universities while simultaneously tackling the acute shortage of qualified professors in the world. By identifying the top Professors in the world, regardless of their institutional affiliations, and requesting them to develop and deliver hand-crafted courses, Skyline University aims at providing the very best courses to not only its own students but also to students of all other universities in the world.
                </p>
                <p class="easy-text">
                    Skyline University uses a combination of video lectures, reading material, and on-line interaction for imparting knowledge. However, it follows a module understanding and learning assessment and evaluation system. The University observes the module learning system, its students have complete flexibility to study at their own convenience, pace and place. Skyline University provides its students a great opportunity to participate in academic activities without any extra burden on their pockets as compared with those studying at the conventional universities. The wide spread of subjects and complete flexibility to study at home jointly support the unique idea of &quot;World Class Education at Your Doorstep&quot; and in a true sense makes it unnecessary for students to relocate or travel to larger cities to obtain higher education.
                </p>
                <p class="easy-text">
                    The University's modules are developed by highly qualified academicians who are experts in their field. The University suggests a &quot;Time Plan&quot; for guidance and better time management for studies during the semester.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="about-section my-5 py-3">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-md-5 col-12 mb-5">
                <h2 class="about-section-headers">Our mission</h2>
                <p class="about-section-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget ipsum tincidunt, feugiat sem ut, luctus libero.</p>
            </div>
            <div class="col-md-5 offset-md-2 col-12 offset-0 mb-5">
                <h2 class="about-section-headers">Our essence</h2>
                <p class="about-section-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget ipsum tincidunt, feugiat sem ut, luctus libero.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-12 mb-5 mb-md-0">
                <h2 class="about-section-headers">Our promise</h2>
                <p class="about-section-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget ipsum tincidunt, feugiat sem ut, luctus libero.</p>
            </div>
            <div class="col-md-5 offset-md-2 col-12 offset-0">
                <h2 class="about-section-headers">Our vibe</h2>
                <p class="about-section-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget ipsum tincidunt, feugiat sem ut, luctus libero.</p>
            </div>
        </div>
    </div>
</section>

<section class="sections my-5 py-3">
    <div class="container">
        <h2 class="about-section-headers-black text-center" id="form-section">Write to us</h2>00
        <h6 class="text-center mb-5">We'd love to hear from you!</h6>
        <form class="form-properties col-md-8 offset-md-2 col-12 offset-0" action="../php/contact-process.php" method="post">

            <fieldset>
                <div class="form-row">
                    <div class="col-md-6 col-group">
                        <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
                    </div>
                    <div class="col-md-6 col-group">
                        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 col-group">
                        <textarea name="message" placeholder="Your Message" class="form-control"></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset class="mt-5">
                <div class="form-row">
                    <div class="col-md-6 col-12 offset-md-3 offset-0 col-group">
                        <input type="submit" name="submit" value="SEND" role="button" class="btn btn-block form-button">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>
