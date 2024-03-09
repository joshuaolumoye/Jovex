<?php
$errors = array('email' => '' , 'ing' => '' , 'title' => '' );
if(empty ($_POST ['submit'])){
    if (empty ($_POST ['Fname'])){
        $errors['Fname'] = 'firstname is required';
      }else{
        $Fname = $_POST['Fname'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $Fname)){
            $errors['Fname'] = 'email must be a valid email';
        }
      }
      if (empty ($_POST ['email'])){
        $errors['email'] = 'an email is required';
      }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be a valid email';
        }
      }
  if (empty ($_POST ['email'])){
    $errors['email'] = 'an email is required';
  }else{
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'email must be a valid email';
    }
  }
   if (empty ($_POST ['email'])){
      $errors['email'] = 'an email is required';
    }else{
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors['email'] = 'email must be a valid email';
      }
    }
}

   
  

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>jovex signUp</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
        
    
     
      </center>
      <div class="container d-flex justify-content-center">
        <form action="" method="" class="shadow col-11 col-lg-5 col-md-10 ">
          <div class="m-3 ">
            <div class="row g-2">
                <div class="col-12 col-sm-6">
 <label for="firstname" class='form-label text-white'>First Name</label><br>
          <input type="text" name='Fname' id='text' style=' width: 100%; border-radius: 5px;' class="inp py-1 form-control" placeholder="eg.john">
                </div>
                <div class="col-12 col-sm-6">
                    <label for="lastname" class='form-label text-white'>Last Name</label><br>
    <input type="text" name='Lname' id='text' style=' width: 100%; border-radius: 5px;' class="inp py-1 form-control" placeholder="eg.deo">
                </div>
                
    <br>
    
            </div>
         
<br>
<label for="username" class='form-label text-white'>Username</label><br>
<input type="text" name='Uname' id='text' style=' width: 100%; border-radius: 5px;' class="inp py-1 form-control" placeholder="eg.johndeo">
<br>
<label for="email" class='form-label text-white'>Email</label><br>
<input type="email" name='email' id='text' style=' width: 100%; border-radius: 5px;' class="inp py-1 form-control" placeholder="example@gmail.com">
<br>
<div class="password">
     <label for="password"  class='form-label text-white'>password</label>
<div class="input-group mb-3">
  <input type="password" name='password' class="form-control" id="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-eye" id="eyeOpen"></i></span>
</div>
</div>
<div class="confirm-password">
    <label for="password"  class='form-label text-white'>Confirm password</label>
<div class="input-group mb-3">
 <input type="password" class="form-control" id="password" placeholder="Confirm password" aria-label="password" aria-describedby="basic-addon2">
 <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-eye" id="eyeOpen"></i></span>
</div>
</div>
<br>

<div class="row g-2">
    <div class="col-6">
<select class="form-select" aria-label="Default select example">
    <option selected>register as a</option>
    <option value="1">Driver</option>
    <option value="2">Passanger</option>
  </select>
    </div>
    <div class="col-6"> 
        <select class="form-select" aria-label="Default select example">
            <option selected>state of residence</option>
                <option value="1">Abia</option>
                <option value="2">Adamawa</option>
                <option value="3">Akwa Ibom</option>
                <option value="4">Anambra</option>
                <option value="5">Bauchi</option>
                <option value="6">Bayelsa</option>
                <option value="7">Benue</option>
                <option value="8">Borno</option>
                <option value="9">Cross River</option>
                <option value="10">Delta</option>
                <option value="11">Ebonyi</option>
                <option value="12">Edo</option>
                <option value="13">Ekiti</option>
                <option value="14">Enugu</option>
                <option value="15">Federal Capital Territory</option>
                <option value="16">Gombe</option>
                <option value="17">Imo</option>
                <option value="18">Jigawa</option>
                <option value="19">Kaduna</option>
                <option value="20">Kano</option>
                <option value="21">Katsina</option>
                <option value="22">Kebbi</option>
                <option value="23">Kogi</option>
                <option value="24">Kwara</option>
                <option value="25">Lagos</option>
                <option value="26">Nasarawa</option>
                <option value="27">Niger</option>
                <option value="28">Ogun</option>
                <option value="29">Ondo</option>
                <option value="30">Osun</option>
                <option value="31">Oyo</option>
                <option value="32">Plateau</option>
                <option value="33">Rivers</option>
                <option value="34">Sokoto</option>
                <option value="35">Taraba</option>
                <option value="36">Yobe</option>
                <option value="37">Zamfara</option>
            </select>


          </select>
    </div>
</div>


<br>
    <div class="row">
        <div class="col-5 col-md-6  ">
            <input type="checkbox">
            <a href="" class="text-light">Remanber me</a>
        </div>
         <div class="col-7 col-md-6 ">
             <a href="" class="text-danger ms-5 ps-5 justify-content-end">Forgot password</a><br>
         </div>
    </div>
    
    <br><br>   <div class="  d-flex justify-content-center">
    <button type='submit' class='btn brand bg-primary col-12 text-white' >submit</button>
    </div><br>
          <p class="text-center text-light fw-bold col-12">did you hav an acc?<a href="signin.html"> Login</a></p> 
      </div>  
      </form>
     
    </div> 

    <script>
        
        let eyeOpen = document.getElementById('eyeOpen');
        let password = document.getElementById('password');

        eyeOpen.onclick = function(){
            if(password.type == 'password'){
                password.type = 'text';
               
            }
            else{
                password.type = 'password';
                  eyeOpen.src = '<i class="fa-solid fa-eye"></i>';
            }
        }

      
    </script>
</body>
</html>
