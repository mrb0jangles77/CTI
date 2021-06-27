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
    
    	<div id="trend_info">
        	<h1>Threat Trends</h1>
        	<div id="threat_image">
        		<img src="images/iot_2.png" width="600" height="500">
        		<img src="images/iot_3.png" width="600" height="500">
        	</div>
        	
        	<ul>
        		<li>83% of medical imaging devices are running on unsupported operating systems.</li>
        		<ul>
        			<li>This reflects a 56% jump from 2018 due to the Windows 7 operating system reaching its 
        			end of life, leaving hospital organizations vulnerable to attacks that can disrupt 
        			care or expose sensitive medical information</li>
        			<li>There is an inherent risk for organizations using IoT devices with the operating systems 
        			shown in the figure above.</li>
        			       			
        		</ul>
        		<br>
        		<li>98% of all IoT device traffic is unencrypted.</li>
        		<ul>
        			<li>This exposes personal and confidential data on the network.</li>
        			<li>Attackers have the ability to listen to unencrypted network traffic.</li>
        			<li>Attacker can collect personal or confidential information and 
        			exploit that data for profit on the dark web</li>
        		</ul>
        		<br>
        		<li>57% of IoT devices are vulnerable to medium or high-severity attacks</li>
        		<ul>
        			<li>Thus making IoT the low-hanging fruit for attackers</li>
        		</ul>
        	</ul>
        </div> <!-- end of the threat trends --> 
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