<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    
    <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="lib/angular/angular.min.js"></script>
  <script src="js/app.js"></script>
  <style>
  .error{
    color:red;
    text-align:center;
    margin-top: 2px;
  }

  input.ng-invalid.ng-touched{
      border:1px solid #DA3637;
    }

  input.ng-valid.ng-touched{
      border:1px solid #309D12;
    }

    .ng-invalid .btn{
      background: gray;
      color:#ffffff;
    }

  </style>
 </head>
<body>
<div class="col-md-3"></div>
<div class="col-md-6">
<section ng-app="myApp" ng-controller="RegistrationController">
<h2>Form Validation</h2>
<p ng-show="message">{{ message }}</p>
<form name="myform" ng-submit="register()" novalidate>
  <div class="form-group" style="margin-top: 20px;">
    <label for="exampleInputFName">First Name</label>
    <input type="text" class="form-control" name="firstname" value="" placeholder="First Name" ng-model="user.firstname" ng-required="true">
    <div class="error" ng-show="myform.firstname.$invalid && myform.firstname.$touched">You Must fill out your First Name</div>
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="exampleInputLName">Last Name</label>
    <input type="text" class="form-control"  name="lastname" value="" placeholder="Last Name" ng-model="user.lastname" ng-required="true">
    <div class="error" ng-show="myform.lastname.$invalid && myform.lastname.$touched">You Must fill out your Last Name</div>
  
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" placeholder="Email" name="email" ng-required="true" ng-model="user.email">
     <div class="error" ng-show="myform.email.$invalid && myform.email.$touched">You Must Enter a valid Email</div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password" ng-model="user.password" ng-minlength="6">
  </div>
    <div class="error" ng-show="myform.password.$invalid && myform.password.$touched">Password must be at least 6 digits</div>
  
   <button type="submit" class="btn btn-default">Submit</button>
</form>
</section>
</div>
<div class="col-md-3"></div>
</body>
</html>