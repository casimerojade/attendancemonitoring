<?php 
require_once("include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."login.php");
     } 

$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="Home";	
		$content='home.php';		
		break;
	case '2' :
        $title="Mission Vision";	
		$content='about.php';		
		break;
	case '3' :
        $title="School History";	
		$content='history.php';		
		break;
	case '4' :
        $title="Developers";	
		$content='developers.php';		
		break;				
	default :
	    $title="Home";	
		$content ='home.php';		
}
require_once("theme/templates.php");

?>
<script>
    // Listen for messages sent from qr_scanning.html page
    window.addEventListener("message", function(event) {
      const attendanceMenu = document.getElementById("attendance-menu");
      // Update the 'attendance' menu with the scanned QR code data
      attendanceMenu.textContent = "Scanned QR code data: " + event.data;
    });