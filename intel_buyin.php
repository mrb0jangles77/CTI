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
            
    			<button type="button" class="btn btn-warning btn-block" aria-expanded="false" onclick=" relocate_about()">
                About
                </button>
    		</div>
    		
    		
    	</div>
	
	</nav>
    
    <div id="main_content">
    
    	<div id="intel_buyin">
        	<h1>Intelligence Buy-In</h1>
        	
        	<p>Often, cybersecurity is an investment in which many executives do not see a direct return on investment.
        	This sections aims to provide a convincing case as to why the development of a CTI platform is in 
        	the interest of an IoT focused organization.</p>
        	
        	<ul>
        		<li>Top threats in 2020: </li>
        		<ul>
        			<li>Network scanning</li>
        			<li>Defaul Password</li>
        			<li>Worm</li>
        			<li>Ransomware</li>        			       			
        		</ul>
        		<br>
        		<li>Recent Survey done by Microsoft indicates: </li>
        		<ul>
        			<li>97% companies surveyed have security concerns when implementing IoT.</li>
        			<li>Almost 50% say ensuring data privacy is top priority.</li>
        			<li>While 43% are concerned with ensuring network-level security</li>
        			<li>40% declare securing endpoints for each IoT device is a consideration</li>
        			<li>38% mention tracking and managing each IoT device</li>
        			<li>38% of businesses are concerned with ensuring that all employees involved in 
        			IoT projects receive comprehensive training</li>
        		</ul>
        		<br>
        		<li>The inherited vulnerabilities of IoT devices makes a great case for creating a cyber threat intelligence plan. 
        		In fact, the plan could help mitigate risk such as: </li>
        		<ul>
        			<li>Confidentiality, integrity, & availability of data</li>
        			<li>Adopting an decentralized approach to IoT network</li>
        			<li>Identify emerging threats and culminate plan for vulnerabilities</li>
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