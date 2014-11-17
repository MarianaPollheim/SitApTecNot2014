<!-- Main -->
<div id="main">
    <!-- Edit -->
    <section id="cadastro" class="four">
        <div class="container">

            <header>
                <h2>Alteração de dados do Usuário</h2>
            </header>

            <?php echo form_open('usuarios/atualizar', 'id="form-usuarios"'); ?>

            <input type="hidden" name="idusuario" value="<?php echo $dados_usuario[0]->idusuario; ?>"/>
            
            <div class="row half">
                <div class="6u"><input type="text" name="nome" placeholder="Nome" value="<?php echo $dados_usuario[0]->nome; ?>" />
                    <div class="error"><?php echo form_error('nome'); ?></div></div>

                <div class="6u"><input type="text" name="email" placeholder="E-mail" value="<?php echo $dados_usuario[0]->email; ?>"/>
                    <div class="error"><?php echo form_error('email'); ?></div></div>
            </div>

            <div class="row half">
                <div class="6u"><input type="password" name="senha" placeholder="Senha" value="<?php echo $dados_usuario[0]->senha; ?>"/>
                    <div class="error"><?php echo form_error('senha'); ?></div></div>

                <div class="6u"><input type="text" name="dtnascimento" placeholder="Data de Nascimento" value="<?php echo $dados_usuario[0]->dtNascimento; ?>"/>
                    <div class="error"><?php echo form_error('dtnascimento'); ?></div></div>
            </div>


            <div class="row half">
                <div class="12u">
                    <input type="text" name="foto" placeholder="Foto" value="<?php echo $dados_usuario[0]->foto; ?>"/>
                    <div class="error"><?php echo form_error('foto'); ?></div>
                </div>
            </div>


            <div class="row half">
                <div class="6u"><input type="text" name="cidade" placeholder="Cidade" value="<?php echo $dados_usuario[0]->cidade; ?>"/>
                    <div class="error"><?php echo form_error('cidade'); ?></div> </div>

                <div class="6u"> <input type="text" name="estado" placeholder="Estado" value="<?php echo $dados_usuario[0]->estado; ?>"/>
                    <div class="error"><?php echo form_error('estado'); ?></div></div>
            </div>


            <div class="row half">
                <div class="12u">
                    <input type="text" name="endereco" placeholder="Endereço" value="<?php echo $dados_usuario[0]->endereco; ?>"/>
                    <div class="error"><?php echo form_error('endereco'); ?></div>
                </div>
            </div>


            <div class="row half">
                <div class="6u">  <input type="text" name="bairro" placeholder="Bairro" value="<?php echo $dados_usuario[0]->bairro; ?>"/>
                    <div class="error"><?php echo form_error('bairro'); ?></div></div>

                <div class="6u">  <input type="text" name="cep" placeholder="CEP" value="<?php echo $dados_usuario[0]->cep; ?>"/>
                    <div class="error"><?php echo form_error('cep'); ?></div></div>
            </div>

            <div class="row half">
                <div class="6u"> <input type="text" name="telefone" placeholder="Telefone" value="<?php echo $dados_usuario[0]->telefone; ?>"/>
                    <div class="error"><?php echo form_error('telefone'); ?></div> </div>

                <div class="6u"> <input type="text" name="celular" placeholder="Celular" value="<?php echo $dados_usuario[0]->celular; ?>"/>
                    <div class="error"><?php echo form_error('celular'); ?></div> </div>
            </div>


            <div class="row">
                    <div class="12u">
                        <input type="submit" name="cadastrar" value="Cadastrar"/>
                    </div>
                </div>


            <?php echo form_close(); ?>


        </div>
    </section>

</div>