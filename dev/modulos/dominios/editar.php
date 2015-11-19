<section class="pagina">
    <ol class="breadcrumb">
        <li><a href="painel.html">Painel</a></li>
        <li class="active">gbrand.com.br</li>
        <li class="active">Editar Email</li>
    </ol>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#editar-senha-email" aria-controls="editar-senha-email" role="tab" data-toggle="tab"><i class="fa fa-unlock-alt"></i> Senha</a></li>
        <li role="presentation"><a href="#editar-espaco-email" aria-controls="editar-espaco-email" role="tab" data-toggle="tab"><i class="fa fa-align-left"></i> Espaço</a></li>
        <li role="presentation"><a href="#editar-recebimentos" aria-controls="editar-recebimentos" role="tab" data-toggle="tab"><i class="fa fa-arrow-left"></i> Recebimentos</a></li>
        <li role="presentation"><a href="#editar-envios" aria-controls="editar-envios" role="tab" data-toggle="tab"><i class="fa fa-paper-plane"></i> Envios</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="editar-senha-email">

            <h4>Editar senha do email: <span class="vermelho">joalheria@frodo.com.br</span></h4>

            <div class="row no-pd-lados">
                <!-- Form coluna esquerda -->
                <div class="form-ed-senha-email col-6">
                    <form action="">
                        <div class="form-group">
                            <label for="ed-senha-email">Nova senha</label>
                            <input type="text" class="form-control" id="ed-senha-email" placeholder="Senha" aria-describedby="user-dominio">
                        </div>
                        <div class="form-group">
                            <label for="ed-cfrm-senha-email">Confirme a senha</label>
                            <input type="password" class="form-control" id="ed-cfrm-senha-email" placeholder="Confirme a senha">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-roxo-full">Alterar senha</button>
                        </div>


                    </form>
                </div>
            </div>

        </div>
        <!-- editar-espaco-email -->
        <div role="tabpanel" class="tab-pane" id="editar-espaco-email">
            <h4>Editar espaço do email: <span class="vermelho">joalheria@frodo.com.br</span></h4>
            <p>Espaço total: 100mb</p>
            <p>Espaço ocupado: 10mb</p>
            <form id="sth-form-ed-espaco-email">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="espaco-conta">Novo espaço</label>
                            <input id="espaco-conta" type="text" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="10" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-roxo-full">Alterar espaço</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- editar-recebimentos-email -->
        <div role="tabpanel" class="tab-pane" id="editar-recebimentos">
            <h4>Editar recebimentos do email: <span class="vermelho">joalheria@frodo.com.br</span></h4>
            <form id="sth-form-ed-recebimentos">
                <div class="form-group">
                    <label for="remetente">Remete para</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="remetente" placeholder="Remetente">
                        <span class="input-group-btn">
        <button id="btn-add-remetente" class="btn btn-roxo-full" type="button"><i class="fa fa-plus"></i></button>
      </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remetente">Lista de destinatários</label>
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                   <button class="btn btn-vermelho-full"><i class="fa fa-arrow-down"></i> Remover destinatario</button>
                   <button class="btn btn-roxo-full"><i class="fa fa-check"></i> Atualizar redirecionamentos</button>
                </div>

            </form>
        </div>
        <!-- editar-envios-email -->
        <div role="tabpanel" class="tab-pane" id="editar-envios">
            <h4>Editar envios do email: <span class="vermelho">joalheria@frodo.com.br</span></h4>
                        <form id="sth-form-ed-envios">
                <div class="form-group">
                    <label for="copia">Copia para:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="copia" placeholder="Remetente">
                        <span class="input-group-btn">
        <button id="btn-add-remetente" class="btn btn-roxo-full" type="button"><i class="fa fa-plus"></i></button>
      </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remetente">Lista de destinos</label>
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                   <button class="btn btn-vermelho-full"><i class="fa fa-arrow-down"></i> Remover destinatario</button>
                   <button class="btn btn-roxo-full"><i class="fa fa-check"></i> Atualizar lista de envios</button>
                </div>

            </form>
        </div>
    </div>

</section>