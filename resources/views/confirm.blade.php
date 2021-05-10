
@extends('layout')

@section('content')
 





<!--form-->
<div style="
      box-sizing:border-box;
      background-color:light-grey; 
      padding:10px;
       margin:100px auto; 
       width:50%;
       
       ">

    <h1 style="text-align:center;">  Booking Confirm</h1> &nbsp

    <h4>Thanks for your final inquiry , we will verify your requirement and share the final quote via mobile and mail</h4>
  <br>
    <form class="form" action="index" method="POST">
    @csrf
      <button type="submit" class="btn btn-primary btn-lg btn-block" > Done</button>      

    </form>

 </div>






@endsection
    



    