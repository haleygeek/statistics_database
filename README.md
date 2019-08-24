
# Read Me
****
## PHP Database connection
_Allows an HTML form to access a mySQL database using a PHP script_

___

### Variable List
* $dbhost
- $dbuser
- $dbpass
* $dbname
- $connection

### Code
__Connection info__

    $dbhost = "localhost";  
    $dbuser = "username";		//Edit to make it work  
    $dbpass = "password";		//Edit to make it work  
    $dbname = "db_stats";		//Edit to make it work  
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
	      $print_type = $_POST["print_type"];
	      $experiment = $_POST["experiment_type"];
	      $groups_tested = $_POST["groups_tested"];
    }


> [Find the full code here](https://github.com/haleyspeed/statistics_database/blob/master/printresults.php "Github Repository").
