<?php
$path = ".";
$display ="d-none";
include '../includes/head.php';
include '../includes/nav-bar.php';
?>


    <main class=" introduction d-flex flex-column justify-content-center align-items-center gap-5 mt-3">
        <!-- steper -->
        <div class="d-flex justify-content-center w-100 my-4 ">
            <div class="col-md-4 col-sm-7 col-9">
                <div class="ques-line">
                    <span><i></i><h5>Information</h5></span>
                    <span><i></i><h5>Questionnaire</h5></span>
                    <span><i></i><h5>Resulte</h5></span>
                </div>
            </div>
        </div>
        <div class="content card p-3 px-5 mt-5" style="width: 70%;">
            
                <h1 class="card-title text-center " >Préambule</h1>
                
                <p class="card-text text-center">L’application est fournie à titre gratuit, en l’état,
                    uniquement à des fins d’information pour contribuer à fluidifier la prise en
                    charge des personnes par les services d’urgences pendant l’épidémie de Coronavirus
                    COVID-19. L’exhaustivité, l’exactitude, le caractère à jour des informations et
                    contenus mis à disposition dans cette application, ou leur adéquation à des 
                    finalités particulières, ne sont pas garantis. 
                </p>
                <div class=" d-flex justify-content-center "><hr class="bg-warning opacity-75" style="width:12rem; height:3px"></div>
                <p class=" text-center"> Cette application ne substitue pas votre médecin qui est plus apte à vous donner plus de précision.</p>               
                <p class=" text-center">Les informations de cette application est le premier niveau de la détection des cas possibles du COVID-19. </p>
            
        </div>
        <a href="questionnaire.php" class="ques-btn fw-bold w-25 fs-5 text-center text-decoration-none text-white" >Démarrer le test</a>
        
    </main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>