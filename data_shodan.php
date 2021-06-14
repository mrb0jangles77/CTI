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
	
	<!--	<link rel="stylesheet" type="text/css" href="scripts/jquery-dynatablejquery.dynatable.css"> -->
	<script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
	<!--	<script type="text/javascript" src="scripts/jquery-dynatable/jquery.dynatable.js" ></script> -->
	<script src="scripts/mrjsontable/scripts/mrjsontable.js"></script>
	<link href="scripts/mrjsontable/css/mrjsontable.css" rel="stylesheet" />
	
	
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
    
    	<div id="main_info">
        	<p><h1>Shodan Data Example</h1></p>
        	<p>The 50 rows of sample data below represents relevant & timely data providing an external view of the IoT landscape.
        	Over 4,000 rows of data have been collected thus far.</p>
    	</div>
    	
    	<div class="mrjsontable"></div>
		
    	
    </div>
</div>

<script type="text/javascript">
	$(function () {
		$(".mrjsontable").mrjsontable({
			tableClass: "my-table",
			pageSize: 50,
			columns: [
			new $.fn.mrjsontablecolumn({
                heading: "ASN",
                data: "asn",
                type: "string"
            }),
            {
                heading: "Organization",
                data: "org",
                type: "string",
                sortable: true
            },
            new $.fn.mrjsontablecolumn({
                heading: "Protocol",
                data: "protocol",
                type: "string",
                sortable: true,
            }),
            new $.fn.mrjsontablecolumn({
                heading: "Port",
                data: "port",
                type: "int",
                sortable: true,
            }),
            new $.fn.mrjsontablecolumn({
                heading: "City",
                data: "city",
                type: "string"
            }),
            new $.fn.mrjsontablecolumn({
                heading: "Country",
                data: "country",
                type: "string"
            }),
            new $.fn.mrjsontablecolumn({
                heading: "Longitude",
                data: "longitude",
                type: "string"
            }),
            new $.fn.mrjsontablecolumn({
                heading: "Latitude",
                data: "latitude",
                type: "string"
            }),
            new $.fn.mrjsontablecolumn({
                heading: "IP Address",
                data: "IP",
                type: "string"
            })
            ],
            data: [
            	{ asn: "AS62969", org: "ABC Allen Business Communications Ltd", protocol: "tcp", port: 8081, city: "100 Mile House", country: "Canada", longitude: "-121.28594", latitude: "51.64982", IP: "192.222.103.254" },
            	{ asn: "AS55990", org: "Huawei Public Cloud Service (Huawei Software Technologies Ltd.Co)", protocol: "tcp", port: 135, city: "Shanghai", country: "China", longitude: "121.45806", latitude: "31.22222", IP: "119.3.188.20" },
            	{ asn: "AS3462", org: "Chunghwa Telecom Co.,Ltd.nNo.21-3, Sec. 1, Xinyi Rd., Taipei 10048, Taiwan, R.O.C.nTaipei Taiwan", protocol: "udp", port: 161, city: "Taipei", country: "Taiwan", longitude: "121.53185", latitude: "25.04776", IP: "60.251.57.223" },
            	{ asn: "AS9644", org: "SK Telecom", protocol: "tcp", port: 8083, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "27.160.44.111" },
            	{ asn: "AS42689", org: "Cablecom: CRM Dorset House Data 1", protocol: "udp", port: 161, city: "London", country: "United Kingdom", longitude: "-0.12574", latitude: "51.50853", IP: "37.203.162.86" },
            	{ asn: "AS3462", org: "Chunghwa Telecom Co.,Ltd.nNo.21-3, Sec. 1, Xinyi Rd., Taipei 10048, Taiwan, R.O.C.nTaipei Taiwan", protocol: "udp", port: 161, city: "Taichung", country: "Taiwan", longitude: "120.6839", latitude: "24.1469", IP: "210.61.157.19" },
            	{ asn: "AS16276", org: "OVH SAS", protocol: "tcp", port: 8086, city: "Paris", country: "France", longitude: "2.3488", latitude: "48.85341", IP: "37.59.42.24" },
            	{ asn: "AS12464", org: "Politechnika Warszawska", protocol: "udp", port: 161, city: "Warsaw", country: "Poland", longitude: "21.01178", latitude: "52.22977", IP: "194.29.175.4" },
            	{ asn: "AS9644", org: "SK Telecom", protocol: "tcp", port: 8083, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "27.160.39.90" },
            	{ asn: "AS4766", org: "Korea Telecom", protocol: "udp", port: 161, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "61.78.69.69" },
            	{ asn: "AS7922", org: "Securitas Security Services-Inc-", protocol: "udp", port: 161, city: "Lewes", country: "United States", longitude: "-75.13935", latitude: "38.77456", IP: "75.148.28.105" },
            	{ asn: "AS9050", org: "Romtelecom Data Network", protocol: "udp", port: 161, city: "Târgu Jiu", country: "Romania", longitude: "23.28333", latitude: "45.05", IP: "89.120.251.104" },
            	{ asn: "AS4766", org: "Korea Telecom", protocol: "udp", port: 161, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "175.196.71.5" },
            	{ asn: "AS45594", org: "Internet services", protocol: "udp", port: 161, city: "Sydney", country: "Australia", longitude: "151.20732", latitude: "-33.86785", IP: "103.246.103.47" },
            	{ asn: "AS14061", org: "DigitalOcean, LLC", protocol: "tcp", port: 22, city: "Santa Clara", country: "United States", longitude: "-121.9623", latitude: "37.3924", IP: "165.232.131.61" },
            	{ asn: "AS4766", org: "Korea Telecom", protocol: "udp", port: 161, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "112.171.55.94" },
            	{ asn: "AS24167", org: "Ministry of Education Computer Centern12F, No 106, Sec.2,Hoping E. Rd.,nTaipei Taiwan", protocol: "udp", port: 161, city: "Taipei", country: "Taiwan", longitude: "121.53185", latitude: "25.04776", IP: "140.109.98.186" },
            	{ asn: "AS9644", org: "SK Telecom", protocol: "tcp", port: 8081, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "42.29.8.51" },
            	{ asn: "AS9644", org: "SK Telecom", protocol: "tcp", port: 8083, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "223.62.101.189" },
            	{ asn: "AS3462", org: "Chunghwa Telecom Co.,Ltd.nNo.21-3, Sec. 1, Xinyi Rd., Taipei 10048, Taiwan, R.O.C.nTaipei Taiwan", protocol: "tcp", port: 3001, city: "Taichung", country: "Taiwan", longitude: "120.6839", latitude: "24.1469", IP: "211.72.214.124" },
            	{ asn: "AS1659", org: "Ministry of Education Computer Centern12F, No 106, Sec.2,Hoping E. Rd.,nTaipei Taiwan", protocol: "udp", port: 161, city: "Douliu", country: "Taiwan", longitude: "120.54333", latitude: "23.70944", IP: "163.27.192.175" },
            	{ asn: "AS4766", org: "Korea Telecom", protocol: "tcp", port: 1883, city: "Seongnam-si", country: "Korea, Republic of", longitude: "127.13778", latitude: "37.43861", IP: "14.47.250.61" },
            	{ asn: "AS9644", org: "SK Telecom", protocol: "tcp", port: 8081, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "27.174.54.171" },
            	{ asn: "AS9644", org: "SK Telecom", protocol: "tcp", port: 8083, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "27.160.41.192" },
            	{ asn: "AS37963", org: "Aliyun Computing Co., LTD", protocol: "tcp", port: 1883, city: "Hangzhou", country: "China", longitude: "120.16142", latitude: "30.29365", IP: "118.31.32.245" },
            	{ asn: "AS42689", org: "Cablecom: CRM Dorset House Data 1", protocol: "udp", port: 161, city: "Nottingham", country: "United Kingdom", longitude: "-1.15047", latitude: "52.9536", IP: "37.203.162.164" },
            	{ asn: "AS204390", org: "Telia Lietuva, AB", protocol: "tcp", port: 51, city: "Kaunas", country: "Lithuania", longitude: "23.90961", latitude: "54.90272", IP: "85.206.122.3" },
            	{ asn: "AS9273", org: "Ssangyong", protocol: "udp", port: 161, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "203.224.135.181" },
            	{ asn: "AS13796", org: "University of Connecticut", protocol: "udp", port: 161, city: "Mansfield", country: "United States", longitude: "-71.21894", latitude: "42.03343", IP: "137.99.114.225" },
            	{ asn: "AS14061", org: "DigitalOcean, LLC", protocol: "tcp", port: 8081, city: "Santa Clara", country: "United States", longitude: "-121.9844", latitude: "37.3483", IP: "167.99.164.71" },
            	{ asn: "AS7922", org: "Comcast Cable Communications Holdings, Inc", protocol: "udp", port: 161, city: "Richmond West", country: "United States", longitude: "-80.42971", latitude: "25.6105", IP: "66.176.166.234" },
            	{ asn: "AS15169", org: "Google LLC", protocol: "tcp", port: 22, city: "North Charleston", country: "United States", longitude: "-79.97481", latitude: "32.85462", IP: "35.196.151.26" },
            	{ asn: "AS8075", org: "Microsoft Corporation", protocol: "tcp", port: 27017, city: "Singapore", country: "Singapore", longitude: "103.85007", latitude: "1.28967", IP: "52.163.48.139" },
            	{ asn: "AS3462", org: "Chunghwa Telecom Co.,Ltd.nNo.21-3, Sec. 1, Xinyi Rd., Taipei 10048, Taiwan, R.O.C.nTaipei Taiwan", protocol: "tcp", port: 3001, city: "Taipei", country: "Taiwan", longitude: "121.53185", latitude: "25.04776", IP: "202.39.79.175" },
            	{ asn: "AS9644", org: "SK Telecom", protocol: "tcp", port: 8083, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "27.174.41.67" },
            	{ asn: "AS4766", org: "Korea Telecom", protocol: "udp", port: 161, city: "Goyang-si", country: "Korea, Republic of", longitude: "126.835", latitude: "37.65639", IP: "218.156.165.4" },
            	{ asn: "AS2501", org: "Japan Network Information Center", protocol: "udp", port: 161, city: "Tokyo", country: "Japan", longitude: "139.69171", latitude: "35.6895", IP: "133.11.144.127" },
            	{ asn: "AS10088", org: "Korean Education Network", protocol: "udp", port: 161, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "223.194.5.19" },
            	{ asn: "AS45090", org: "Tencent Cloud Computing (Beijing) Co., Ltd", protocol: "tcp", port: 8081, city: "Guangzhou", country: "China", longitude: "113.25", latitude: "23.11667", IP: "81.71.128.37" },
            	{ asn: "AS237", org: "University of Michigan Biological Research Station", protocol: "udp", port: 161, city: "Kalkaska", country: "United States", longitude: "-85.17589", latitude: "44.73417", IP: "198.108.201.73" },
            	{ asn: "AS13113", org: "ISI Line srl", protocol: "tcp", port: 22, city: "Cuneo", country: "Italy", longitude: "7.54828", latitude: "44.39071", IP: "213.144.90.171" },
            	{ asn: "AS4766", org: "Korea Telecom", protocol: "udp", port: 161, city: "Incheon", country: "Korea, Republic of", longitude: "126.70515", latitude: "37.45646", IP: "183.102.181.100" },
            	{ asn: "AS1659", org: "Ministry of Education Computer Centern12F, No 106, Sec.2,Hoping E. Rd.,nTaipei Taiwan", protocol: "udp", port: 161, city: "Kaohsiung", country: "Taiwan", longitude: "120.31333", latitude: "22.61626", IP: "140.127.219.120" },
            	{ asn: "AS23969", org: "TOT Public Company Limited Bangkok", protocol: "udp", port: 161, city: "Phra Nakhon Si Ayutthaya", country: "Thailand", longitude: "100.57739", latitude: "14.35167", IP: "125.26.149.236" },
            	{ asn: "AS9644", org: "SK Telecom", protocol: "tcp", port: 8083, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "27.160.59.43" },
            	{ asn: "AS4766", org: "Korea Telecom", protocol: "udp", port: 161, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "112.172.237.195" },
            	{ asn: "AS4766", org: "Korea Telecom", protocol: "udp", port: 161, city: "Seoul", country: "Korea, Republic of", longitude: "126.9784", latitude: "37.566", IP: "121.190.226.94" },
            	{ asn: "AS3786", org: "DACOM Corp.", protocol: "udp", port: 161, city: "Ulsan", country: "Korea, Republic of", longitude: "129.31667", latitude: "35.53722", IP: "211.181.240.187" },
            	{ asn: "AS6167", org: "Service Provider Corporation", protocol: "tcp", port: 1883, city: "Holland", country: "United States", longitude: "-86.10893", latitude: "42.78752", IP: "166.165.92.79" },
            	{ asn: "AS37963", org: "Aliyun Computing Co., LTD", protocol: "tcp", port: 1883, city: "Shenzhen", country: "China", longitude: "114.0683", latitude: "22.54554", IP: "47.112.203.11" }
           ]
        });
});
	
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