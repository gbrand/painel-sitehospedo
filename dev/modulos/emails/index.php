 <div class="pagina">
                <ol class="breadcrumb">
                    <li><a href="painel.html">Painel</a></li>
                    <li class="active">Gerenciar Emails</li>
                </ol>
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#listar-emails" aria-controls="listar-emails" role="tab" data-toggle="tab">Contas</a></li>
                        <li role="presentation"><a href="#criar-email" aria-controls="criar-email" role="tab" data-toggle="tab">Nova conta</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="listar-emails">
                            <table id="lista-emails" class="table table-hover lista-itens">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>balladares@imobiliarialions.com.br</td>
                                        <td>
                                            <button class="btn btn-sm btn-roxo-light"><i class="fa fa-tasks"></i></button>
                                            <button class="btn btn-sm btn-amarelo-light"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-sm btn-vermelho-light"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>mirela@imobiliarialions.com.br</td>
                                        <td>
                                            <button class="btn btn-sm btn-roxo-light"><i class="fa fa-tasks"></i></button>
                                            <button class="btn btn-sm btn-amarelo-light"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-sm btn-vermelho-light"><i class="fa fa-trash-o"></i></button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            eduardo@imobiliarialions.com.br

                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-roxo-light ativo" data-toggle="popover" title="Espaço da conta" data-content="
                                        <p class='small'>20/100 mb</p>                                                    <div class='progress'>
                                                <div class='progress-bar progress-bar-vermelho' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: 60%'>
                                                    <span class='sr-only'>60% Complete</span>
                                                </div>
                                            </div>  " data-placement="left"><i class="fa fa-tasks"></i></button>
                                            <button class="btn btn-sm btn-amarelo-light"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-sm btn-vermelho-light"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
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

                </div>
            </div>
