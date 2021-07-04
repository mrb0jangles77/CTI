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
    
    	<div id="main_info">
        	<p><h1>Abuse Data Example</h1></p>
        	<p>The 50 rows of sample data below displays the timely & relevant identification of malware which
        	attempts to add an IoT sensor to a botnet. The original data source is updated every 5 minutes. Over 2,000 
        	rows of data have been collected thus far.</p>
        	<br>
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
            heading: "JA3 Hash",
            data: "ja3",
            type: "string"
        }),
        {
            heading: "Month",
            data: "month",
            type: "int",
            sortable: true
        },
        new $.fn.mrjsontablecolumn({
            heading: "Day",
            data: "day",
            type: "int",
            sortable: true,
        }),
        new $.fn.mrjsontablecolumn({
            heading: "Year",
            data: "year",
            type: "int",
            sortable: true,
        }),
        new $.fn.mrjsontablecolumn({
            heading: "Time",
            data: "time",
            type: "string"
        }),
        new $.fn.mrjsontablecolumn({
            heading: "Malware",
            data: "malware",
            type: "string"
        })
        ],
        data: [
        	{ ja3: "b386946a5a44d1ddcc843bc75336dfce", month: 07, day: 27, year: 2019, time: "20:42:54", malware: "Dridex" },
        	{ ja3: "8991a387e4cc841740f25d6f5139f92d", month: 07, day: 28, year: 2019, time: "00:34:38", malware: "Adware" },
        	{ ja3: "cb98a24ee4b9134448ffb5714fd870ac", month: 05, day: 22, year: 2019, time: "03:22:38", malware: "Dridex" },
        	{ ja3: "1aa7bf8b97e540ca5edd75f7b8384bfa", month: 07, day: 28, year: 2019, time: "01:38:22", malware: "TrickBot" },
        	{ ja3: "3d89c0dfb1fa44911b8fa7523ef8dedb", month: 02, day: 01, year: 2021, time: "18:23:25", malware: "Adware" },
        	{ ja3: "bc6c386f480ee97b9d9e52d472b772d8", month: 03, day: 13, year: 2021, time: "07:33:39", malware: "Adware" },
        	{ ja3: "8f52d1ce303fb4a6515836aec3cc16b1", month: 07, day: 27, year: 2019, time: "20:00:57", malware: "TrickBot" },
        	{ ja3: "d6f04b5a910115f4b50ecec09d40a1df", month: 10, day: 14, year: 2018, time: "08:12:51", malware: "Dridex" },
        	{ ja3: "35c0a31c481927f022a3b530255ac080", month: 04, day: 10, year: 2021, time: "12:54:04", malware: "Tofsee" },
        	{ ja3: "e330bca99c8a5256ae126a55c4c725c5", month: 01, day: 13, year: 2021, time: "00:29:37", malware: "Adware" },
        	{ ja3: "d551fafc4f40f1dec2bb45980bfa9492", month: 11, day: 16, year: 2020, time: "13:06:20", malware: "Adware" },
        	{ ja3: "b8f81673c0e1d29908346f3bab892b9b", month: 03, day: 02, year: 2021, time: "04:07:36", malware: "Adware" },
        	{ ja3: "83e04bc58d402f9633983cbf22724b02", month: 03, day: 02, year: 2021, time: "04:07:43", malware: "Adware" },
        	{ ja3: "70722097d1fe1d78d8c2164640ab6df4", month: 05, day: 04, year: 2021, time: "09:52:20", malware: "Tofsee" },
        	{ ja3: "9c2589e1c0e9f533a022c6205f9719e1", month: 06, day: 09, year: 2021, time: "22:28:56", malware: "Adware" },
        	{ ja3: "849b04bdbd1d2b983f6e8a457e0632a8", month: 06, day: 10, year: 2021, time: "01:22:08", malware: "Adware" },
        	{ ja3: "16efcf0e00504ddfedde13bfea997952", month: 12, day: 23, year: 2020, time: "15:10:32", malware: "Adware" },
        	{ ja3: "4d7a28d6f2263ed61de88ca66eb011e3", month: 12, day: 08, year: 2020, time: "18:10:55", malware: "Tofsee" },
        	{ ja3: "550dce18de1bb143e69d6dd9413b8355", month: 12, day: 21, year: 2018, time: "07:04:50", malware: "Adware" },
        	{ ja3: "c50f6a8b9173676b47ba6085bd0c6cee", month: 05, day: 21, year: 2019, time: "09:42:17", malware: "TrickBot" },
        	{ ja3: "20dd18bdd3209ea718989030a6f93364", month: 04, day: 28, year: 2019, time: "09:23:31", malware: "Adware" },
        	{ ja3: "8498fe4268764dbf926a38283e9d3d8f", month: 12, day: 31, year: 2020, time: "02:06:27", malware: "Adware" },
        	{ ja3: "590a232d04d56409fab72e752a8a2634", month: 10, day: 11, year: 2020, time: "20:48:33", malware: "Tofsee" },
        	{ ja3: "51a7ad14509fd614c7bb3a50c4982b8c", month: 07, day: 14, year: 2019, time: "11:58:32", malware: "JBifrost" },
        	{ ja3: "96eba628dcb2b47607192ba74a3b55ba", month: 06, day: 10, year: 2021, time: "18:38:53", malware: "Tofsee" },
        	{ ja3: "df5c30e670dba99f9270ed36060cf054", month: 04, day: 11, year: 2018, time: "15:57:59", malware: "Tofsee" },
        	{ ja3: "098f55e27d8c4b0a590102cbdb3a5f3a", month: 04, day: 08, year: 2019, time: "01:09:54", malware: "Adware" },
        	{ ja3: "46efd49abcca8ea9baa932da68fdb529", month: 04, day: 11, year: 2021, time: "05:54:57", malware: "Adware" },
        	{ ja3: "29085f03f8e8a03f0b399c5c7cf0b0b8", month: 04, day: 11, year: 2021, time: "06:42:45", malware: "Adware" },
        	{ ja3: "d7150af4514b868defb854db0f62a441", month: 07, day: 24, year: 2018, time: "01:04:58", malware: "Tofsee" },
        	{ ja3: "03e186a7f83285e93341de478334006e", month: 03, day: 20, year: 2021, time: "07:45:40", malware: "Tofsee" },
        	{ ja3: "3cda52da4ade09f1f781ad2e82dcfa20", month: 05, day: 21, year: 2019, time: "17:34:18", malware: "Quakbot" },
        	{ ja3: "b13d01846ad7a14a70bf030a16775c78", month: 04, day: 10, year: 2021, time: "00:03:33", malware: "Adware" },
        	{ ja3: "1543a7c46633acf71e8401baccbd0568", month: 04, day: 08, year: 2021, time: "19:50:46", malware: "Tofsee" },
        	{ ja3: "1d095e68489d3c535297cd8dffb06cb9", month: 10, day: 28, year: 2020, time: "11:06:23", malware: "Tofsee" },
        	{ ja3: "93d056782d649deb51cda44ecb714bb0", month: 04, day: 15, year: 2019, time: "23:47:27", malware: "Adware" },
        	{ ja3: "698e36219f3979420fa2581b21dac7ec", month: 12, day: 31, year: 2020, time: "02:06:31", malware: "Adware" },
        	{ ja3: "1712287800ac91b34cadd5884ce85568", month: 06, day: 07, year: 2021, time: "19:22:02", malware: "TorrentLocker" },
        	{ ja3: "5e573c9c9f8ba720ef9b18e9fce2e2f7", month: 03, day: 13, year: 2021, time: "07:33:38", malware: "Adware" },
        	{ ja3: "f6fd83a21f9f3c5f9ff7b5c63bbc179d", month: 11, day: 06, year: 2018, time: "06:42:12", malware: "Adware" },
        	{ ja3: "92579701f145605e9edc0b01a901c6d5", month: 06, day: 06, year: 2021, time: "20:27:10", malware: "Adware" },
        	{ ja3: "a61299f9b501adcf680b9275d79d4ac6", month: 04, day: 21, year: 2020, time: "17:08:24", malware: "Tofsee" },
        	{ ja3: "b2b61db7b9490a60d270ccb20b462826", month: 06, day: 06, year: 2021, time: "20:27:10", malware: "Adware" },
        	{ ja3: "7dcce5b76c8b17472d024758970a406b", month: 03, day: 16, year: 2021, time: "12:53:35", malware: "Tofsee" },
        	{ ja3: "534ce2dbc413c68e908363b5df0ae5e0", month: 07, day: 27, year: 2019, time: "15:22:33", malware: "TrickBot" },
        	{ ja3: "fb00055a1196aeea8d1bc609885ba953", month: 04, day: 09, year: 2019, time: "06:58:58", malware: "TrickBot" },
        	{ ja3: "a50a861119aceb0ccc74902e8fddb618", month: 07, day: 05, year: 2018, time: "02:33:08", malware: "Tofsee" },
        	{ ja3: "e7643725fcff971e3051fe0e47fc2c71", month: 03, day: 25, year: 2020, time: "16:19:48", malware: "Tofsee" },
        	{ ja3: "7c410ce832e848a3321432c9a82e972b", month: 06, day: 04, year: 2021, time: "03:37:27", malware: "Tofsee" },
        	{ ja3: "da949afd9bd6df820730f8f171584a71", month: 03, day: 08, year: 2021, time: "22:10:10", malware: "Tofsee" }
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