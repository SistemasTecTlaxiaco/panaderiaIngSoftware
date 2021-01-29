<div>
  <form class="addproducto" id="addproducto" name="addproducto" action="POST" enctype="multipart/form-data">
    <div class="modal fade " id="add" name="add" tabindex="-1" role="dialog" aria-labelledby="modalPasswordLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content ">
          <div class="modal-header">
          <strong data-name="" style="color:#000000">Agregar Producto</strong> 
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <br>
          <div class="modal-body">
              <div id="resp_alert" align="center"></div>
              <div class="row">
              <div class="col-md-5 mb-3">
              <div class="form-group has-feedback">
                <div class="photo">
        <div class="prevPhoto">
        <span class="delPhoto notBlock">X</span>
        <label for="foto"></label>
        </div>
        <div class="upimg">
        <input type="file" name="foto" id="foto" title="Agrega una Imagen" autofocus autocomplete="off" ><span class="help-block"></span>
        </div>
        <div id="form_alert"></div>
</div>
</div>
            </div>
            
            <div class="col-md-7">
              <div class="form-group has-feedback">

              <input type="text" name="nombre" id="nombre" class="form-control" autofocus placeholder="Nombre del producto" required autocomplete="off" title=" Minimo 6, Maximo 50" minlength="6" maxlength="50"><span class="help-block"></span></div>

             <div class="form-group has-feedback">
               <input type="number" name="precio" id="precio" class="form-control" min="1" max="20" autofocus placeholder="Precio" required autocomplete="off" title="1 Minimo , Maximo 50">
               <span class="help-block"></span></div>

                <div class="form-group has-feedback">
               <select id="tamano" name="tamano" required autofocus class="form-control" autocomplete="off">
                 <option value="" selected>Elige el Tamaño</option>
                 <option value="Grande">Grande</option>
                 <option value="Mediano">Mediano</option>
                 <option value="Chico">Chico</option>
               </select>
               <span class="help-block"></span></div>

              <div class="form-group has-feedback">
               <textarea type="text" name="descripcion" id="descripcion" class="form-control" autofocus placeholder="Descripción" required autocomplete="off" title="5 Minimo , Maximo 1000" minlength="5" maxlength="500"></textarea>
               <span class="help-block"></span></div>  
           </div>
           </div>
            <div class="col-md-2 mb-2">
            </div>
          </div>
          
          <div class="modal-footer" align="center">
            <button type="submit" class="btn btn-success" id="btnadd">Aceptar</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div>
<form class="upproducto" id="upproducto" name="upproducto" action="POST" enctype="multipart/form-data">
    <div class="modal fade " id="updatep" name="updatep" tabindex="-1" role="dialog" aria-labelledby="modalPasswordLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content ">
          <div class="modal-header">
          <strong data-name="" style="color:#000000">Actualizar Producto</strong> 
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <br>
          <div class="modal-body">
              <div id="resp_alert2" align="center"></div>
              <div class="row">
              <div class="col-md-5 mb-3">
              <div class="form-group has-feedback">
                <div class="previmage">
                 <img id="previmg" src=""> 
                </div>
             </div>
            </div>
            <div class="col-md-7">
              <div class="form-group has-feedback">
              <input type="text" readonly name="codigo2" id="codigo2" class="form-control" autofocus placeholder="Código del producto" required autocomplete="off" title="Código del producto" minlength="8" maxlength="50"><span class="help-block"></span></div>
              <div class="form-group has-feedback">
              <input type="text" name="nombre2" id="nombre2" class="form-control" autofocus placeholder="Nombre del producto" required autocomplete="off" title=" Minimo 6, Maximo 50" minlength="6" maxlength="500"><span class="help-block"></span></div>

             <div class="form-group has-feedback">
               <input type="number" name="precio2" id="precio2" class="form-control" min="1" max="20" autofocus placeholder="Precio" required autocomplete="off" title="1 Minimo , Maximo 50">
               <span class="help-block"></span></div>
               
               <div class="form-group has-feedback">
               <select id="tamano2" name="tamano2" required autofocus class="form-control" autocomplete="off">
                 <option value="" selected>Elige el Tamaño</option>
                 <option value="Grande">Grande</option>
                 <option value="Mediano">Mediano</option>
                 <option value="Chico">Chico</option>
               </select>
               <span class="help-block"></span></div>

              <div class="form-group has-feedback">
               <textarea type="text" name="descripcion2" id="descripcion2" class="form-control" autofocus placeholder="Descripción" required autocomplete="off" title="5 Minimo , Maximo 50" minlength="5" maxlength="500" ></textarea>
               <span class="help-block"></span></div>
               <div class="form-group has-feedback">
                <input type="file" name="imagen" id="imagen" class="form-control btn btn-primary" autocomplete="off" title="Actualizar Imagen"> <span class="help-block"></span>
               </div>
              
           </div>
           </div>
            <div class="col-md-2 mb-2">
            </div>
          </div>