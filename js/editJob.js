/* edit job form vaildation */
function editJobValidation() {
    // console.log("edit job validation start")
    document.getElementById("output").style.color = "red";


    classifcation = document.getElementById("class").value;
    experience = document.getElementById("exper").value;
    salary = document.getElementById("salary").value;
    date = document.getElementById("date").value;


    /* console.log("classifcation", classifcation)
    console.log("experience", experience)
    console.log("last name", LastName)
    console.log("salary", salary)
    console.log("date", date) */

    c = classValidation(classifcation);

    e = numValidation(experience);

    s = salaryValidation(salary);

    d = dateValidation(date);

    

    if (c == false || e == false || s == false || d == false ) {
        return false;
    } else {
        return true;
    }
    //console.log("edit job validation end")
}