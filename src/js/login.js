const noAccount = document.getElementById('noAccount');
const login = document.getElementById('login');
const forms = document.querySelector('.formsContainer');

login.addEventListener('click', ()=>{
    forms.classList.toggle('loginflip');

});

document.getElementById('noAccount').addEventListener('click', ()=>{
    forms.classList.toggle('loginflip');
});
