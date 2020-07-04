<?php
    $title = "Ph.D DEGREES";
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
?>
<body>
<section class="sections my-5">
    <div class = "container">
	<!-- Section heading -->
        <h2 class="h1-responsive about-section-headers-black text-left">Ph.D Degrees Programs</h2>
        <!-- Section description -->
        <p class = "main-text">Skyline has one the most comprehensive bachelor's degree in the mena region. All students must have sufficient knowledge of the English language to understand the subjects as well as the communications with the university.</p>
        <p class = "note-text">[Final admission eligibility will be determined by the admission office upon scrutiny of provided documents]</p>
    </div>
</section>

<section class="my-5">
    <div class = "container">
        <!-- Section heading -->
        <h2 class="h1-responsive about-section-headers-black text-center">Admission Procedure</h2>
        <!-- Section description -->
	<p class = "main-text">A candidate can obtain admission application form <a href = "apply.php">here</a> and apply for admission (subject to eligibility criteria) by submitting admission form <a href = "apply.php">(Admission Form)</a> with requisite documents including registration fees payable to Skyline University</p>
	<p class = "main-text">Upon receipt of filled admission application form <a href = "apply.php">(Admission Form)</a> at Registrar's office, it is processed after necessary verification subject to admission eligibility criteria and candidate is intimated through an email (if provided in admission application form). A list of admitted candidates is also published and updated during admission session at Skyline University website under admission link.</p>
    </div>
</section>

<section class="my-5">
    <div class = "container">
        <!-- Section heading -->
        <h2 class="h1-responsive about-section-headers-black text-center">Admission Schedule</h2>
        <!-- Section description -->
	   <p class = "main-text">Skyline University offers admission for the new students twice in an academic year namely winter in the month of January/February and summer in the month of June/July each year.</p>
       <h5 class="h1-responsive about-section-headers-black text-center mt-5">Admission Schedule - Year <?php echo date ('Y'); ?></h5>
       <table class="table admission-table table-bordered table-striped table-hover text-center">
           <thead>
               <tr>
                   <th>Description</th>
                   <th>Day</th>
                   <th>Date</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <th scope="row">Admissions Open - Winter <?php echo date ('Y'); ?></th>
                   <td>Any day suits you</td>
                   <td>Jan/Feb <?php echo date ('Y'); ?></td>
               </tr>
               <tr>
                   <th scope="row">Admissions Open - Summer <?php echo date ('Y'); ?></th>
                   <td>Any day suits you</td>
                   <td>June/July <?php echo date ('Y'); ?></td>
               </tr>
           </tbody>
       </table>
    </div>
</section>
</body>
<?php
   include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>