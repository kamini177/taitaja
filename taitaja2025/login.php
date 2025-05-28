<?php
    include("db.php");
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taitaja</title>
       <link rel="icon" href="assets/favicon.png">
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
}
.form {
    text-align: center;
}
input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
img.avatar {
  width: 15%;
  border-radius: 10%;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
</head>
<body>

   <div class="form">
     <div class="imgcontainer">
        <img src="assets/logo.png" alt="Avatar" class="avatar">
     </div></br>

        <h1>Kirjaudu sisään</h1></br>
        <form name="form" action="connection.php" onsubmit="return isvalid()" method="POST">
          
            <input type="text" id="Username" placeholder="Käyttäjätunnus" name="user">
            </br></br>
            <input type="password" id="pass" placeholder="Salasana" name="pass">
            </br></br>
            <input type="submit" id="btn" value="Kirjaudu sisään" name="submit">
            
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length=="" && pass.length==""){
                alert("Username and password field is empty!!!");
                return false
            }
            else{
                if(user.length==""){
                    alert("Username is empty!!!");
                    return false
                }
                if(pass.length==""){
                    alert("Password is empty!!!");
                    return false
                }
            }
        }
    </script>

</body>
</html>
