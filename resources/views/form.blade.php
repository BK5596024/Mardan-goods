<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1 style="text-align:center">Form</h1>

<form action="pass" method="POST">
@csrf
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email"class="form-control" placeholder="Enter email" id="email">
    <spna>@error('email'){{$message}}@enderror</span>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
    <spna>@error('password'){{$message}}@enderror</span>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>