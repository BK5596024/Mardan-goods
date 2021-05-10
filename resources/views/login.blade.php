@extends('layout')
@section('content')
<div class="container" style="padding:4% 20%;">
    <h2 style="margin-top: 12px;" class="text-center">Login </a></h2>
<br>
 
    <form action="client/login" method="POST" >
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="email" name="userid" class="form-control" placeholder="Enter User Name">
            </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Password</strong>
                    <input type="text" name="password" class="form-control" placeholder="Enter Password">
                    
                </div>
            </div>
        
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block"  >Login</button>
            </div>
        </div>
    
    </form>
</div> 
<br><br>
@endsection