<h3>Jocul tau este pregatit!</h3>

<p>Poti trimite linkul catre joc prietenilor ti sau poti intra in joc.</p>

<a href="http://www.facebook.com/sharer.php?u=<?=site_url("Welcome/room/" . $id)?>&t=Vino sa joci spanzuratoarea cu mine!" target="_blank"><img src="<?=site_url("../img/facebook_64.png")?>" /></a>

<a href="http://twitter.com/home?status=Vino sa joci spanzuratoarea cu mine! <?=site_url("Welcome/room/" . $id)?>" target="_blank"><img src="<?=site_url("../img/twitter_64.png")?>" /></a>

<a target="_blank" href="https://plus.google.com/share?url=<?=site_url("Welcome/room/" . $id)?>" >
    <img src="<?=site_url("../img/google_64.png")?>" alt="Google+" title="Google+"/></a>
	
<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=site_url("Welcome/room/" . $id)?>&title=The title of the page or post&summary=&source=Spanzuratoarea" target="_new">
<img src="<?=site_url("../img/linkedin_64.png")?>" alt="linkedin share button" title="linkedin share button" />
</a><br \>
<p>Sau trimite acest link:</p>

<input type="text" name="name" id="basic" value="<?=site_url("welcome/room/" . $id)?>"  />
		
<a href="<?=site_url("welcome/room/" . $id)?>" data-role="button">Intra in joc.</a>
	