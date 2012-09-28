<h3>Jocuri active:</h3>
<div style="width:60%; float:left;">
<?php

	foreach( $games as $game )
	{
		
		?>
		<a href="<?=site_url("welcome/room/" . $game["id"])?>" data-role="button"><?=$game["name"]?></a>
		<?
		
	}

?>

<h3>Sau creaza un joc nou:</h3>
<p>Creaza un joc nou si invita-ti prietenii sa joace cu tine!</p>

<form method="post" action="<?=site_url("welcome/newroom")?>">
	<label for="basic">Alege un nume pentru jocul tau:</label>
	<input type="text" name="name" id="basic" value=""  />
	<div class="ui-block-b"><button type="submit" data-theme="a">Trimite</button></div>
</form>
</div>
<div style="width:33%; float:right; padding-right:5px; padding-top:1px;">
<iframe src="http://chatwing.com/chatbox/b70c6c532527d6457ff1831fe357eb67" width="100%" height="400" frameborder="0" scrolling="no">Please contact us at support[at]chatwing.com if you cannot embed the code</iframe>
</div>