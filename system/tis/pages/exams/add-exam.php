<?php 
    session_start();
    $title = "ADD EXAM";
    $cssLink = "../../css/";
    include("../../inc/header.php");

    if (isset($_GET['sectionID'])){
        $sectionID = $_GET['sectionID'];
    }
    if (isset($_GET['exam'])) {
        $exam = ($_GET['exam']);
    }

    include("../../../../db_connection.php");

    $sql = "SELECT 
    count(section_id) AS questions
    FROM 
    exam
    WHERE 
    section_id = '$sectionID' 
    AND 
    exam = '$exam'";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $count = $row['questions'];
        }
    }
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <!-- ucwords($exam) is a php function used to capitalize words -->
                <h3>Add <?php echo ucwords($exam); ?> Exam</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $exam; ?>.php"> <?php echo ucwords($exam); ?> Exam</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Add Question</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header py-3">
            <div class = "col-md-9">
                <h4>Question <?php echo $count + 1; ?></h4>
            </div>
            <div class = "col-3 text-right rdc-icons">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-10 offset-1">
                <form class = "adding-form py-5" action = "../../php/add-exam-proc.php" method = "post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSectionID">Section ID<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputSectionID" name = "inputSectionID" value = "<?php echo $sectionID; ?>" maxlength = "255" required readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputExam">Exam<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputExam" name = "inputExam" value = "<?php echo $exam; ?>" maxlength = "255" required readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputQuestionType">Question Type<span class = "asterisk">*</span></label>
                            <select name="inputQuestionType" class="form-control" id = "inputQuestionType" onchange = "questionType(this.value)" required autofocus>
                                <option value="" disabled selected>Select Question Type</option>
                                <option value="MC">Multiple Choice</option>
                                <option value="TF">True&amp;False</option>
                                <option value="MW">Missing Word</option>
                                <option value="NUM">Math</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row d-none" id = "MC">
                        <div class="form-group col-md-12">
                            <label for="inputQuestionMC">Question<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputQuestionMC" name = "inputQuestionMC" maxlength = "255">
                        </div>
                        <div class="form-group col-md-3 col-6">
                            <label for="inputTrueMC">True Answer<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputTrueMC" name = "inputTrueMC" maxlength = "255">
                        </div>
                        <div class="form-group col-md-3 col-6">
                            <label for="inputFalseMC1">False Answer<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputFalseMC1" name = "inputFalseMC1" maxlength = "255">
                        </div>
                        <div class="form-group col-md-3 col-6">
                            <label for="inputFalseMC2">False Answer<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputFalseMC2" name = "inputFalseMC2" maxlength = "255">
                        </div>
                        <div class="form-group col-md-3 col-6">
                            <label for="inputFalseMC3">False Answer<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputFalseMC3" name = "inputFalseMC3" maxlength = "255">
                        </div>
                    </div>
                    
                    <div class="form-row d-none" id = "TF">
                        <!-- Default inline 1-->
                        <div class="form-group col-md-12">
                            <label for="inputQuestionTF">Question<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputQuestionTF" name = "inputQuestionTF" maxlength = "255">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputTrueTF">Answer<span class = "asterisk">*</span></label>
                        </div>
                        <div class="form-group col-md-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="inputTrueTF" name="inputTF" value = "true" checked>
                                <label class="custom-control-label" for="inputTrueTF">True</label>
                            </div>
                        </div>
                        <!-- Default inline 2-->
                        <div class="form-group col-md-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="inputFalseTF" name="inputTF" value = "false">
                                <label class="custom-control-label" for="inputFalseTF">False</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row d-none" id = "MW">
                        <div class="form-group col-md-12">
                            <label for="inputQuestionMW">Question<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputQuestionMW" name = "inputQuestionMW" maxlength = "255">
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" id="inputMW" name = "inputMW" maxlength = "255" placeholder = "Missing Word Answer...">
                        </div>
                    </div>
                    
                    <div class="form-row NUM d-none" id = "NUM">
                        <div class="form-group col-md-12">
                            <label for="inputQuestionNUM">Question<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputQuestionNUM" name = "inputQuestionNUM" maxlength = "255">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="inputNUM" name = "inputNUM" maxlength = "255" placeholder = "Answer...">
                        </div>
                    </div>

                    <div class="form-row py-4">
                        <div class = "form-group col-md-6">
                            <small>Question Bank: <span style = "color: green; font-weight: bolder;"><?php echo $count; ?></span> Questions. <span style = "color: red; font-weight: bolder;"><?php echo 100 - $count; ?></span> Questions needed to generate random exam</small>
                        </div>
                        <div class = "form-group col-md-6 text-right">
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">ADD QUESTION</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script type = "text/javascript" src = "../../js/exams.js">
        
    </script>
</body>