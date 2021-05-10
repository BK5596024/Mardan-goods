
@extends('layout')

@section('content')
 

<div style="margin:auto; width:50%;  color:black;">
        <h3 style="text-align:center;">
        
        Add Material detail
        </h3>
        <p style="text-align:center;">Add  material with its number of items in detail. </p>
</div>  

<!--form-->
<div style="
      box-sizing:border-box;
      background-color:light-grey; 
      padding:10px;
       margin:20px auto; 
       width:50%;
       font-weight:50px;
       ">


  <form class="form" action="calprice" method="POST">
  @csrf

 
 
    <div class="form-group">
        <label style="font-weight:bold;  " for="pickup location">Material Name</label>
        <input type="text" name="matname" class="form-control" placeholder="Material Name" id="">
        <spna>@error('matname'){{$message}}@enderror</span>
    </div>
    

  
    <label style="font-weight:bold;">Weight</label>
    <input type="text" name="weight"class="form-control" placeholder="Enter Weight in kg" id="">
        <spna>@error('weight'){{$message}}@enderror</span>
      
  <br>
    
    <div class="form-group">
      <label style="font-weight:bold;  " for="pickup location">Height</label>
      <input type="text" name="height" class="form-control" placeholder="Height in feet" id="">
      <spna>@error('height'){{$message}}@enderror</span>
    </div>
    
    <div class="form-group">
    <label style="font-weight:bold; for="drop location">Width</label>
      <input type="text" name="width" class="form-control" placeholder="width in feet" id="">
      <spna>@error('width'){{$message}}@enderror</span>
    </div>

    <div class="form-group">
    <label style="font-weight:bold; for="drop location">Length</label>
      <input type="text" name="length" class="form-control" placeholder="length in feet" id="">
      <spna>@error('width'){{$message}}@enderror</span>
    </div>

    <div class="form-group">
    <label style="font-weight:bold; for="drop location">Date</label>
      <input type="text" name="date" class="form-control" placeholder="Enter Date" id="">
      <spna>@error('date'){{$message}}@enderror</span>
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg btn-block" > Next</button>
  </form>
</div>

    <!--caresoul-->
    


@endsection
    



    