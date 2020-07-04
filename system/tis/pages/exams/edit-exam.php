<?php 
    session_start();
    $title = "EDIT QUESTION";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    include("../../../../db_connection.php");

    if (isset($_GET['sectionID']) && $_GET['sectionID'] != "") {
        $sectionID = $_GET['sectionID'];
    }
    if (isset($_GET['exam']) && $_GET['exam'] != "") {
        $exam = $_GET['exam'];
    }
    if (isset($_GET['questionID']) && $_GET['questionID'] != "") {
        $questionID = $_GET['questionID'];
    }

    $sql = "SELECT 
    *
    FROM 
    exam
    WHERE 
    question_id = $questionID";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $questionType = $row["question_type"];
            $question = $row["question"];
            $MCT = $row["mc_t"];
            $MCF1 = $row["mc_f1"];
            $MCF2 = $row["mc_f2"];
            $MCF3 = $row["mc_f3"];
            $TF = $row["tf"];
            $MW = $row["mw"];
            $NUM = $row["num"];
        }
    }
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Edit Question</h3>
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
        <div class = "row frame-header py-3">
            <div class = "col-md-9">
                <h4>Edit Question</h4>
            </div>
            <div class = "col-3 text-right rdc-icons">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-10 offset-1">
                <form class = "adding-form py-5" action = "../../php/edit-exam-proc.php" method = "post" onsubmit="enableSample()">
                    <div class="form-row">
                        <input type="hidden" class="form-control" id="inputQuestionID" name = "inputQuestionID" value = "<?php echo $questionID; ?>" maxlength = "10">
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
                                <?php 
                                if ($questionType == "MC") {
                                    ?>
                                    <select name="inputQuestionType" class="form-control" id = "inputQuestionType" onchange = "questionType(this.value)" required autofocus>
                                        <option id = "disabled" value="MC" selected disabled>Multiple Choice</option>
                                        <option value="TF">True&amp;False</option>
                                        <option value="MW">Missing Word</option>
                                        <option value="NUM">Math</option>
                                    </select>
                                    <?php
                                } else if ($questionType == "TF") {
                                    ?>
                                    <select name="inputQuestionType" class="form-control" id = "inputQuestionType" onchange = "questionType(this.value)" required autofocus>
                                        <option value="MC">Multiple Choice</option>
                                        <option id = "disabled" value="TF" selected disabled>True&amp;False</option>
                                        <option value="MW">Missing Word</option>
                                        <option value="NUM">Math</option>
                                    </select>
                                    <?php
                                } else if ($questionType == "MW") {
                                    ?>
                                    <select name="inputQuestionType" class="form-control" id = "inputQuestionType" onchange = "questionType(this.value)" required autofocus>
                                        <option value="MC">Multiple Choice</option>
                                        <option value="TF">True&amp;False</option>
                                        <option id = "disabled" value="MW" selected disabled>Missing Word</option>
                                        <option value="NUM">Math</option>
                                    </select>
                                    <?php
                                } else if ($questionType == "NUM") {
                                    ?>
                                    <select name="inputQuestionType" class="form-control" id = "inputQuestionType" onchange = "questionType(this.value)" required autofocus>
                                        <option value="MC">Multiple Choice</option>
                                        <option value="TF">True&amp;False</option>
                                        <option value="MW">Missing Word</option>
                                        <option id = "disabled" value="NUM" selected disabled>Math</option>
                                    </select>
                                    <?php
                                } else {
                                    ?>
                                    <select name="inputQuestionType" class="form-control" id = "inputQuestionType" onchange = "questionType(this.value)" required autofocus>
                                        <option value="" disabled selected>Select Question Type</option>
                                        <option value="MC">Multiple Choice</option>
                                        <option value="TF">True&amp;False</option>
                                        <option value="MW">Missing Word</option>
                                        <option value="NUM">Math</option>
                                    </select>
                                    <?php
                                }
                                ?>
                        </div>
                    </div>
                    <?php 
                    if ($questionType == "MC") {
                    ?>
                        <div class="form-row" id = "MCEDIT">
                            <div class="form-group col-md-12">
                                <label for="inputQuestionMCEDIT">Question<span class = "asterisk">*</span></label>
                                <input type="text" class="form-control" id="inputQuestionMCEDIT" name = "inputQuestionMCEDIT" maxlength = "255" value = "<?php echo $question; ?>" required>
                            </div>
                            <div class="form-group col-md-3 col-6">
                                <label for="inputTrueMCEDIT">True Answer<span class = "asterisk">*</span></label>
                                <input type="text" class="form-control" id="inputTrueMCEDIT" name = "inputTrueMCEDIT" maxlength = "255" value = "<?php echo $MCT; ?>" required>
                            </div>
                            <div class="form-group col-md-3 col-6">
                                <label for="inputFalseMC1EDIT">False Answer<span class = "asterisk">*</span></label>
                                <input type="text" class="form-control" id="inputFalseMC1EDIT" name = "inputFalseMC1EDIT" maxlength = "255" value = "<?php echo $MCF1; ?>" required>
                            </div>
                            <div class="form-group col-md-3 col-6">
                                <label for="inputFalseMC2EDIT">False Answer<span class = "asterisk">*</span></label>
                                <input type="text" class="form-control" id="inputFalseMC2EDIT" name = "inputFalseMC2EDIT" maxlength = "255" value = "<?php echo $MCF2; ?>" required>
                            </div>
                            <div class="form-group col-md-3 col-6">
                                <label for="inputFalseMC3EDIT">False Answer<span class = "asterisk">*</span></label>
                                <input type="text" class="form-control" id="inputFalseMC3EDIT" name = "inputFalseMC3EDIT" maxlength = "255" value = "<?php echo $MCF3; ?>" required>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
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
                    
                    <?php 
                    if ($questionType == "TF") {
                    ?>
                        <div class="form-row" id = "TFEDIT">
                            <!-- Default inline 1-->
                            <div class="form-group col-md-12">
                                <label for="inputQuestionTFEDIT">Question<span class = "asterisk">*</span></label>
                                <input type="text" class="form-control" id="inputQuestionTFEDIT" name = "inputQuestionTFEDIT" maxlength = "255" value = "<?php echo $question; ?>" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputTrueTF">Answer<span class = "asterisk">*</span></label>
                            </div>
                            <?php 
                                if ($TF == "true") {
                                ?>
                                <div class="form-group col-md-2">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="inputTrueTFEDIT" name="inputTFEDIT" value = "true" checked>
                                        <label class="custom-control-label" for="inputTrueTFEDIT">True</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="inputFalseTFEDIT" name="inputTFEDIT" value = "false">
                                        <label class="custom-control-label" for="inputFalseTFEDIT">False</label>
                                    </div>
                                </div>
                                <?php  
                                } else if ($TF == "false") {
                                ?>
                                <div class="form-group col-md-2">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="inputTrueTFEDIT" name="inputTFEDIT" value = "true">
                                        <label class="custom-control-label" for="inputTrueTFEDIT">True</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="inputFalseTFEDIT" name="inputTFEDIT" value = "false" checked>
                                        <label class="custom-control-label" for="inputFalseTFEDIT">False</label>
                                    </div>
                                </div>
                                <?php    
                                }
                            ?>
                        </div>
                        <?php
                        }
                        ?>
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
                    
                    <?php
                    if ($MW != NULL) {
                    ?>
                    <div class="form-row" id = "MWEDIT">
                        <div class="form-group col-md-12">
                            <label for="inputQuestionMWEDIT">Question<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputQuestionMWEDIT" name = "inputQuestionMWEDIT" maxlength = "255" value = "<?php echo $question; ?>" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" id="inputMWEDIT" name = "inputMWEDIT" maxlength = "255" value = "<?php echo $MW; ?>" required>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="form-row d-none" id = "MW">
                        <div class="form-group col-md-12">
                            <label for="inputQuestionMW">Question<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputQuestionMW" name = "inputQuestionMW" maxlength = "255">
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" id="inputMW" name = "inputMW" maxlength = "255" placeholder = "Missing Word Answer...">
                        </div>
                    </div>
                    
                    <?php
                    if ($NUM != NULL) {
                    ?>
                    <div class="form-row" id = "NUMEDIT">
                        <div class="form-group col-md-12">
                            <label for="inputQuestionNUMEDIT">Question<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputQuestionNUMEDIT" name = "inputQuestionNUMEDIT" maxlength = "255" value = "<?php echo $question; ?>" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="inputNUMEDIT" name = "inputNUMEDIT" maxlength = "255"  value = "<?php echo $NUM; ?>" required>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
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
                        <div class = "form-group col-md-12 text-right">
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">EDIT QUESTION</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script type = "text/javascript">
        function enableSample() {
            document.getElementById('disabled').disabled=false;
        }
        
        var MC = document.getElementById("MC");
        var TF = document.getElementById("TF");
        var MW = document.getElementById("MW");
        var NUM = document.getElementById("NUM");

        var MCEDIT = document.getElementById("MCEDIT");
        var TFEDIT = document.getElementById("TFEDIT");
        var MWEDIT = document.getElementById("MWEDIT");
        var NUMEDIT = document.getElementById("NUMEDIT");
        
        function questionType (val) {
            
            if (val == "MC") {
                MC.classList.remove("d-none");
                TF.classList.add("d-none");
                MW.classList.add("d-none");
                NUM.classList.add("d-none");

                document.getElementById("inputQuestionMC").setAttribute("required", true);
                document.getElementById("inputTrueMC").setAttribute("required", true);
                document.getElementById("inputFalseMC1").setAttribute("required", true);
                document.getElementById("inputFalseMC2").setAttribute("required", true);
                document.getElementById("inputFalseMC3").setAttribute("required", true);

                document.getElementById("inputQuestionTF").removeAttribute("required");

                document.getElementById("inputQuestionMW").removeAttribute("required");
                document.getElementById("inputMW").removeAttribute("required");

                document.getElementById("inputQuestionNUM").removeAttribute("required");
                document.getElementById("inputNUM").removeAttribute("required");
                
                if (MCEDIT) {
                    MCEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionTFEDIT").removeAttribute("required");
                    document.getElementById("inputQuestionMCEDIT").removeAttribute("required");
                    document.getElementById("inputTrueMCEDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC1EDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC2EDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC3EDIT").removeAttribute("required");
                } else if (TFEDIT) {
                    TFEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionTFEDIT").removeAttribute("required");
                } else if (MWEDIT) {
                    MWEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionMWEDIT").removeAttribute("required");
                    document.getElementById("inputMWEDIT").removeAttribute("required");
                } else if (NUMEDIT) {
                    NUMEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionNUMEDIT").removeAttribute("required");
                    document.getElementById("inputNUMEDIT").removeAttribute("required");
                }

            } else if (val == "TF") {
                TF.classList.remove("d-none");
                MC.classList.add("d-none");
                MW.classList.add("d-none");
                NUM.classList.add("d-none");

                document.getElementById("inputQuestionMC").removeAttribute("required");
                document.getElementById("inputTrueMC").removeAttribute("required");
                document.getElementById("inputFalseMC1").removeAttribute("required");
                document.getElementById("inputFalseMC2").removeAttribute("required");
                document.getElementById("inputFalseMC3").removeAttribute("required");

                document.getElementById("inputQuestionTF").setAttribute("required", true);

                document.getElementById("inputQuestionMW").removeAttribute("required");
                document.getElementById("inputMW").removeAttribute("required");

                document.getElementById("inputQuestionNUM").removeAttribute("required");
                document.getElementById("inputNUM").removeAttribute("required");
                
                if (MCEDIT) {
                    MCEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionTFEDIT").removeAttribute("required");
                    document.getElementById("inputQuestionMCEDIT").removeAttribute("required");
                    document.getElementById("inputTrueMCEDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC1EDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC2EDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC3EDIT").removeAttribute("required");
                } else if (TFEDIT) {
                    TFEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionTFEDIT").removeAttribute("required");
                } else if (MWEDIT) {
                    MWEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionMWEDIT").removeAttribute("required");
                    document.getElementById("inputMWEDIT").removeAttribute("required");
                } else if (NUMEDIT) {
                    NUMEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionNUMEDIT").removeAttribute("required");
                    document.getElementById("inputNUMEDIT").removeAttribute("required");
                }

            } else if (val == "MW") {
                MW.classList.remove("d-none");
                MC.classList.add("d-none");
                TF.classList.add("d-none");
                NUM.classList.add("d-none");

                document.getElementById("inputQuestionMC").removeAttribute("required");
                document.getElementById("inputTrueMC").removeAttribute("required");
                document.getElementById("inputFalseMC1").removeAttribute("required");
                document.getElementById("inputFalseMC2").removeAttribute("required");
                document.getElementById("inputFalseMC3").removeAttribute("required");

                document.getElementById("inputQuestionTF").removeAttribute("required");

                document.getElementById("inputQuestionMW").setAttribute("required", true);
                document.getElementById("inputMW").setAttribute("required", true);

                document.getElementById("inputQuestionNUM").removeAttribute("required");
                document.getElementById("inputNUM").removeAttribute("required");
                
                if (MCEDIT) {
                    MCEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionTFEDIT").removeAttribute("required");
                    document.getElementById("inputQuestionMCEDIT").removeAttribute("required");
                    document.getElementById("inputTrueMCEDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC1EDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC2EDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC3EDIT").removeAttribute("required");
                } else if (TFEDIT) {
                    TFEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionTFEDIT").removeAttribute("required");
                } else if (MWEDIT) {
                    MWEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionMWEDIT").removeAttribute("required");
                    document.getElementById("inputMWEDIT").removeAttribute("required");
                } else if (NUMEDIT) {
                    NUMEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionNUMEDIT").removeAttribute("required");
                    document.getElementById("inputNUMEDIT").removeAttribute("required");
                }

            } else if (val == "NUM") {
                NUM.classList.remove("d-none");
                TF.classList.add("d-none");
                MW.classList.add("d-none");
                MC.classList.add("d-none");

                document.getElementById("inputQuestionMC").removeAttribute("required");
                document.getElementById("inputTrueMC").removeAttribute("required");
                document.getElementById("inputFalseMC1").removeAttribute("required");
                document.getElementById("inputFalseMC2").removeAttribute("required");
                document.getElementById("inputFalseMC3").removeAttribute("required");

                document.getElementById("inputQuestionTF").removeAttribute("required");

                document.getElementById("inputQuestionMW").removeAttribute("required");
                document.getElementById("inputMW").removeAttribute("required");

                document.getElementById("inputQuestionNUM").setAttribute("required", true);
                document.getElementById("inputNUM").setAttribute("required", true);
                
                if (MCEDIT) {
                    MCEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionTFEDIT").removeAttribute("required");
                    document.getElementById("inputQuestionMCEDIT").removeAttribute("required");
                    document.getElementById("inputTrueMCEDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC1EDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC2EDIT").removeAttribute("required");
                    document.getElementById("inputFalseMC3EDIT").removeAttribute("required");
                } else if (TFEDIT) {
                    TFEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionTFEDIT").removeAttribute("required");
                } else if (MWEDIT) {
                    MWEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionMWEDIT").removeAttribute("required");
                    document.getElementById("inputMWEDIT").removeAttribute("required");
                } else if (NUMEDIT) {
                    NUMEDIT.classList.add("d-none");
                    document.getElementById("inputQuestionNUMEDIT").removeAttribute("required");
                    document.getElementById("inputNUMEDIT").removeAttribute("required");
                }

            } else if (val == "MCEDIT") {
                MCEDIT.classList.remove("d-none");
                MC.classList.add("d-none");
                TF.classList.add("d-none");
                MW.classList.add("d-none");
                NUM.classList.add("d-none");

                document.getElementById("inputQuestionMCEDIT").setAttribute("required", true);
                document.getElementById("inputTrueMCEDIT").setAttribute("required", true);
                document.getElementById("inputFalseMC1EDIT").setAttribute("required", true);
                document.getElementById("inputFalseMC2EDIT").setAttribute("required", true);
                document.getElementById("inputFalseMC3EDIT").setAttribute("required", true);

                document.getElementById("inputQuestionTF").removeAttribute("required");

                document.getElementById("inputQuestionMW").removeAttribute("required");
                document.getElementById("inputMW").removeAttribute("required");

                document.getElementById("inputQuestionNUM").removeAttribute("required");
                document.getElementById("inputNUM").removeAttribute("required");

            } else if (val == "TFEDIT") {
                TFEDIT.classList.remove("d-none");
                MC.classList.add("d-none");
                TF.classList.add("d-none");
                MW.classList.add("d-none");
                NUM.classList.add("d-none");

                document.getElementById("inputQuestionMC").removeAttribute("required");
                document.getElementById("inputTrueMC").removeAttribute("required");
                document.getElementById("inputFalseMC1").removeAttribute("required");
                document.getElementById("inputFalseMC2").removeAttribute("required");
                document.getElementById("inputFalseMC3").removeAttribute("required");

                document.getElementById("inputQuestionTFEDIT").setAttribute("required", true);

                document.getElementById("inputQuestionMW").removeAttribute("required");
                document.getElementById("inputMW").removeAttribute("required");

                document.getElementById("inputQuestionNUM").removeAttribute("required");
                document.getElementById("inputNUM").removeAttribute("required");

            } else if (val == "MWEDIT") {
                MWEDIT.classList.remove("d-none");
                MC.classList.add("d-none");
                TF.classList.add("d-none");
                MW.classList.add("d-none");
                NUM.classList.add("d-none");

                document.getElementById("inputQuestionMC").removeAttribute("required");
                document.getElementById("inputTrueMC").removeAttribute("required");
                document.getElementById("inputFalseMC1").removeAttribute("required");
                document.getElementById("inputFalseMC2").removeAttribute("required");
                document.getElementById("inputFalseMC3").removeAttribute("required");

                document.getElementById("inputQuestionTF").removeAttribute("required");

                document.getElementById("inputQuestionMWEDIT").setAttribute("required", true);
                document.getElementById("inputMWEDIT").setAttribute("required", true);

                document.getElementById("inputQuestionNUM").removeAttribute("required");
                document.getElementById("inputNUM").removeAttribute("required");

            } else if (val == "NUMEDIT") {
                NUMEDIT.classList.remove("d-none");
                MC.classList.add("d-none");
                TF.classList.add("d-none");
                MW.classList.add("d-none");
                NUM.classList.add("d-none");

                document.getElementById("inputQuestionMC").removeAttribute("required");
                document.getElementById("inputTrueMC").removeAttribute("required");
                document.getElementById("inputFalseMC1").removeAttribute("required");
                document.getElementById("inputFalseMC2").removeAttribute("required");
                document.getElementById("inputFalseMC3").removeAttribute("required");

                document.getElementById("inputQuestionTF").removeAttribute("required");

                document.getElementById("inputQuestionMW").removeAttribute("required");
                document.getElementById("inputMW").removeAttribute("required");

                document.getElementById("inputQuestionNUMEDIT").setAttribute("required", true);
                document.getElementById("inputNUMEDIT").setAttribute("required", true);
            }
        }
    </script>
</body>

<?php 
$mysqli->close();
?>