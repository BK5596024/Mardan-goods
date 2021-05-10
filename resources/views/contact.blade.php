@extends('layout')
@section('content')
<div class="container" style="padding-right: 20%; padding-left: 20%">
<h2 style="margin-top: 12px;" class="text-center">Contact Us</a></h2>
<br>
 
<form action="#" method="POST" name="contact">

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Name">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="product_code" class="form-control" placeholder="Enter Email">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Message</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Type Your Message Here"></textarea>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-lg btn-block" > Send</button>
    </div>
</div>
 
</form>
</div> <br><br>
@endsection