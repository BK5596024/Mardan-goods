
@extends('layout')

@section('content')
<br><br>
    <div style="margin:auto; width:50%; background:black;color:white;">
        <h1 style="text-align:center;">
        
        <span>{{$pickloc}}</span> <span>-></span><span>{{$droploc}}</span>
        <span> : {{$dist}}</span><span>km</span>
        </h1>
       
    </div>  <br>

    <div style="margin:auto; width:50%;  color:black;">
        <h3 style="text-align:center;">
        
        Choose service type
        </h3>
        <p style="text-align:center;">Select business for Full truck or partload or personal for household goods </p>
    </div>  
     

<!--form-->
<div style="
      box-sizing:border-box;
      background-color:light-grey; 
      padding:10px;
       margin:20px auto; 
       width:50%;
       ">


    <form action="type" method="POST">
    @csrf
    <div class="form-check">
    
      <input  class="form-check-input" type="radio" name="type" id="business" value="business" checked>
      <label class="form-check-label" for="exampleRadios1">
        <h3>  Business </h3>
      </label> &nbsp &nbsp
      <span>Industrial Commercial</span>
      
    </div>

  <div class="form-check">

      
      
      <input class="form-check-input" type="radio" name="type" id="personal" value="personal">
      <label class="form-check-label" for="exampleRadios2">
          <h3>  Personal </h3>
      </label> &nbsp &nbsp
      <span>Personal</span>
  </div>

  <button type="submit" class="btn btn-primary btn-lg btn-block" > Select</button>
  </form>


</div>
   
   
<br><br>

@endsection
    



    