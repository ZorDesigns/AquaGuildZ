<?php
/**
 * Copyright (C) 2014 AquaGuildZ by FlameCMS <http://zordesigns.com/>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **/

ob_start();  
if(file_exists("install"))
{
	header("Location: install");
	die();
}
if (!isset($_SESSION))
    session_start();

/*
|--------------------------------------------------------------------------
| MySQL Configuration.
|--------------------------------------------------------------------------
| Connect to MySQL Host
| For example:
| 	$serveraddress = "MySQL Host Address"; 
|	$serveruser    = "User";
| 	$serverpass    = "Password";
| 	$serverport	   = "Port";
*/
$serveraddress = "127.0.0.1";
$serveruser    = "root";
$serverpass    = "password";
$serverport    = "3306";
$server_adb = "auth";
$server_db  = "gcms";
@define('DBHOST', '127.0.0.1');
@define('DBUSER', 'root');
@define('DBPASS', 'password');
@define('DB', 'gcms');
@define('DBAUTH', 'auth');

$expansion_wow = "5"; /* DO NOT TOUCH THE EXPANSION AS IT IS SET ALWAYS TO LATEST */
$mysql_cod            = 'cp1251';

/*
|--------------------------------------------------------------------------
| Maintenance Page
|--------------------------------------------------------------------------
|
| Disable site? on maintenance page
| For Example
| Change true(maintenance mode)/false(normal mode) to disable/enable website
|        true or false
|
*/
$maintenance = false;
    
/*
|--------------------------------------------------------------------------
| No edit
|--------------------------------------------------------------------------
| From now on, we recommend not to change the code to maintain default operation script.
| All changes must be made on data found above.
|
*/

if ($maintenance == true) {
    if (!isset($bucle_mant)) {
        header('Location: maintenance.php');
    }
} else {
    $teamsLimit = 50; // Number of ITEMS to display on each page
    $connection_setup= mysqli_connect($serveraddress,$serveruser,$serverpass,$server_db) or die("Error " . mysqli_error($link)); 
    
    if (isset($_SESSION['username'])) {
        $username            = mysql_real_escape_string($_SESSION['username']);
        $account_information = mysql_fetch_assoc(mysql_query("SELECT * FROM $server_adb.account WHERE username = '" . $username . "'"));
        $account_extra       = mysql_fetch_assoc(mysql_query("SELECT * FROM $server_db.users WHERE id = '" . $account_information['id'] . "'"));
        mysql_select_db($server_db, $connection_setup) or die(mysql_error());
    }
}

/* End of file configs.php */

