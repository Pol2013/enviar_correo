 <form  method="post" action="contacto.php" >


      <div class="row formulario">
       

       <div class = "col-md-6">
            <label for = "nombre"> Nombre </label>
            <input type = "text" class = "form-control" name="nombre"  id = "nombre" placeholder = "Ingrese su Nombre " required><br>
         </div>
         

       <div class = "col-md-6">
            <label for = "ape"> Apellido </label>
            <input type = "text" class = "form-control" id = "ape"  name ="apellido" placeholder = "Ingrese su Apellido " required><br>
         </div>
       

              <div class="col-md-6">
         <label for="cargo">Cargo</label>
            <select id="cargo"   name="cargo"  class = "form-control" required>
                <option value="" class="opt0">Seleccione su cargo</option>
               <option value="Propietario" class="opt1">Propietario</option>
               <option value="Director" class="opt2">Director</option>
               <option value="Gerente" class="opt3">Gerente</option>
               <option value="Sub gerente" class="opt4">Sub gerente</option>
               <option value="Jefe" class="opt5">Jefe</option>
               <option value="Profesional" class="opt6">Profesional</option>
               <option value="Técnico" class="opt7" >Tecnico</option>
               <option value="Consultor" class="opt8" >Consultor</option>
               <option value="Estudiante" class="opt9" >Estudiante</option>
               <option value="" class="opt10">otro</option>
                
            </select>
            
            
         </div>

        <div class="col-md-6">
       <label for="email"> Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder = "Ingrese su Email" required><br>

            </div>

        
      <div class = "col-md-6">
            <label for = "telefono">Tel&#233;fono</label>
            <input type = "number" class = "form-control" id = "telefono"  name="telefono"   placeholder = "Ingrese su Teléfono" required><br>
         </div>

         <div class = "col-md-6">
            <label for = "actualmenteTrabaja">¿Actualmente esta trabajando?</label>
            <select class="form-control" name="trabajando" aria-invalid="false" required>
                                                <option value="" class="opt0">Elija una opci&oacute;n</option>
                                                <option value="Si" class="opt1">Si</option>
                                                <option value="No" class="opt2">No</option>
                                            </select>
                                            <br>
         </div>


         <div class = "col-md-6">
            <label for = "buscar">¿Qu&eacute; buscas?</label>
            <select class="form-control" name="servicios"  required>
                                            <option value="" class="opt0">Elija una opción</option>
                                                <option value="Outplacement Personas" class="opt1">Outplacement para personas naturales</option>
                                                <option value="Outplacement Personas" class="opt2">Outplacement Empresas</option>
                                                <option value="Outplacement Personas" class="opt3">Jornadas de Emprebilidad Laboral - sistema de Coaching</option>
                                                <!--<option value="Outplacement Personas" class="opt3">Curriculum de Gran Impacto </option>-->
                                                <option value="Outplacement Personas" class="opt4">Curriculum de Gran Impacto (Plan Bronce) </option>
                                                <!--<option value="Outplacement Personas" class="opt4">Plan Plata</option>-->
                                                <option value="Outplacement Personas" class="opt5">Mejora tu Autoconocimiento en el Campo Laboral (Plan Plata)</option>
                                                <!--<option value="Outplacement Personas" class="opt5">Plan Oro</option>-->
                                                <option value="Outplacement Personas" class="opt6">Entrenamiento para tu Entrevista Laboral Exitosa (Plan Oro)</option>
                                                <option value="Outplacemnte Personas" class="opt7">Muestra tu Mejor Perfil Profesional con una Preparacion Integral (Plan Platino) </option>
                                                <option value="Outplacement Personas" class="opt8">Coaching Ejecutivo</option>
                                                <option value="Outplacement Personas" class="opt9">Coaching para Emprendedores</option>
                                                <option value="Outplacement Personas" class="opt10">Coaching para desarrollo Personal y Profesional</option>
                                                <option value="Outplacement Personas" class="opt11">Otro tipo de Coaching</option>
                                            </select>
                                            <br>
         </div>
        

         <div class = "col-md-6">
            <label for = "saberoutplacement">¿Cu&aacute;l es tu rango salarial?</label>
            <select class="form-control" name="conoce" aria-invalid="false" required>
            <option value="" class="opt0">Elija una opci&oacute;n</option>
             <!--<option value="Nada, necesito que me orienten" class="opt1">Nada, necesito que me orienten</option>-->
            <option value="De S/. 0 - S/. 3 000" class="opt1">De S/. 0 - S/. 3 000</option>
            <!--<option value="Algo, quiero saber más" class="opt2">Algo, quiero saber m&aacute;s</option>-->
            <option value="De S/. 3 000 - S/. 5 000" class="opt2">De S/. 3 000 - S/. 5 000</option>
            <!--<option value="Mucho, quiero conocer su diferencial" class="opt2">Mucho, quiero conocer su diferencial</option>-->
            <option value="De S/. 5 000 - S/. 7 000" class="opt3">De S/. 5 000 - S/. 7 000</option>
            <option value="De S/. 7 000 - S/. 10 000" class="opt4">De S/. 7 000 - S/. 10 000</option>
            <option value="De S/. 10 000 - S/. 18 000" class="opt4">De S/. 10 000 - S/. 18 000</option>
            <option value="Mas de S/. 18 000" class="opt4">Mas de S/. 18 000</option>
                                            </select>
                                            <br>
         </div>
        
          <div class = "col-md-12">
            <label > Comentario:</label>
            <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder = "Escriba su comentario" maxlength="75" required></textarea>
           </div>
      <br>

<div class = "col-md-12">

        <span class="help-block">
         <button  type="submit" value="Enviar" class="btn btn-warning btn-lg marginlastmin">  <strong> Enviar</strong></button>
       </span>
        
        

        <p>
      Al Hacer clic en enviar, Usted manifiesta su consentimiento para que Corporaci&oacute;n IBGROUP realice el tratamiento de sus datos personales, conforme a las <a href="#" target="blank"> Condiciones y T&eacute;rminos detallados en la sección Pol&iacute;tica de Tratamiento de Datos Personales.</a></p>

      </div>
      
      </form>