 function validate() {
  var username = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (username == "ammu@gmail.com" && password == "kusuma v")
  {
    alert("login successfully");
    return false;
  } else {
    alert("login failed");
  }
}
function toggle() {
  var x = document.getElementById("password");
  var y = document.getElementById("eyes");
  var z = document.getElementById("eye");
  if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  } else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}