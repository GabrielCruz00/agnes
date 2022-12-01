const btn = document.getElementById("btn");

btn.addEventListener("click", function () {
  var contrasena = document.getElementById("contrasena").value;
  var md5Hash = md5(contrasena);
  var hash = (document.getElementById("hash").value = md5Hash);
});
