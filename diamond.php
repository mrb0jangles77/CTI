<!DOCTYPE html>
<!-- Author: Steven Green -->

<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>My Website</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
    crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    
	<script src="js/bootstrap.min.js"></script>
	
	
</head>




<body>
<div id="body_container">
    <nav>
    	<div class="col-sm-12 col-xs-12" id="primary_logo"><img src="images\primary_logo.png">Internet of Things(IoT) CTI</div>
    	<!-- Example single danger button -->
        <div class="btn-group col-6">
        
            <button type="button" class="btn btn-warning btn-block" aria-expanded="false" onclick=" relocate_home()">
            Home
            </button>
            <!-- end of the button -->
            
            <button type="button" class="btn btn-warning dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false">
            Industry Background
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="industry_background.php">Background of industry</a></li>
            <li><a class="dropdown-item" href="threat_trends.php">Threat trends</a></li>
            </ul>
			<!-- end of the dropdown -->
			
			<button type="button" class="btn btn-warning dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false">
            Threat Modelling
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="critical_asset.php">Critical asset identification</a></li>
            <li><a class="dropdown-item" href="diamond.php">Diamond models</a></li>
            <li><a class="dropdown-item" href="intel_buyin.php">Intelligence buy-in here</a></li>
            </ul>
          	<!-- end of the dropdown -->
        
			<button type="button" class="btn btn-warning btn-block" aria-expanded="false" onclick=" relocate_about()">
            About
            </button>   
            </div> <!-- end of the button group -->         
    </nav>
    
    <div id="main_content">
    
    	<div id="diamond_model">
        	<h1>Diamond models</h1>
        	
        	<p>Initially introduced by <a href="https://threatconnect.com/">ThreatConnect</a>, the diamond model 
        	is rooted in graph theory and allows analysts to illustrate cyber-events in a systematic, repeatable manner.</p>
        </div>
    	<div id="diamond_image">
    		<img src="images/diamond_1.png" width="600" height="500">
    		<img src="images/diamond_2.png" width="600" height="500">
    		<img src="images/diamond_3.png" width="600" height="500">
    		<img src="images/diamond_4.png" width="600" height="500">
    	</div>
        	<!-- end of diamond modelling -->
        	 
     </div> <!-- end of the content -->
</div>

<script>
    function relocate_home()
    {
         location.href = "index.php";
    } 

    function relocate_about()
    {
         location.href = "about.php";
    }
</script>


</body>

<footer>
	<strong>This site is for academic purposes only.</strong> &copy; Steven Green
</footer> 

</html>