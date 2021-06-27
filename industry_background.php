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
		<img id="primary_logo" src="images\primary_logo.png"><b>Internet of Things(IoT) CTI</b>
		
		<div class="btn-toolbar" role="toolbar" aria-label="Button group toolbar">
		
    		<div class="btn-group" role="group" aria-label="Button group 1">
            	
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
                <li><a class="dropdown-item" href="intel_buyin.php">Intelligence buy-in</a></li>
                </ul>
              	<!-- end of the dropdown -->
            	
    		</div>
    		
    		<div class="btn-group" role="group" aria-label="Button group 2">
    			<button type="button" class="btn btn-warning dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false">
                Data Summary
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="data_summary.php">Data summary</a></li>
                </ul>
              	<!-- end of the dropdown -->
              	
              	<button type="button" class="btn btn-warning dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false">
                Data Examples
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="data_shodan.php">Shodan.io data example</a></li>
                <li><a class="dropdown-item" href="data_abuse.php">Abuse.ch data example</a></li>
                </ul>
              	<!-- end of the dropdown -->
              	
              	<button type="button" class="btn btn-warning dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false">
                Analytics
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="approaches.php">Approaches</a></li>
                <li><a class="dropdown-item" href="data_visualizations.php">Visualizations</a></li>
                </ul>
              	<!-- end of the dropdown -->
            
    			<button type="button" class="btn btn-warning btn-block" aria-expanded="false" onclick=" relocate_about()">
                About
                </button>
    		</div>
    		
    		
    	</div>
	
	</nav>
    
    <div id="main_content">
    
    	<div id="industry_info">
        	<h1>Industry Background</h1>
        	<div id="industry_image">
        		<img src="images/iot_1.png" width="900" height="500">
        	</div>
        	<ul>
        		<li>The Internet of Things (IoT) can be best described as a network of objects which are embedded
        		with software and sensors focused on the collection and exchange of data.</li>
        		<ul>
        			<li>IoT devices have limited capabilities in terms of computation power, memory, and bandwidth 
        			which hamper the direct implementation of traditional Internet security techniques</li>
        			<li>It is complex to encrypt the data received from low resource devices</li>
        			<li>No industry wide security guidelines to help mitigate security issues and foster 
        			techniques for implementation.</li>
        		</ul>
        		<br>
        		<li>IoT is currently flourishing across all industries.</li>
        		<ul>
        			<li>Key Services include healthcare, manufacturing, autonomous driving vehicles, 
        			and fitness wearable devices</li>
        			<li>Major Industry Players</li>
        				<ul>
        					<li>Verizon</li>
        					<li>IBM</li>
        					<li>Huawei</li>
        					<li>SAP</li>
        					<li>Cisco</li>
        					<li>GE Digital</li>
        				</ul>
        		</ul>
        		<br>
        		<li>The global IoT market size stood at USD 250.72 billion in 2019 and is projected 
        		to reach USD 1,463.19 billion by 2027</li>
        		<ul>
        			<li>It is predicted that by 2025, 41.6 billion IoT devices will be in use</li>
        		</ul>
        	</ul>
        </div> <!-- end of the industry background --> 
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