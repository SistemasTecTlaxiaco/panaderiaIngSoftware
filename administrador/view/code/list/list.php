<div class="container mt-5" align="center">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="javascript:location.reload()">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de Productos</li>
  </ol>
</nav>
</div>
  <div class="container">
 
      <div class="row d-flex justify-content-around col-md-offset-1 " >
      
    </div>
     
        <div class="row d-flex justify-content-around mt-1">
            
            <div class="card col-md-12  bg-light">
            <article class="card-body">
               <button type="submit" style="position: absolute;right: 155px;" class="btn btn-info btn-xs" onclick="actualizar();" >Actualizar Lista</button> <button type="submit" style="position: absolute;right: 50px;" class="btn btn-info btn-xs" data-toggle="modal" data-target="#add">Nuevo Producto</button>
               <br>
<div class="row" >
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
    <div class="col-sm-offset-1 col-sm-8" >
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">		
				<table id="productoadd" class="table table-bordered table-hover " cellspacing="0" width="100%">
					<thead class="bg-light text-dark" >
						<tr>								
						
                            <th>Codigo</th>	
                            <th>Nombre</th>
                            <th>Precio</th>	
                            <th>Descripción</th>	
                            <th>Tamaño</th>
                            <th>Imagen</th>
                            <th>Opción</th>
           
              										
						</tr>
					</thead>					
				</table>
			</div>			
		</div>		
    </div>
  </article>
</div>
</div>
</div>
 