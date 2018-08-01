





<html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
 
    


     <link href="{{ asset('css/login.css') }}" media="all" rel="stylesheet" type="text/css" />


  
</head>


    <div id="login">
       
        <form method="post" action={{url("adminlogin")}}>
            {{csrf_field()}}
        <span class="fontawesome-user"></span>
            <center>
        <input type="text" id="user" name="username" placeholder="username">
                           @include('alerts')
        <span class="fontawesome-lock"></span>
        <input type="password" name="password"  placeholder="password">
        
        <input type="submit" value=" login">
            </center>
<p>
<?php
if($errors->any())
{
?>
 <div class="alert alert-danger text-center bg-danger"  style="color: white; "  role="alert"><?php echo $errors->first() ?> </div>
 <?php 
 //return ;
}

  
   

     
      
?>
      </p> 

       
</form>
<?php 

  //return view('login');
  ?>
    </div>