document.addEventListener('DOMContentLoaded', function () {
    var formContainer = document.getElementById('registrationForm');
    formContainer.style.display = 'none';
});

function toggleForm(mode) {
    var formContainer = document.getElementById('registrationForm');
    var loginForm = document.getElementById('loginForm');
    var registerForm = document.getElementById('registerForm');

    if (mode === 'login') {
        loginForm.style.display = 'block';
        registerForm.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        registerForm.style.display = 'block';
    }

    formContainer.style.display = 'block';

    // Центрування контейнера на екрані
    formContainer.style.top = '50%';
    formContainer.style.left = '50%';
    formContainer.style.transform = 'translate(-50%, -50%)';
}
