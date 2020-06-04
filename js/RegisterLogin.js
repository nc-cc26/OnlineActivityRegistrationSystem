var loginForm = $("#login");
var regForm = document.querySelector("#register");
var btnBoxBGColor = document.querySelector("#btn");

// forms switching
function register() {
  loginForm.css("left", "-400px");
  regForm.style.left = "50px";
  btnBoxBGColor.style.left = "0";
}

function login() {
  loginForm.css("left", "50px");
  regForm.style.left = "-400px";
  btnBoxBGColor.style.left = "115px";
}
