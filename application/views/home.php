

<!-- Main -->
<div id="main">

    <!-- Inicio -->
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
    <section id="portfolio" class="two">
        <div class="container">

            <header>
                <h2>Portfolio</h2>
            </header>

            <p>Vitae natoque dictum etiam semper magnis enim feugiat convallis convallis
                egestas rhoncus ridiculus in quis risus amet curabitur tempor orci penatibus.
                Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis 
                fusce hendrerit lacus ridiculus.</p>

            <div class="row">
                <div class="4u">
                    <article class="item">  
                        <a href="#" class="image fit"><img src="<?php echo base_url('assets/images/pic02.jpg'); ?>" alt="" /></a>
                        <header>
                            <h3>Ipsum Feugiat</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo base_url('assets/images/pic03.jpg'); ?>" alt="" /></a>
                        <header>
                            <h3>Rhoncus Semper</h3>
                        </header>
                    </article>
                </div>
                <div class="4u">
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo base_url('assets/images/pic04.jpg'); ?>" alt="" /></a>
                        <header>
                            <h3>Magna Nullam</h3>
                        </header>
                    </article>
                    <article class="item">   
                        <a href="#" class="image fit"><img src="<?php echo base_url('assets/images/pic05.jpg'); ?>" alt="" /></a>
                        <header>
                            <h3>Natoque Vitae</h3>
                        </header>
                    </article>
                </div>
                <div class="4u">
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo base_url('assets/images/pic06.jpg'); ?>" alt="" /></a>
                        <header>
                            <h3>Dolor Penatibus</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo base_url('assets/images/pic07.jpg'); ?>" alt="" /></a>
                        <header>
                            <h3>Orci Convallis</h3>
                        </header>
                    </article>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Contact</h2>
            </header>

            <p>Elementum sem parturient nulla quam placerat viverra 
                mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
                donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
                orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

            <form method="post" action="#">
                <div class="row half">
                    <div class="6u"><input type="text" name="name" placeholder="Name" /></div>
                    <div class="6u"><input type="text" name="email" placeholder="Email" /></div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <input type="submit" value="Send Message" />
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- Cadastro -->
    <section id="cadastro" class="five">
        <div class="container">

            <header>
                <h2>Cadastro</h2>
            </header>

            <?php echo form_open('usuarios/inserir', 'id="form-usuarios"'); ?>

            <label for="nome">Nome:</label><br/>
            <input type="text" name="nome" value="<?php echo set_value('nome'); ?>"/>
            <div class="error"><?php echo form_error('nome'); ?></div>


            <label for="email">Email:</label><br/>
            <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
            <div class="error"><?php echo form_error('email'); ?></div>

            <label for="Senha">Senha:</label><br/>
            <input type="password" name="senha" value="<?php echo set_value('senha'); ?>"/>
            <div class="error"><?php echo form_error('senha'); ?></div>

            <label for="dtnascimento">Data Nascimento:</label><br/>
            <input type="text" name="dtnascimento" value="<?php echo set_value('dtnascimento'); ?>"/>
            <div class="error"><?php echo form_error('dtnascimento'); ?></div>

            <label for="foto">Foto:</label><br/>
            <input type="text" name="foto" value="<?php echo set_value('foto'); ?>"/>
            <div class="error"><?php echo form_error('foto'); ?></div>

            <label for="cidade">Cidade:</label><br/>
            <input type="text" name="cidade" value="<?php echo set_value('cidade'); ?>"/>
            <div class="error"><?php echo form_error('cidade'); ?></div>

            <label for="estado">Estado:</label><br/>
            <input type="text" name="estado" value="<?php echo set_value('estado'); ?>"/>
            <div class="error"><?php echo form_error('estado'); ?></div>

            <label for="bairro">Bairro:</label><br/>
            <input type="text" name="bairro" value="<?php echo set_value('bairro'); ?>"/>
            <div class="error"><?php echo form_error('bairro'); ?></div>

            <label for="endereco">Endereço:</label><br/>
            <input type="text" name="endereco" value="<?php echo set_value('endereco'); ?>"/>
            <div class="error"><?php echo form_error('endereco'); ?></div>

            <label for="cep">CEP:</label><br/>
            <input type="text" name="cep" value="<?php echo set_value('cep'); ?>"/>
            <div class="error"><?php echo form_error('cep'); ?></div>

            <label for="telefone">Telefone:</label><br/>
            <input type="text" name="telefone" value="<?php echo set_value('telefone'); ?>"/>
            <div class="error"><?php echo form_error('telefone'); ?></div>

            <label for="celular">Celular:</label><br/>
            <input type="text" name="celular" value="<?php echo set_value('celular'); ?>"/>
            <div class="error"><?php echo form_error('celular'); ?></div>



            <input type="submit" name="cadastrar" value="Cadastrar" />

            <?php echo form_close(); ?>
            <!-- Lista as Pessoas Cadastradas -->
            <div id="grid-usuarios">
                <ul>
                    <?php foreach ($usuarios as $usuario): ?>
                        <li>
                            <a title="Deletar" href="<?php echo base_url() . 'usuarios/deletar/' . $usuario->idusuario; ?>" onclick="return confirm('Confirma a exclusão deste registro?')"><img src="<?php echo base_url('assets/images/lixo.png'); ?>" /></a>
                            <span> - </span>
                            <a title="Editar" href="<?php echo base_url() . 'usuarios/editar/' . $usuario->idusuario; ?>">
                                <?php echo $usuario->nome; ?></a>
                            <span> - </span>
                            <span><?php echo $usuario->email; ?></span>
                            <span> - </span>
                            <span><?php echo $usuario->dtNascimento; ?></span>
                            <span> - </span>
                            <span><?php echo $usuario->cidade; ?></span>
                            <span> - </span>
                            <span><?php echo $usuario->estado; ?></span>
                            <span> - </span>
                            <span><?php echo $usuario->bairro; ?></span>
                            <span> - </span>
                            <span><?php echo $usuario->endereco; ?></span>
                            <span> - </span>
                            <span><?php echo $usuario->cep; ?></span>
                            <span> - </span>
                            <span><?php echo $usuario->telefone; ?></span>
                            <span> - </span>
                            <span><?php echo $usuario->celular; ?></span>
                            <span> - </span>
                            <span><img src="<?php echo base_url("assets/images/{$usuario->foto}"); ?>"</span>




                        </li>
                    <?php endforeach ?>
                </ul>
            </div>

        </div>
    </section>

</div>