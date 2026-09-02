const form = document.getElementById("loginForm");
const email = document.getElementById("email");
const emailError = document.getElementById("emailError");

form.addEventListener("submit", function (e) {
    if (email.value.trim() === "" || !email.validity.valid) {
        e.preventDefault();
        emailError.style.display = "block";
        return;
    }

    // No preventDefault here.
    // Valid input submits to login.php.
});

email.addEventListener("invalid", function (e) {
    e.preventDefault();
    emailError.style.display = "block";
});