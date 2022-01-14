let email = document.querySelector("#email");


email.onkeyup = function () {
    let em_s = email.value;
    let ver_1 ;
    let ver_2 ;
    ver_1 = em_s.search(/@/);
    ver_2 = em_s.search(/.com/);
    if(ver_1<0 || ver_2<0 ){
        email.classList.remove("val");
        email.classList.add("not");
    }else {
        email.classList.remove("not");
        email.classList.add("val");
    }
    
  };


  let pas = document.querySelector("#pass");
let msg = document.querySelector(".msg");

pas.onkeyup = function () {
    let pas_s = pas.value;
    let ver_4 ;


    ver_4 = pas_s.search(/[A-z0-9]/);
    
    
    if(ver_4<0 ||  pas_s.length<8){
        msg.innerHTML = "le mot de passe doit être contient des lettre majuscules/minuscules et des nombre";
        // pas.classList.remove("val");
        pas.classList.add("not");
        
    }else{
        pas.classList.remove("not");
        pas.classList.add("val");
    }
    
  };