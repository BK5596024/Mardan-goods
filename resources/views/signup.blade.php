@extends('layout')
@section('content')
<div class="container" style="padding-right: 20%; padding-left: 20%">
<h2 style="margin-top: 12px;" class="text-center">Sign Up </a></h2>
<br>

 
<form action="client/signup" method="POST" >
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter User Name">
       </div>
    </div>
   

    <div class="col-md-12">
        <div class="form-group">
            <strong>CNIC</strong>
            <input type="text" name="cnic" class="form-control" placeholder="Enter Your CNIC">
       </div>
    </div>

     <div class="col-md-12">
        <div class="form-group">
            <strong>City</strong>
            <input type="text" name="city" class="form-control" placeholder="Enter Your City">
       </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
       </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Phone No</strong>
            <input type="text" name="phoneno" class="form-control" placeholder="Enter Your Phone">
       </div>
    </div>

   

    

     <div class="col-md-12">
        <div class="form-group">
             <strong>Password</strong>
            <input type="text" name="password" class="form-control" placeholder="Enter Password">
            
        </div>
    </div>
    
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-lg btn-block"  >SignUp</button>
    </div>
</div>
 
</form>


</div> 
<br>
@endsection