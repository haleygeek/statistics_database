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
$dbuser = "username";		//Edit to make it work
$dbpass = "password";		//Edit to make it work
$dbname = "db_stats";		//Edit to make it work
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//----------------------------------------------------------------------------------------
// Get variable assignments from form
//----------------------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$print_type = $_POST["print_type"];
	$experiment = $_POST["experiment_type"];
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
//Select Database to Query
//----------------------------------------------------------------------------------------
switch($experiment){
	case 'ache': 
		$query = "SELECT * FROM ache ";
		echo "Query made<br>";
		break;
	case 'slope': 
		$query = "SELECT * FROM slope WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;	
	case 'fv': 
		$query = "SELECT * FROM fv WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
	case 'ppr': 
		$query = "SELECT * FROM ppr WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
	case 'mini_freq': 
		$query = "SELECT * FROM mini_freq WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
	case 'mini_amp': 
		$query = "SELECT * FROM mini_amp WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
	case 'dendrite_length': 
		$query = "SELECT * FROM dendrite_length WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
	case 'dendrite_branching': 
		$query = "SELECT * FROM branching WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
	case 'spine_density ': 
		$query = "SELECT * FROM spine_density WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
	case 'spine_area': 
		$query = "SELECT * FROM spine_area WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
	case 'spine_types': 
		$query = "SELECT * FROM spine_types WHERE group_1 = '$group_1' AND group_2 = '$group_2'";
		break;
}

//----------------------------------------------------------------------------------------
//Query Database
//----------------------------------------------------------------------------------------
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
//Format Experiment Type
//----------------------------------------------------------------------------------------
function formatExperimentType ($exp_type){
	switch($exp_type){
	case 'ache':
		Return "Acetylcholinesterase activity assay";
		break;
	case 'slope':
		Return "Input/output curve slope";
		break;
	case 'fv':
		Return "Input/output curve fiber volley";
		break;
	case 'ppr':
		Return "Paired Pulse Ratio";
		break;
	case 'mini_freq':
		Return "mEPSC frequency";
		break;
	case 'mini_amp':
		Return "mEPSC amp";
		break;
	case 'dendrite_length':
		Return "Dendrite Length";
		break;
	case 'dendrite_branching':
		Return "Dendrite Branching";
		break;
	case 'spine_density':
		Return "Dendrite Branching";
		break;
	case 'spine_area':
		Return "Spine area";
		break;
	case 'spine_types':
		Return "Spine types";
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
//Determine output routine
//----------------------------------------------------------------------------------------
switch ($print_type){
	case 'table':
		printTable($connection, $result);
		break;
	case 'publication':
		printTable($experiment, $result);
		break;
}


//----------------------------------------------------------------------------------------
//Print Table
//----------------------------------------------------------------------------------------

	
function printTable($connection,$group_1, $group_2, $experiment, $result){
	if (!$result){ 
		die("Query Failed");
		echo "query was not successful";
		}
	else {
		while($row = mysqli_fetch_array($result)) {
			echo "<br>".
			"<h3><center>Search Results</center></h3>".
			"<br>".
			"<hr>".
			"<b>Experiment Details</b>".
			"<hr><br>".
			"<table>". 
			"<tr><td><b>Experiment: </td>".
			"<tr><td><b>Treatment Group 1: </td>".
			"<tr><td><b>Treatment Group 1: </td>".
			"<td>stuff".formatGroupNames($group_1)."</td>".
			"</tr>"; /*
	<tr><td><b>Treatment Group2: </td>
		<td><select name = "group_2">
			<option value = "oil_saline">Oil + Saline</option>
			<option value = "oil_igf">Oil + IGF-1</option>
			<option value = "cpf_saline">CPF + Saline</option>
			<option value = "cpf_igf">CPF + IGF1</option>
		</select></td></tr>
	<tr><td><b>Test Type: </td>
		<td><select name = "test_type">
		<option value = "two_way_rm_anova">2-Way rmANOVA</option>
		<option value = "one_way_anova">1-Way ANOVA</option>
		<option value = "two_way_anova">2-Way ANOVA</option>
		</select>
	</table>
	<br><br>
	<hr>
	<b>Main Effects</b>
	<hr>
	<br>
	<table width = 70%>
		<tr>	
			<td width = 30%><b>Main Effect</center></td>
			<td width = 5%><b><center>Error</center></td>
			<td width = 5%><center>df</center></td>
			<td width = 5%><b><center>F</center></td>
			<td width = 5%><center>P</center></td>
		</tr>
		<tr>
			<td>Exposure</td>
			<td><input type = "text" name = "me_exposure_err"></td>
			<td><input type = "text" name = "me_exposure_df"></td>
			<td><input type = "text" name = "me_exposure_f"></td>
			<td><input type = "text" name = "me_exposure_p"></td>
		</tr>
		<tr>
			<td>Region</td>
			<td><input type = "text" name = "me_region_err"></td>
			<td><input type = "text" name = "me_region_df"></td>
			<td><input type = "text" name = "me_region_f"></td>
			<td><input type = "text" name = "me_region_p"></td>
		</tr>	
		<tr>
			<td>Exposure X Region</td>
			<td><input type = "text" name = "me_exp_region_err"></td>
			<td><input type = "text" name = "me_exp_region_df"></td>
			<td><input type = "text" name = "me_exp_region_f"></td>
			<td><input type = "text" name = "me_exp_region_p"></td>
		</tr>	
	</table>
	<br>
	<hr>
	<b>Posthoc Analysis: </b>
	<hr>
	<br>
	
	<table width = 50%>
		<tr>
			<td width = 40%><b><center>Region</td>
			<td width = 5%><b><center>Group 1 Mean</td>
			<td width = 5%><b><center>Group 1 STE</td>
			<td width = 5%><b><center>Group 1 n</td>
			<td width = 5%><b><center>Group 2 Mean</td>
			<td width = 5%><b><center>Group 2 STE</td>
			<td width = 5%><b><center>Group 2 n</td>
			<td width = 5%><b><center>P Value</td>
		</tr>	
		<tr>
			<td>Hippocampus </td>
			<td><input type = "text" name = "hipp_mean_1"></td>
			<td><input type = "text" name = "hipp_se_1"></td>
			<td><input type = "text" name = "hipp_n_1"></td>
			<td><input type = "text" name = "hipp_mean_2"></td>
			<td><input type = "text" name = "hipp_se_2"></td>
			<td><input type = "text" name = "hipp_n_2"></td>
			<td><input type = "text" name = "hipp_p"></center></td>
		</tr>
		<tr>
			<td>Cortex </td>
			<td><input type = "text" name = "cort_mean_1"></td>
			<td><input type = "text" name = "cort_se_1"></td>
			<td><input type = "text" name = "cort_n_1"></td>
			<td><input type = "text" name = "cort_mean_2"></td>
			<td><input type = "text" name = "cort_se_2"></td>
			<td><input type = "text" name = "cort_n_2"></td>
			<td><input type = "text" name = "cort_p"></center></td>
		</tr>
		<tr>
			<td>Cerebellum </td>
			<td><input type = "text" name = "cerb_mean_1"></td>
			<td><input type = "text" name = "cerb_se_1"></td>
			<td><input type = "text" name = "cerb_n_1"></td>
			<td><input type = "text" name = "cerb_mean_2"></td>
			<td><input type = "text" name = "cerb_se_2"></td>
			<td><input type = "text" name = "cerb_n_2"></td>
			<td><input type = "text" name = "cerb_p"></center></td>
		</tr>
		<tr>
			<td>Striatum </td>
			<td><input type = "text" name = "striat_mean_1"></td>
			<td><input type = "text" name = "striat_se_1"></td>
			<td><input type = "text" name = "striat_n_1"></td>
			<td><input type = "text" name = "striat_mean_2"></td>
			<td><input type = "text" name = "striat_se_2"></td>
			<td><input type = "text" name = "striat_n_2"></td>
			<td><input type = "text" name = "striat_p"></center></td>
		</tr>
	*/
		echo "</table><br><br>";
			
		}
	}
}

?>

</body>