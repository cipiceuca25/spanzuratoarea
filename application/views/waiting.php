<div style="width:60%; float:left;">
<script type="text/javascript">
		
		function update()
		{
			
			$.ajax({
			  url: "<?=site_url( "welcome/ajaxamountofuserswaiting/" . $roomid )?>"
			}).done(function ( data ) {
			
				if( data == "stop" )
				{
					
					window.open( '<?=site_url( "welcome/room/" . $roomid )?>', '_self' );
					
				}
				else
				{
				
					 $("#waitingcnt").html( data );
					 
				}
			});
			
			setTimeout( "update();", 5000 );
			
		}
		
		setTimeout( "update();", 2000 );
		
</script>
<p>Sunt <span id="waitingcnt"><?=$waiting?></span> jucatori care asteapta ca jocul sa inceapa...</p>
<br />
<br />
<?php

	if( $admin == true )
	{
		
		?>
		<a href="<?=site_url("welcome/startroom/" . $roomid)?>" data-role="button">Porneste jocul.</a>
		<?
		
	}
	else
	{
		
		?>
		<p>
			<i>
				Asteapta ca administratorul sa porneasca jocul...
			</i>
		</p>

		<?
		
	}

	if( $answer == "" )
	{
		
		// New game..
		
	}
	else if( $last_winner == "Player 0" )
	{
		
		?>
		<br />
		<p>
			<h3>Ai pierdut! !</h3>
			<p>Cuvantul corect era: <strong><?=$answer?></strong>.</p>
		</p>
		<?
		
	}
	else
	{
		
		?>
		<br />
		<p>
			<h3>Castigatorul este: <u><?=$last_winner?></u> Felicitari!</h3>
			<p>Cuvantul corect era: <strong><?=$answer?></strong>.</p>
		</p>
		<?
		
	}

?>
</div>
<div style="width:33%; float:right; padding-right:5px; padding-top:1px;">
<iframe src="http://chatwing.com/chatbox/b70c6c532527d6457ff1831fe357eb67" width="100%" height="400" frameborder="0" scrolling="no">Please contact us at support[at]chatwing.com if you cannot embed the code</iframe>
</div>