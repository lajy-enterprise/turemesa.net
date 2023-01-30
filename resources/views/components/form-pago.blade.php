<div wire:ignore class="col-12 col-lg-10 col-xl-10 mx-auto">
  <form wire:ignore role="form" id="formComprar" name="formComprar">
    <!-- method="POST" action="{{ route('register') }}" -->
    @csrf
    <!-- SmartWizard html -->
    <div id="smartwizard" class="my-3">
      <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#step-1">
              <div class="num">1</div>
              Cantidad a Recargar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#step-2">
              <span class="num">2</span>
              Datos de Contacto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#step-3">
              <span class="num">3</span>
              Verificación de Identidad
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#step-4">
              <span class="num">4</span>
              Enviar Cotización
            </a>
          </li>
      </ul>
      <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
          <div class="row">
            <div class="mb-3 col-md-4 row">
              <label for="cantidadCompra" class="col-lg-5 col-form-label">Cantidad $</label>
              <div class="col-lg-7">
                <input type="number" step="0.1" class="form-control" id="cantidadCompra" name="cantidadCompra" placeholder="Ejm: 65,5" wire:model.defer='cantidadCompra'>
                <!-- onkeypress="return event.charCode>=48 && event.charCode<=57" -->
              </div>
            </div>
            <div class="mb-3 col-md-8 row">
              <label for="recepcionCompra" class="col-lg-4 col-form-label">Método de Pago</label>
              <div class="col-lg-8">  
                <select class="form-select" id="recepcionCompra" name="recepcionCompra" aria-label="Metodo de Pago" wire:model.defer='recepcionCompra'>
                  <option selected value="Banco">Transferencia Bancaria</option>
                  <option value="Payoneer">Payoneer</option>
                  <!-- <option value="AirTm">Paypal</option> -->
                  <option value="Zelle">Zelle</option>
                  <option value="Binance">Binance</option>
                </select>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="cuentaBeneficiario" class="col-lg-5 col-form-label">Nro de Cuenta del Beneficiario</label>
              <div class="col-lg-7">
                <input type="text" step="0" class="form-control" id="cuentaBeneficiario" name="cuentaBeneficiario" placeholder="Ejm: 65,5" wire:model.defer='cuentaBeneficiario' onkeypress="return event.charCode>=48 && event.charCode<=57">
                <p class="small text-muted py-0 my-0">Introduce todos los dígitos sin caracteres especiales</p>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="bancoBeneficiario" class="col-lg-3 col-form-label">Banco del Beneficiario</label>
              <div class="col-lg-9">
                <input type="text" step="0" class="form-control" id="bancoBeneficiario" name="bancoBeneficiario" placeholder="Ejm: Banco de Venezuela" wire:model.defer='bancoBeneficiario'>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="tipoCuenta" class="col-lg-4 col-form-label">Tipo de Cuenta</label>
              <div class="col-lg-8">  
                <select class="form-select" id="tipoCuenta" name="tipoCuenta" aria-label="Tipo de Cuenta" wire:model.defer='tipoCuenta'>
                  <option selected value="Corriente">Corriente</option>
                  <option value="Ahorro">Ahorro</option>
                  <option value="Digital">Digital</option>
                </select>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="telefonoBeneficiario" class="col-lg-3 col-form-label">Teléfono del Beneficiario</label>
              <div class="col-lg-9">
                <input type="text" step="0" class="form-control" id="telefonoBeneficiario" name="telefonoBeneficiario" placeholder="Ejm: 04241234567" wire:model.defer='telefonoBeneficiario' onkeypress="return event.charCode>=48 && event.charCode<=57">
                <p class="small text-muted py-0 my-0">Escriba el Numero sin caracteres especiales</p>
              </div>
            </div>        
            <div class="mb-3 col-12">
              <label for="notaCompra" class="form-label">Nota:</label>
              <textarea class="form-control" id="notaCompra" name="notaCompra" rows="3" wire:model.defer='notaCompra'></textarea>
            </div>
          </div>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
          <div class="row">
            <div class="mb-3 col-md-6 row">
              <label for="name" class="col-lg-5 col-form-label">Nombres</label>
              <div class="col-lg-7">
                <input id="name" name="name" class="form-control" type="text" placeholder="Indique sus nombres" aria-label="Indique sus nombres">
                <x-jet-input-error for="name"></x-jet-input-error>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="apellido" class="col-lg-5 col-form-label">Apellidos</label>
              <div class="col-lg-7">
                <input id="apellido" name="apellido" class="form-control" type="text" placeholder="Indique sus apellidos" aria-label="Indique sus apellidos">
                <x-jet-input-error for="apellido"></x-jet-input-error>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="dni" class="col-lg-5 col-form-label">C.I, D.N.I, etc.</label>
              <div class="col-lg-7">
                <input id="dni" name="dni" class="form-control" type="text" placeholder="Indique su Identificacion" aria-label="Indique su Identificacion">
                <x-jet-input-error for="dni"></x-jet-input-error>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="phone" class="col-lg-5 col-form-label">Teléfono</label>
              <div class="col-lg-7">
                <input id="phone" name="phone" class="form-control" type="text" placeholder="Indique su Numero de Telefono" aria-label="Indique su Numero de Telefono">
                <x-jet-input-error for="phone"></x-jet-input-error>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="email" class="col-lg-5 col-form-label">Correo Electrónico</label>
              <div class="col-lg-7">
                <input id="email" name="email" class="form-control" type="email" placeholder="Indique su email" aria-label="Indique su email">
                <x-jet-input-error for="email"></x-jet-input-error>
              </div>
            </div>
          </div>
        </div>
        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
          <div class="row">
            <div class="mb-3 col-md-6 row">
              <label for="pais" class="col-lg-3 col-form-label">País</label>
              <div class="col-lg-9">
                <input id="pais" name="pais" class="form-control" list="datalistOptions" placeholder="introdusca su Pais">
                <datalist id="datalistOptions">
                  <option selected value="Venezuela">Venezuela</option>
                  <option value="España">España</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Italia">Italia</option>
                  <option value="EEUU">Estados Unidos de América</option>
                  <option value="Canadá">Canadá</option>
                  <option value="Brasil">Brasil</option>
                  <option value="Alemania">Alemania</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Argelia">Argelia</option>
                  <option value="Austria">Austria</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Bélgica">Bélgica</option>
                  <option value="Belice">Belice</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="BosniaHerzegovina">Bosnia y Herzegovina</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Chile">Chile</option>
                  <option value="Chipre">Chipre</option>
                  <option value="CostaRica">Costa Rica</option>
                  <option value="Croacia">Croacia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Dinamarca">Dinamarca</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egipto">Egipto</option>
                  <option value="ElSalvador">El Salvador</option>
                  <option value="Eslovaquia">Eslovaquia</option>
                  <option value="Eslovenia">Eslovenia</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Finlandia">Finlandia</option>
                  <option value="Francia">Francia</option>
                  <option value="Granada">Granada</option>
                  <option value="Grecia">Grecia</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haití">Haití</option>
                  <option value="Holanda">Holanda</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hungría">Hungría</option>
                  <option value="Irlanda">Irlanda</option>
                  <option value="Islandia">Islandia</option>
                  <option value="Israel">Israel</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Letonia">Letonia</option>
                  <option value="Líbano">Líbano</option>
                  <option value="Libia">Libia</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lituania">Lituania</option>
                  <option value="Luxemburgo">Luxemburgo</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Malta">Malta</option>
                  <option value="Marruecos">Marruecos</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Mónaco">Mónaco</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Noruega">Noruega</option>
                  <option value="Panamá">Panamá</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Perú">Perú</option>
                  <option value="Polonia">Polonia</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Reino Unido">Reino Unido</option>
                  <option value="República Checa">República Checa</option>
                  <option value="República Dominicana">República Dominicana</option>
                  <option value="Rumania">Rumania</option>
                  <option value="Rusia">Rusia</option>
                  <option value="SanMarino">San Marino</option>
                  <option value="SerbiaMontenegro">Serbia Y Montenegro</option>
                  <option value="Suecia">Suecia</option>
                  <option value="Suiza">Suiza</option>
                  <option value="TrinidadYTobago">Trinidad y Tobago</option>
                  <option value="Turquía">Turquía</option>
                  <option value="Ucrania">Ucrania</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Otro">Otro</option>
                </datalist>
                <x-jet-input-error for="pais"></x-jet-input-error>
              </div>
            </div>
            <div class="mb-3 col-md-6 row">
              <label for="password" class="col-lg-5 col-form-label">Introduce una Contraseña</label>
              <div class="col-lg-7">
                <input id="password" name="password" class="form-control" type="password" placeholder="Indique su Contraseña" aria-label="Indique su Contraseña">
                <p class="small text-muted py-0 my-0">La contraseña debe de ser minimo Ocho (8) caracteres</p>
                <x-jet-input-error for="password"></x-jet-input-error>
              </div>
            </div>
          </div>
        </div>
        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
            <div class="row">
              <div class="mb-3 col-md-12 row">
                <div class="col-12 text-center">
                  <h5 class="h6">
                    Aceptación Condiciones de Privacidad (*):
                  </h5>
                  <div class="my-3">
                    <input class="form-check-input" type="checkbox" id="terms" name="terms">
                    <label class="form-check-label" for="defaultCheck1">
                      He leído y acepto las políticas de privacidad | <a href="{{route('terms')}}"  target="_blank">Leer Términos & Condiciones.</a>
                    </label>
                  </div>
                  <p class="mb-3">Al aceptar los términos de privacidad y enviar el formulario de cotización se creara automáticamente un usuario en nuestra plataforma, con lo cual facilitara futuras transacciones</p>
                </div>
                                  
                <div id="informativoComprar" class="container">
                </div>

                <a class="btn btn-small btn-primary text-center mx-auto col-3" onClick="onFinishComprar('carrito');">
                  <!-- onclick="document.forms.formVender.submit();" -->
                  Añadir al Carrito
                </a>
                <a class="btn btn-small btn-primary text-center mx-auto col-3" onClick="onFinishComprar('enviar');">
                  <!-- onclick="document.forms.formVender.submit();" -->
                  Enviar Cotización
                </a>
              </div>
              
            </div>
        </div>
      </div>
      <!-- Include optional progressbar HTML -->
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </form>
</div>
@push('js')
  <script type="text/javascript">
    // alerts de error
    function abrirAlertComprar(mensaje){
      var alertElComprar = alert(mensaje);
      document.getElementById('informativoComprar').appendChild(alertElComprar);
      new bootstrap.Alert(alertElComprar);
    };
  </script>
  <script type="text/javascript" defer>
    // enviar formulario
    function vaciarFormularioComprar(){
      document.getElementById('informativoComprar').innerHTML = "";
      console.log('resetie los alerts');
    }

    function onFinishComprar(accion){
      pensar();
      vaciarFormularioComprar();
      let formulario = $('#formComprar').serializeArray();      
      if(formulario[1].value && formulario[2].value && formulario[3].value && formulario[4].value && formulario[5].value && formulario[6].value){
        console.log('estan las siete');
        let nota = "";
        if (formulario[7].value == "") {
          nota = "Sin Nota";
        } else {
          nota = formulario[7].value;
        }
        onEnvioComprar(nota, formulario[2].value, formulario[1].value, accion, formulario[3].value, formulario[4].value, formulario[5].value, formulario[6].value);
      }else if(formulario[1].value == ""){
        console.log('falta cantidad');
        let idNameVer = '#'+formulario[1].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[1].name;
        abrirAlertComprar(val2);
        noPensar();
        console.log(idNameVer+' = '+val2);
      }else if(formulario[2].value == ""){
        console.log('falta metodo');
        let idNameVer = '#'+formulario[2].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[2].name;
        abrirAlertComprar(val2);
        noPensar();
        console.log(idNameVer+' = '+val2);
      }else if(formulario[3].value == ""){
        console.log('falta Numero de Cuenta');
        let idNameVer = '#'+formulario[3].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo Numero de Cuenta';
        abrirAlertComprar(val2);
        noPensar();
        console.log(idNameVer+' = '+val2);
      }else if(formulario[4].value == ""){
        console.log('falta Banco');
        let idNameVer = '#'+formulario[3].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[3].name;
        abrirAlertComprar(val2);
        noPensar();
        console.log(idNameVer+' = '+val2);
      }else if(formulario[5].value == ""){
        console.log('falta Tipo de cuenta');
        let idNameVer = '#'+formulario[3].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[3].name;
        abrirAlertComprar(val2);
        noPensar();
        console.log(idNameVer+' = '+val2);
      }else if(formulario[6].value == ""){
        console.log('falta Telefono');
        let idNameVer = '#'+formulario[3].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[3].name;
        abrirAlertComprar(val2);
        noPensar();
        console.log(idNameVer+' = '+val2);
      }
      // else if(formulario[7].value == ""){
      //   console.log('falta nota');
      //   let idNameVer = '#'+formulario[3].name;
      //   $(idNameVer).addClass('is-invalid');
      //   let val2 = 'debes llenar el campo '+formulario[3].name;
      //   abrirAlertComprar(val2);
      //   noPensar();
      //   console.log(idNameVer+' = '+val2);
      // }
    };
    // evio ajax
    function onEnvioComprar(notaCompra, recepcionCompra, cantidadCompra, accion, cuentaBeneficiario, bancoBeneficiario, tipoCuenta, telefonoBeneficiario){
      $.ajax({
        type:'POST',
        url: "{{ route('register') }}",
        data: $('#formComprar').serialize(),
        cache: false,
        success: function(data){
          // alert("successful post "+data);
          let valor = cantidadCompra;
          valor = valor. replace(/,/g, '.');
          if(accion === 'carrito'){
            @this.addCardCompra(notaCompra, recepcionCompra, valor, cuentaBeneficiario, bancoBeneficiario, tipoCuenta, telefonoBeneficiario);
          }else{
            @this.enviarCompra(notaCompra, recepcionCompra, valor, cuentaBeneficiario, bancoBeneficiario, tipoCuenta, telefonoBeneficiario);
          }
        },
        error: function( jqXHR, textStatus, errorThrown ) {
          if (jqXHR.responseText != "") {
            noPensar();
            jsonRespText = $.parseJSON(jqXHR.responseText);
            $.each(jsonRespText, function(name, val){
              if (name == "errors") {
                jsonErr = $.parseJSON(JSON.stringify(val));
                $.each(jsonErr, function(name2, val2){
                  idName = '#'+name2;
                  $(idName).addClass('is-invalid');
                  abrirAlertComprar(val2);
                  console.log(name2+' = '+val2);
                });
              };
            });
          }
        }
      });
    };
    
    $('#cantidadCompra').keydown(function(event){
      //Permite números y una sola coma
      var bYaHayComa = $(this).val().indexOf('.') < 0 ? false : true;
      // Permitir: backspace, delete, tab, escape, y enter
      if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || 
        event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 188 && !bYaHayComa) ||//coma
         // Permitir: Ctrl+A, Ctrl+C, Ctrl+V y Ctrl+X           
        (event.keyCode == 65 && event.ctrlKey === true) ||
        (event.keyCode == 67 && event.ctrlKey === true) || 
        (event.keyCode == 86 && event.ctrlKey === true) ||
        (event.keyCode == 88 && event.ctrlKey === true) || 
         // Permitir: inicio, fin, left, right
        (event.keyCode >= 35 && event.keyCode <= 39) ) {
           // no hacer nada
           return;
      }
      else {
        // Asegura que es un numero
        if (event.shiftKey || 
          (event.keyCode < 48 || event.keyCode > 57) && 
          (event.keyCode < 96 || event.keyCode > 105 ) ) {
          event.preventDefault(); 
        }   
      }
    });
    $('#step-2 div div #phone').keydown(function(event){
      //Permite números y una sola coma
      var bYaHayComa = $(this).val().indexOf('.') < 0 ? false : true;
      // Permitir: backspace, delete, tab, escape, y enter
      if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || 
        event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 188 && !bYaHayComa) ||//coma
         // Permitir: Ctrl+A, Ctrl+C, Ctrl+V y Ctrl+X           
        (event.keyCode == 65 && event.ctrlKey === true) ||
        (event.keyCode == 67 && event.ctrlKey === true) || 
        (event.keyCode == 86 && event.ctrlKey === true) ||
        (event.keyCode == 88 && event.ctrlKey === true) || 
         // Permitir: inicio, fin, left, right
        (event.keyCode >= 35 && event.keyCode <= 39) ) {
           // no hacer nada
           return;
      }
      else {
        // Asegura que es un numero
        if (event.shiftKey || 
          (event.keyCode < 48 || event.keyCode > 57) && 
          (event.keyCode < 96 || event.keyCode > 105 ) ) {
          event.preventDefault(); 
        }   
      }
    });

    $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIdx, nextStepIdx, stepDirection) {
          // Validate only on forward movement
          let validate = false;


          let formValCompra = $('#formComprar').serializeArray();
          console.log('formComprar');
          console.log(formComprar);
          
          let idNameUno = '#'+formValCompra[1].name;
          let idNameTres = '#'+formValCompra[3].name;
          let idNameCuatro = '#'+formValCompra[4].name;
          let idNameSeis = '#'+formValCompra[6].name;
          let idNameSiete = '#'+formValCompra[7].name;

          let idNameOcho = '#'+formValCompra[8].name;
          let idNameNueve = '#'+formValCompra[9].name;
          let idNameDies = '#'+formValCompra[10].name;
          let idNameOnce = '#'+formValCompra[11].name;
          let idNameDoce = '#'+formValCompra[12].name;

          let idNameTrece = '#'+formValCompra[13].name;
          let idNameCatorce = '#'+formValCompra[14].name;
                    
          console.log('currentStepIdx');
          console.log(currentStepIdx);
          if(currentStepIdx == 0){
            if (formValCompra[1].value && formValCompra[3].value && formValCompra[4].value && formValCompra[6].value && formValCompra[7].value) {
              console.log('valido form uno');
              validate = true;
              $(idNameUno).removeClass('is-invalid');
              $(idNameTres).removeClass('is-invalid');
              $(idNameCuatro).removeClass('is-invalid');
              $(idNameSeis).removeClass('is-invalid');
              $(idNameSiete).removeClass('is-invalid');
            }else{              
              if(formValCompra[1].value == ""){
                $(idNameUno).addClass('is-invalid');
              }else{
                $(idNameUno).removeClass('is-invalid');
              }
              if (formValCompra[3].value == "") {
                $(idNameTres).addClass('is-invalid');
              }else{
                $(idNameTres).removeClass('is-invalid');
              }
              if (formValCompra[4].value == "") {
                $(idNameCuatro).addClass('is-invalid');
              }else{
                $(idNameCuatro).removeClass('is-invalid');
              }
              if (formValCompra[6].value == "") {
                $(idNameSeis).addClass('is-invalid');
              }else{
                $(idNameSeis).removeClass('is-invalid');
              }
              if (formValCompra[7].value == "") {
                $(idNameSiete).addClass('is-invalid');
              }else{
                $(idNameSiete).removeClass('is-invalid');
              }
            }
          }else if(currentStepIdx == 1){
            if (formValCompra[8].value && formValCompra[8].value && formValCompra[10].value && formValCompra[1].value && formValCompra[12].value) {
              console.log('valido form dos');
              validate = true;
            }else{
              console.log('no se valido form dos');
              if (formValCompra[8].value == "") {
                $('#step-2 div div div input'+idNameOcho).addClass('is-invalid');
              }else{
                $('#step-2 div div div input'+idNameOcho).removeClass('is-invalid');
              }
              if (formValCompra[9].value == "") {
                $('#step-2 div div div input'+idNameNueve).addClass('is-invalid');
              }else{
                $('#step-2 div div div input'+idNameNueve).removeClass('is-invalid');
              }
              if (formValCompra[10].value == "") {
                $('#step-2 div div div input'+idNameDies).addClass('is-invalid');
              }else{
                $('#step-2 div div div input'+idNameDies).removeClass('is-invalid');
              }
              if (formValCompra[11].value == "") {
                $('#step-2 div div div input'+idNameOnce).addClass('is-invalid');
              }else{
                $('#step-2 div div div input'+idNameOnce).removeClass('is-invalid');
              }
              if (formValCompra[12].value == "") {
                $('#step-2 div div div input'+idNameDoce).addClass('is-invalid');
              }else{
                $('#step-2 div div div input'+idNameDoce).removeClass('is-invalid');
              }
            }
          }else if(currentStepIdx == 2){
            $('#step-2 div div div input'+idNameDoce).removeClass('is-invalid');
            if (formValCompra[13].value && formValCompra[14].value) {
              validate = true;
            }else{
              console.log('no se valido form tres');
              if (formValCompra[13].value == "") {
                $('#step-3 div div div input'+idNameTrece).addClass('is-invalid');
              }else{
                $('#step-3 div div div input'+idNameTrece).removeClass('is-invalid');
              }

              if (formValCompra[14].value == "") {
                $('#step-3 div div div input'+idNameCatorce).addClass('is-invalid');
              }else{
                $('#step-3 div div div input'+idNameCatorce).removeClass('is-invalid');
              }
            }
          }else{
            $('#step-3 div div div input'+idNameTrece).removeClass('is-invalid');
            $('#step-3 div div div input'+idNameCatorce).removeClass('is-invalid');
          }

          if (stepDirection == 'forward') {
            console.log('entro en el step direction');
            let form = document.getElementById('step-' + (currentStepIdx + 1));
            if (form) {
              if (validate === false) {
                console.log('no se valido');
                // form.classList.add('was-validated');
                $('#smartwizard').smartWizard("setState", [currentStepIdx], 'error');
                $("#smartwizard").smartWizard('fixHeight');
                return false;
              }
              console.log('si se valido');
              $('#smartwizard').smartWizard("unsetState", [currentStepIdx], 'error');
            }
          }
      });
  </script>
@endpush