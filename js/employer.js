/* profile form vaildation */
const profile = document.getElementById('profileForm');
const company = document.getElementById("busName");
const sector = document.getElementById("sector");
const firstName = document.getElementById("fNme");
const lastName = document.getElementById("lNme");
const address = document.getElementById("address");
const postcode = document.getElementById("postcode");
const suburb = document.getElementById("suburb");
const city = document.getElementById("city");
const phNum = document.getElementById("phNum");
const email = document.getElementById("email");

profile.addEventListener('submit', (e) => {
    e.preventDefault();
    vaildateInput();
});

function vaildateInput() {
    //getting values from inputs
    const companyValue = company.value
    const firstNameValue = firstName.value
    const lastNameValue = lastName.value
    const addressValue = address.value
    const postcodeValue = postcode.value
    const suburbValue = suburb.value
    const cityValue = city.value
    const phNumValue = phNum.value
    const emailValue = email.value

    //checking values
    console.log("company", companyValue)
    console.log("first name", firstNameValue)
    console.log("last name", lastNameValue)
    console.log("address", addressValue)
    console.log("postcode", postcodeValue)
    console.log("suburb", suburbValue)
    console.log("city", cityValue)
    console.log("phNum", phNumValue)
    console.log("email", emailValue)

    //patterns
    names = /^[a-zA-Z\-]+[ ]*[a-zA-Z\-]*$/;
    address_pattern = /^([0-9a-zA-Z]{1,5})[ ][a-zA-Z]+[ ][a-zA-Z]*$/
    code = /^[0-9]{4}$/
    mobileNum = /^[0][2][1579]{1}\d{6,7}$/;
    email_pattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.((com)|(net)|(my))$/;

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
    if (!address_pattern.test(addressValue)) {
        setInvaild(address, 'Must have an alpha numeric input eg 8 abc street or 10a lemia ave');
    } else {
        setVaild(address);
    }
    if (!code.test(postcodeValue)) {
        setInvaild(postcode, 'Postcode must be 4 digits');
    } else {
        setVaild(address);
    }
    if (!names.test(suburbValue)) {
        setInvaild(suburb, 'Suburb must use alpha characters only');
    } else {
        setVaild(suburb);
    }
    if (!names.test(cityValue)) {
        setInvaild(city, 'City must use alpha characters only');
    } else {
        setVaild(city);
    }
    if (!mobileNum.test(phNumValue)) {
        setInvaild(phNum, 'Phone Number must be NZ mobile numbers');
    } else {
        setVaild(phNum);
    }
    if (!email_pattern.test(emailValue)) {
        setInvaild(email, 'Email domain must be either .com, .net or .my');
    } else {
        setVaild(email);
    }
}

function setInvaild(input, message) {
    console.log("message", message)
    console.log("input", input)
    const profileInput = input.parentElement;
    const small = profileInput.querySelector('small');
    console.log("small", small)
    small.innerText = message;
    profileInput.className = 'profileInput invaild';
}

function setVaild(input) {
    const profileInput = input.parentElement;
    profileInput.className = 'profileInput vaild';
}