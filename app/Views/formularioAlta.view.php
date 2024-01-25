<!-- Content Row -->

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Introduzca los datos del nuevo usuario</h6>                                    
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="/usuario/add" method="post">         
                    <!--form method="get"-->
                    <div class="row">
                         <div class="mb-3 col-sm-6">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="Nombre" value="<?php echo isset($input['name']) ? $input['name'] : ''; ?>" required>
                                   <p class="text-danger"><?php echo isset($errores['name']) ? $errores['name'] : ''; ?></p>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="email">EMAIL</label>
                            <input class="form-control" id="email" type="email" name="email" placeholder="Email" value="<?php echo isset($input['email']) ? $input['email'] : ''; ?>" required>
                            
                            <p class="text-danger"><?php echo !empty($input['mail']) && empty($email)  ? $email : " "; ?></p>
                                   
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="pwd1">Contraseña</label>
                            <input class="form-control" id="pwd1" type="password" name="pwd1" placeholder="Contraseña" value="<?php echo isset($input['pwd1']) ? $input['pwd1'] : ''; ?>" required>
                                   <p class="text-danger"><?php echo isset($errores['pwd1']) ? $errores['pwd1'] : ''; ?></p>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="pwd2">Confirmar Contraseña</label>
                            <input class="form-control" id="pwd2" type="password" name="pwd2" placeholder="Confirmar Contraseña" value="<?php echo isset($input['pwd2']) ? $input['pwd2'] : ''; ?>" required>
                                   <p class="text-danger"><?php echo isset($errores['pwd2']) ? $errores['pwd2'] : ''; ?></p>

                        </div>
                     
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="language">Idioma:</label>
                                <select name="language" id="language" class="form-control select2" data-placeholder="Idioma">                                    
                                    <?php foreach($idiomas as $idioma){ ?>
                                    <option value="<?php echo $idioma['nombre_idioma']; ?>" <?php echo (isset($input['nombre_idioma']) && in_array($idioma['nombre_idioma'], $idioma['nombre_idioma'])) ? 'selected' : ''; ?>><?php echo $idioma['nombre_idioma']; ?></option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div> 
                        
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="nombre_rol">Rol:</label>
                                <select name="nombre_rol" id="nombre_rol" class="form-control select2" data-placeholder="Rol">                                    
                                    <?php foreach($roles as $rol){ ?>
                                    <option value="<?php echo $rol['nombre_rol']; ?>" <?php echo (isset($input['nombre_rol']) && in_array($rol['nombre_rol'], $input['nombre_rol'])) ? 'selected' : ''; ?>><?php echo $rol['nombre_rol']; ?></option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div> 
                        
                        <div class="col-12 text-right">                            
                            <input type="submit" value="Enviar" name="enviar" class="btn btn-primary"/>
                            <a href="/usuarios-sistema" class="btn btn-danger ml-3">Cancelar</a>                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>                        
</div>