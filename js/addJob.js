/* new job form vaildation */
const job = document.getElementById('addJobForm');
const title = document.getElementById("title");
const salary = document.getElementById("salary");

job.addEventListener('submit', (e) => {
    e.preventDefault();
    vaildateInput();
});

function vaildateInput() {
    //getting values from inputs
    const titleValue = title.value
    const salaryValue = salary.value

    //checking values
    console.log("title", titleValue)
    console.log("salary", salaryValue)

    //patterns
    title_pattern = /^[a-zA-Z ]+$/;
    salary_pattern = /^[0-9]+$/;

    if(!title_pattern.test(titleValue)){
        setInvaild(title, 'Job Title must use alpha characters only');
    }else{
        setVaild(title);
    }
    if(!salary_pattern.test(salaryValue)){
        setInvaild(salary, 'Salary must be digits only');
    }
    else{
        setVaild(salary);
    }
}

function setInvaild(input, message) {
    console.log("message", message)
    console.log("input", input)
    const jobInput = input.parentElement;
    const small = jobInput.querySelector('small');
    console.log("small", small)
    small.innerText = message;
    jobInput.className = 'jobInput invaild';
}

function setVaild(input) {
    const jobInput = input.parentElement;
    jobInput.className = 'jobInput vaild';
}