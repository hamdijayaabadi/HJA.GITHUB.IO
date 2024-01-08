
<?php
function sendEmail(){
    Email.send({
    Host : "smtp.gmail.com",
      Username : "hamdijayaabadi@gnail.com",
      Password : "qynbokybhvrvbiec",
      To : 'hamdijayaabadi@gmail.com',
      From : document.getElementById("email").value,
      Subject : "New Contact From Enguiry",
      Body : "name:" + document.getElementById("name").value
      + "<br> Email:" + document.getElementById("email").value
      + "<br> phone no:" + document.getElementById("phone").value
      + "<br> Message:" + document.getElementById("message").value
  }).then(
     message => alert("message Sent Succesfully")
   );
 }

?>




