<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Actualizar Documentos - aDocument 2015</title>
   
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
    </head>
    <body style="background-color: #F6FADE">
    
       <?php include("view/modulos/head.php"); ?>
       
       <?php include("view/modulos/menu.php"); ?>
  
  
  		 <?php
   
		   $sel_id_documentos_legal = "";
		   
		   if($_SERVER['REQUEST_METHOD']=='POST' )
		   {
		      $sel_id_documentos_legal = $_POST['id_documentos_legal'];
		   
		   }
		   
		?>
    
       
        <div class="container">
  
  	  <div class="row" style="background-color: #FAFAFA;">
       
      <form action="<?php echo $helper->url("Documentos","ActualizarDocumentos"); ?>" method="post" class="col-lg-5">
            <h4 style="color:#ec971f;">Actualizar Documentos</h4>
            <hr/>
            <table class="table">
    	    	<tr>
            		<th style="width: 50%">Id del Documento </th>
            		<th style="width: 50%"> </th>
            		
            	</tr>
        		<tr>
				
		           <td>	<input type="text" name="id_documentos_legal" value="<?php echo $sel_id_documentos_legal;?>" class="form-control"/> </td>
		           <?php if (!empty($resultSet))  { ?>
		           		<td> <input type="submit"name="btnBorrar" value="Borrar" class="btn btn-danger"/> </td>
		           <?php    } else {?>
		           		<td> <input type="submit"name="btnComprobar" value="Comprobar" class="btn btn-success"/> </td>
		           
		           <?php }?> 
		           	
		           
		           
	            </tr>
           	
		    </table>        
            <table class="table">
    	    	<tr>
            		<th style="width: 40%">Cliente/Proveedor  </th>
            		<th style="width: 60%">  </th>
            	</tr>
    	    	<tr>
            		<th style="width: 40%">RUC/CI  </th>
            		<th style="width: 60%">Nombres </th>
            		
            	</tr>
        		<tr>
				   <td>	<input type="text" name="ruc_cliente_proveedor" value="" class="form-control"/> </td>
		           <td>	<input type="text" name="nombre_cliente_proveedor" value="" class="form-control"/> </td>
	            </tr>
           	
		    </table>        
             <table class="table">
    	    	<tr>
            		<th style="width: 50%">Carton o Archivador  </th>
            		<th style="width: 50%">Número Credito / Prestación  </th>
            	</tr>
    	    	
        		<tr>
				   <td>	<input type="text" name="numero_carton_documentos" value="" class="form-control"/> </td>
		           <td>	<input type="text" name="numero_credito_documentos_legal" value="" class="form-control"/> </td> 
	            </tr>
           	
		    </table>    
		    
		    <table class="table">
    	    	<tr>
            		<th style="width: 50%">Fecha Documento  </th>
            		<th style="width: 50%">Cambiar Estado  </th>
            	</tr>
    	    	
        		<tr>
				   <td>	<input type="date" name="fecha_documentos_legal" value="" class="form-control"/> </td>
		           <td>	 
						<select name="estado_lecturas" id="estado_lecturas"  class="form-control" >
	                  <option value="TRUE"  > LEIDO</option>
	                  <option value="FALSE"  > NO LEIDO</option>
			   	    </select>
				   


				   </td>
	            </tr>
           	
		    </table>  
			
			<table class="table">
    	    	<tr>
            		<th style="width: 50%">Monto </th>
            		<th style="width: 50%">Tipo Documento</th>
            	</tr>
    	    	
        		<tr>
				   <td>	<input type="number" name="monto_documentos_legal" value="" class="form-control"/> </td>
		           <td>	 
						<select name="id_tipo_documentos" id="id_tipo_documentos"  class="form-control" >
                    		<option value="0"  > --Seleccione--</option>
				         	<?php foreach($resultTipoDocumentos as $res) {?>
								<option value="<?php echo $res->id_tipo_documentos; ?>"><?php echo $res->nombre_tipo_documentos; ?> </option>
						    <?php } ?>
					   		    
	     			    
					</select>
				   


				   </td>
	            </tr>
           	
		    </table>  
			
			
			
			
			
          <input type="submit" name="btnGuardar" value="Guardar" class="btn btn-success"/>
		  <hr>
		  
			<table class="table" style="visibility:hidden;">
    	    	<tr>
            		<th style="width: 50%">Plazo Meses  </th>
            		<th style="width: 50%">Destino Dinero  </th>
            	</tr>
    	    	
        		<tr>
				   <td>	<input type="text" name="plazo_meses_documentos_legal" value="" class="form-control"/> </td>
		           <td>	 
						<input type="text" name="destino_documentos_legal" value="" class="form-control"/> </td>

				   </td>
	            </tr>
           	
		    </table>  

			
			
         
		  
          </form>
       
        <?php if (!empty($resultSet)) {  foreach($resultSet as $res) {?>
        <div class="col-lg-7">
            <h4 style="color:#ec971f;">Detalle del Documentos</h4>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:600px;overflow-y:scroll;">
        <table class="table table-hover">
	         <tr>
	    		<th style="text-align: left;  font-size: 12px;">Id</th>
	    		<th style="text-align: left;  font-size: 12px;">Subcategroria</th>
	    		<th style="text-align: left;  font-size: 12px;">Tipo de Documentos</th>
	    		<th style="text-align: left;  font-size: 12px;">RUC/CI</th>
	    		<th style="text-align: left;  font-size: 12px;">Nombre</th>
	    		<th style="text-align: left;  font-size: 12px;">Fecha</th>
	    		
	  		  </tr>
            
	          <tr>
	              <td style="font-size: 11px;"> <?php echo $res->id_documentos_legal; ?>  </td>
	              <td style="font-size: 11px;"> <?php echo $res->nombre_subcategorias; ?>  </td>
		          <td style="font-size: 11px;"> <?php echo $res->nombre_tipo_documentos; ?>     </td> 
		          <td style="font-size: 11px;"> <?php echo $res->ruc_cliente_proveedor; ?>  </td>
		          <td style="font-size: 11px;"> <?php echo $res->nombre_cliente_proveedor; ?>  </td>
		          <td style="font-size: 11px;"> <?php echo date($res->fecha_documentos_legal); ?>  </td>
		      </tr>
	      
            
       	  </table>     
        </section>
	      
	      <?php } } ?>
            
            
      </div>
       </div>
       
        <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
     </body>  
    </html>   