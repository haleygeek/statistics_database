<!DOCTYPE html>
<html>
<head>
	<title>Add Stats to Fiber Volley Database</title>
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
	
	$total_mean_1 = test_input($_POST["total_mean_1"]);
	$total_se_1 = test_input($_POST["total_se_1"]);
	$n_1 = test_input($_POST["n_1"]);
	$total_mean_2 = test_input($_POST["total_mean_2"]);
	echo $total_mean_2;
	$total_se_2 = test_input($_POST["total_se_2"]);
	$n_2 = test_input($_POST["n_2"]);
	
	$me_exposure_err = test_input($_POST["me_exposure_err"]);
	$me_exposure_df = test_input($_POST["me_exposure_df"]);
	$me_exposure_f = test_input($_POST["me_exposure_f"]);
	$me_exposure_p = test_input($_POST["me_exposure_p"]);

	$me_intensity_err = test_input($_POST["me_intensity_err"]);
	$me_intensity_df = test_input($_POST["me_intensity_df"]);
	$me_intensity_f = test_input($_POST["me_intensity_f"]);
	$me_intensity_p = test_input($_POST["me_intensity_p"]);

	$me_interaction_err = test_input($_POST["me_interaction_err"]);
	$me_interaction_df = test_input($_POST["me_interaction_df"]);
	$me_interaction_f = test_input($_POST["me_interaction_f"]);
	$me_interaction_p = test_input($_POST["me_interaction_p"]);

  	$mean_0_1 = test_input($_POST["mean_0_1"]);
  	$mean_50_1 = test_input($_POST["mean_50_1"]);
  	$mean_100_1 = test_input($_POST["mean_100_1"]);
  	$mean_150_1 = test_input($_POST["mean_150_1"]);
  	$mean_200_1 = test_input($_POST["mean_200_1"]);
  	$mean_250_1 = test_input($_POST["mean_250_1"]);
  	$mean_300_1 = test_input($_POST["mean_300_1"]);
 	$mean_350_1 = test_input($_POST["mean_350_1"]);
  	$mean_0_2 = test_input($_POST["mean_0_2"]);
  	$mean_50_2 = test_input($_POST["mean_50_2"]);
  	$mean_100_2 = test_input($_POST["mean_100_2"]);
  	$mean_150_2 = test_input($_POST["mean_150_2"]);
  	$mean_200_2 = test_input($_POST["mean_200_2"]);
  	$mean_250_2 = test_input($_POST["mean_250_2"]);
  	$mean_300_2 = test_input($_POST["mean_300_2"]);
 	$mean_350_2 = test_input($_POST["mean_350_2"]);

  	$se_0_1 = test_input($_POST["se_0_1"]);
  	$se_50_1 = test_input($_POST["se_50_1"]);
  	$se_100_1 = test_input($_POST["se_100_1"]);
  	$se_150_1 = test_input($_POST["se_150_1"]);
  	$se_200_1 = test_input($_POST["se_200_1"]);
  	$se_250_1 = test_input($_POST["se_250_1"]);
  	$se_300_1 = test_input($_POST["se_300_1"]);
  	$se_350_1 = test_input($_POST["se_350_1"]);
  	$se_0_2 = test_input($_POST["se_0_2"]);
  	$se_50_2 = test_input($_POST["se_50_2"]);
  	$se_100_2 = test_input($_POST["se_100_2"]);
  	$se_150_2 = test_input($_POST["se_150_2"]);
  	$se_200_2 = test_input($_POST["se_200_2"]);
  	$se_250_2 = test_input($_POST["se_250_2"]);
  	$se_300_2 = test_input($_POST["se_300_2"]);
  	$se_350_2 = test_input($_POST["se_350_2"]);

  	$p_0 = test_input($_POST["p_0"]);
  	$p_50 = test_input($_POST["p_50"]);
  	$p_100 = test_input($_POST["p_100"]);
  	$p_150 = test_input($_POST["p_150"]);
  	$p_200 = test_input($_POST["p_200"]);
  	$p_250 = test_input($_POST["p_250"]);
  	$p_300 = test_input($_POST["p_300"]);
  	$p_350 = test_input($_POST["p_350"]);

}

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
	"<li> <a href = \"add_fv.php\">Return to Fiber Volley Data Entry</a>".
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
//Update database
//----------------------------------------------------------------------------------------
$query = "UPDATE fv SET test_type = '$test_type',".
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
	" mean_0_2 = '$mean_0_2', ".
	" se_0_2 = '$se_0_2', ".
	" p_0 = '$p_0', ".
	
	" mean_50_1 = '$mean_50_1', ".
	" se_50_1 = '$se_50_1', ".
	" mean_50_2 = '$mean_50_2', ".
	" se_50_2 = '$se_50_2', ".
	" p_50 = '$p_50', ".
	
	" mean_100_1 = '$mean_100_1', ".
	" se_100_1 = '$se_100_1', ".
	" mean_100_2 = '$mean_100_2', ".
	" se_100_2 = '$se_100_2', ".
	" p_100 = '$p_100', ".
	
	" mean_150_1 = '$mean_150_1', ".
	" se_150_1 = '$se_150_1', ".
	" mean_150_2 = '$mean_150_2', ".
	" se_150_2 = '$se_150_2', ".
	" p_150 = '$p_150', ".
	
	" mean_200_1 = '$mean_200_1', ".
	" se_200_1 = '$se_200_1', ".
	" mean_200_2 = '$mean_200_2', ".
	" se_200_2 = '$se_200_2', ".
	" p_200 = '$p_200', ".
	
	" mean_250_1 = '$mean_250_1', ".
	" se_250_1 = '$se_250_1', ".
	" mean_250_2 = '$mean_250_2', ".
	" se_250_2 = '$se_250_2', ".
	" p_250 = '$p_250', ".
	
	" mean_300_1 = '$mean_300_1', ".
	" se_300_1 = '$se_300_1', ".
	" mean_300_2 = '$mean_300_2', ".
	" se_300_2 = '$se_300_2', ".
	" p_300 = '$p_300', ".
	
	" mean_350_1 = '$mean_350_1', ".
	" se_350_1 = '$se_350_1', ".
	" mean_350_2 = '$mean_350_2', ".
	" se_350_2 = '$se_350_2', ".
	" p_350 = '$p_350' ".
	
        "WHERE group_1 = '$group_1' AND group_2 = '$group_2'";

$result = mysqli_query($connection, $query);

if (!$result){ die("Query Failed.");}
else { echo "<center><h2>Database successfully updated</h2></center>"; }

?>

<br><hr>
<center><a href = "index.php">Return to main page</a></center>
<hr><br>
</body>
</html>
