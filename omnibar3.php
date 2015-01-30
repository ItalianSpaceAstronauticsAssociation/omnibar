<?php
if(preg_match('/(?i)msie [4-8]/',$_SERVER['HTTP_USER_AGENT']))
{
	echo 'La versione di Internet Explorer che stai usando non &egrave; pienamente supportata. Considera un aggiornamento.';

}
else
{
    // if IE>8

	$array_links = Array (
			'isaa.it' => Array (
				'link_normal' => 'isaa.it',
				'sitename' => 'Associazione ISAA',
				'shortname' => 'isaa',
				'motto' => 'Associazione Italiana per l\'Astronautica e lo Spazio'),
				
			'forumastronautico.it' => Array (
				'link_normal' => 'forumastronautico.it',
				'sitename' => 'ForumAstronautico',
				'shortname' => 'fait',
				'motto' => 'La prima e pi&ugrave; grande comunità Italiana dedicata allo spazio'),
				
			'astronautinews.it' => Array (
				'link_normal' => 'astronautinews.it',
				'sitename' => 'AstronautiNEWS',
				'shortname' => 'anews',
				'motto' => 'Le notizie in diretta dallo spazio'),
				
			'astronauticast.com' => Array (
				'link_normal' => 'astronauticast.com',
				'sitename' => 'AstronautiCAST',
				'shortname' => 'acast',
				'motto' => 'Il primo podcast italiano dedicato all\'astronautica'),
				
			'astronauticon.it' => Array (
				'link_normal' => 'astronauticon.it',
				'sitename' => 'AstronautiCON',
				'shortname' => 'acon',
				'motto' => 'La convention Italiana di Astronautica'),
				
			'stratospera.com' => Array (
				'link_normal' => 'stratospera.com',
				'sitename' => 'StratoSpera',
				'shortname' => 'stsp',
				'motto' => 'Palloni nella stratosfera per vedere il mondo dall\'alto'),
		
	);
	
?>

<style type="text/css">

#omnibus{
clear: both;
position: fixed;
top: 0px;
z-index: 99998;
text-transform: none;
height: 30px;
background-color: rgba(51, 54, 59, 0.8);
overflow: hidden;
padding-left: 15%;
padding-right: 15%;
/* 
border-bottom: 2px;
border-top: 0px;
border-left: 0px;
border-right: 0px;
border-color: grey;
border-style: solid;
 */

width: 100%;
}


	

.omnilist{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.omniitem {
	display: inline-block;
	font-size: 12px;
	height: 30px;
	padding-right: 15px;
}

.omnilinktext {
	height: 30px;
	display: inline-block;
	float:right;
	padding-top: 5px;
}

.omniitem > a:visited, .omniitem > a:link  {
 	color: #AAAAAA;
 	font-family: "Arial", sans-serif; !important
 	text-transform: bold;

}

.omnilink {

height: 30px;
display: block;

}
.omnilink > img {
	height:27px;	
	margin-right: 10px;
}



@media only screen and (max-width: 719px) {
	.omnilinktext {
		display: none;
	}

	.omniitem {
		margin-right: 20px;
	}

}
	
	
	
#isaa{
    background: url("http://www.isaa.it/banner_img/isaa.png") no-repeat;
	background-size: cover;
}

#acast{
    background: url("http://www.isaa.it/banner_img/acast.png") no-repeat;
	background-size: cover;
}

#anews{
    background: url("http://www.isaa.it/banner_img/anews.png") no-repeat;
	background-size: cover;
}

#stsp{
    background: url("http://www.isaa.it/banner_img/stsp.png") no-repeat;
	background-size: cover;
}

#acon{
    background: url("http://www.isaa.it/banner_img/acon.png") no-repeat;
	background-size: cover;
}

#fait{
    background: url("http://www.isaa.it/banner_img/fait.png") no-repeat;
	background-size: cover;
}


/* BARRA DEV */
#devserver {
width: 100%;
position: fixed;
bottom: 30px;
left: 0px;
background-color: #EE0000;
border-top: 3px solid #CCCCCC;
margin-bottom:-30px;
z-index: 999;
overflow: hidden; 
text-align: center;
}


</style>
	<?php
		$url = trim(strtolower($_SERVER['SERVER_NAME']));
		if(substr($url, 0, 3)=="dev")
		{
			echo'	<div id="devserver">
			<div style="width: 400px; margin: auto">
			<div style = "float: left; margin: 10px; color: #FFFFFF; font-size: 12pt;">
DEVELOPMENT SERVER
</div>
</div></div>';
		}
	?>



<div id="omnibus">
	<?php
		$needle = trim(strtolower($_SERVER['SERVER_NAME']));
		$prefix = substr($needle, 0,3);
		$needle = substr($needle, 4);
		
		echo '<ul class="omnilist">';
		foreach ($array_links as $a)
		{
			echo '<li class="omniitem">';
			echo '<a class="omnilink" target="_blank" href="http://'.$prefix.'.' .$a['link_normal'] .'">';
			echo '<img src="http://www.isaa.it/banner_img/'. $a['shortname'].'.png">'; 
			echo '<div class="omnilinktext">'. $a['sitename'] .'</div>';	
			echo '</a>';
			echo '</li>';
	        }
		
		echo '</ul>';
		
	?>
</div>
<?php
}
?>
