function copiarDatos(){

  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var telefono = document.getElementById("telefono").value;

  var texto = "Nombre: "+ name + " // Email: " + email + " // Telefono: " + telefono;

  document.getElementById("textToEncode").innerHTML = texto;
  
  var url = "https://api.whatsapp.com/send?phone=5491137710839&text="+encodeURIComponent(texto)
						
  window.open(url);
}