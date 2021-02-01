$(document).on("ready", function(){
    listar();
    listardos();
});

function actualizar(){
    listar();
    listardos();
}
var listar= function(){
    var table= $("#productoadd").DataTable({
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },"destroy":true,
        "ajax":{
            "url":"view/code/controlproducto.php"
        },
        "columns":[
            {"data" : "codigo"},
            {"data" : "nombre"},
            {"data" : "precio"},
            {"data" : "descripcion"},
            {"data" : "tamano"},
            {"data" : "imagen",
            "render": function(data,type,row){
             // var data_n= data.split("/");
             return '<center><img src="view/code/img/uploads/'+data+'" width="120" style="height:120px;"/></center>';
              // return '<center><img src="'+data_n[1]+"/"+data_n[2]+'" width="120" height="80"/></center>';
            }
        },

        {"defaultContent":"<button type='button' style='width:35px; height:30px' class='editarp btn btn-primary 'data-toggle='modal' data-target='#updatep'><i class='fa fa-pencil-square-o'></i></button>    <button type='button' class='eliminarp btn btn-danger' style='width:35px; height:30px' data-toggle='modal' data-target='#modaleliminarp' ><i class='fa fa-trash-o'></i></button>"}
        ]
    });
     editarp("#productoadd tbody", table);
    eliminarp("#productoadd tbody", table);
}




var eliminarp= function(tbody,table){
    $(tbody).on("click","button.eliminarp", function () {
        var data = table.row( $(this).parents("tr")).data();
        var eliminarp=$(".EliminarP #eliminarp").val(data.id);
    });
}
    

$(document).on("submit", ".EliminarP", function(event){
    event.preventDefault();
    var $form = $(this);
  
    var data_form = {
        eliminar: $("#eliminarp",$form).val()
        
         }
         if(data_form == null || data_form.eliminar == ''){
            warningalert("Error!!!",3);
            return false;        
        }
    var url_php = 'view/code/controlEliminar.php';
    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){ 
       if(res.full == false){
           dangeralert(res.mensaje,3)
            return false;
       } 
    if(res.full== true){
        successalert(res.mensaje,3)
        $("#modaleliminarp .close").click();
        listar();
        return false;
   } 
    })
    .fail(function ajaxError(e){
    })
    .always(function ajaxSiempre(){
    })
    return false;
});

 
var editarp= function(tbody,table){
    $(tbody).on("click","button.editarp", function () {
        var data = table.row( $(this).parents("tr")).data();
      // console.log(data);
        var codigo2=$("#codigo2").val(data.codigo),
            nombre2=$("#nombre2").val(data.nombre),
            precio2=$("#precio2").val(data.precio),
            tamano2=$("#tamano2").val(data.tamano),
            descripcion2=$("#descripcion2").val(data.descripcion),
            dat_n=data.imagen,
            dat=$("#previmg").attr('src', 'view/code/img/uploads/'+dat_n)   
    });
}

$(document).on("submit", ".upproducto", function(event){
    event.preventDefault();
var data_form= new FormData($('#upproducto')[0]);
var imagen       = document.getElementById("imagen").files;
 if($("#imagen").val() !=''){
                var type = imagen[0].type;
                var name = imagen[0].name;
                if(name !='' && type !=''){
                if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
                {
                   dangeralert('Solo se permiten formatos de imagen / .jpg / .png / .jpeg /',2);
                   return false; 
                }
            }}
    var url_php = 'view/code/controlupdate.php';
    $.ajax({
        type:'POST',
        dataType: 'json',
        url: url_php,
        data: data_form,
        contentType:false,
        processData: false,
        async: true,
    })
    .done(function ajaxDone(res){
       if(res.result == false){
           dangeralert(res.msg,2);
            return false;
       } 
    if(res.result== true){
        successalert(res.msg,2);
        $("#updatep .close").click();
        $("#imagen").val('');
        $('input').val("");
        $('select').val("");
        listar();
        return false;
   } 
    })
    .fail(function ajaxError(e){
    })
    .always(function ajaxSiempre(){
    })
    return false;
});

$(document).on("submit", ".addproducto", function(event){
    event.preventDefault();
var data_form= new FormData($('#addproducto')[0]);

    var url_php = 'view/code/controlproduct.php';
    $.ajax({
        type:'POST',
        dataType: 'json',
        url: url_php,
        data: data_form,
        contentType:false,
        processData: false,
        async: true,
    })
    .done(function ajaxDone(res){
       if(res.result == false){
           dangeralert(res.msg,1)
            return false;
       } 
    if(res.result== true){
        successalert(res.msg,1)
        $("#add .close").click();
        $("#foto").val('');
        $('input').val("");
        $('select').val("");
        $('textarea').val("");

        listar();
        return false;
   } 
    })
    .fail(function ajaxError(e){
    })
    .always(function ajaxSiempre(){
    })
    return false;
});


var listardos= function(){
    var table= $("#listpedido").DataTable({
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },"destroy":true,
        "ajax":{
            "url":"controllers/controlpedido.php"
        },
        "columns":[
            {"data" : "cliente"},
            {"data" : "producto"},
            {"data" : "tamano"},
            {"data" : "cantidad"},
            {"data" : "total"},
            {"data" : "telefono"},
        {"defaultContent":"<button type='button' class='eliminarpedido btn btn-warning' style='width:100%; height:30px' data-toggle='modal' data-target='#modaleliminarpedido' ><i class='fa fa-ban'></i></button>"}
        ]
    });
    eliminarpedido("#listpedido tbody", table);
}

var eliminarpedido= function(tbody,table){
    $(tbody).on("click","button.eliminarpedido", function () {
        var data = table.row( $(this).parents("tr")).data();
        var eliminarp=$(".EliminarPedido #eliminarpedido").val(data.id);
    });
}

$(document).on("submit", ".EliminarPedido", function(event){
    event.preventDefault();
    var $form = $(this);
  
    var data_form = {
        eliminarpedido: $("#eliminarpedido",$form).val()
        
         }
         if(data_form == null || data_form.eliminar == ''){
            warningalert("Error!!!",3);
            return false;        
        }
    var url_php = 'controllers/pedidocontrol.php';
    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){ 
       if(res.full == false){
           dangeralert(res.mensaje,3)
            return false;
       } 
    if(res.full== true){
        successalert(res.mensaje,3)
        $("#modaleliminarpedido .close").click();
        listardos();
        return false;
   } 
    })
    .fail(function ajaxError(e){
    })
    .always(function ajaxSiempre(){
    })
    return false;
});

$("#LP2").click(function () {
            $("#contenidoproducto").hide();
            $("#contenidopedido").show();
            });
$("#LP1").click(function () {
            $("#contenidopedido").hide();
            $("#contenidoproducto").show();
            });




function warningalert(warning, dat) {
    if (dat == 1) {
        $('#resp_alert').html('<div class="alert alert-warning style="font-size:5px;"  form-control form-group text-center" align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' + warning +
            '</div>');
    }
    if (dat == 2) {
        $('#resp_alert2').html('<div class="alert alert-warning style="font-size:5px;"  form-control form-group text-center" align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' + warning +
            '</div>');
    }
    if (dat == 3) {
        $('#resp_alert3').html('<div class="alert alert-warning style="font-size:5px;"  form-control form-group text-center" align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' + warning +
            '</div>');
    }
    $(".alert-warning").delay(2000).show(10, function() {
        $(this).delay(2000).hide(10, function() {
            $(this).remove();
        });
    });
}






function successalert(full, dat) {
    if (dat == 1) {
        $('#resp_alert').html('<div class="alert alert-success style="font-size:5px;"  form-control form-group  text-center  " align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' + full +
            '</div>');
    }
    if (dat == 2) {
        $('#resp_alert2').html('<div class="alert alert-success style="font-size:5px;"  form-control form-group  text-center  " align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' + full +
            '</div>');
    }
    if (dat == 3) {
        $('#resp_alert3').html('<div class="alert alert-success style="font-size:5px;"  form-control form-group  text-center  " align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+ full +
            '</div>');
    }
    $(".alert-success").delay(2000).show(10, function() {
        $(this).delay(2000).hide(10, function() {
            $(this).remove();
        });
    });
}

function dangeralert(danger, dat) {
    if (dat == 1) {
        $('#resp_alert').html('<div class="alert alert-danger style="font-size:5px;" form-control form-group  text-center  " align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' + danger +
            '</div>');
    }
    if (dat == 2) {
        $('#resp_alert2').html('<div class="alert alert-danger style="font-size:5px;" form-control form-group  text-center  " align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' + danger +
            '</div>');
    }
    if (dat == 3) {
        $('#resp_alert3').html('<div class="alert alert-danger style="font-size:5px;" form-control form-group  text-center  " align="center">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' + danger +
            '</div>');
    }
    $(".alert-danger").delay(2000).show(10, function() {
        $(this).delay(2000).hide(10, function() {
            $(this).remove();
        });
    });
}
