<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href=" <?php echo base_url('assets/css/estilo.css'); ?>"/>
</head>
<body>
   <?php echo form_open('usuarios/inserir', 'id="form-usuarios"'); ?>
 
    <label for="nome">Nome:</label><br/>
    <input type="text" name="nome" value="<?php echo set_value('nome'); ?>"/>
    <div class="error"><?php echo form_error('nome'); ?></div>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
    <div class="error"><?php echo form_error('email'); ?></div>
    <input type="submit" name="cadastrar" value="Cadastrar" />
 
    <?php echo form_close(); ?>
    <!-- Lista as Pessoas Cadastradas -->
<div id="grid-usuarios">
    <ul>
	<?php foreach($usuarios as $usuario): ?>
	<li>
	    <a title="Deletar" href="<?php echo base_url() . 'usuarios/deletar/' . $usuario->idusuario; ?>" onclick="return confirm('Confirma a exclusão deste registro?')"><img src="<?php echo base_url('assets/images/lixo.png');?>" /></a>
	    <span> - </span>
	    <a title="Editar" href="<?php echo base_url() . 'usuarios/editar/' . $usuario->idusuario; ?>"><?php echo $usuario->nome; ?></a>
	    <span> - </span>
	    <span><?php echo $usuario->email; ?></span>
	</li>
	<?php endforeach ?>
    </ul>
</div>
<!-- Fim Lista -->
</body>
</html>