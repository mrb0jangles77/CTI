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
        </div> <!-- end of the button group-->                
    </nav>
    
    <div id="main_content">
    
    	<div id="main_info">
        	<p><b>The purpose of this website is track the culmination of an Internet of Things (IoT) Cyber 
        	Threat Intelligence (CTI) platform.</b></p>
        	<p>Many  public  cybersecurity  companies  such  as  FireEye  and  Cyveillance  provide  cyber  threat  intelligence  (CTI)  systems  and  reports  designed  to  help  organizations  mitigate  cyberattacks.  For  this  project,  students  will  simulate  the needs of a particular industry (e.g., financial, critical infrastructure, education) and develop a web-based cyber threat  intelligence  platform  aggregating,  analyzing,  and  presenting  cyber  threat  intelligence  relevant  for  their  selected  industry.  Students  need  to  develop  threat  modeling  scenarios,  discover  current  threat  trends  afflicting  their  industry,  identify  relevant  intelligence  data  sources,  analyze  and  visualize  their  data  utilizing  techniques  discussed in class, and present the value of their system. Students are required to develop and manage all aspects of the project, including web page development, data collection, analytics, and final system presentation</p>
    	</div>
    	
    	<div id="milestones">
            <div class="card text-center">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Milestone 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Milestone 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Milestone 3</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Milestone 4</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Milestone 1</h5>
                <p class="card-text">
                      Discover key threat trends for an industry<br>
                      Identify critical assets for organizations within industry<br>
                      Develop threat modeling scenarios<br>
                      Post finding on an initial prototype website<br>
                </p>
                <p class="card-text"><small class="text-muted">Updated 5/21/21</small></p>
              </div>
            </div>
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