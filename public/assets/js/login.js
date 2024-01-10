
const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');


form.addEventListener('submit', e => {
    e.preventDefault();
    if(validateInputs()){
        form.submit();
    }
    
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    var i=0;


    if(emailValue === '') {
        setError(email, 'Email is required');
        i=0;
    } else if (!isValidEmail(emailValue)) {
        i=0;
        setError(email, 'Provide a valid email address');
    } else {
        i++;
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
        i=0;
    } else if (passwordValue.length < 8 ) {
        i=0;
        setError(password, 'Password must be at least 8 character.')
    } else {

        i++;
        setSuccess(password);
    }


    if(i===2){
        return true;
    }
    return false;

};

