<html>
<head>
	<title>Retrieve Statistics</title>
</head>
<body>
	<br>
	<h2><center>Print Stats</center></h2>
	<br>
	<hr>
	<b> Select output type: </b>
	<hr>
	<form method = "POST" action = "printache.php" required>
	<input type = "radio" name = "print_type" value = "table" selected> Table <br>
	<input type = "radio" name = "print_type" value = "publication"> Formatted for publication<br>
	<br>
	<hr>
	<b> Select Dataset: </b>
	<hr>
	<table>
	<tr><td>Experiment Type:  </td><td>
		<select name = "experiment_type"> 
		<option value = "ache">AchE</option>
		<option value = "slope">Slope </option>
		<option value = "fv">FV</option>
		<option value = "ppr">PPR</option>
		<option value = "mini_freq">mEPSC freq</option>
		<option value = "mini_amp">mEPSC amp</option>
		<option value = "dendrite_length">Dendrite Length</option>
		<option value = "dendrite_branching">Dendrite Branching</option>
		<option value = "spine_density">Spine Density</option>
		<option value = "spine_area">Spine Area</option>
		<option value = "spine_types">Spine Types </option>
		</select></td></tr><br>
	<tr><td>Groups Tested:  </td><td> 
		<select name = "groups_tested">
		<option value = "oil_saline_cpf_saline">Oil + Saline vs CPF + Saline</option>
		<option value = "oil_saline_oil_igf">Oil + Saline vs Oil + IGF1 </option>
		<option value = "cpf_saline_cpf_igf">CPF + Saline vs CPF + IGF1</option>
		<option value = "oil_igf_cpf_igf">Oil + Saline vs CPF + IGF1</option>
		</select>
	</tr>
	</table>
	<br>

	<input type = "submit">

</body>
</html>