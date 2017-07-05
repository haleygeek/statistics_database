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
$dbuser = "username"; 		//Edit this to make it work
$dbpass = "userpassword";	//Edit this to make it work
$dbname = "db_stats";		//Edit this to make it work
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//----------------------------------------------------------------------------------------
// Get variable assignments from form
//----------------------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$group_1 = $_POST["group_1"];
	$group_2 = $_POST["group_2"];
	$test_type = $_POST["test_type"];

	$me_exposure_err = $_POST["me_exposure_err"];
	$me_exposure_df = $_POST["me_exposure_df"];
	$me_exposure_f = $_POST["me_exposure_f"];
	$me_exposure_p = $_POST["me_exposure_p"];

	$me_region_err = $_POST["me_region_err"];
	$me_region_df = $_POST["me_region_df"];
	$me_region_f = $_POST["me_region_f"];
	$me_region_p = $_POST["me_region_p"];

	$me_interaction_err = $_POST["me_interaction_err"];
	$me_interaction_df = $_POST["me_interaction_df"];
	$me_interaction_f = $_POST["me_interaction_f"];
	$me_interaction_p = $_POST["me_interaction_p"];

	$hipp_mean_1 = $_POST["hipp_mean_1"];
	$hipp_se_1 = $_POST["hipp_se_1"];
	$hipp_n_1 = $_POST["hipp_n_1"];
	$hipp_mean_2 = $_POST["hipp_mean_2"];
	$hipp_se_2 = $_POST["hipp_se_2"];
	$hipp_n_2 = $_POST["hipp_n_2"];
	$hipp_p = $_POST["hipp_p"];

	$cort_mean_1 = $_POST["cort_mean_1"];
	$cort_se_1 = $_POST["cort_se_1"];
	$cort_n_1 = $_POST["cort_n_1"];
	$cort_mean_2 = $_POST["cort_mean_2"];
	$cort_se_2 = $_POST["cort_se_2"];
	$cort_n_2 = $_POST["cort_n_2"];
	$cort_p = $_POST["cort_p"];

	$cerb_mean_1 = $_POST["cerb_mean_1"];
	$cerb_se_1 = $_POST["cerb_se_1"];
	$cerb_n_1 = $_POST["cerb_n_1"];
	$cerb_mean_2 = $_POST["cerb_mean_2"];
	$cerb_se_2 = $_POST["cerb_se_2"];
	$cerb_n_2 = $_POST["cerb_n_2"];
	$cerb_p = $_POST["cerb_p"];

	$striat_mean_1 = $_POST["striat_mean_1"];
	$striat_se_1 = $_POST["striat_se_1"];
	$striat_n_1 = $_POST["striat_n_1"];
	$striat_mean_2 = $_POST["striat_mean_2"];
	$striat_se_2 = $_POST["striat_se_2"];
	$striat_n_2 = $_POST["striat_n_2"];
	$striat_p = $_POST["striat_p"];
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
//Update database (see db_stats.sql for example database)
//----------------------------------------------------------------------------------------
$query = "UPDATE ache SET test_type = '$test_type', me_exposure_f = '$me_exposure_f', me_exposure_err = '$me_exposure_err', me_exposure_df = '$me_exposure_df', me_exposure_p = '$me_exposure_p', me_region_f = '$me_region_f', me_region_err = '$me_region_err', me_region_df = '$me_region_df', me_region_p = '$me_region_p', me_interaction_f = '$me_interaction_f', me_interaction_err = '$me_interaction_err', me_interaction_df = '$me_interaction_df', me_interaction_p = '$me_interaction_p', hipp_mean_1 = '$hipp_mean_1', hipp_se_1 = '$hipp_se_1', hipp_n_1 = '$hipp_n_1', hipp_mean_2 = '$hipp_mean_2', hipp_se_2 = '$hipp_se_2', hipp_n_2 = '$hipp_n_2', hipp_p = '$hipp_p', cort_mean_1 = '$cort_mean_1', cort_se_1 = '$cort_se_1', cort_n_1 = '$cort_n_1', cort_mean_2 = '$cort_mean_2', cort_se_2 = '$cort_se_2', cort_n_2 = '$cort_n_2', cort_p = '$cort_p', cerb_mean_1 = '$cerb_mean_1', cerb_se_1 = '$cerb_se_1', cerb_n_1 = '$cerb_n_1', cerb_mean_2 = '$cerb_mean_2', cerb_se_2 = '$cerb_se_2', cerb_n_2 = '$cerb_n_2', cerb_p = '$cerb_p', striat_mean_1 = '$striat_mean_1', striat_se_1 = '$striat_se_1', striat_n_1 = '$striat_n_1', striat_mean_2 = '$striat_mean_2', striat_se_2 = '$striat_se_2', striat_n_2 = '$striat_n_2', striat_p = '$striat_p' WHERE group_1 = '$group_1' AND group_2 = '$group_2'";

$result = mysqli_query($connection, $query);

if (!$result){ die("Query Failed.");}
else { echo "<hr><h2>Database successfully updated</h2><hr>"; }

?>

<br><hr>
<center><a href = "index.php">Return to main page</a></center>
<hr><br>
</body>
</html>
