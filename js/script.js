/*********** Disable the button next untel the checkbox has been checked ********* */
// =============================================
const demarrer = document.getElementById("demarrer");
const progress_bar2 = document.getElementById("progress_bar");
const btn_n_p = document.getElementById("buttons-np");

// get inputs that have type of number
const input_tempr = document.getElementById("input_temperateur");
const input_age = document.getElementById("input_age");
const input_poid = document.getElementById("input_poid");
const input_tall = document.getElementById("input_tall");
// ====

// get stepper element 
const step_info = document.getElementById("stepper_info");
const step_ques = document.getElementById("stepper_ques");
const step_reslt = document.getElementById("stepper_reslt");

const next_ques = document.getElementById("next_ques");
const prev_ques = document.getElementById("prev_ques");
const inputs = document.querySelectorAll(".inputs");
const ques_contr = document.querySelector(".carousel");
const result = document.querySelector(".resulte")
 next_ques.disabled = true;


demarrer.addEventListener("click" , () => {
    btn_n_p.classList.replace("d-none","d-flex"); 
    progress_bar2.classList.replace("d-none","d-flex");
    // ==
    step_info.classList.replace("stepper-blue","test");
    step_ques.classList.replace("test","stepper-blue");

})

// ====cr
prev_ques.onclick=function(){
    next_ques.disabled = false;
    if(nbrQues == 1){
        btn_n_p.classList.replace("d-flex","d-none"); 
        progress_bar2.classList.replace("d-flex","d-none");
        step_info.classList.replace("test","stepper-blue");
        step_ques.classList.replace("stepper-blue","test");
    }
    
}

// =================input validation check===============
inputs.forEach(input => {
    
    input.addEventListener("change" , function() {
        input.style.border="1px solid #7F7F7F";
        if(input.checked){
            next_ques.disabled = false;
            console.log('checked')
        }else{
            next_ques.disabled = true;
            input.style.border="1px solid red"
        } 
    })
    next_ques.addEventListener("click" , function() {
        next_ques.disabled = true;
    })
})

input_tempr.addEventListener("change" , function(){
        input_tempr.style.border="1px solid #7F7F7F";
        if(input_tempr.value >= 34 && input_tempr.value <= 42){
            next_ques.disabled = false;
        }else{
            next_ques.disabled = true;
            input_tempr.style.border="1px solid red"
        }
    });
input_age.addEventListener("change" , function(){
        input_age.style.border="1px solid #7F7F7F";
        if(input_age.value >= 15 && input_age.value <= 110){
            next_ques.disabled = false;
        }else{
            next_ques.disabled = true;
            input_age.style.border="1px solid red"
        }
    });
input_poid.addEventListener("change" , function(){
        input_poid.style.border="1px solid #7F7F7F";
        if(input_poid.value >= 20 && input_poid.value <= 200){
            next_ques.disabled = false;
        }else{
            next_ques.disabled = true;
            input_poid.style.border="1px solid red"
        }
    });
input_tall.addEventListener("change" , function(){
        input_tall.style.border="1px solid #7F7F7F";
        if(input_tall.value >= 80 && input_tall.value <= 250){
            next_ques.disabled = false;
        }else{
            next_ques.disabled = true;
            input_tall.style.border="1px solid red"
        }
    });
            
  

// ===================


/**** progress bar ****/
let prev = document.querySelector(".btn-prv");
let next = document.querySelector(".btn-next");
let progress_bar =  document.querySelector(".progress-bar");
let nbr_Q = document.querySelector(".nbr-Q")
let termine = document.querySelector(".btn-termine");


let prog = 0;
let nbrQues = 1;

next.addEventListener("click", () =>{
    if(prog <100){
        prog += 4.55;
        nbrQues++;
        prev.classList.remove("d-none")

        if(nbrQues == 23){
            termine.classList.remove("d-none")
            next.classList.add("d-none")
            

        }
       
        progress_bar.style.width = prog+"%";
        nbr_Q.innerHTML = nbrQues +"/23";
    }



});
 
prev.addEventListener("click", () =>{
    if(prog>0){
        prog -= 4.55;
        nbrQues--;
        if(nbrQues == 1){
            prev.classList.add("d-none");
            next.classList.remove("d-none");
            termine.classList.add("d-none");

        }
        progress_bar.style.width = prog+"%";
        nbr_Q.innerHTML = nbrQues +"/23";

    }
})
/**********************************result********************************/
let arri = new Array();
let symptome = new Array();
let prononstique= new Array();
let facteur_min= new Array();
let facteur_maj= new Array();
arri.symptome = symptome;
arri.prononstique = prononstique;
arri.facteur_min = facteur_min;
arri.facteur_maj = facteur_maj;

let msg1 = "nous vous conseillons de rester à votre domicile et\n" +
            "de contacter votre médecin en cas d’apparition de nouveaux symptômes. Vous pourrez\n" +
            "aussi utiliser à nouveau l’application pour réévaluer vos symptômes.";

let msg2 = "téléconsultation ou médecin généraliste ou visite à domicile \n " +
            "appelez le 141 si une gêne respiratoire ou des difficultés importantes pour s’alimenter ou boire pendant plus de 24h apparaissent.";

let msg3 = " Appel 141";

let msg4 = "Votre situation ne relève probablement pas du Covid-19. Un avis médical est recommandé. Au moindre doute, appelez le 141."

let msg5 = "Votre situation ne relève probablement pas du Covid-19. N’hésitez pas à contacter votre médecin en cas de doute. Vous pouvez refaire le test en cas de nouveau symptôme pour réévaluer la situation. Pour toute information concernant le Covid-19 allez vers la page d’accueil."

let check =document.getElementById("check");
const affich_result = document.querySelector("#resultmsg");

/*****************Count the length of obejects******************/

function length(facteur){
    let lght = Object.keys(facteur).length
    return lght;
}

/*****************the main result function******************/

check.addEventListener("click", function() {
    globalThis.answer = document.forms['Covid'];

    // show page result
    result.classList.replace("d-none","d-flex");
    ques_contr.classList.replace("d-flex","d-none");
    btn_n_p.classList.replace("d-flex","d-none"); 
    progress_bar2.classList.replace("d-flex","d-none");
    step_ques.classList.replace("stepper-blue","test");
    step_reslt.classList.replace("test","stepper-blue");
    // ========
    /*****************Store the answers in the objects******************/
    for (let i = 0; i < 24; i++) {
        if (answer[i].type == "radio" && answer[i].checked && answer[i].value == 'oui') {
            arri.symptome[answer[i].name] = answer[i].value

              /**************************facteur mineur*************************/
            if (answer.fievre.value == 'oui') {
                if (answer.temperature.value >= 39) {
                    arri.facteur_min.temperature = answer.temperature.value
                }
            }
            if(answer.fatigue.value == "oui"){
                arri.facteur_min.fatigue = answer.fatigue.value
            }
            if(answer.sentez.value == "oui"){
                arri.facteur_min.sentez = answer.sentez.value
            }
            /**************************facteur majeur*************************/

            if (answer.fievre.value == 'oui') {
                if (answer.temperature.value <= 35) {
                    arri.facteur_maj.temperature = answer.temperature.value
                }
            }
            if(answer.gene_respiratoire.value == "oui"){
                arri.facteur_maj.gene_respiratoire = answer.gene_respiratoire.value
            }
            if(answer.alimentation.value == "oui"){
                arri.facteur_maj.alimentation = answer.alimentation.value
            }
            /**************************end*************************/
        }
    }
    for (let i = 24; i < answer.length ; i++) {
        if (answer[i].type == "radio" && answer[i].checked && answer[i].value == 'oui') {
            arri.prononstique[answer[i].name] = answer[i].value
        }
    }
 /*****************Case verification******************/
    /*****************persone(1) fievre et toux******************/
    if((arri.symptome.toux == "oui" && arri.symptome.mal == "oui") || (arri.symptome.toux == "oui" && arri.symptome.courbatures == "oui")){
    /***case (1.1) ***/
        if(length(prononstique) == 0 && length(facteur_maj) == 0){
            if( length(facteur_min) == 0 && answer.age.value < 50){
                affich_result.innerText =msg1 ;
                console.log(msg1)
            }
            if(( length(facteur_min) == 0 && (answer.age.value >= 50 && answer.age.value <=69)) || length(facteur_min) > 0){
                affich_result.innerText =msg2 ;
                console.log(msg2)
            }
        }
    /***case (1.2) ***/
        else if(length(prononstique) > 0 && length(facteur_maj) == 0){
            if( length(facteur_min) == 0 || length(facteur_min) == 1 ){
                affich_result.innerText =msg2 ;
                console.log(msg2)
            }
            if(length(facteur_min) >= 2){
                affich_result.innerText =msg3 ;
                console.log(msg3)
            }
        }
    /***case (1.3) ***/
        else if(length(facteur_maj) > 0){
                affich_result.innerText =msg3 ;
                console.log(msg3)
            }
     }

    /*****************persone(2) fievre et toux******************/
    else if(arri.symptome.fievre == "oui" && arri.symptome.toux == "oui"){
        /***case (2.1) ***/
            if(length(prononstique) == 0 && length(facteur_maj) == 0 ){
                affich_result.innerText =msg2 ;
                console.log(msg2)
            }


        /***case (2.2)******/
            else if(length(prononstique) >= 1 && length(facteur_maj) == 0){
                if((length(facteur_maj) == 0 && length(facteur_min) == 0) || length(facteur_min) == 1 ){
                    affich_result.innerText =msg2 ;
                    console.log(msg2)
                }
                if(length(facteur_min) >= 2){
                    affich_result.innerText =msg3 ;
                    console.log(msg3)
                }
            }
            if(length(facteur_maj) >= 1){
                affich_result.innerText =msg3;
                console.log(msg3)
            }
    }
              
    /*****************persone(3) fievre ou toux ou mal de gorge ou courbature******************/
    else if (arri.symptome.fievre == "oui" || arri.symptome.toux == "oui" || arri.symptome.courbature == "oui" || arri.symptome.mal == "oui"){
        if (length(prononstique) == 0 && (length(facteur_maj) == 0 && length(facteur_min) == 0)){
            affich_result.innerText =msg4 ;
            console.log(msg4)
        }
    }
    /*****************persone(4) Sans symptome******************/

    else if (length(symptome) == 0){
        affich_result.innerText =msg5 ;
        console.log(msg5)
    }

  
})



