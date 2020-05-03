/* sign up form validation */

const signup = document.getElementById('signupForm');
const company = document.getElementById("cNme");
const firstName = document.getElementById("fNme");
const lastName = document.getElementById("lNme");
const email = document.getElementById("email");
const password = document.getElementById("pass");
const password2 = document.getElementById("pass2");
signup.addEventListener('submit', (e) => {
    e.preventDefault();
    vaildateInput();
});


function vaildateInput() {
    //geting the values from inputs
    const companyValue = company.value
    const firstNameValue = firstName.value
    const lastNameValue = lastName.value
    const emailValue = email.value
    const passwordValue = password.value
    const password2Value = password2.value
    //checking values 
    console.log("company", companyValue)
    console.log("first name", firstNameValue)
    console.log("last name", lastNameValue)
    console.log("email", emailValue)
    console.log("password", passwordValue)
    console.log("password", password2Value)

    //patterns
    names = /^[a-zA-Z\-]+[ ]*[a-zA-Z\-]*$/;
    email_pattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.((com)|(net)|(my))$/;
    passwords = /^(?=.*\d).{6,20}$/

    if (!names.test(companyValue)) {
        setInvaild(company, 'Company must use alpha characters only');
    } else {
        setVaild(company);
    }
    if (!names.test(firstNameValue)) {
        setInvaild(firstName, 'First name must use alpha characters only');
    } else {
        setVaild(firstName);
    }
    if (!names.test(lastNameValue)) {
        setInvaild(lastName, 'last name must use alpha characters only');
    } else {
        setVaild(lastName);
    }
    if (!email_pattern.test(emailValue)) {
        setInvaild(email, 'Email domain must be either .com, .net or .my');
    } else {
        setVaild(email);
    }
    if (!passwords.test(passwordValue)) {
        setInvaild(password, 'Password is weak, must be 6-20 characters and at least 1 digit');
    } else {
        setVaild(password);
    }
    if(password2Value !== passwordValue){
        setInvaild(password, 'Passwords do not match');
        setInvaild(password2, 'Passwords do not match');
    } else {
        setVaild(password2);
    }

}

function setInvaild(input, message) {
    console.log("message", message)
    const formInput = input.parentElement;
    const small = formInput.querySelector('small');
    console.log("small", small)
    small.innerText = message;
    formInput.className = 'formInput invaild';
}

function setVaild(input) {
    const formInput = input.parentElement;
    formInput.className = 'formInput vaild';
}