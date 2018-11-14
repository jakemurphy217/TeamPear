<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  
  <!-- so bootstrap can recongise between a mobile and destop device -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- linking the bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <!-- JQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <!-- Latest JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
     <!-- my CSS -->
  <link rel="stylesheet" href="style.css.css" type="text/css">
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: aquamarine">
        
       <a class="navbar-brand" href="#" style="max-width: 30%;">
            <img src="logo.png" class="img-fluid">InTheKitchen
       </a>
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"> </span>
        </button>
        
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            
             <li class="nav-item">
                <a href="Favourites.php" class="nav-link">Favourites</a>
            </li>
            
             <li class="nav-item">
                <a href="Nearest.php" class="nav-link">Nearest</a>
            </li>
            
             <li class="nav-item">
                <a href="Account.php" class="nav-link">Account</a>
            </li>
        </ul>
    </div>
    
    </nav>
   <!-- end of navbar -->  
    <!-- start of jumbotron -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 jumbotron">
                <div class="text">
                    <h1>Hello World</h1>
                    <p> wewdfd sdfsdfsdfsd sdfsdfsdf sdfsdfsd sdfsdf</p>
                    <a href="#" class="btn btn-lg btn-success">Click me</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-container">
        <div class="row my row">
            <div class="col-md-8 col-sm-6 Search">
                
                <div class="input-group mb-3 Search-Box">
                    <input  id="foodie" type="text" class="form-control" placeholder="what food are you craving?" aria-label="search box" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button id="SearchBtn" class="btn btn-outline-secondary" type="button">Search</button>
                        </div>
                </div>
                
                
              <script>
                  
                
            var url1 = "https://www.food2fork.com/api/search?key=99daf941fe57229da1083983707f7101&q=";
            //var search = "beef";
            var url2 = "&page=2";
            var input;
            
            var button = select("#SearchBtn");
            button.mousePressed(foodss);
                  
            input = select("#foodie")
                  
              $(document).ready(function(){
                  $("#SearchBtn").click(function(){
                      $.getJSON(url1 + input.value() + url2, function(food){
                      console.log(food);
                      
                  })
                  
              })
                  
              })
                
              </script>

            row 1 col 1
            </div>
            <div class="col-md-4 col-sm-6 Trending">
            row 1 col 2
            </div>
        </div>
    
    </div>
    
    
    
    



</body>
</html>