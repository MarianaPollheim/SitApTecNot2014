<!-- Main -->
<div id="main">

    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">

            <header>
                <h2 class="alt">Hi! I'm <strong>Prologue</strong>, a <a href="http://html5up.net/license">free</a> responsive<br />
                    site template designed by <a href="http://html5up.net">HTML5 UP</a>.</h2>
                <p>Ligula scelerisque justo sem accumsan diam quis<br />
                    vitae natoque dictum sollicitudin elementum.</p>
            </header>

            <footer>
                <a href="#portfolio" class="button scrolly">Magna Aliquam</a>
            </footer>

        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="four">
        <div class="container">

            <header>
                <h2>Noticia</h2>
            </header>

          

            <?php echo form_open('noticia/inserir', 'id="form-noticia"'); ?>

            <div class="row half">
                <div class="12u"><input type="text" name="titulo" placeholder="Titulo"/>
                    <div class="error"><?php echo form_error('titulo'); ?></div></div>

                <div class="12u"><input type="text" name="texto" placeholder="Texto"/>
                    <div class="error"><?php echo form_error('texto'); ?></div></div>
            </div>

            

            <div class="row">
                    <div class="12u">
                        <input type="submit" name="adicionar" value="Adicionar"/>
                    </div>
                </div>


            <?php echo form_close(); ?>

            
    </section>
    <!-- Cadastro -->
    <section id="cadastro" class="four">
        <div class="container">

            <header>
                <h2>Cadastro</h2>
            </header>

            <?php echo form_open('usuarios/inserir', 'id="form-usuarios"'); ?>

            <div class="row half">
                <div class="6u"><input type="text" name="nome" placeholder="Nome"/>
                    <div class="error"><?php echo form_error('nome'); ?></div></div>

                <div class="6u"><input type="text" name="email" placeholder="E-mail"/>
                    <div class="error"><?php echo form_error('email'); ?></div></div>
            </div>

            <div class="row half">
                <div class="6u"><input type="password" name="senha" placeholder="Senha"/>
                    <div class="error"><?php echo form_error('senha'); ?></div></div>

                <div class="6u"><input type="text" name="dtnascimento" placeholder="Data de Nascimento"/>
                    <div class="error"><?php echo form_error('dtnascimento'); ?></div></div>
            </div>


            <div class="row half">
                <div class="12u">
                    <input type="text" name="foto" placeholder="Foto"/>
                    <div class="error"><?php echo form_error('foto'); ?></div>
                </div>
            </div>


            <div class="row half">
                <div class="6u"><input type="text" name="cidade" placeholder="Cidade"/>
                    <div class="error"><?php echo form_error('cidade'); ?></div> </div>

                <div class="6u"> <input type="text" name="estado" placeholder="Estado"/>
                    <div class="error"><?php echo form_error('estado'); ?></div></div>
            </div>


            <div class="row half">
                <div class="12u">
                    <input type="text" name="endereco" placeholder="Endereço"/>
                    <div class="error"><?php echo form_error('endereco'); ?></div>
                </div>
            </div>


            <div class="row half">
                <div class="6u">  <input type="text" name="bairro" placeholder="Bairro"/>
                    <div class="error"><?php echo form_error('bairro'); ?></div></div>

                <div class="6u">  <input type="text" name="cep" placeholder="CEP"/>
                    <div class="error"><?php echo form_error('cep'); ?></div></div>
            </div>

            <div class="row half">
                <div class="6u"> <input type="text" name="telefone" placeholder="Telefone"/>
                    <div class="error"><?php echo form_error('telefone'); ?></div> </div>

                <div class="6u"> <input type="text" name="celular" placeholder="Celular"/>
                    <div class="error"><?php echo form_error('celular'); ?></div> </div>
            </div>


            <div class="row">
                    <div class="12u">
                        <input type="submit" name="cadastrar" value="Cadastrar"/>
                    </div>
                </div>


            <?php echo form_close(); ?>

            <!-- Lista as Pessoas Cadastradas -->
            <br />
            <div class="row">
                    <?php foreach ($usuarios as $usuario): ?>
                
                    <article class="item 4u">
                        <a href="#" class="image fit">
                        <img src="<?php echo base_url("assets/images/{$usuario->foto}"); ?>" />
                        </a>
                        <header>
                            <h3><a title="Editar" href="<?php echo base_url() . 'usuarios/editar/' . $usuario->idusuario; ?>"><?php echo $usuario->nome; ?></a></h3>
                        </header>
                        <!--
                            <p><?php echo $usuario->email; ?></p>
                           
                            <p><?php echo $usuario->dtNascimento; ?></p>
                           
                            <p><?php echo $usuario->senha; ?></p>
                           
                            <p><?php echo $usuario->endereco; ?></p>
                           
                            <p><?php echo $usuario->cidade; ?></p>
                           
                            <p><?php echo $usuario->estado; ?></p>
                          
                            <p><?php echo $usuario->bairro; ?></p>
                           
                            <p><?php echo $usuario->cep; ?></p>
                           
                            <p><?php echo $usuario->telefone; ?></p>
                            
                            <p><?php echo $usuario->celular; ?></p>
                        -->
                    </article>
                    <?php endforeach ?>
                </div>
           
            <!-- Fim Lista -->



        </div>
    </section>
    
    <!-- Login -->
    <section id="login" class="four">
        <div class="container">

            <header>
                <h2>Login</h2>
            </header>

            <?php echo form_open('usuarios/login', 'id="form-usuarios"'); ?>

            <div class="row half">
                <div class="6u"><input type="text" name="loginEmail" placeholder="E-mail"/>
                    <div class="error"><?php echo form_error('email'); ?></div></div>

                <div class="6u"><input type="password" name="loginSenha" placeholder="Senha"/>
                    <div class="error"><?php echo form_error('senha'); ?></div></div>
            </div>

            <div class="row">
                    <div class="12u">
                        <input type="submit" name="logar" value="Login"/>
                    </div>
                </div>


            <?php echo form_close(); ?>

        </div>
    </section>

</div>