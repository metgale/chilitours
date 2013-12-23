<div class = "pageview">
	<div class="row">
		<?php echo $this->Element('cta'); ?>
		<div class="span9 pull-right">
			<h1>Kreiraj svoje putovanje</h1>			
		</div>
		<div class="span9 pull-right">
			<form name="usertravel" action="/travels/usertravel" method="post">
				<input type="checkbox" /> Checkbox 1<br />
				<input type="text" /> Text Field 1<br />
				<input type="submit" value="Pošalji" class="btn btn-primary"/>
			</form>
		</div>
	</div>


</div>