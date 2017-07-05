<html>
<head>
	<title>Print I/O Curve Fiber Volley Statistics</title>
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
	$experiment = "I/O Curve Fiber Volley";
	$groups_tested = $_POST["groups_tested"];
}

//----------------------------------------------------------------------------------------
//Convert to groups
//----------------------------------------------------------------------------------------
switch($groups_tested){
	case 'oil_saline_cpf_saline':
		$group_1 = 'oil_saline';
		$group_2 = 'cpf_saline';
		break;
	case 'oil_saline_oil_igf':
		$group_1 = 'oil_saline';
		$group_2 = 'oil_igf';
	case 'cpf_saline_cpf_igf':
		$group_1 = 'cpf_saline';
		$group_2 = 'cpf_igf';
	case 'cpf_saline_oil_igf':
		$group_1 = 'cpf_saline';
		$group_2 = 'oil_igf';
	case 'oil_igf_cpf_igf':
		$group_1 = 'oil_igf';
		$group_2 = 'cpf_igf';
}

//----------------------------------------------------------------------------------------
//Query Database
//----------------------------------------------------------------------------------------
$query = "SELECT * FROM fv WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
$result = mysqli_query($connection, $query);

//----------------------------------------------------------------------------------------
//Format Test Type
//----------------------------------------------------------------------------------------
function formatTestType ($test_type){
	switch($test_type){
	case 'two_way_rm_anova':
		Return "Two-Way rmANOVA";
		break;
	case 'one_way_anova':
		Return "One-Way ANOVA";
		break;
	case 'two_way_anova':
		Return "Two-Way ANOVA";
		break;
	case 'three_way_rm_anova':
		Return "Three-Way rmANOVA";
		break;
	}
}

//----------------------------------------------------------------------------------------
//Format Treatment Groups
//----------------------------------------------------------------------------------------
function formatGroupNames ($group){
	switch($group){
	case 'oil_saline':
		Return "Oil + Saline";
		break;
	case 'oil_igf':
		Return "Oil + IGF-1";
		break;
	case 'cpf_saline':
		Return "CPF + Saline";
		break;
	case 'cpf_igf':
		Return "CPF + IGF-1";
		break;
	}
}

//----------------------------------------------------------------------------------------
//Print Output
//----------------------------------------------------------------------------------------

	if (!$result){
		die("Query Failed");
		}
	else {
		while($row = mysqli_fetch_array($result)) {
			echo "<br>".
			"<h3><center>Search Results</center></h3>".
			"<br>".
			"<hr>".
			"<b>Experiment Details</b>".
			"<hr><br>".

			"<table width = 50%>".
			"<tr width=30%><td><b>Experiment: </td>".
    			"<td>".$experiment."</td></tr>".
			"<tr><td><b>Treatment Group 1: </td>".
			     "<td>".formatGroupNames($group_1)."</td></tr>".
			"<tr><td><b>Treatment Group 2: </td>".
			     "<td>".formatGroupNames($group_2)."</td></tr>".
	        	"<tr><td><b>Test Type </td>".
	        		"<td>".formatTestType($row["test_type"])."</td></tr>".
			"</table><br><br>".

			"<hr><b>Main Effects</b><hr><br>".

			"<table width = 70%>".
			"<tr><td width = 30%><b>Main Effect</center></td>".
				"<td><b>Error</td>".
				"<td><b>df</td>".
				"<td><b>F</td>".
				"<td><b>P</td></tr>".
			"<tr><td>Exposure + Treatment</center></td>".
				"<td>".$row["me_exposure_err"]."</td>".
				"<td>".$row["me_exposure_df"]."</td>".
				"<td>".$row["me_exposure_f"]."</td>".
				"<td>".$row["me_exposure_p"]."</td></tr>".
			"<tr><td>Intensity</center></td>".
				"<td>".$row["me_intensity_err"]."</td>".
				"<td>".$row["me_intensity_df"]."</td>".
				"<td>".$row["me_intensity_f"]."</td>".
				"<td>".$row["me_intensity_p"]."</td></tr>".
			"<tr><td>Interaction</center></td>".
				"<td>".$row["me_interaction_err"]."</td>".
				"<td>".$row["me_interaction_df"]."</td>".
				"<td>".$row["me_interaction_f"]."</td>".
				"<td>".$row["me_interaction_p"]."</td></tr>".
			"</table>".

			"<br><hr><b>Posthoc Analysis</b><hr><br>".

			"<table width = 100%>".
			"<tr><td width = 10%><b>Region</td>".
				"<td width = 10%><b>Group 1 Mean</td>".
				"<td width = 10%><b>Group 1 STE</td>".
				"<td width = 10%><b>Group 1 n</td>".
				"<td width = 10%><b>Group 2 Mean</td>".
				"<td width = 10%><b>Group 2 STE</td>".
				"<td width = 10%><b>Group 2 n</td>".
				"<td width = 10%><b>P Value</td></tr>".
			"<tr><td>0 uA</td>".
				"<td>".$row["mean_0_1"]."</td>".
				"<td>".$row["se_0_1"]."</td>".
				"<td>".$row["n_0_1"]."</td>".
				"<td>".$row["mean_0_2"]."</td>".
				"<td>".$row["se_0_2"]."</td>".
				"<td>".$row["n_0_2"]."</td>".
				"<td>".$row["p_0"]."</td></tr>".
			"<tr><td>50 uA</td>".
				"<td>".$row["mean_50_1"]."</td>".
				"<td>".$row["se_50_1"]."</td>".
				"<td>".$row["n_50_1"]."</td>".
				"<td>".$row["mean_50_2"]."</td>".
				"<td>".$row["se_50_2"]."</td>".
				"<td>".$row["n_50_2"]."</td>".
				"<td>".$row["p_50"]."</td></tr>".
			"<tr><td>100 uA</td>".
				"<td>".$row["mean_100_1"]."</td>".
				"<td>".$row["se_100_1"]."</td>".
				"<td>".$row["n_100_1"]."</td>".
				"<td>".$row["mean_100_2"]."</td>".
				"<td>".$row["se_100_2"]."</td>".
				"<td>".$row["n_100_2"]."</td>".
				"<td>".$row["p_100"]."</td></tr>".
			"<tr><td>150 uA</td>".
				"<td>".$row["mean_150_1"]."</td>".
				"<td>".$row["se_150_1"]."</td>".
				"<td>".$row["n_150_1"]."</td>".
				"<td>".$row["mean_150_2"]."</td>".
				"<td>".$row["se_150_2"]."</td>".
				"<td>".$row["n_150_2"]."</td>".
				"<td>".$row["p_150"]."</td></tr>".
			"<tr><td>200 uA</td>".
				"<td>".$row["mean_200_1"]."</td>".
				"<td>".$row["se_200_1"]."</td>".
				"<td>".$row["n_200_1"]."</td>".
				"<td>".$row["mean_200_2"]."</td>".
				"<td>".$row["se_200_2"]."</td>".
				"<td>".$row["n_100_2"]."</td>".
				"<td>".$row["p_200"]."</td></tr>".
			"<tr><td>250 uA</td>".
				"<td>".$row["mean_250_1"]."</td>".
				"<td>".$row["se_250_1"]."</td>".
				"<td>".$row["n_250_1"]."</td>".
				"<td>".$row["mean_250_2"]."</td>".
				"<td>".$row["se_250_2"]."</td>".
				"<td>".$row["n_150_2"]."</td>".
				"<td>".$row["p_250"]."</td></tr>".
			"<tr><td>300 uA</td>".
				"<td>".$row["mean_300_1"]."</td>".
				"<td>".$row["se_300_1"]."</td>".
				"<td>".$row["n_300_1"]."</td>".
				"<td>".$row["mean_300_2"]."</td>".
				"<td>".$row["se_300_2"]."</td>".
				"<td>".$row["n_300_2"]."</td>".
				"<td>".$row["p_300"]."</td></tr>".
			"<tr><td>350 uA</td>".
				"<td>".$row["mean_350_1"]."</td>".
				"<td>".$row["se_350_1"]."</td>".
				"<td>".$row["n_350_1"]."</td>".
				"<td>".$row["mean_350_2"]."</td>".
				"<td>".$row["se_350_2"]."</td>".
				"<td>".$row["n_350_2"]."</td>".
				"<td>".$row["p_350"]."</td></tr>".
			"</table>";
			
//----------------------------------------------------------------------------------------
//Print for publication
//----------------------------------------------------------------------------------------

			echo "<br>".
			"<h3><center>Search Results</center></h3>".
			"<br>".
			"<hr>".
			"<b>Formatted for inline citations</b>".
			"<hr><br>".
			"(".formatTestType($row["test_type"]).": Group: F<sub>(".$row["me_exposure_err"].
			", ".$row["me_exposure_df"].")</sub> = ".$row["me_exposure_f"].", ".
			"<i>P</i> = ".$row["me_exposure_p"]. "; ".
			"Brain Region: F<sub>(".$row["me_intensity_err"].
			", ".$row["me_intensity_df"].")</sub> = ".$row["me_intensity_f"].", ".
			"<i>P</i> = ".$row["me_intensity_p"]."; ".
			"Brain Region: F<sub>(".$row["me_interaction_err"].
			", ".$row["me_interaction_df"].")</sub> = ".$row["me_interaction_f"].", ".
			"<i>P</i> = ".$row["me_interaction_p"].")";

		}
	}



?>

<br><hr>
<center><a href = "index.php">Return to main page</a></center>
<hr><br>

</body>
</html>
