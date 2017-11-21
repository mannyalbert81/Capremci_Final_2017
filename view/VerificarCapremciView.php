<!DOCTYPE HTML>
<html lang="es">
     <head>
    
    
    
        <meta charset="utf-8"/>
        <title>Búsqueda - aDocument 2015</title>
       
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		
		<link rel="stylesheet" href="view/css/pace-theme-center-atom.css" />
		 <script src="view/js/pace.js"></script>
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
      
        
   <script type="text/javascript">
	$(document).ready(function(){
		

		$("#buscar").click(function(){
			
			load_matriz(1);
			
			
			});
	});

	
	function load_matriz(pagina){
		
		//iniciar variables
		 var con_numero_credito=$("#numero_credito").val();
		 var con_cedula_capremci=$("#cedula_capremci").val();
		 var con_nombres_capremci=$("#nombres_capremci").val();
		 var con_tipo_credito_capremci=$("#tipo_credito_capremci").val();
		 

		  var con_datos={
				  numero_credito:con_numero_credito,
				  cedula_capremci:con_cedula_capremci,
				  nombres_capremci:con_nombres_capremci,
				  tipo_credito_capremci:con_tipo_credito_capremci,
				  action:'ajax',
				  page:pagina
				  };


		$("#VerificarCapremci1").fadeIn('slow');
		$.ajax({
			url:"<?php echo $helper->url("VerificarCapremci","index");?>",
            type : "POST",
            async: true,			
			data: con_datos,
			 beforeSend: function(objeto){
			$("#VerificarCapremci1").html('<img src="view/images/ajax-loader.gif"> Cargando...');
			},
			success:function(data){
				$(".VerificarCapremci").html(data).fadeIn('slow');
				$("#VerificarCapremci1").html("");
			}
		})
	}
	
	</script>
  
               
    </head>
    <body style="background-color: #F6FADE">
 
 
       <?php include("view/modulos/head.php"); ?>
     
       
       <?php include("view/modulos/menu.php"); ?>
     
      
	
     <div class="container">
      <div class="row" style="background-color: #FAFAFA;">
      
    
   	
	  <form id="formularioPrincipal" action="<?php echo $helper->url("VerificarCapremci","index"); ?>" method="post" class="form-horizontal">
    
      <br>         
         <div class="col-lg-12 col-md-12 col-xs-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Buscador Datos Capremci</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  			
  		<div class="row">
  		 <div class="col-lg-3 col-md-3 col-xs-12">
         		<p class="formulario-subtitulo" ># Credito:</p>
			  	<input type="number"  name="numero_credito" id="numero_credito" value="" class="form-control "/> 
			   
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Cedula:</p>
			  	<input type="text"  name="cedula_capremci" id="cedula_capremci" value="" class="form-control "/> 
			    
		 </div>
		 
		  <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Nombres y Apellidos:</p>
			  	<input type="text"  name="nombres_capremci" id="nombres_capremci" value="" class="form-control "/> 
			    
		 </div>
		 
		 <div class="col-lg-3 col-md-3 col-xs-12">
			  	<p  class="formulario-subtitulo">Tipo Credito:</p>
			  	<select name="tipo_credito_capremci" id="tipo_credito_capremci"  class="form-control" >
			  		<option value=""><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultTipCred as $res) {?>
						<option value="<?php echo $res->tipo_credito_capremci; ?>"><?php echo $res->tipo_credito_capremci;  ?> </option>
			            <?php } ?>
				</select>

         </div> 
		 
		 
		 
		 </div>
		 
		 
		 <div class="col-lg-12 col-md-12 col-xs-12 " style="text-align: center; margin-top: 10px">
  		    
		 <button type="button" id="buscar" name="buscar" value="Buscar"   class="btn btn-info" style="margin-top: 10px;"><i class="glyphicon glyphicon-search"></i></button>
		 
	 
	     </div>
		 
		 </div></div>
	
	     <div style="height: 200px; display: block;">
		 <h4 style="color:#ec971f;"></h4>
			  <div >					
					<div id="VerificarCapremci1" style="text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="VerificarCapremci" ></div><!-- Datos ajax Final -->
		      </div>
		       <br>
				  
		 </div>
	    
 	
 	
 	</div></div></div>
 	
      </form>  
      
      <br>
      <br>
              <br>
      <br>
        <br>
              <br>
      <br>
       		   	   
      		
 </div>
 </div>
 
        <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
       </body>  
    </html>