
@extends('layout')

@section('content')

<!--caresoul-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="sli1.jpg" alt="First slide" style="height: auto; width: 100%;">
        <div class="carousel-caption d-none d-md-block">
            <h1>22 Vehicler</h1>
            <p></p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="sli2.jpg" alt="Second slide" style="height: auto; width: 100%;">        
        <div class="carousel-caption d-none d-md-block">
            <h1>Container</h1>
            <p></p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="sli3.jpg" alt="Third slide" style="height: auto; width: 100%;">        
        <div class="carousel-caption d-none d-md-block">
            <h1>Hino</h1>
            <p></p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
<!--form-->
<div style="
      box-sizing:border-box;
      background-color:light-grey; 
      padding:10px;
       margin:20px auto; 
       width:50%;
       ">

    <h1 style="text-align:center;">Book Truck & Part Load Service</h1><br>
  <form action="locaton" method="POST">
  @csrf
  <label style="font-weight:bold;">Service Type</label>
  <select name="cars" class="custom-select">
      
      <option value="fload">Full Load</option>
      <option value="hload">Half Load</option>
      
    </select>
    <spna>@error('cars'){{$message}}@enderror</span>
    <div class="form-group">
      <label style="font-weight:bold;  " for="pickup location">Pick Up Location</label>
      <input type="text" name="picklocation" class="form-control" placeholder="Pick Up location" id="email">
      <spna>@error('email'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
    <label style="font-weight:bold; for="drop location">Drop Location</label>
      <input type="text" name="droplocation" class="form-control" placeholder="Drop Location" id="pwd">
      <spna>@error('password'){{$message}}@enderror</span>
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="calcRoute();"> Next</button>
  </form>
</div><br><br>

  


@endsection
    



    