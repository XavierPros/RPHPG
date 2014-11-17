<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php

require_once 'Fight.php';

$theFight = new Fight();

?>
<span>
	<input id="weak_attack" type="button" value="Attaque faible"/>
	<input id="strong_attack" type="button" value="Attaque forte"/>
</span>
<div id="result">
</div>
<script>
$('#weak_attack').click(function()
{
	$.ajax({
		url: 'weak_attack.php',
		beforeSend: function(){},
		success: function(data){
			$('#result').html(data);
		}
	})
});

$('#strong_attack').click(function()
{
	$.ajax({
		url: 'strong_attack.php',
		beforeSend: function(){},
		success: function(data){
			$('#result').html(data);
		}
	})
});
</script>