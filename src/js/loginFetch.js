async function createAccount(){
    const form = {}
    form.name = document.getElementById('inputNameCreate').value;
    form.user = document.getElementById('inputUserCreate').value;
    form.password = document.getElementById('inputPasswordCreate').value;
    form.create = true;

    await fetch('/loginverification',{
        method: 'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(form)
    }).then(response => response.json())
    .then(data =>{
        document.getElementById('formCreateAccount').insertBefore(document.createElement('div').appendChild(document.createTextNode(data.message)), document.getElementById('teste'));
         console.log(data.message);
        });

}

document.getElementById('createAccountBtn').addEventListener('click', (e)=>{
    e.preventDefault();
    createAccount();
});