
@extends('layout')

@section('content')
 





<!--form-->
<div style="
      box-sizing:border-box;
      background-color:light-grey; 
      padding:10px;
       margin:65px auto; 
       width:60%;
       font-weight:50px;
       ">

<h1 style="text-align:center;"> Confirm Booking</h1> &nbsp
<span>Please Confirm your Booking and Pay later at the Time of Loading.</span>

<form class="form" action="verify" method="POST">
@csrf
<table class="table">
  <thead>
    
    
    <tr>
    <th>Material Name</th> 
    <th>Weight</th> 
    <th>Height</th> 
    <th>Width</th>
    <th>Length</th>  
   <th>Date</th>
   <th>T.Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th>
        <div class="form-group">
        <input type="text" name="mname"  class="form-control" value="{{$matname}}"></input>
        </div>
    </th>
    <th>
        <div class="form-group">
        <input type="text" name="weight"  class="form-control" value="{{$weight}}"></input>
        </div>
    </th>

    <th>
        <div class="form-group">
        <input type="text" name="height"  class="form-control" value="{{$height}}"></input>
        </div>
    </th>

    <th>
        <div class="form-group">
        <input type="text" name="width"  class="form-control" value="{{$width}}"></input>
        </div>
    </th>

    <th>
        <div class="form-group">
        <input type="text" name="length"  class="form-control" value="{{$length}}"></input>
        </div>
    </th>

    <th>
        <div class="form-group">
        <input type="text" name="date"  class="form-control" value="{{$date}}"></input>
        </div>
    </th>
    <th>
        <div class="form-group">
        <input type="text" name="price"  class="form-control" value="{{$price}}"></input>
        </div>
    </th> 
    <!--bb <th>{{$weight}}</th> 
     <th>{{$date}}</th>
     <th>{{$price}}Rs</th>
     -->
    </tr>
    <tr>
      
    <td colspan="2"><a href="detail" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Back</a></td>
    <td colspan="2">
        <button type="submit" class="btn btn-primary btn-lg btn-block" > Confirm</button>
    </td>
    </tr>
    
  </tbody>
</table> 
     
         



</form>
  </div>
    


@endsection
    



    