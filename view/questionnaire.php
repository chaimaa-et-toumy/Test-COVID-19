<?php
$path = ".";
$display = "d-none";
include '../includes/head.php';
include '../includes/nav-bar.php';
?>
<style>
.precedent,
.suivant {
    background-color: var(--blue1) !important;
}

.question-color {
    color: #787878;
}
</style>
<!-- steper -->
<div class="d-flex justify-content-center w-100 mt-4">
    <div class="col-md-4 col-sm-7 col-9">
        <div class="ques-line">
            <span><i></i>
                <h5>Information</h5>
            </span>
            <span><i></i>
                <h5>Questionnaire</h5>
            </span>
            <span><i></i>
                <h5>Resulte</h5>
            </span>
        </div>
    </div>
</div>

<!-- Progress bar -->
<div class="prgress-bar-container d-flex justify-content-center align-items-center w-100" style="margin-top:70px;">
    <span class="progress_bar col-md-5 col-sm-7 col-10"></span>
    <i class="nbr-Q"><span>1</span>/23</i>
</div>
<div class="d-flex justify-content-center mt-5 ">
    <div id="carouselExampleControls" class="carousel slide d-flex flex-column gap-5" data-bs-interval="false">
        <div class="carousel-inner text-center px-sm-5">
            <div class="carousel-item active question">
                <p class="h3 q1 question-color">Pensez-vous avoir ou avoir eu de la fièvre ces 10 derniers jours
                    (frissons, sueurs) ?
                </p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1"> Oui </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2"> Non </label>
                </div>
            </div>
            <div class="carousel-item">
                <p class="h3 q2 question-color">Quelle est votre température corporelle ?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1"> Oui </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Non</label>
                </div>
            </div>
            <div class="carousel-item">
                <p class="h3 q3 question-color">Ces derniers jours, avez-vous une toux ou une augmentation de votre toux
                    habituelle?
                </p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Non</label>
                </div>
            </div>
            <div class="carousel-item">
                <p class="h3 q4 question-color">Avez-vous eu des courbatures inhabituelles au cours des derniers jours ?
                </p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Non</label>
                </div>
            </div>
            <div class="carousel-item">
                <p class="h3 q5 question-color">Ces derniers jours, avez-vous un mal de gorge ?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Non</label>
                </div>
            </div>
        </div>

        <div class="buttons d-flex justify-content-center gap-5">
            <button class="btn fw-bold precedent text-white px-4 py-2 btn-prv" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                précedent
            </button>
            <button class="btn fw-bold suivant text-white px-4 py-2 btn-next" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                suivant
            </button>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="../js/script.js"></script>
</body>
</html>

