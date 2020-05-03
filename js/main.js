/* Dynamic Content */

/* colours
Yellow #fdbb2d
Aqua #22c1c3
grey #edf0f1 | #ccc | grey
white #fff white*/

/* add highlight to focused on textboxes */
function highlight(x) {
    document.getElementById(x).style.backgroundColor = "#fdbb2d";
    document.getElementById(x).style.color = "black";
}
/* remove highlight to focused on textboxes  */
function removeH(x) {
    document.getElementById(x).style.backgroundColor = "#edf0f1";
    document.getElementById(x).style.color = "#22c1c3";
}

// /* go to account page */
// const signUp= document.getElementById('go2signup');
// const signIn = document.getElementById('go2signIn');

// signUp.addEventListener('click', () => {
//     window.location('../account.html');
// });

// signInButton.addEventListener('click', () => {
// 	container.classList.remove("right-panel-active");
// });
