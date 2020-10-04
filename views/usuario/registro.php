<h1>Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?> 

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registro Completado!</strong> satisfactoriamente.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Registro fallido!</strong> introduce bien los datos.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>

<form action="<?=base_url?>usuario/save" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos">

    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="password">Contraseña</label>
    <input type="password" name="password">

    <input type="submit" value="Registrarse">
</form>