<html>
<head>
	<title>Print Statistics</title>
</head>
<body>
<?php

//----------------------------------------------------------------------------------------
//Connection info
//----------------------------------------------------------------------------------------
$dbhost = "localhost";
$dbuser = "replace";
$dbpass = "replace";
$dbname = "hareplace";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


//----------------------------------------------------------------------------------------
// Get variable assignments from form
//----------------------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$experiment = "Acetylcholinesterase Assay";
	$groups_tested = $_POST["groups_tested_ache"];
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
	case 'oil_igf_cpf_saline':
		$group_1 = 'oil_igf';
		$group_2 = 'cpf_saline';
	case 'oil_saline_cpf_igf':
		$group_1 = 'oil_saline';
		$group_2 = 'cpf_igf';
}

//----------------------------------------------------------------------------------------
//Query Database
//----------------------------------------------------------------------------------------
$query = "SELECT * FROM ache WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
$result = mysqli_query($connection, $query);

//----------------------------------------------------------------------------------------
//Format Test Type
//----------------------------------------------------------------------------------------
function formatTestType ($test_type){
	switch($test_type){
	case 'two_way_rm_anova':
		Return "Two-Way ANOVA with Repeated Measures";
		break;
	case 'one_way_anova':
		Return "One-Way ANOVA";
		break;
	case 'two_way_anova':
		Return "Two-Way ANOVA";
		break;
	case 'three_way_rm_anova':
		Return "Three-Way ANOVA with Repeated Measures";
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
//Print output
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
			"<tr><td width=30%><b>Experiment: </td>".
    				"<td>".$experiment."</td></tr>".
			"<tr><td><b>Test Type </td>".
				"<td>".formatTestType($row["test_type"])."</td></tr>".
			"</table><br>".
			"<table width = 50%>".
			"<tr><td width = 10%><b>Treatment Group</td>".
				"<td width = 5%><b>Mean</b></td>".
				"<td width = 5%><b>SE</b></td>".
				"<td width = 5%><b>n</b></td>".
			"</tr>".
			"<tr><td>".formatGroupNames($group_1)."</td>".
				"<td>".$row["total_mean_1"]."</td>".
				"<td>".$row["total_se_1"]."</td>".
				"<td>".$row["n_1"]."</td>".
			"</tr>".
			"<tr>".
			     "<td>".formatGroupNames($group_2)."</td>".
				"<td>".$row["total_mean_2"]."</td>".
				"<td>".$row["total_se_2"]."</td>".
				"<td>".$row["n_2"]."</td>".
		 "</tr>".
			"</table><br><br>".

			"<hr><b>Main Effects</b><hr><br>".

			"<table width = 50%>".
			"<tr><td width = 10%><b>Main Effect</center></td>".
				"<td width = 5%><b>Error</td>".
				"<td width = 5%><b>df</td>".
				"<td width = 5%><b>F</td>".
				"<td width = 5%><b>P</td></tr>".
			"<tr><td>Exposure + Treatment</center></td>".
				"<td>".$row["me_exposure_err"]."</td>".
				"<td>".$row["me_exposure_df"]."</td>".
				"<td>".$row["me_exposure_f"]."</td>".
				"<td>".$row["me_exposure_p"]."</td></tr>".
			"<tr><td>Brain Region</center></td>".
				"<td>".$row["me_region_err"]."</td>".
				"<td>".$row["me_region_df"]."</td>".
				"<td>".$row["me_region_f"]."</td>".
				"<td>".$row["me_region_p"]."</td></tr>".
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
				"<td width = 10%><b>Group 2 Mean</td>".
				"<td width = 10%><b>Group 2 STE</td>".
				"<td width = 10%><b>P Value</td></tr>".
			"<tr><td>Hippocampus</td>".
				"<td>".$row["hipp_mean_1"]."</td>".
				"<td>".$row["hipp_se_1"]."</td>".
				"<td>".$row["hipp_mean_2"]."</td>".
				"<td>".$row["hipp_se_2"]."</td>".
				"<td>".$row["hipp_p"]."</td></tr>".
			"<tr><td>Cortex</td>".
				"<td>".$row["cort_mean_1"]."</td>".
				"<td>".$row["cort_se_1"]."</td>".
				"<td>".$row["cort_mean_2"]."</td>".
				"<td>".$row["cort_se_2"]."</td>".
				"<td>".$row["cort_p"]."</td></tr>".
			"<tr><td>Cerebellum</td>".
				"<td>".$row["cerb_mean_1"]."</td>".
				"<td>".$row["cerb_se_1"]."</td>".
				"<td>".$row["cerb_mean_2"]."</td>".
				"<td>".$row["cerb_se_2"]."</td>".
				"<td>".$row["cerb_p"]."</td></tr>".
			"<tr><td>Striatum</td>".
				"<td>".$row["striat_mean_1"]."</td>".
				"<td>".$row["striat_se_1"]."</td>".
				"<td>".$row["striat_mean_2"]."</td>".
				"<td>".$row["striat_se_2"]."</td>".
				"<td>".$row["striat_p"]."</td></tr>".
			"</table><br>";
			
//----------------------------------------------------------------------------------------
//Print for publication
//----------------------------------------------------------------------------------------
			echo "<hr>".
			"<b>Formatted for inline citations</b>".
			"<hr><br>".
			"(".formatTestType($row["test_type"]).": Group: F<sub>(".$row["me_exposure_err"].
			", ".$row["me_exposure_df"].")</sub> = ".$row["me_exposure_f"].", ".
			"<i>P</i> = ".$row["me_exposure_p"]. "; ".
			"Brain Region: F<sub>(".$row["me_region_err"].
			", ".$row["me_region_df"].")</sub> = ".$row["me_region_f"].", ".
			"<i>P</i> = ".$row["me_region_p"]."; ".
			"Interaction: F<sub>(".$row["me_interaction_err"].
			", ".$row["me_interaction_df"].")</sub> = ".$row["me_interaction_f"].", ".
			"<i>P</i> = ".$row["me_interaction_p"].
			". ".formatGroupNames($group_1)." : <i>n</i> = ".$row["n_1"].
			", ".formatGroupNames($group_2).": <i>n</i> = ". $row["n_2"].")";


		}
	}


//----------------------------------------------------------------------------------------
//Print for publication
//----------------------------------------------------------------------------------------

function printPublication($connection,$group_1, $group_2, $experiment, $result){
	if (!$result){ 	die("Query Failed"); 	}
	else {
		while($row = mysqli_fetch_array($result)) {
			echo "<br>".
			"<h3><center>Search Results</center></h3>".
			"<br>".
			"<hr>".
			"<b>Formatted for inline citations</b>".
			"<hr><br>".
			"(".formatTestType($row["test_type"]).": Group: F<sub>(".$row["me_exposure_err"].
			", ".$row["me_exposure_df"].")</sub> = ".$row["me_exposure_f"].", ".
			"<i>P</i> = ".$row["me_exposure_p"]. "; ".
			"Brain Region: F<sub>(".$row["me_region_err"].
			", ".$row["me_region_df"].")</sub> = ".$row["me_region_f"].", ".
			"<i>P</i> = ".$row["me_region_p"]."; ".
			"Brain Region: F<sub>(".$row["me_interaction_err"].
			", ".$row["me_interaction_df"].")</sub> = ".$row["me_interaction_f"].", ".
			"<i>P</i> = ".$row["me_interaction_p"].")";
		}
	}
}
?>

<br><hr>
<center><a href = "index.php">Return to main page</a></center>
<hr><br>

</body>
</html>
