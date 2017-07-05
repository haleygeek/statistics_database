<!DOCTYPE html>
<html>
<head>
<title>Add Fiber Volley Stats to Database</title>
</head>
<body>

<h2><center>Add Fiber Volley Stats to Database</center></h2>
<br>
<hr>
<b> Test Parameters </b>
<hr>
<form method = "post" action = "addfv.php">
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
<td>Intensity</td>
<td><input type = "text" name = "me_intensity_err"></td>
<td><input type = "text" name = "me_intensity_df"></td>
<td><input type = "text" name = "me_intensity_f"></td>
<td><input type = "text" name = "me_intensity_p"></td>
</tr>
<tr>
<td>Interaction</td>
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
<td width = 40%><b><center>Intensity</td>
<td width = 5%><b><center>Group 1 Mean</td>
<td width = 5%><b><center>Group 1 STE</td>
<td width = 5%><b><center>Group 1 n</td>
<td width = 5%><b><center>Group 2 Mean</td>
<td width = 5%><b><center>Group 2 STE</td>
<td width = 5%><b><center>Group 2 n</td>
<td width = 5%><b><center>P Value</td>
</tr>
<tr>
<td>0 uA </td>
<td><input type = "text" name = "mean_0_1"></td>
<td><input type = "text" name = "se_0_1"></td>
<td><input type = "text" name = "n_0_1"></td>
<td><input type = "text" name = "mean_0_2"></td>
<td><input type = "text" name = "se_0_2"></td>
<td><input type = "text" name = "n_0_2"></td>
<td><input type = "text" name = "p_0"></center></td>
</tr>
<tr>
<td>50 uA </td>
<td><input type = "text" name = "mean_50_1"></td>
<td><input type = "text" name = "se_50_1"></td>
<td><input type = "text" name = "n_50_1"></td>
<td><input type = "text" name = "mean_50_2"></td>
<td><input type = "text" name = "se_50_2"></td>
<td><input type = "text" name = "n_50_2"></td>
<td><input type = "text" name = "p_50"></center></td>
</tr>
<tr>
<td>100 uA </td>
<td><input type = "text" name = "mean_100_1"></td>
<td><input type = "text" name = "se_100_1"></td>
<td><input type = "text" name = "n_100_1"></td>
<td><input type = "text" name = "mean_100_2"></td>
<td><input type = "text" name = "se_100_2"></td>
<td><input type = "text" name = "n_100_2"></td>
<td><input type = "text" name = "p_100"></center></td>
</tr>
<tr>
<td>150 uA </td>
<td><input type = "text" name = "mean_150_1"></td>
<td><input type = "text" name = "se_150_1"></td>
<td><input type = "text" name = "n_150_1"></td>
<td><input type = "text" name = "mean_150_2"></td>
<td><input type = "text" name = "se_150_2"></td>
<td><input type = "text" name = "n_150_2"></td>
<td><input type = "text" name = "p_150"></center></td>
</tr>
<tr>
<td>200 uA </td>
<td><input type = "text" name = "mean_200_1"></td>
<td><input type = "text" name = "se_200_1"></td>
<td><input type = "text" name = "n_200_1"></td>
<td><input type = "text" name = "mean_200_2"></td>
<td><input type = "text" name = "se_200_2"></td>
<td><input type = "text" name = "n_200_2"></td>
<td><input type = "text" name = "p_200"></center></td>
</tr>
<tr>
<td>250 uA </td>
<td><input type = "text" name = "mean_250_1"></td>
<td><input type = "text" name = "se_250_1"></td>
<td><input type = "text" name = "n_250_1"></td>
<td><input type = "text" name = "mean_250_2"></td>
<td><input type = "text" name = "se_250_2"></td>
<td><input type = "text" name = "n_250_2"></td>
<td><input type = "text" name = "p_250"></center></td>
</tr>
<tr>
<td>300 uA </td>
<td><input type = "text" name = "mean_300_1"></td>
<td><input type = "text" name = "se_300_1"></td>
<td><input type = "text" name = "n_300_1"></td>
<td><input type = "text" name = "mean_300_2"></td>
<td><input type = "text" name = "se_300_2"></td>
<td><input type = "text" name = "n_300_2"></td>
<td><input type = "text" name = "p_300"></center></td>
</tr>
<tr>
<td>350 uA </td>
<td><input type = "text" name = "mean_350_1"></td>
<td><input type = "text" name = "se_350_1"></td>
<td><input type = "text" name = "n_350_1"></td>
<td><input type = "text" name = "mean_350_2"></td>
<td><input type = "text" name = "se_350_2"></td>
<td><input type = "text" name = "n_350_2"></td>
<td><input type = "text" name = "p_350"></center></td>
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
