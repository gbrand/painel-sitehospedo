<section class="pagina">
	<ol class="breadcrumb">
		<li><a href="painel.html">Painel</a></li>
		<?php
		$getDadosDominio = arrayToObject($dominios->getDadosDominio($_GET['dominio']));
		echo '<li class="active">'.$getDadosDominio->body->dominio.'</li>';

		?>
		<li class="active">Gerenciar Emails</li>
	</ol>

</section>
