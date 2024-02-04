let q1=document.querySelectorAll(".q1")
let q2=document.querySelectorAll(".q2")
let q3=document.querySelectorAll(".q3")
let q4=document.querySelectorAll(".q4")
let q5=document.querySelectorAll(".q5")
let submit=document.querySelectorAll("#submit-quizz");
let sum=0;

submit.addEventListener("click", verifyquizz)

function verifyquiz(){
    let a1=document.querySelectorAll("input[name='q1']:checked")
    let a2=document.querySelectorAll("input[name='q2']:checked")
    let a3=document.querySelectorAll("input[name='q3']:checked")
    let a4=document.querySelectorAll("input[name='q4']:checked")
    let a5=document.querySelectorAll("input[name='q5']:checked")
    if(a1.value=="B"){sum++}
    if(a2.value=="B"){sum++}
    if(a3.value=="C"){sum++}
    if(a4.value=="C"){sum++}
    if(a5.value=="C"){sum++}
    
    
}