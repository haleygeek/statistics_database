<!DOCTYPE html>
<html>
<head>
	<title>Add Stats to AChE Database</title>
</head>
<body>

<?php

//----------------------------------------------------------------------------------------
//Connection info
//----------------------------------------------------------------------------------------
$dbhost = "localhost";
$dbuser = "replace";
$dbpass = "replace";
$dbname = "replace";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


//----------------------------------------------------------------------------------------
// Get variable assignments from form
//----------------------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$group_1 = $_POST["group_1"];
	$group_2 = $_POST["group_2"];
	$test_type = $_POST["test_type"];
	$experiment = 'Acetylcholinesterase Assays';
	
	$total_mean_1 = test_input($_POST["total_mean_1"]);
	$total_se_1 = test_input($_POST["total_se_1"]);
	$n_1 = test_input($_POST["n_1"]);
	$total_mean_2 = test_input($_POST["total_mean_2"]);
	$total_se_2 = test_input($_POST["total_se_2"]);
	$n_2 = test_input($_POST["n_2"]);

	$me_exposure_err = test_input($_POST["me_exposure_err"]);
	$me_exposure_df = test_input($_POST["me_exposure_df"]);
	$me_exposure_f = test_input($_POST["me_exposure_f"]);
	$me_exposure_p =test_input( $_POST["me_exposure_p"]);

	$me_region_err = test_input($_POST["me_region_err"]);
	$me_region_df = test_input($_POST["me_region_df"]);
	$me_region_f = test_input($_POST["me_region_f"]);
	$me_region_p = test_input($_POST["me_region_p"]);

	$me_interaction_err = test_input($_POST["me_interaction_err"]);
	$me_interaction_df = test_input($_POST["me_interaction_df"]);
	$me_interaction_f = test_input($_POST["me_interaction_f"]);
	$me_interaction_p = test_input($_POST["me_interaction_p"]);

	$hipp_mean_1 = test_input($_POST["hipp_mean_1"]);
	$hipp_se_1 = test_input($_POST["hipp_se_1"]);
	$hipp_mean_2 =test_input( $_POST["hipp_mean_2"]);
	$hipp_se_2 = test_input($_POST["hipp_se_2"]);
	$hipp_p = test_input($_POST["hipp_p"]);

	$cort_mean_1 = test_input($_POST["cort_mean_1"]);
	$cort_se_1 = test_input($_POST["cort_se_1"]);
	$cort_mean_2 = test_input($_POST["cort_mean_2"]);
	$cort_se_2 = test_input($_POST["cort_se_2"]);
	$cort_p = test_input($_POST["cort_p"]);

	$cerb_mean_1 = test_input($_POST["cerb_mean_1"]);
	$cerb_se_1 = test_input($_POST["cerb_se_1"]);
	$cerb_mean_2 = test_input($_POST["cerb_mean_2"]);
	$cerb_se_2 = test_input($_POST["cerb_se_2"]);
	$cerb_p = test_input($_POST["cerb_p"]);

	$striat_mean_1 = test_input($_POST["striat_mean_1"]);
	$striat_se_1 = test_input($_POST["striat_se_1"]);
	$striat_mean_2 = test_input($_POST["striat_mean_2"]);
	$striat_se_2 = test_input($_POST["striat_se_2"]);
	$striat_p = test_input($_POST["striat_p"]);
}

//----------------------------------------------------------------------------------------
//Test Input
//----------------------------------------------------------------------------------------
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = strtolower($data);
	Return $data;
}

//----------------------------------------------------------------------------------------
//Line Up Groups
//----------------------------------------------------------------------------------------
if ($group_1 == $group_2) {
	die("<hr><h2><center>Error:</h2><b><center> Group 1 cannot be the same as Group 2</center></b><hr><br>".
	"<li> <a href = \"add_ache.php\">Return to AchE Data Entry</a>".
	"<li> <a href = \"index.php\">Return to main page</a>".
	"<li> <a href = \"print_results.php\">Retrieve stats </a>");}

switch($group_1){
	case 'oil_igf':
		if ($group_2 == 'oil_saline'){
			$group_1 = 'oil_saline';
			$group_2 = 'oil_igf';
		}
		break;
	case 'cpf_saline':
		if ($group_2 == 'oil_saline'){
			$group_1 = 'oil_saline';
			$group_2 = 'cpf_saline';
		}
		else if ($group_2 == 'oil_igf'){
			$group_1 = 'oil_igf';
			$group_2 = 'cpf_oil';
		}
		break;
	case 'cpf_igf':
		if ($group_2 == 'oil_saline'){
			$group_1 = 'oil_saline';
			$group_2 = 'cpf_igf';
		}
		else if ($group_2 == 'cpf_saline'){
			$group_1 = 'cpf_saline';
			$group_2 = 'cpf_igf';
		}
		else if ($group_2 == 'oil_saline'){
			$group_1 = 'oil_saline';
			$group_2 = 'cpf_igf';
		}
		break;
}

//----------------------------------------------------------------------------------------
//Update database
//----------------------------------------------------------------------------------------
$query = "UPDATE ache SET test_type = '$test_type',".
	
	" total_mean_1 = '$total_mean_1',".
	" total_se_1 = '$total_se_1',".
	" n_1 = '$n_1',".
	" total_mean_2 = '$total_mean_2',".
	" total_se_2 = '$total_se_2',".
	" n_2 = '$n_2',".
	
	" me_exposure_f = '$me_exposure_f',". 
	" me_exposure_err = '$me_exposure_err',". 
	" me_exposure_df = '$me_exposure_df',". 
	" me_exposure_p = '$me_exposure_p',".
	" me_region_f = '$me_region_f',".
	" me_region_err = '$me_region_err',".
	" me_region_df = '$me_region_df',".
	" me_region_p = '$me_region_p',".
	" me_interaction_f = '$me_interaction_f',". 
	" me_interaction_err = '$me_interaction_err',".
	" me_interaction_df = '$me_interaction_df',".
	" me_interaction_p = '$me_interaction_p',".
	
	" hipp_mean_1 = '$hipp_mean_1',".
	" hipp_se_1 = '$hipp_se_1',".
	" hipp_mean_2 = '$hipp_mean_2',".
	" hipp_se_2 = '$hipp_se_2',".
	" hipp_p = '$hipp_p',".
	
	" cort_mean_1 = '$cort_mean_1',".
	" cort_se_1 = '$cort_se_1',".
	" cort_mean_2 = '$cort_mean_2',".
	" cort_se_2 = '$cort_se_2',".
	" cort_p = '$cort_p',".
	
	" cerb_mean_1 = '$cerb_mean_1',".
	" cerb_se_1 = '$cerb_se_1',".
	" cerb_mean_2 = '$cerb_mean_2',".
	" cerb_se_2 = '$cerb_se_2',".
	" cerb_p = '$cerb_p',".
	
	" striat_mean_1 = '$striat_mean_1',".
	" striat_se_1 = '$striat_se_1',".
	" striat_mean_2 = '$striat_mean_2',".
	" striat_se_2 = '$striat_se_2',".
	" striat_p = '$striat_p' ".
	
	"WHERE group_1 = '$group_1' AND group_2 = '$group_2'";

$result = mysqli_query($connection, $query);

if (!$result){ die("Query Failed.");}
else { echo "<hr><h2>Database successfully updated</h2><hr>"; }

?>

<br><hr>
<center><a href = "index.php">Return to main page</a></center>
<hr><br>
</body>
</html>
