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
 next_ques.disabled = true;

demarrer.addEventListener("click" , () => {
    btn_n_p.classList.replace("d-none","d-flex"); 
    progress_bar2.classList.replace("d-none","d-flex");
    // ==
    step_info.classList.replace("stepper-blue","test");
    step_ques.classList.replace("test","stepper-blue");

})

// ====creat object
let obj = {};

next_ques.addEventListener('click' , function(){
    obj.push(input.key,input.value);
})
// prev_ques.onclick=function(){
//     btn_n_p.classList.replace("d-flex","d-none"); 
//     progress_bar2.classList.replace("d-flex","d-none");
//     step_info.classList.replace("test","stepper-blue");
//     step_ques.classList.replace("stepper-blue","test");
// }

inputs.forEach(input => {

    input.addEventListener("change" , function() {
        if(input.checked){
            //Set the disabled property to FALSE and enable the button.
            next_ques.disabled = false;
            console.log('checked')
        }
        else if(input_tempr.value >= 34 && input_tempr.value <= 42){
            next_ques.disabled = false;
        }
        else if(input_age.value >= 15 && input_age.value <= 105){
            next_ques.disabled = false;
        }
        else if(input_poid.value >= 20 && input_poid.value <= 150){
            next_ques.disabled = false;
        }
        else{
            //Otherwise, disable the submit button.
            next_ques.disabled = true;
            console.log('false')
        }     
    })
    next_ques.addEventListener("click" , function() {
        next_ques.disabled = true;
    })
})

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



