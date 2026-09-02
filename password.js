// // Show email
// window.onload = function () {
//   const params = new URLSearchParams(window.location.search);
//   const email = params.get("email");

//   if (email) {
//     document.getElementById("userEmail").textContent = email;
//   }
// };

// // Button
// function login() {
//   const password = document.getElementById("password").value;

//   if (!password) {
//     alert("Enter your password");
//     return;
//   }
// }
function togglePassword() {
  const password = document.getElementById("password");
  const eye = document.querySelector(".eye");

  if (password.type === "password") {
    password.type = "text";
    eye.src = "images/eye-off.png";
  } else {
    password.type = "password";
    eye.src = "images/eye.png";
  }
}