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
		
    		<div class="btn-group col-md-12 text-center" role="group" aria-label="Button group 1">
            	
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
              	
              	<button type="button" class="btn btn-warning dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false">
                Data Summary
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="data_summary.php">Data summary</a></li>
                </ul>
              	<!-- end of the dropdown -->
            	
    		</div>
    		
            <div class="btn-group col-md-12 text-center" role="group" aria-label="Button group 2">   		
    		
    			              	
              	<button type="button" class="btn btn-warning dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false">
                Data Example
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
              	
              	<button type="button" class="btn btn-warning dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false">
                Operational Intelligence
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="insights.php">Key Insights Summary</a></li>
                <li><a class="dropdown-item" href="operational_intel.php">Operational Intelligence</a></li>
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
        	<h1>Visualization - Geospatial Visualization IoT Devices</h1>
        	<div id="industry_image">
        		<img src="images/iot_map.png" width="900" height="500">
        	</div>
        	<ul>
        		<li>The use of IoT devices are heavily concentrated in North America, Europe, and South Asia.</li>
        		<ul>
        			<li>The above map utilize IP geolocation services utilized with the Shodan IoT data.</li>
        		</ul>
        		<br>
        	</ul>
        	<br>
        	
        	<h1>Visualization - Malware Analysis (Annual Distribution)</h1>
        	<div id="industry_image">
        		<img src="images/top_5_malware.png" width="900" height="500">
        	</div>
        	<ul>
        		<li>Async Remote Access Trojan (RAT) C&C is the most frequently seen malware from 2019 - Current</li>
        		<ul>
        			<li>This malware is seen DAILY since 2019.</li>
        		</ul>
        		<br>
        	</ul>
        	<br>
        	
        	<h1>Visualization - Bar chart of IoT Protocol</h1>
        	<div id="industry_image">
        		<img src="images/protocol_bar.png" width="900" height="500">
        	</div>
        	<ul>
        		<li>Although UDP may be preferred for faster traffic and less network traffic congestion, 
        		many IoT device users utilize TCP for reliable transmission</li>
        		<ul>
        			<li>IP address + protocol (TCP) + port number.</li>
        		</ul>
        		<br>
        	</ul>
        	<br>
        		
        </div> <!-- end of the industry background --> 
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