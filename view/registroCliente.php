<?php
include '../controllers/controlRegistroUser.php';
?>
<?php 
include 'partials/header.php' 
?>
<nav class="navbar navbar-light" he  style="background-color: #EEEB2B">
        <a href="../index.php"><img id=logo1 src="../img/logo.png"></a>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" >
                    <fieldset>
                        <legend class=" header">Registro de Usuario</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input name="aPaterno" type="text" placeholder="Apellido Paterno" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input name="aMaterno" type="text" placeholder="Apellido Materno" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="phone" type="tel" placeholder="Telefono" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="email" type="email" placeholder="Correo Electronico" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="user" type="text" placeholder="Usuario" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="password" type="password" placeholder="Contraseña" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="passwordR" type="password" placeholder="Repetir la contraseña" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" name="submit"class="btn btn-primary btn-lg">Crear Cuenta</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'partials/footer.php'; ?>