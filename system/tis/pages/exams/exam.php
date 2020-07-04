<?php 
    session_start();
    $title = "EXAM QUESTIONS";
    $cssLink = "../../css/";
    include("../../inc/header.php");

    if (isset($_GET['sectionID'])){
        $sectionID = $_GET['sectionID'];
    }
    if (isset($_GET['exam'])) {
        $exam = ($_GET['exam']);
    }
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Exam Questions</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $exam; ?>.php"> <?php echo ucwords($exam); ?> Exam</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Edit Question</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header pt-2 pb-1">
            <div class = "col-9">
                <h4>All Exam Questions</h4>
            </div>
            <div class = "col-3 text-right rdc-icons">
            </div>
        </div>
        <div class = "row frame-body py-3">
            <div class="col-12 dropdown text-right">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-12 mb-3">
                <form action = "" method = "post" class = "result-form pt-3 pl-3 pr-3">
                    <div class = "row">
                        <div class = "col-12 table-responsive">
                            <table class = "table result-table table-striped table-bordered table-hover mt-4">
                                <thead>
                                    <tr role = "row">
                                        <th rowspan = "1" colspan = "1" scope = "col">Question Type</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Question</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">MC - True</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">MC - False</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">MC - False</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">MC - False</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">T &amp; F</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Missing Word</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Math</th>
                                        <th class = "action-column" rowspan = "1" colspan = "1" scope = "col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table1 = "exam";
                                    $attribute1 = "section_id";
                                    $attribute2 = "exam";
                                    $attribute3 = "question_type";
                                    $attribute4 = "question";
                                    $attribute5 = "mc_t";
                                    $attribute6 = "mc_f1";
                                    $attribute7 = "mc_f2";
                                    $attribute8 = "mc_f3";
                                    $attribute9 = "tf";
                                    $attribute10 = "mw";
                                    $attribute11 = "num";
                                    $attribute12 = "question_id";
                                    include("../../php/exam-proc.php");
                                    ?>
                                </tbody>
                            </table><br/>
                        </div>
                    </div>
                    <div class = "row"> <!-- Table result count row -->
                        <div class = "col-12">
                            <?php 
                                $table1 = "exam";
                                $attribute1 = "section_id";
                                $attribute2 = $sectionID;
                                $attribute3 = $exam;
                                include("../../php/result-count.php");
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>