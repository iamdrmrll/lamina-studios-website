// import { modal, modalAdd, clickTheModalBgToCloseTheModal, pressEscKeyToCloseModal, clickingTheXButtonToCloseModal } from "./main.js";

// // add user button
// const addUserBtn = document.querySelector('.add-user-btn');
// document.addEventListener('click', function(event) {
//     if (event.target.classList.contains('add-user-btn')) {
//         addUserBtn.classList.add('clicked');
//         setTimeout(() => {
//             addUserBtn.classList.remove('clicked');
//         }, 100);

//         modalAdd.classList.add('show');

//         // close the modal
//         clickTheModalBgToCloseTheModal();
//         pressEscKeyToCloseModal();
//         clickingTheXButtonToCloseModal();
//     }
// });
// document.addEventListener('click', function(f) {
//     if (f.target.classList.contains('eye')) {
//         const siblingInput = f.path[1].children[0];
//         // console.log(f);
//         f.target.classList.toggle('fa-eye-slash');
//         f.target.classList.toggle('fa-eye');
//         // f.path[1].children[0].type.toggle('password');
//         if (siblingInput.type == 'password') {
//             siblingInput.type = 'text';
//         } else {
//             siblingInput.type = 'password';
//         }
//     }
// });

// // password matching
// const password = document.querySelector('#password');
// const cPassword = document.querySelector('#confirm-password');
// const passwordAlert = document.querySelector('#password-alert');
// const saveUser = document.querySelector('.save-user');
// const username = document.querySelector('#username');
// const email = document.querySelector('#email');
// cPassword.addEventListener('input', passwordChecking);
// password.addEventListener('input', passwordChecking);
// saveUser.addEventListener('click', function() {
//     if ((password && password.value) && (cPassword && cPassword.value) && (username && username.value) && (email && email.value)) {
//         console.log(true);
//         if (cPassword.value !== password.value) {
//             cPassword.classList.add('attention');
//             setTimeout(() => {
//                 cPassword.classList.remove('attention');
//             }, 500);
//         } else {
//             document.getElementById('stopper').removeAttribute('required', '');
//         }
//     }
// });
// function passwordChecking() {
//     if (cPassword.value !== password.value) {
//         passwordAlert.innerHTML = 'Password does not match!';
//         password.classList.add('unmatched');
//         password.classList.remove('matched');
//         cPassword.classList.add('unmatched');
//         cPassword.classList.remove('matched');
//     } else if (cPassword.value === '' && password.value === '') {
//         passwordAlert.innerHTML = '';
//         password.classList.remove('matched');
//         password.classList.remove('unmatched');
//         cPassword.classList.remove('matched');
//         cPassword.classList.remove('unmatched');
//     } else {
//         passwordAlert.innerHTML = '';
//         password.classList.add('matched');
//         password.classList.remove('unmatched');
//         cPassword.classList.add('matched');
//         cPassword.classList.remove('unmatched');
//     }
// }




document.addEventListener('click', function(e) {
    if (e.target.classList.contains('eye')) {
        const inputOfEye = e.target.previousElementSibling;
        if (inputOfEye.type === 'password') {
            inputOfEye.type = 'text';
            e.target.innerText = 'visibility';
        } else {
            inputOfEye.type = 'password';
            e.target.innerText = 'visibility_off';
        }
    }
});

const password = document.getElementById('password');
const cPassword = document.getElementById('Cpassword');

const saveUser = document.getElementById('save-user');
const passwordStatus = document.querySelector('.password-status');
password.addEventListener('input', checkPassword);
cPassword.addEventListener('input', checkPassword);

function checkPassword() {
    if (password.value === '' && cPassword.value === '') {
        passwordStatus.classList.add('d-none');
        password.style.borderColor = '#5b5c56';
        cPassword.style.borderColor = '#5b5c56';
    } else if (password.value !== cPassword.value) {
        passwordStatus.classList.remove('d-none');
        password.style.borderColor = '#dc3545';
        cPassword.style.borderColor = '#dc3545';
        saveUser.setAttribute('disabled', '');
        saveUser.style.cursor = 'default';
    } else {
        passwordStatus.classList.add('d-none');
        password.style.borderColor = '#28a745';
        cPassword.style.borderColor = '#28a745';
        saveUser.removeAttribute('disabled', '');
        saveUser.style.cursor = 'pointer';
    }
}
