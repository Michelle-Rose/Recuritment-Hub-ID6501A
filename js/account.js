const signUpButton = document.getElementById('signup');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', activeSignup);

signInButton.addEventListener('click', activelogin);

function activeSignup() {
	container.classList.add("right-panel-active");
}

function activelogin() {
	container.classList.remove("right-panel-active");
}

document.addEventListener('DOMContentLoaded', () => {
	var actions = location.search.substr(1).split("&");
	if (actions.length > 0) {
		if (actions[0]=='signup'){
			activeSignup() 
		}
	}
});