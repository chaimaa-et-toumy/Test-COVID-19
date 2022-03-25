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
        console.log(prog);
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

/*********** Disable the button next untel the checkbox has been checked ********* */
console.log('hi')
// let surveydata =[
//     {
//         id : 1,
//         question : 'Pensez-vous avoir ou avoir eu de la fièvre ces 10 derniers jours (frissons, sueurs) ?',
//         choise1 : 'yes',
//         choise2 : 'no',
//     },
//     {
//         id : 2,
//         question : 'Quelle est votre température corporelle ?',
//         choise1 : 'yes',
//         choise2 : 'no',
//     },
//     {
//         id : 3,
//         question : 'Avez-vous eu des courbatures inhabituelles au cours des derniers jours ?',
//         choise1 : 'yes',
//         choise2 : 'no',
//     },
// ]

// const survey = document.querySelector(".survey-container");
// const question = document.getElementById("question");
// const next_btn = document.getElementById("next_question");
// const option = document.querySelector(".option");
// const choise_yes = document.getElementById("yes");
// const choise_no = document.getElementById("no");
// const choise_idk = document.getElementById("idk");
// const current_question = 0 ;


// let loaddata =() => {

// }






// // 
// loadSurvey()
// function loadSurvey() {
//     deselectAnswers()
//     const currentSurveydata = surveydata[current_question]
//     question.innerText = currentSurveydata.question
// }
// function deselectAnswers()
    
// next_btn.addEventListener('click',() => {
//     current_question++
// })


// =============================================
let next_quiz = document.querySelector("#next_quiz");
let inputs = document.querySelector(".checked_input");



next_quiz.addEventListener('click' , function(inputs){
    if(inputs.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("next_quiz").disabled = false;
        console.log('invalid')
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("next_quiz").disabled = true;
        console.log('valid')
    }
})


