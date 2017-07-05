<html>
<head>
	<title>Retrieve Statistics</title>
</head>
<body>
	<br>
	<h2><center>Print Stats</center></h2>
	<br>
	<hr>
	<b> Select Dataset: </b>
	<hr>
		<table width = 50%>
		<tr>
				<td width = 50%>Groups Tested: <br> </td>
				<td>Experiment Type: </td>
		</tr>
		<tr> </tr><tr> </tr>
		<tr><form method = "post" action = "printache.php">
				<td>
						<select name = "groups_tested">
						<option value = "oil_saline_cpf_saline">Oil + Saline vs CPF + Saline</option>
						<option value = "oil_saline_oil_igf">Oil + Saline vs Oil + IGF1 </option>
						<option value = "cpf_saline_cpf_igf">CPF + Saline vs CPF + IGF1</option>
						<option value = "oil_igf_cpf_igf">Oil + Saline vs CPF + IGF1</option>
						</select>
				</td>
				<td><input type = "submit" value = "Acetlycholinesterase Assays" ></form>
				</td>
		</tr>
		<tr> </tr><tr> </tr>
		<tr><form method = "post" action = "printslope.php">
				<td>
						<select name = "groups_tested">
						<option value = "oil_saline_cpf_saline">Oil + Saline vs CPF + Saline</option>
						<option value = "oil_saline_oil_igf">Oil + Saline vs Oil + IGF1 </option>
						<option value = "cpf_saline_cpf_igf">CPF + Saline vs CPF + IGF1</option>
						<option value = "oil_igf_cpf_igf">Oil + Saline vs CPF + IGF1</option>
						</select>
				</td>
				<td><input type = "submit" value = "I/O Curve Slope" ></form>
				</td>
		</tr>
				<tr> </tr><tr> </tr>
		<tr><form method = "post" action = "printfv.php">
				<td>
						<select name = "groups_tested">
						<option value = "oil_saline_cpf_saline">Oil + Saline vs CPF + Saline</option>
						<option value = "oil_saline_oil_igf">Oil + Saline vs Oil + IGF1 </option>
						<option value = "cpf_saline_cpf_igf">CPF + Saline vs CPF + IGF1</option>
						<option value = "oil_igf_cpf_igf">Oil + Saline vs CPF + IGF1</option>
						</select>
				</td>
				<td><input type = "submit" value = "I/O Curve Fiber Volley" ></form>
				</td>
		</tr>
		</table>
		<br><hr>
		<center><a href = "index.php">Return to main page</a></center>
		<hr><br>
</body>
</html>
