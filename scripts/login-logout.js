// Toggle between Login and Sign-Up forms
const formTitle = document.getElementById('form-title');
const submitButton = document.getElementById('submit-button');
const toggleText = document.getElementById('toggle-text');
const toggleLink = document.getElementById('toggle-link');
const accountForm = document.getElementById('account-form');

let isLogin = true;

toggleLink.addEventListener('click', (e) => {
    e.preventDefault();
    isLogin = !isLogin;

    if (isLogin) {
        formTitle.textContent = 'Login';
        submitButton.textContent = 'Login';
        submitButton.name = 'login';
        toggleText.firstChild.textContent = "Don't have an account? ";
        toggleLink.textContent = "Sign-Up";
    } else {
        formTitle.textContent = 'Sign-Up';
        submitButton.textContent = 'Register';
        submitButton.name = 'register';
        toggleText.firstChild.textContent = "Already have an account? ";
        toggleLink.textContent = "Login";
    }
});
