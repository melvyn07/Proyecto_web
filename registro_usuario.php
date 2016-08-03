<!Doctype.html>
<html>
<head>
       <title> registro de Usuario </title>
       <link rel = "stylesheet" href ="css/bootstrap.min.css"/>
	   <link rel = "stylesheet" href ="css/bootstrap-theme.min.css"/>

</head>
    <body>
      <div class="container"> 
        
          <div class="row">  
            <div class="col col-ms-5">
			<center> <h2> <b> Registrar Usuario</b> </h2> </center>
			<div class "col-ms-3-left">
			  <img src="/final/2.jpg" alt="candidato " width = "100" height= "100" class="img-circle">
			  <b> Candidato </b>
			  </div>
          </div>
        

         <div class="jumbotron">    
                  

                  <div class="col-xs-5">
                    <b> Nombre(s) : <b>
                    <input  autofocus type="text" name="nombre" required="required" placeholder=" Introduzca su(s) nombre(s)" class="form-control" required title="Solo letras" pattern="^[a-zA-Z_αινσϊρ\s]*$" value=""/>
                  </div>

                  <div class="col-xs-5">
                    <b>Apellido(s): <b>
                    <input type="text" name="apellido" required="required"placeholder=" Indroduzca su(s)apellido(s)" class="form-control"  required title="Solo letras" pattern="^[a-zA-Z_αινσϊρ\s]*$" value=""/>
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
                    <b>Direccion: </b>
                    <input type="text" name="Direccion"required="required" class="form-control" placeholder="Direccion de su casa"/>
                    </div> 
					
					
					
					<div class="col-xs-5">
                    <b>C&eacute;dula: </b>
                    <input type="number" pattern="\S{11,11}" required="required" name="C&eacute;dula" maxlength="11"   class="form-control" placeholder="Introduzca la C&eacute;dula"  value=""/>
                  </div>   
				  
					<br>
					  <br>
					    <br>
					
					<div class="col-xs-5">
                    <b>Fecha de Nacimiento: </b>
                    <input type="date"  required="required" class="form-control"placeholder="Ingrese su fecha de nacimiento "  value=""/>
                    </div> 
					
					
					
					<div class="col-xs-5">
                    <b>Estado Civil: </b>
                    <input type="text"  name="estado"class="form-control"required="required"  placeholder="cual es su estado civil?" value=""/>
                    </div> 
					
					 
				  
				  <br>
				    <br>
				      <br>
					
					
                    <div class="col-xs-5">
                 <b>Sexo:</b>
                  <select class="form-control" name="ciudad">
                <option value="" disabled selected>seleccionar</option> 
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
                <option value="Otros">Otros</option>
					</select>
                    </div> 
					
					
					
					<div class="col-xs-5">
                 <label class="active" >Ciudad:</label><br>
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
                    <b>Nacionalidad: </b> 
                    <input type="text" name="nacionalidad" class="form-control" required="required"placeholder=" Ingrese su nacionalidad" value=""/>
                    </div> 
				
				<div class="col-xs-5">
                    <b>Nivel Academico : </b>
                    <input type="text" name="Nivel Academico" required="required" class="form-control" placeholder="Cual es su Nivel Academico?" required title="Solo letras" pattern="^[a-zA-Z_αινσϊρ\s]*$" value=""/>
                    </div>
					
					
				<br>
				<br> 
				  
				   <br>
				     
				
					<div class="col-xs-5">
                    <h4><b> ** Esta Laborando?: </b> </h4>
                    <input type="radio" name="Esta Laborando?" required   value="si"> Si
					&nbsp <input type="radio" name="Esta Laborando?" required   value="no"> No
                    </div>
					
					<div class = "col-xs-5">
					<div class="form-control">
   &nbsp  <label for="ejemplo_archivo_1">Adjuntar curriculums</label>
    <input type="file" id="archivo">
  </div>
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