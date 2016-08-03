<!Doctype.html>
<html>
<head>
       <title> registro de Empresa</title>
       <link rel = "stylesheet" href ="css/bootstrap.min.css"/>
	   <link rel = "stylesheet" href ="css/bootstrap-theme.min.css"/>

</head>
    <body>
      <div class="container"> 
        
          <div class="row">  
            <div class="col col-ms-5">
			<center> <h2> <b> Registrar Empresa</b> </h2> </center>
			<div class "col-ms-3-left">
			  <img src="/final/3.jpg" alt="candidato " width = "100" height= "100" class="img-circle">
			  <b> Empresa </b>
			  </div>
          </div>
        

         <div class="jumbotron">    
                  

                  <div class="col-xs-5">
                    <b> Nombre de Empresa : <b>
                    <input  autofocus type="text" name="nombre" required="required" placeholder=" Introduzca el nombre de Empresa " class="form-control" required title="Solo letras" pattern="^[a-zA-Z_αινσϊρ\s]*$" value=""/>
                  </div>

                  <div class="col-xs-5">
                    <b>Nombre de persona de contacto (s): <b>
                    <input type="text" name="apellido" required="required"placeholder=" Indroduzca contacto" class="form-control"  required title="Solo letras" pattern="^[a-zA-Z_αινσϊρ\s]*$" value=""/>
                  </div>
                
                 <br>
                   <br>
				     <br>
				   
                  <div class="col-xs-5">
                    <b> Email: </b>
                    <input type="text"  class="form-control" name="email" placeholder="ejemplo07@hotmail.com "/>
                  </div>   

                   <div class="col-xs-5">
                    <label class="active" for="Clave">Clave: </label>
                    <input type="text" name="clave" required="required" class="form-control" placeholder="Claves de seguridad"/>
                    </div>
					
					
					<br>
					 <br>
					   <br>
					
					<div class="col-xs-5">
                    <b>RNC: </b>
                    <input type="text" name="Direccion"required="required" class="form-control" placeholder=""/>
                    </div> 
					
					
					
					<div class="col-xs-5">
                    <b>Direccion: </b>
                    <input type="text" required="required" name="Direccion"    class="form-control" placeholder="Introduzca la Direccion"  value=""/>
                  </div>   
				  
					<br>
					  <br>
					    <br>
					
					<div class="col-xs-5">
                    <b>Ocupacion Empresarial: </b>
                    <input type="text"  required="required" class="form-control" placeholder=""  value=""/>
                    </div> 
					
					
					
					<div class="col-xs-5">
                    <b>Pagina web: </b>
                    <input type="text"  name="web" class="form-control" required="required"  placeholder="" value=""/>
                    </div> 
					
					 
				  
				  <br>
				    <br>
				      <br>
					
					
                    <div class="col-xs-5">
                    <b>Ciudad: </b>
                    <input type="text"  name="ciudad" class="form-control" required="required"  placeholder="" value=""/>
                    </div> 
					
					
					
					<div class="col-xs-5">
                 <label class="active" >Pais:</label><br>
                  <select class="form-control" name="ciudad">
                <option value="" disabled selected>seleccionar</option> 
                <option value="Santo Domingo">Santo Domingo</option>
                <option value="Puerto Ricos">Puerto Ricos</option>
                <option value="Estado unidos">Estado unidos</option>
                <option value="Mexico">Mexico</option>
                <option value="Cuba">Cuba</option>
                <option value="Italia">Italia</option>
                <option value=" Francia"> Francia</option>
                <option value="Espana">Espana</option>
                <option value="Venezuela">Venezuela</option>
                 <option value="Chile">Chile</option>
                <option value="Ecuador">Ecuador</option>
                
                </select>
                </div>
				
				 <br>
				   <br>
				     <br>
				 
				<div class="col-xs-5">
                    <b>Nombre Persona de contacto: </b> 
                    <input type="text" name="persona_contacto" class="form-control" required="required" placeholder=" Ingrese su persona de contacto" value=""/>
                    </div> 
				
				<div class="col-xs-5">
                    <b>Telefono de contacto  : </b>
                    <input type="text" name="Telefono_contacto" required="required" class="form-control" placeholder="" required value=""/>
                    </div>
					
					
				<br>
				<br> 
				  
				   <br>
				     
				
					<div class="col-xs-5">
                    <b> Departamento de contacto : </b> 
                    <input required type="text" class = "form-control" name = "departamento_contacto" />
                    </div>
					
					
				<div class="col-xs-5">
                    <b>Email de contacto: </b>
                    <input type="text" name="email_CONTACTO" required="required" class="form-control" placeholder="" required value=""/>
                    </div>
      
                    
         

		  <br>
		    <br>
			<br>
		         
                <div class="form-group-center">
            <div class="col-md-10 col-md-offset-2">
			<button type="Submit" class="btn btn-primary">Guardar</button>
            &nbsp <button type="button" class="btn btn-default">Cancelar</button>
              
			  </div>
          
          </div>                   
                         
        </div> 
                    </div>

                  </div>
              </div>
            </form>
          </div>


    </div>
</body>
  </html>