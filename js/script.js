let name = document.querySelector('#name');
// let email = document.querySelector('#email');
// let number = document.querySelector('#number');
// let address = document.querySelector('#address');
// let visit = document.querySelector('#visit');
// let guest = document.querySelector('#guest');
// let date = document.querySelector('#date');
// let leaving = document.querySelector('#leaving');

// let nameErrors = document.querySelector('#nameError');
// let emailErrors = document.querySelector('#emailErrors');
// let numberErrors = document.querySelector('#numberErrors');
// let addressErrors = document.querySelector('#addressErrors');
// let visitErrors = document.querySelector('#visitErrors');
// let guestErrors = document.querySelector('#guestErrors');
// let leavingErrors = document.querySelector('#leavingErrors');
let tripBookBtn = document.getElementById('tripBookBtn');
tripBookBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    if(name.value == ""){
        document.getElementById('nameError').innerText="Please Enter your Name";
     }else{
         document.getElementById('nameError').innerText="";
     }

});

  


