

<!-- Main -->
<div id="main">

    <!-- Inicio -->
    <section id="cadastro" class="four">
        <div class="container">

            <header>
                <h2> Alteração de dados do usuario</h2>
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

            <?php echo form_open('usuarios/atualizar', 'id="form-usuarios"'); ?>

            <div class="row half">
                    <div class="12u"><input type="text" name="name" placeholder="Nome" /></div>
                    <div class="12u"><input type="text" name="email" placeholder="Email" /></div>
                    
                    <div class="12u"><input type="password" name="senha" placeholder="Senha" /></div>
                    <div class="12u"><input type="text" name="dtnascimento" placeholder="Data Nascimento" /></div>
                    <div class="12u"><input type="text" name="foto" placeholder="Foto" /></div>
                    <div class="6u"><input type="text" name="cidade" placeholder="Cidade" /></div>
                    <div class="6u"><input type="text" name="estado" placeholder="Estado" /></div>
                    <div class="12u"><input type="text" name="bairro" placeholder="Bairro" /></div>
                    <div class="12u"><input type="text" name="endereco" placeholder="Endereço" /></div>
                    <div class="12u"><input type="text" name="cep" placeholder="CEP" /></div>
                    <div class="6u"><input type="text" name="telefone" placeholder="Telefone" /></div>
                    <div class="6u"><input type="text" name="celular" placeholder="Celular" /></div>
                </div>
            
    


           

            


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