
function update1(pbar,value){
    pbar.querySelector(".progress_fill1").style.width=`${value}%`;
    pbar.querySelector(".progress_text1").textContent=`${value}%`;
}
let don1=0;
function zid101(){
    don1+=1000;
    let val=Math.round((don1*100)/30000);
    let y=document.querySelector(".progress1");
    update1(y,val);
}
function zid201(){
    don1+=2000;
    let val=Math.round((don1*100)/30000);
    let y=document.querySelector(".progress1");
    update1(y,val);
}
function zid501(){
    don1+=5000;
    let val=Math.round((don1*100)/30000);
    let y=document.querySelector(".progress1");
    update1(y,val);
}
function update2(pbar,value){
    pbar.querySelector(".progress_fill2").style.width=`${value}%`;
    pbar.querySelector(".progress_text2").textContent=`${value}%`;
}
let don2=0;
function zid102(){
    don2+=1000;
    let val=Math.round((don2*100)/30000);
    let y=document.querySelector(".progress2");
    update2(y,val);
}
function zid202(){
    don2+=2000;
    let val=Math.round((don2*100)/30000);
    let y=document.querySelector(".progress2");
    update2(y,val);
}
function zid502(){
    don2+=5000;
    let val=Math.round((don2*100)/30000);
    let y=document.querySelector(".progress2");
    update2(y,val);
}
function update3(pbar,value){
    pbar.querySelector(".progress_fill3").style.width=`${value}%`;
    pbar.querySelector(".progress_text3").textContent=`${value}%`;
}
let don3=0;
function zid103(){
    don3+=1000;
    let val=Math.round((don3*100)/30000);
    let y=document.querySelector(".progress3");
    update3(y,val);
}
function zid203(){
    don3+=2000;
    let val=Math.round((don3*100)/30000);
    let y=document.querySelector(".progress3");
    update3(y,val);
}
function zid503(){
    don3+=5000;
    let val=Math.round((don3*100)/30000);
    let y=document.querySelector(".progress3");
    update3(y,val);
}
