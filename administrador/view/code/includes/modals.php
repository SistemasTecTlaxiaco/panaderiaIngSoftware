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