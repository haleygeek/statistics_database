<!DOCTYPE html>
<html>
<head>
	<title>Add Stats to Slopes Database</title>
</head>
<body>

<?php

//----------------------------------------------------------------------------------------
//Connection info
//----------------------------------------------------------------------------------------
$dbhost = "localhost";
$dbuser = "username";		//Edit to make it work
$dbpass = "password";		//Edit to make it work
$dbname = "db_stats";		//Edit to make it work
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

	$me_intensity_err = $_POST["me_intensity_err"];
	$me_intensity_df = $_POST["me_intensity_df"];
	$me_intensity_f = $_POST["me_intensity_f"];
	$me_intensity_p = $_POST["me_intensity_p"];

	$me_interaction_err = $_POST["me_interaction_err"];
	$me_interaction_df = $_POST["me_interaction_df"];
	$me_interaction_f = $_POST["me_interaction_f"];
	$me_interaction_p = $_POST["me_interaction_p"];

  $mean_0_1 = $_POST["mean_0_1"];
  $mean_50_1 = $_POST["mean_50_1"];
  $mean_100_1 = $_POST["mean_100_1"];
  $mean_150_1 = $_POST["mean_150_1"];
  $mean_200_1 = $_POST["mean_200_1"];
  $mean_250_1 = $_POST["mean_250_1"];
  $mean_300_1 = $_POST["mean_300_1"];
  $mean_350_1 = $_POST["mean_350_1"];
  $mean_0_2 = $_POST["mean_0_2"];
  $mean_50_2 = $_POST["mean_50_2"];
  $mean_100_2 = $_POST["mean_100_2"];
  $mean_150_2 = $_POST["mean_150_2"];
  $mean_200_2 = $_POST["mean_200_2"];
  $mean_250_2 = $_POST["mean_250_2"];
  $mean_300_2 = $_POST["mean_300_2"];
  $mean_350_2 = $_POST["mean_350_2"];

  $se_0_1 = $_POST["se_0_1"];
  $se_50_1 = $_POST["se_50_1"];
  $se_100_1 = $_POST["se_100_1"];
  $se_150_1 = $_POST["se_150_1"];
  $se_200_1 = $_POST["se_200_1"];
  $se_250_1 = $_POST["se_250_1"];
  $se_300_1 = $_POST["se_300_1"];
  $se_350_1 = $_POST["se_350_1"];
  $se_0_2 = $_POST["se_0_2"];
  $se_50_2 = $_POST["se_50_2"];
  $se_100_2 = $_POST["se_100_2"];
  $se_150_2 = $_POST["se_150_2"];
  $se_200_2 = $_POST["se_200_2"];
  $se_250_2 = $_POST["se_250_2"];
  $se_300_2 = $_POST["se_300_2"];
  $se_350_2 = $_POST["se_350_2"];

  $n_0_1 = $_POST["n_0_1"];
  $n_50_1 = $_POST["n_50_1"];
  $n_100_1 = $_POST["n_100_1"];
  $n_150_1 = $_POST["n_150_1"];
  $n_200_1 = $_POST["n_200_1"];
  $n_250_1 = $_POST["n_250_1"];
  $n_300_1 = $_POST["n_300_1"];
  $n_350_1 = $_POST["n_350_1"];
  $n_0_2 = $_POST["n_0_2"];
  $n_50_2 = $_POST["n_50_2"];
  $n_100_2 = $_POST["n_100_2"];
  $n_150_2 = $_POST["n_150_2"];
  $n_200_2 = $_POST["n_200_2"];
  $n_250_2 = $_POST["n_250_2"];
  $n_300_2 = $_POST["n_300_2"];
  $n_350_2 = $_POST["n_350_2"];

  $p_0 = $_POST["p_0"];
  $p_50 = $_POST["p_50"];
  $p_100 = $_POST["p_100"];
  $p_150 = $_POST["p_150"];
  $p_200 = $_POST["p_200"];
  $p_250 = $_POST["p_250"];
  $p_300 = $_POST["p_300"];
  $p_350 = $_POST["p_350"];

}

//----------------------------------------------------------------------------------------
//Line Up Groups
//----------------------------------------------------------------------------------------
if ($group_1 == $group_2) {
	die("<hr><h2><center>Error:</h2><b><center> Group 1 cannot be the same as Group 2</center></b><hr><br>".
	"<li> <a href = \"add_slope.php\">Return to Slope Data Entry</a>".
	"<li> <a href = \"index.php\">Return to main page</a>");}

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
$query = "UPDATE slope SET test_type = '$test_type',".
          " me_exposure_f = '$me_exposure_f',".
          " me_exposure_err = '$me_exposure_err',".
          " me_exposure_df = '$me_exposure_df',".
          " me_exposure_p = '$me_exposure_p',".
          " me_intensity_f = '$me_intensity_f',".
          " me_intensity_err = '$me_intensity_err',".
          " me_intensity_df = '$me_intensity_df',".
          " me_intensity_p = '$me_intensity_p',".
          " me_interaction_f = '$me_interaction_f',".
          " me_interaction_err = '$me_interaction_err',".
          " me_interaction_df = '$me_interaction_df',".
          " me_interaction_p = '$me_interaction_p', ".
          " mean_0_1 = '$mean_0_1', ".
					" se_0_1 = '$se_0_1', ".
					" n_0_1 = '$n_0_1', ".
					" mean_0_2 = '$mean_0_2', ".
					" se_0_2 = '$se_0_2', ".
					" n_0_2 = '$n_0_2', ".
					" p_0 = '$p_0', ".
					" mean_50_1 = '$mean_50_1', ".
					" se_50_1 = '$se_50_1', ".
					" n_50_1 = '$n_50_1', ".
					" mean_50_2 = '$mean_50_2', ".
					" se_50_2 = '$se_50_2', ".
					" n_50_2 = '$n_50_2', ".
					" p_50 = '$p_50', ".
					" mean_100_1 = '$mean_100_1', ".
					" se_100_1 = '$se_100_1', ".
					" n_100_1 = '$n_100_1', ".
					" mean_100_2 = '$mean_100_2', ".
					" se_100_2 = '$se_100_2', ".
					" n_100_2 = '$n_100_2', ".
					" p_100 = '$p_100', ".
					" mean_150_1 = '$mean_150_1', ".
					" se_150_1 = '$se_150_1', ".
					" n_150_1 = '$n_150_1', ".
					" mean_150_2 = '$mean_150_2', ".
					" se_150_2 = '$se_150_2', ".
					" n_150_2 = '$n_150_2', ".
					" p_150 = '$p_150', ".
					" mean_200_1 = '$mean_200_1', ".
					" se_200_1 = '$se_200_1', ".
					" n_200_1 = '$n_200_1', ".
					" mean_200_2 = '$mean_200_2', ".
					" se_200_2 = '$se_200_2', ".
					" n_200_2 = '$n_200_2', ".
					" p_200 = '$p_200', ".
					" mean_250_1 = '$mean_250_1', ".
					" se_250_1 = '$se_250_1', ".
					" n_250_1 = '$n_250_1', ".
					" mean_250_2 = '$mean_250_2', ".
					" se_250_2 = '$se_250_2', ".
					" n_250_2 = '$n_250_2', ".
					" p_250 = '$p_250', ".
					" mean_300_1 = '$mean_300_1', ".
					" se_300_1 = '$se_300_1', ".
					" n_300_1 = '$n_300_1', ".
					" mean_300_2 = '$mean_300_2', ".
					" se_300_2 = '$se_300_2', ".
					" n_300_2 = '$n_300_2', ".
					" p_300 = '$p_300', ".
					" mean_350_1 = '$mean_350_1', ".
					" se_350_1 = '$se_350_1', ".
					" n_350_1 = '$n_350_1', ".
					" mean_350_2 = '$mean_350_2', ".
					" se_350_2 = '$se_350_2', ".
					" n_350_2 = '$n_350_2', ".
					" p_350 = '$p_350' ".
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
