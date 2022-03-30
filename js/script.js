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
const show_rslt = document.querySelector("#check");
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
next_ques.onclick=function(){
    if(nbrQues == 23){
        btn_n_p.classList.replace("d-flex","d-none"); 
        progress_bar2.classList.replace("d-flex","d-none");

        step_ques.classList.replace("stepper-blue","test");
        step_reslt.classList.replace("test","stepper-blue");

        ques_contr.classList.replace("d-none","d-flex");
        result.classList.replace("d-flex","d-none");
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

let check =document.getElementById("check")

/*****************Count the length of obejects******************/

function length(facteur){
    let lght = Object.keys(facteur).length
    return lght;
}

/*****************the main result function******************/

check.addEventListener("click", function() {
    globalThis.answer = document.forms['Covid'];

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
                console.log("msg1.1.1")
            }
            if(( length(facteur_min) == 0 && (answer.age.value >= 50 && answer.age.value <=69)) || length(facteur_min) > 0){
                console.log("msg1.1.2")
            }
        }
    /***case (1.2) ***/
        else if(length(prononstique) > 0 && length(facteur_maj) == 0){
            if( length(facteur_min) == 0 || length(facteur_min) == 1 ){
                console.log("msg1.2.1")
            }
            if(length(facteur_min) >= 2){
                console.log("141")
            }
        }
    /***case (1.3) ***/
        else if(length(facteur_maj) > 0){
                console.log("141")
            }
     }

    /*****************persone(2) fievre et toux******************/
    else if(arri.symptome.fievre == "oui" && arri.symptome.toux == "oui"){
        /***case (2.1) ***/
            if(length(prononstique) == 0 && length(facteur_maj) == 0 ){
                if(length(facteur_min) >= 0 ){
                    console.log("msg2.2.1")
                }
            }


        /***case (2.2)******/
            else if(length(prononstique) >= 1 && length(facteur_maj) == 0){
                if( length(facteur_min) == 0 || length(facteur_min) == 1 ){
                    console.log("msg2.2.1")
                }
                if(length(facteur_min) >= 2){
                    console.log("141")
                }
            }
        /***case (2.3)******/
            if(length(facteur_maj) >= 1){
                console.log("141")
            }
    }
    /*****************persone(3) fievre ou toux ou mal de gorge ou courbature******************/
    else if (arri.symptome.fievre == "oui" || arri.symptome.toux == "oui" || arri.symptome.courbature == "oui" || arri.symptome.mal == "oui"){
        if (length(prononstique) == 0 && (length(facteur_maj) == 0 && length(facteur_min) == 0)){
            console.log("moindre doute")
        }
        if(length(prononstique) >= 0 || (length(facteur_maj) >= 0 || length(facteur_min) >= 0)){
            console.log("msg4")
        }
    }
    /*****************persone(4) Sans symptome******************/

    else if (length(symptome) == 0){
        console.log("mafikch covid")
    }

  
})



