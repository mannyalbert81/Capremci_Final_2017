<!DOCTYPE HTML>
<html lang="es">
     <head>
    
    
<?php require_once 'config/global.php';?> 
    
        <meta charset="utf-8"/>
        <title>Búsqueda - aDocument 2015</title>
   
       <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
        
   <script type="text/javascript">
	$(document).ready(function(){

	});

	
	function load_Documentos(pagina){

		
		//iniciar variables
		 var doc_criterio=$("#criterio_busqueda_bus").val();
		 var doc_contenido=$("#contenido_busqueda_bus").val();
		 
		 var con_datos={
				  criterio_busqueda:doc_criterio,
				  contenido_busqueda:doc_contenido,
				  action:'ajax',
				  page:pagina
				  };

		
		$("#Documentos").fadeIn('slow');
		$.ajax({
			url:"<?php echo $helper->url("Documentos","Buscador");?>",
            type : "POST",
            async: true,			
			data: con_datos,
			 beforeSend: function(objeto){
			$("#Documentos").html('<img src="view/images/ajax-loader.gif"> Cargando...');
			},
			success:function(data){
				$("#controlador").html("");
				$(".Documentos").html(data).fadeIn('slow');
				$("#Documentos").html("");
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
      
     <div class="table-responsive">
     
    
     <hr/>  	
	  <form id="formularioPrincipal" action="<?php echo $helper->url("Documentos","Buscador"); ?>" method="post" class="form-horizontal">
    
    
	    <table>
		    <tr> 
		    	<td>
		    		<input type="hidden" name="contenido_busqueda" id="contenido_busqueda_bus" class="form-control"   value="<?php echo $contenido; ?>" />  
		    		<input type="hidden" name="criterio_busqueda" id="criterio_busqueda_bus" class="form-control"   value="<?php echo $criterio; ?>" />
		    	</td>
		    </tr>
	    </table>
<div id="controlador">
		   	<div class="pull-left col-lg-2 col-md-2 col-xs-2">
		  		<span class="form-control"><strong>Registros: </strong><?php echo $cantidadResult; ?></span>
				<input type="hidden" value="<?php echo $cantidadResult; ?>" id="total_query" name="total_query"/>
			</div><br>
			<section class="col-lg-12 col-md-10 col-xs-10">
				<table class="table table-hover">
					<thead style="background: #DBF5F1; text-align:center;">
						<tr  class=" col-lg-12 col-md-10 col-xs-10">
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Id</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Fecha del Documento</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Categorpia</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Subcategoría</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Tipo Documentos</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Cliente/Proveedor</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Carton Documentos</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Número</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Monto Documento</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Valor Documento</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;"><b>Fecha de Subida</b></th>
							<th class="col-lg-1 col-md-1 col-xs-1" style="text-align: left;  font-size: 10px;">Visualizar</th>
							
						</tr>
						
					</thead>
					<tbody style="display: block; height: calc(50vh - 1px); min-height: calc(200px + 1 px); overflow-Y: scroll;">
		
		<?php foreach ($resultSet as $res){?>
									
						<tr>
							
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"><?php echo $res->id_documentos_legal; ?> </td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"><?php echo$res->fecha_documentos_legal;?> </td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo $res->nombre_categorias; ?> </td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo $res->nombre_subcategorias; ?></td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo $res->nombre_tipo_documentos; ?> </td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo $res->nombre_cliente_proveedor; ?></td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo $res->numero_carton_documentos; ?></td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo$res->numero_credito_documentos_legal; ?></td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo$res->monto_documentos_legal; ?></td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo $res->valor_documentos_legal; ?></td>
								<td class="col-lg-1 col-md-1 col-xs-1" style="font-size: 9px;"> <?php echo $res->creado; ?></td>
								
								<td><div class="right">						
							<?php  if ($_SESSION["tipo_usuario"]=="usuario_local") {  ?>
			            		 <a href=" <?php echo IP_INT . $res->id_documentos_legal; ?>  " class="btn btn-warning" target="blank" style="font-size:65%;">Ver</a>
			            	<?php } else {?>
			            		 <a href="<?php echo IP_EXT . $res->id_documentos_legal; ?>  " class="btn btn-warning" target="blank" style="font-size:65%;">Ver</a> 
			            	<?php }?>
								</div></td>
							
		<?php } ?>
						
					</tbody>
				</table>
			</section>
		<div class="table-pagination pull-right">
		<?php echo $filaspaginacion;?>
		</div>
	 </div>
	 
	 <!-- paginacion ajax -->
        
        <div style="display: block;">
		
		 <h4 style="color:#ec971f;"></h4>
			  <div >					
					<div id="Documentos" style="text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="Documentos" ></div><!-- Datos ajax Final -->
		      </div>
		       <br>
				  
		 </div>
        
        <!--termina paginacion ajax --> 
	    
 	
      </form>  
      
      <br>
      <br>
        
       
       		   	   
     </div>  		
 </div>
 </div>
 
        <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
       </body>  
    </html>