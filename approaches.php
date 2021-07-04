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
    
    	<div id="intel_buyin">
        	<h1>Analytical Approaches</h1>
        	
        	<p>Performing analytical techniques on our collected data enables the development of relevant & 
        	timely insights on cyber threat intelligence data sources</p>
        	
        	<ul>
        		<li>The following three analytical approaches were used: </li>
        		<ul>
        			<li>Summary Statistics</li>
        			<li>Malware Analysis</li>
        			<li>IP Reputation Analysis</li>      			       			
        		</ul>
        		<br>
        		<li><b>Justification - Summary Statistics</b></li>
        		<ul>
        			<li>Data Source:</li>
        			<ul>
        				<li>Shodan IoT data - IoT internet protocols used</li>
        			</ul>
        			<li>Process</li>
        			<ul>
        				<li>Analyze Frequency of IoT protocols</li>
        				<li>Create plot using R</li>
        			</ul>
        			<li>Justification</li>
        			<ul>
        				<li>There may be a preference of UDP protocol used for IoT devices due to the 
        				amount of data being transported over the network, therefore speed and using less 
        				network traffic would be preferred. However, it is beneficial to provide executives 
        				with a visualization of most utilized protocol.</li>
        			</ul>
        		</ul>
        		<br>
        		<li><b>Justification - Malware Analysis</b></li>
        		<ul>
        			<li>Data Source:</li>
        			<ul>
        				<li>Abuse SSL Fingerprint - C2 servers for botnets</li>
        			</ul>
        			<li>Process</li>
        			<ul>
        				<li>Analysis of SSL fingerprint dataset</li>
        				<ul>
        					<li>Extract date from each occurrence</li>
        					<li>Frequency of malware by date</li>
        					<li>Create plot using R</li>
        				</ul>
        			</ul>
        			<li>Justification</li>
        			<ul>
        				<li>Provide visualization for executives to help identify the most frequent 
        				malware types used to create a botnet with IoT sensors based on date</li>
        			</ul>
        		</ul>
        		<br>
        		<li><b>Justification - IP Reputation Analysis</b></li>
        		<ul>
        			<li>Data Source:</li>
        			<ul>
        				<li>Shodan IoT data - IP Addresses</li>
        			</ul>
        			<li>Process</li>
        			<ul>
        				<li>Utilize open source service such as IP-API.com & mygeodata.cloud</li>
        				<ul>
        					<li>Geolocation of IP Address</li>
        					<li>Acquire geospatial visualization</li>
        				</ul>
        			</ul>
        			<li>Justification</li>
        			<ul>
        				<li>Provide executive leadership with a geospatial view of malicious IoT devices 
        				to give an idea of which locations should be blocked from network.</li>
        			</ul>
        		</ul>     		
        	</ul>
        	<!-- end of diamond modelling -->
        	
        </div> <!-- end of the intelligence buy-in --> 
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