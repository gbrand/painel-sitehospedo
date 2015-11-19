
<section class="pagina">
	<ol class="breadcrumb">
		<li><a href="painel.html">Painel</a></li>
		<?php
		$getDadosDominio = arrayToObject($dominios->getDadosDominio($_GET['dominio']));
			echo '<li class="active">'.$getDadosDominio->body->dominio.'</li>';

		?>
		<li class="active">Gerenciar Emails</li>
	</ol>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#listar-emails" aria-controls="listar-emails" role="tab" data-toggle="tab">Contas</a></li>
			<li role="presentation"><a href="#criar-email" aria-controls="criar-email" role="tab" data-toggle="tab">Nova conta</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="listar-emails">
				<table id="lista-emails" class="table table-hover table-bordered table-condensed lista-itens">
					<thead>
						<tr>
							<th>Email</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$getEmails = arrayToObject($emails->getEmails($_GET['dominio']));

						foreach ($getEmails->body as $values):
							?>



						<tr>
							<td><?php echo $values->email; ?></td>
							<td>
								<a href="/dominios/tamanho/?email=<?php echo $values->email; ?>" class="btn btn-sm btn-roxo-light"><i class="fa fa-tasks"></i></a>
								<a href="/dominios/editar/?email=<?php echo $values->email; ?>" class="btn btn-sm btn-amarelo-light"><i class="fa fa-pencil"></i></a>
								<a onclick="" href="/dominios/excluir/?email=<?php echo $values->email; ?>" class="btn btn-sm btn-vermelho-light"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
					<?php endforeach ?>


				</tbody>
			</table>
		</div>
		<div role="tabpanel" class="tab-pane" id="criar-email">
			<form action="">
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
			</form>
		</div>
	</div>

</section>
