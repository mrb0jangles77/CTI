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
    	<p><h1>Data Summary</h1></p>
    	
    	<div class="container">            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan='5'><img id='shodan' src="images\shodan.jpg" width="400" height="400"></td>
                <td><b>About</b></td>
                <td>Shodan is a search engine for IoT devices</td>
              </tr>
              <tr>
                <td><b>Advantage</b></td>
                <td><ul>
                      <li>Known as 'The search engine for hackers'</li>
                      <li>Ability find ANY device and report any vulnerabilities</li>
                      <li>This search engine is also useful to security personnel to help protect networks</li>
                    </ul>
                </td>
              </tr>
              <tr>
                <td><b>Data Collected</b></td>
                <td><ul>
                      <li>Results related to the IoT</li>
                      <li>Fields such as IP Address, Port, Location, Organization, City, Protocol, etc.</li>
                    </ul></td>
              </tr>
              <tr>
                <td><b>Collected Strategy</b></td>
                <td>Sign up and profile creation on the shodan platform to acquire an API key.
                Using the API key, created a python script to make search engine queries. Normalization of 
                query results to add data to database.</td>
              </tr>
              <tr>
                <td><b>Justification</b></td>
                <td>Using this data, security professionals can monitor devices vulnerable to network threats while gaining
                an external view of the IoT landscape</td>
              </tr>
            </tbody>
          </table>
		</div>

		<div class="container">            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan='5'><img id='abuse' src="images\abuse.jpg" width="400" height="400"></td>
                <td><b>About</b></td>
                <td>Abuse, developed by Bern University of Applied Sciences (BFH) in Switzerland, 
                identifies and tracks malware & botnets </td>
              </tr>
              <tr>
                <td><b>Advantage</b></td>
                <td>Various thread feed offerings<br>
                	<ul>
                      <li>Suricata rule set</li>
                      <li>C & C Servers</li>
                      <li>Botnet C2 IP Blacklist</li>
                      <li>Many more</li>
                    </ul>
                </td>
              </tr>
              <tr>
                <td><b>Data Collected</b></td>
                <td>
                	<ul>
                      <li>SSL fingerprint</li>
                      <li>Date last seen</li>
                      <li>Malware type</li>
                    </ul></td>
              </tr>
              <tr>
                <td><b>Collected Strategy</b></td>
                <td>Python Script making HTTP GET request to public URL hosting csv data that is updated every 
                5 minutes. Parse month, day and year from timestamp column & normalization of data to push to database.</td>
              </tr>
              <tr>
                <td><b>Justification</b></td>
                <td>Intelligence feed of SSL fingerprints can be used to create actionable items like indicators 
                of compromise (IOCs)</td>
              </tr>
            </tbody>
          </table>
		</div>
		 	
    </div>
	
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