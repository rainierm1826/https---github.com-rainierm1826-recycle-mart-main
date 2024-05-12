document.addEventListener("DOMContentLoaded", function() {
  var signUp = document.getElementById("sign-up");
  var btnSignup = document.getElementById("open-sign-up");
  var span = document.getElementsByClassName("close-sign-up")[0];

  btnSignup.onclick = function() {
    signUp.style.display = "block";
  }

  span.onclick = function() {
    signUp.style.display = "none";
  }

  var signIn = document.getElementById("sign-in");
  var btnSignin = document.getElementById("open-sign-in");
  var span2 = document.getElementsByClassName("close-sign-in")[0];

  btnSignin.onclick = function() {
    signIn.style.display = "block";
  }

  span2.onclick = function() {
    signIn.style.display = "none";
  }
});
