
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mardan Express Goods</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">-->
    
   
</head>

<body>
        <form action="getMiles" method="POST">
        @csrf
            <input type="text" name="pick" id="pick">
            <input type="text" name="delivery" id="delivery">
            <input type="submit" name="send" id="Submit">

        </form>



</body>
<script>
  function cities()
  {
      var option={
          types:['(cities)']
      };
      var pickInput=document.getElementById('pick');
      var pickAutocomplete= new google.maps.places.Autocomplete(pickInput,option);

      var deliveryInput=document.getElementById('delivery');
      var deliveryAutocomplete= new google.maps.places.Autocomplete(deliveryInput,option);
  }
</script>



</html>