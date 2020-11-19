


<!doctype html>
<html lang="en"> 
  <head>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link  rel="icon"   href="favicon (2).ico" type="image/png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Srisakdi:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Srisakdi:wght@700&display=swap" rel="stylesheet">
  <!-- LOGO -->
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
    <!-- A -->
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Esfero Sga</title>
  </head>
  <body>
	  
<?php 
$myemail = 'barbiiee.8@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$to = $myemail;
$email_subject =  "Nuevo mensaje Esferostrech";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "Mensaje enviado correctamente";
?>

<section class="bienvenidos">
   <header class="encabezado">
     
       <div class="container-fluid " style="padding:0%">
        <nav class="navbar navbar-expand-lg navbar-dark "  style="background-color: rgb(109, 50, 197); ">
         
          <a class="navbar-brand " href="#" style=" font-family: 'Bad Script', cursive!important; font-size: 30px;">Esfero Sga</a>
          
          <button  class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
            
          </button>
          
        
          <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto " style="font-family: 'Chakra Petch', sans-serif; font-size: 18px;">
              <li class="nav-item  " >
                <a class="nav-link" href="index.html">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galeria.html">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ubicación.html">Ubicación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nosotros.html">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contacto</a>
              </li>

           
          
          </div>
          
        </nav>
          
    </div>
   </header>

</section>

    <div class="container">
        <form method="post" action="enviar.php" >
      
          <label for="fname">Nombre</label>
          <input type="text" id="fname" name="name" placeholder="Tu nombre..">
      
          <label for="email">Email:</label>
          <input type="text" placeholder=" Tu Email.." name=" email" required id="email">
      
        
          <textarea id="subject" name="message" placeholder="Escribinos.." style="height:200px"></textarea>
      
         <input class="button" type="submit">
      
        </form>
      </div>  
    
<!--  <script src="https://smtpjs.com/v3/smtp.js">
</script>

<script>
function Persona(){
  this.nombre =document.getElementById('fname').value;
  this.apellido =document.getElementById('lname').value;
  this.mail =document.getElementById('email').value;
  this.telefono =document.getElementById('cel').value;
  this.asunto =document.getElementById('subject').value;


  
}
function sendMail(){

Email.send({

    SecureToken : "3f2f481c-2bb8-49f4-88b1-24f49e314de3",
    To : 'emanuelnicolasb@gmail.com',
    From : "barbiiee.8@gmail.com",
    Subject : "Prueba",
      Body : " <h2>Nombre : "+(new Persona()).nombre +" "+"</h2><h2>Apellido: "+(new Persona()).apellido +" </h2>"+ "<h3>E-mail : "+(new Persona()).mail +"</h3> "+ "<h3>Telefono : "+(new Persona()).telefono +"</h3> "+ "<h4>Asunto : "+(new Persona()).asunto + "</h4>" 
}).then(
  message => alert("Tu mensaje ha sido enviado, muchas gracias!")
);
  }
  </script>
-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <footer>
      <!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
   
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->
  <div class="redes text-center " style="font-size: 35px; color:violet">
    <a href="https://www.facebook.com/StretchingGlobalActivoLomas/"><i class="fab fa-facebook-square redes" style="color: rgb(147, 40, 228);"></i></i></a> 
    <a href="instagram.com/esfero_sga">  <i class="fab fa-instagram redes " style="color:rgb(147, 40, 228)"></i></a>
    </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Desarrollado por:
    <a href="https://github.com/barbiwonderland" style="color:rgb(147, 40, 228)"> Barbi.wonderlaand</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    </footer>
  </body>
</html>
