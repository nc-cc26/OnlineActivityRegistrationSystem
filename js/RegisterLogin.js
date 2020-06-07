var loginForm = $("#login");
var regForm = document.querySelector("#register");
var btnBoxBGColor = document.querySelector("#btn");
var registerButton = $("#rg-btn");
var loginButton = $("#lg-btn");

// forms switching
function register() {
  loginForm.css("left", "-400px");
  regForm.style.left = "50px";
  btnBoxBGColor.style.left = "0";
  registerButton.toggleClass('text-light')
  loginButton.toggleClass('text-light')
}

function login() {
  loginForm.css("left", "50px");
  regForm.style.left = "-400px";
  btnBoxBGColor.style.left = "116px";
  registerButton.toggleClass('text-light')
  loginButton.toggleClass('text-light')
}
