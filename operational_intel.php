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
    	<p><h1>Data Summary</h1></p>
    	
    	<div class="container">            
          <table class="table table-bordered">
            <tbody>
              <tr>
              	<td rowspan='5'><img id='abuse' src="images\abuse.jpg" width="400" height="400"></td>
                <td><b>Intelligence Dissemination</b></td>
                <td><ul>
                      <li>Disseminate to IoT industry through annual security reports</li>
                      <li>Disseminate within company through quarterly workshops  & trainings</li>
                      <li>STIX reports of Indicators to security personnel</li>
                    </ul></td>
              </tr>
              <tr>
                <td><b>Course of Actions</b></td>
                <td><ul>
                      <li>The intelligence generated from the malware analysis can be responded to right away.</li>
                      <li>Real time tracking of botnet malware -> updating antivirus definitions & firewall</li>
                    </ul>
                </td>
              </tr>
              <tr>
                <td><b>Intelligence Informing Next Iteration</b></td>
                <td><ul>
                      <li>Prioritize critical assets such as IoT sensors from C2 botnets</li>
                      <li>Update IoT sensor diamond model to include the use of C2 malware in 
                      ramification of breach component</li>
                    </ul></td>
              </tr>
            </tbody>
          </table>
		</div>

		<div class="container">            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan='5'><img id='shodan' src="images\shodan.jpg" width="400" height="400"></td>
                <td><b>Intelligence Dissemination</b></td>
                <td><ul>
                      <li>Disseminate to IoT industry through annual security reports</li>
                      <li>Disseminate to network security engineers to establish policies around IoT devices</li>
                    </ul></td>
              </tr>
              <tr>
                <td><b>Course of Actions</b></td>
                <td><ul>
                      <li>Intelligence will be used to develop policies in which IoT devices are hardened</li>
                      <li>Policies directing proper protocols</li>
                      <li>Policies directing proper ports</li>
                    </ul>
                </td>
              </tr>
              <tr>
                <td><b>Intelligence Informing Next Iteration</b></td>
                <td><ul>
                      <li>Update IoT vendor diamond model to include the 
                      improper hardening of devices as part of the threat component </li>
                    </ul></td>
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