let email = document.querySelector(".input_e");
let msg_1 = document.querySelector(".msg_1");

email.onkeyup = function () {
    let em_s = email.value;
    let ver_1 ;
    let ver_2 ;
    ver_1 = em_s.search(/@/);
    ver_2 = em_s.search(/.com/);
    if(ver_1<0 || ver_2<0 ){
        // email.classList.remove("val");
        email.classList.add("not");
    }else {
        email.classList.remove("not");
        email.classList.add("val");
    }
    
  };