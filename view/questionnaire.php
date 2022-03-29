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
        font-size: 32px;
        font-family: 'Cairo', sans-serif;
        margin-bottom: 35px;
    }


    .bg-progress {
        background-color: var(--blue1) !important;
    }

    .value {
        font-size: 20px;
    }
</style>
<!-- steper -->
<div class="d-flex justify-content-center w-100 mt-4">
    <div class="col-md-4 col-sm-7 col-9">
        <div class="ques-line">
            <span><i class="stepper-blue" id="stepper_info"></i>
                <h5>Information</h5>
            </span>
            <span><i class="test" id="stepper_ques"></i>
                <h5>Questionnaire</h5>
            </span>
            <span><i id="stepper_reslt"></i>
                <h5>Resulte</h5>
            </span>
        </div>
    </div>
</div>

<!-- Progress bar -->
<div class="d-none justify-content-center mt-5" id="progress_bar">
    <div class="progress  col-md-5 col-sm-7 col-10 mt-1">
        <div class="progress-bar bg-progress" style="width:4.55%;">
        </div>
    </div>
    <span class="nbr-Q px-2">1/23</span>

</div>
<div class="mt-5">
    <div id="carouselExampleControls" class="carousel slide d-flex flex-column p-4" data-bs-interval="false" data-bs-touch="false">

        <div class="carousel-inner text-center  px-sm-5">
            <!--  -->
            <div class="carousel-item active question">
                <main class=" introduction d-flex flex-column justify-content-center align-items-center gap-4">
                    <div class="content p-3 px-5" style="width: 80%;">
                        <h1 class="card-title text-center ">Préambule</h1>
                        <p class="card-text text-center m-0">L’application est fournie à titre gratuit, en l’état,
                            uniquement à des fins d’information pour contribuer à fluidifier la prise en
                            charge des personnes par les services d’urgences pendant l’épidémie de Coronavirus
                            COVID-19. L’exhaustivité, l’exactitude, le caractère à jour des informations et
                            contenus mis à disposition dans cette application, ou leur adéquation à des
                            finalités particulières, ne sont pas garantis.
                        </p>
                        <div class=" d-flex justify-content-center ">
                            <hr class="bg-warning opacity-75" style="width:12rem; height:3px">
                        </div>
                        <p class=" text-center"> Cette application ne substitue pas votre médecin qui est plus apte à
                            vous donner plus de précision.</p>
                        <p class=" text-center">Les informations de cette application est le premier niveau de la
                            détection des cas possibles du COVID-19. </p>
                    </div>
                    <button id="demarrer" class="ques-btn fw-bold precedent text-white text-decoration-none px-4 py-2 mt-4 h4" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        Démarrer le test
                    </button>
                </main>
            </div>
            <form name="Covid">
                <!-- symptome -->
                <div class="carousel-item">
                    <p class="h3 question-color">Pensez-vous avoir ou avoir eu de la fièvre ces 10 derniers jours
                        (frissons, sueurs) ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="fievre" id="inlineRadio1" value="oui">
                        <label class="form-check-label value" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="fievre" id="inlineRadio2" value="Non">
                        <label class="form-check-label value" for="inlineRadio2">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Quelle est votre température corporelle ? </p>
                    <div class="d-flex justify-content-center">
                        <div class="input-group w-50">
                            <input type="number" class="form-control inputs" id="input_temperateur" placeholder="34-42" name="temperature" value="" />
                            <span class="btn btn-light" style="border: 1px solid #ced4da;">degre</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Ces derniers jours , avez-vous une toux ou une augmentation de votre toux habituelle ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="toux" id="inlineRadio3" value="oui">
                        <label class="form-check-label value" for="inlineRadio3">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="toux" id="inlineRadio4" value="Non">
                        <label class="form-check-label value" for="inlineRadio4">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Avez-vous eu des courbatures inhabituelles au cours des derniers
                        jours ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="courbatures" id="inlineRadio5" value="oui">
                        <label class="form-check-label value" for="inlineRadio5">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="courbatures" id="inlineRadio6" value="Non">
                        <label class="form-check-label value" for="inlineRadio6">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Ces derniers jours, avez-vous un mal de gorge ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="mal" id="inlineRadio7" value="oui">
                        <label class="form-check-label value" for="inlineRadio7">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="mal" id="inlineRadio8" value="Non">
                        <label class="form-check-label value" for="inlineRadio8">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Ces dernières 24 heures, avez-vous de la diarrhée ? Avec au moins 3
                        selles molles.
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="diarrhée" id="inlineRadio9" value="oui">
                        <label class="form-check-label value" for="inlineRadio9">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="diarrhée" id="inlineRadio10" value="Non">
                        <label class="form-check-label value" for="inlineRadio10">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Ces derniers jours, avez-vous une fatigue inhabituelle qui vous a
                        obligé
                        à vous reposer plus de la moitié de la journée ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="fatigue" id="inlineRadio11" value="oui">
                        <label class="form-check-label value" for="inlineRadio11">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="fatigue" id="inlineRadio12" value="Non">
                        <label class="form-check-label value" for="inlineRadio12">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Avez-vous des difficultés importantes pour vous alimenter ou boire
                        depuis plus de 24h ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="alimentation" id="inlineRadio13" value="oui">
                        <label class="form-check-label value" for="inlineRadio13">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="alimentation" id="inlineRadio14" value="Non">
                        <label class="form-check-label value" for="inlineRadio14">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color"> Avez-vous vu apparaître une gêne respiratoire ou une augmentation de votre gêne
                        respiratoire habituelle ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="gene_respiratoire" id="inlineRadio15" value="oui">
                        <label class="form-check-label value" for="inlineRadio15">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="gêne_respiratoire" id="inlineRadio16" value="Non">
                        <label class="form-check-label value" for="inlineRadio16">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Dans les dernières 24 heures, avez-vous noté un manque de souffle
                        inhabituel lorsque vous parlez ou faites un petit effort ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="manque_de_souffle" id="inlineRadio17" value="oui">
                        <label class="form-check-label value" for="inlineRadio17">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="manque_de_souffle" id="inlineRadio18" value="Non">
                        <label class="form-check-label value" for="inlineRadio18">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Actuellement, comment vous vous sentez ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="sentez" id="inlineRadio19" value="Non">
                        <label class="form-check-label fs-5" for="inlineRadio19">Bien</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5 " type="radio" name="sentez" id="inlineRadio20" value="Non">
                        <label class="form-check-label fs-5" for="inlineRadio20">Assez bien</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="sentez" id="inlineRadio21" value="oui">
                        <label class="form-check-label fs-5" for="inlineRadio21">Fatigue(e)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="sentez" id="inlineRadio22" value="oui">
                        <label class="form-check-label fs-5" for="inlineRadio22"> Tres Fatigue(e)</label>
                    </div>
                </div>
                <!-- pronostique -->
                <div class="carousel-item">
                    <p class="h3 question-color">Quel est votre âge ? Ceci, afin de calculer un facteur de risque
                        spécifique.</p>
                    <div class="d-flex justify-content-center">
                        <div class="input-group w-50">
                            <input type="number" class="form-control inputs" id="input_age" name="age" placeholder="15-110" value="" />
                            <span class="btn btn-light" style="border: 1px solid #ced4da;"> Age </span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Quel est votre poids ? Afin de calculer l’indice de masse corporelle
                        qui est un facteur influençant le risque de complications de l’infection.</p>
                    <div class="d-flex justify-content-center">
                        <div class="input-group w-50">
                            <input type="number" class="form-control inputs" id="input_poid" name="poids" placeholder="20-250" value="" />
                            <span class="btn btn-light" style="border: 1px solid #ced4da;"> Kg </span>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Quelle est votre taille ? Afin de calculer l’indice de masse
                        corporelle qui est un facteur influençant le risque de complications de l’infection.</p>
                    <div class="d-flex justify-content-center">
                        <div class="input-group w-50">
                            <input type="number" class="form-control inputs" id="input_tall" name="taille" placeholder="80-250" value="" />
                            <span class="btn btn-light" style="border: 1px solid #ced4da;"> cm </span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">Avez-vous de l’hypertension artérielle mal équilibrée ? Ou avez-vous une maladie
                        cardiaque ou vasculaire ? Ou prenez-vous un traitement à visée cardiologique ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="hypertension" id="inlineRadio23" value="oui">
                        <label class="form-check-label value" for="inlineRadio23">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="hypertension" id="inlineRadio24" value="Non">
                        <label class="form-check-label value" for="inlineRadio24">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Êtes-vous diabétique ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="diabétique" id="inlineRadio25" value="oui">
                        <label class="form-check-label value" for="inlineRadio25">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="diabétique" id="inlineRadio26" value="Non">
                        <label class="form-check-label value" for="inlineRadio26">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Avez-vous ou avez-vous eu un cancer ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="cancer" id="inlineRadio27" value="oui">
                        <label class="form-check-label value" for="inlineRadio27">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="cancer" id="inlineRadio28" value="Non">
                        <label class="form-check-label value" for="inlineRadio28">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Avez-vous une maladie respiratoire ? Ou êtes-vous suivi par un pneumologue ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="maladie_respiratoire" id="inlineRadio29" value="oui">
                        <label class="form-check-label value" for="inlineRadio29">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="maladie_respiratoire" id="inlineRadio30" value="Non">
                        <label class="form-check-label value" for="inlineRadio30">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Avez-vous une insuffisance rénale chronique dialysée ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="dialysée" id="inlineRadio31" value="oui">
                        <label class="form-check-label value" for="inlineRadio31">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="dialysée" id="inlineRadio32" value="Non">
                        <label class="form-check-label value" for="inlineRadio32">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Avez-vous une maladie chronique du foie ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="maladie_chronique" id="inlineRadio33" value="oui">
                        <label class="form-check-label value" for="inlineRadio33">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="maladie_chronique" id="inlineRadio34" value="Non">
                        <label class="form-check-label value" for="inlineRadio34">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Êtes-vous enceinte ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="enceinte" id="inlineRadio35" value="oui">
                        <label class="form-check-label value" for="inlineRadio35">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="enceinte" id="inlineRadio36" value="Non">
                        <label class="form-check-label value" for="inlineRadio36">Non</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="enceinte" id="inlineRadio37" value="Non">
                        <label class="form-check-label value" for="inlineRadio37">Homme</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Avez-vous une maladie connue pour diminuer vos défenses immunitaires ?
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="défenses_immunitaires" id="inlineRadio38" value="oui">
                        <label class="form-check-label value" for="inlineRadio38">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="défenses_immunitaires" id="inlineRadio39" value="Non">
                        <label class="form-check-label value" for="inlineRadio39">Non</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="h3 question-color">
                        Prenez-vous un traitement immunosuppresseur ? C’est un traitement qui diminue vos défenses contre les infections. Voici quelques exemples : corticoïdes,
                        méthotrexate, ciclosporine, tacrolimus, azathioprine, cyclophosphamide (liste non exhaustive).
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="traitement_immunosuppresseur" id="inlineRadio40" value="oui">
                        <label class="form-check-label value" for="inlineRadio40">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputs fs-5" type="radio" name="traitement_immunosuppresseur" id="inlineRadio41" value="Non">
                        <label class="form-check-label value" for="inlineRadio41">Non</label>
                    </div>
                </div>


            </form>

        </div>
        <div class="buttons d-none justify-content-center gap-5 mt-5" id="buttons-np">
            <button class="btn fw-bold precedent text-white px-4 py-2 btn-prv" data-bs-target="#carouselExampleControls" data-bs-slide="prev" id="prev_ques">
                précedent
            </button>
            <button class="btn fw-bold suivant text-white px-4 py-2 btn-next" data-bs-target="#carouselExampleControls" data-bs-slide="next" id="next_ques">
                suivant
            </button>
            <a id="check" class="btn fw-bold suivant text-white px-4 py-2 btn-termine d-none">
                Termine le test
            </a>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../js/script.js"></script>
    </body>

    </html>