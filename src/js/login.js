const noAccount = document.getElementById('noAccount');
const login = document.getElementById('login');
const forms = document.querySelector('.formsContainer');


function verifyLoginUpdate() {
    const currentPassword = document.getElementById('inputCurrentPassword');
    const password = document.getElementById('inputPassword');
    const confirmPassword = document.getElementById('inputConfirmPassword');
    const saveData = document.getElementById('saveDataBtn');
    const inputName = document.getElementById('inputName');
    const inputUser = document.getElementById('inputUser');

    if (inputName !== null) {
        if (inputName.value.length === 0) {
            saveData.style = 'background-color: gray; pointer-events: none;';
            inputName.style = 'border:1px solid red;'
            return;
        } else {
            inputName.style = '';
            saveData.style = '';
        }

        if (inputUser.value.length === 0) {
            saveData.style = 'background-color: gray; pointer-events: none;';
            inputUser.style = 'border: 1px solid red;'
            return;
        } else {
            inputUser.style = '';
            saveData.style = '';
        }

        if (currentPassword.value.length >= 1) {
            console.log('funfando');
            if (currentPassword.value.length <= 7) {
                saveData.style = 'background-color: gray; pointer-events: none;';
                currentPassword.style = 'border: 1px solid red;';
                console.log('nao pode menos de 8 caracteres');
                return;
            } else {
                password.style = '';
                saveData.style = '';
                currentPassword.style = '';
            }

            if (password.value.length <= 7) {
                saveData.style = 'background-color: gray; pointer-events: none;';
                password.style = 'border: 1px solid red;';
                console.log('nao pode menos de 8 caracteres');
                return;
            } else {
                password.style = '';
            }

            if (password.value == confirmPassword.value) {
                saveData.style = '';
                confirmPassword.style = '';
                return;
            } else {
                saveData.style = 'background-color: gray; pointer-events: none;';
                confirmPassword.style = 'border: 1px solid red;';
            }
        }
    }

}

if(document.getElementById('inputName') != null){
    document.getElementById('show').addEventListener('click', () => {
        document.querySelector('.passwordContainer').classList.toggle('toggle');
    });

}


document.addEventListener('click', () => {
    verifyLoginUpdate();
});

document.addEventListener('mousemove', () => {
    verifyLoginUpdate();

});
document.addEventListener('keyup', () => {
    verifyLoginUpdate();
});
document.addEventListener('touchmove', () => {
    verifyLoginUpdate();

});

if (login !== null) {
    login.addEventListener('click', () => {
        forms.classList.toggle('loginflip');

    });

    document.getElementById('noAccount').addEventListener('click', () => {
        forms.classList.toggle('loginflip');
    });
}