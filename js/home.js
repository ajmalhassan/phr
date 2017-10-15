
var login = document.getElementById('login');
var register = document.getElementById('register');

// var p_form = document.getElementById('patient_form');
// var d_form = document.getElementById('doctor_form');



// function toggleForm(){
//
//     var desig = document.getElementById('desig').value;
//
// //            console.log(typeof desig);
//
//     if(desig === 'Patient'){
//         d_form.style.display='none';
//         p_form.style.display='block';
//     }
//     else if(desig === 'Doctor'){
//         p_form.style.display='none';
//         d_form.style.display='block';
//     }
//
// }
//
// toggleForm();



register.style.display = "none";

function toggle(flag){
    if (flag === 0) {
        login.style.display="none";
        register.style.display="block";
    }
    else if(flag === 1){
        register.style.display="none";
        login.style.display="block";
    }
}