<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
       
      
       
        

   
    </head>
    <body>
    <div id="cover-spin"></div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container wrapper">
<nav>
<div class="logo">
<img src="images/logo.svg" alt="Image Logo" >
</div>
<div class="title">
<p>PHP Test</p>
</div>
<hr>
</nav>

<?php include('delete_modal.php'); ?>

<div class="center-form">

<form id="form_user">
        <input type="hidden" class="form-control" id="id" name="id" aria-describedby="emailHelp" >
        <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control resetform" id="first_name" name="first_name" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted errors first_name"  style="display:none;color:red!important">First Name Invalid or empty</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control resetform" id="surname" name="surname" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted errors surname"  style="display:none;color:red!important">Last Name Invalid or empty</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control resetform" id="email" name="email" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted errors email"  style="display:none;color:red!important">Email Invalid or empty</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control resetform" id="username" name="username" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted errors username" style="display:none;color:red!important">Username is Invalid or empty</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control resetform" name="password" id="password">
    <small id="emailHelp" class="form-text text-muted errors password" style="display:none;color:red!important">Passwod is Invalid and must contain atleast 1 lowercase and 1 uppercase letter</small>
  </div>

  <div class="form-group button_action">

    <a href="#" class="btn-green bt-big bt-right" onClick="return insert();">Submit</a>
  </div>

 

</form>


</div>
<div class="message">
  <!--Message-->





                                      
  <!--Message-->
  
  
  </div>    

<!--table by default table data it will be hidden-->
<div class="table_data" style="display:none">
<div class="form-group">

    <a href="#" class="btn-green bt-big bt-right" onClick="return add_form();">Add</a>
  </div>
  <div class="table_display">
<table class="table table-striped " id="user_table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
</div>
</div>
<!--table-->





<!--footer-->
<footer>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  
</div>

</footer>
<!--footer-->



        </div>

        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


 <script src="js/main.js"></script>


        
       
    </body>
</html>