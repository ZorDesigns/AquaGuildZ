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

/*
|--------------------------------------------------------------------------
| No edit
|--------------------------------------------------------------------------
| From now on, we recommend not to change the code to maintain default operation script.
| All changes must be made on data found above. If NOT that means that the CMS is still in Alpha/Beta Mode.
| Thus, making any changes might break the code. This CMS is tagged "IN DEVELOPMENT"
*/

/* FUNCTIONS */
ob_start();  
if(file_exists("install"))
{
	header("Location: install");
	die();
}

/* API SETTINGS */
//----------------------------------------------//
//-- Edit These Values With Your Information --//
//--------------------------------------------//

//-- Your Registered API Key --//
$APIkey = 'v6kduqwxczssrhw5w6ys2yx62r35dvf2';

//-- Your Region, Locale & Game --//
$RegionName = 'eu';
$LocaleName = 'en_GB';
$GameName = 'wow';

//-- Your Realm, Guild & Player Name --//
$RealmName = str_replace(' ', '%20', 'Twisting Nether');
$GuildName = str_replace(' ', '%20', 'O M E G A');

/* SOCIAL LINKS */
$socialnk['Facebook'] 	= "https://www.facebook.com/";
$socialnk['Twitter']  	= "#";
$socialnk['Youtube']  	= "https://www.youtube.com/channel/UCcegG7KKMvpd7UVFHdJ4tTQ";

/* CMS LINKS */
$cms['name']		= "OMEGA";
$cms['title']   	= "OMEGA |";
$cms['description'] = "OMEGA is the best Hellenic Guild on Twisting Nether Europe, the best and the most friendliest guild for Greek members! Join us and improve your progress and your mood with us!";
$cms['keywords']	= "OMEGA, OMEGA Gaming, O M E G A, ZorDesigns, FlameCMS, World of Warcraft Guild, Guild, AquaGuildZ";
$cms['author']		= "ZorDesigns, FailZorD, FlameCMS, AquaGuildZ";
$cms['favicon']		= "admin/img/favicon.png";

/* DB CONNECTION CODE */
//----------------------------------------------//
//----- UTF8 USED FOR SPECIAL CHARACTERS ------//
//--------------------------------------------//
$aquaglz = mysqli_connect("127.0.0.1","root","password","gcms") or die("Error " . mysqli_error($aquaglz));
if (!$aquaglz->set_charset("utf8")) {
printf("Error loading character set utf8: %s\n", $aquaglz->error);
} else {}
// Check connection
if ($aquaglz->connect_error) {
    die("Connection failed: " . $aquaglz->connect_error);
}
/* End of file configs.php */
?>