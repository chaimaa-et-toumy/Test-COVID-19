<?php 
    $path = ".";
    $display = "d-none";
    include '../includes/head.php'; 
    include '../includes/nav-bar.php'; 
?>

    <!-- steper -->
    <div class="d-flex justify-content-center w-100 mt-4">
        <div class="col-md-4 col-sm-7 col-9">
            <div class="ques-line">
                <span><i></i><h5>Information</h5></span>
                <span><i></i><h5>Questionnaire</h5></span>
                <span><i></i><h5>Resulte</h5></span>
            </div>
        </div>
    </div>

    <!-- Progress bar -->
    <div class="prgress-bar-container d-flex justify-content-center align-items-center w-100 " style="margin-top:70px;">
        <span class="progress_bar col-md-5 col-sm-7 col-10"></span>
        <i class="quiz_num"><span>1</span>/23</i>
    </div>

    <div class="container-fluid mt-4 mb-5">
        <div class="d-flex flex-column align-items-center w-100">
            <div class="col-md-8 col-sm-9 col-12">
                <div class="p-md-4 p-2">
                    <div class="quiz-container text-muted">
                        <div class="Question fw-bold h4 text-muted">
                            <p id>Get started with Bootstrap, the world’s most popular framework for building responsive</p>
                        </div>
                        <div class="answer mt-5 ms-4 d-flex flex-column gap-2" >
                            <div>
                                <input type="radio" id="yes" class="form-check-input" class="checked_input">
                                <label for="yes">Oui</label>
                            </div>
                            <div>
                                <input type="radio" id="no" class="form-check-input" class="checked_input">
                                <label for="no">Non</label>
                            </div>
                        </div>
                        <!-- button -->
                        <div class=" d-flex justify-content-around w-100 gap-1 mt-4" style="margin-top:200px;">
                            <button class="ques-btn" id="previous_quiz">Previous Question</button>
                            <button class="ques-btn" id="next_quiz">Next Question</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
    </div>

    <script src="../js/script.js"></script>
    </body>
    </html>