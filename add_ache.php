
<!DOCTYPE html>
<html>
<head>
<title>Add Stats to Database</title>
</head>
<body>

<h2><center>Add Stats to AchE Database</center></h2>
<br>
<hr>
<b> Test Parameters </b>
<hr>
<form method = "post" action = "addache.php">
<table>
<tr><td><b>Treatment Group1: </td>
<td><select name = "group_1">
<option value = "oil_saline">Oil + Saline</option>
<option value = "oil_igf">Oil + IGF-1</option>
<option value = "cpf_saline">CPF + Saline</option>
</select></td></tr>
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
<td><input type = "text" name = "me_interaction_err"></td>
<td><input type = "text" name = "me_interaction_df"></td>
<td><input type = "text" name = "me_interaction_f"></td>
<td><input type = "text" name = "me_interaction_p"></td>
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
</table>
<br><br>
<input type = "submit">
</form>
<br><hr>
<center><a href = "index.php">Return to main page</a></center>
<hr><br>
</body>
</html>
