<div wire:ignore class="col-12 col-lg-10 col-xl-10 mx-auto">
  <form wire:ignore role="form" id="formVender" name="formVender">
    <!-- method="POST" action="{{ route('register') }}" -->
    @csrf
    <!-- SmartWizard2 html -->
    <div id="smartwizard2" class="my-3">
      <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#stepV-1">
              <div class="num">1</div>
              Cantidad a Vender
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#stepV-2">
              <span class="num">2</span>
              Datos de Contacto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#stepV-3">
              <span class="num">3</span>
              Verificación de Identidad
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#stepV-4">
              <span class="num">4</span>
              Enviar Cotización
            </a>
          </li>
      </ul>
      <div class="tab-content">
        <div id="stepV-1" class="tab-pane" role="tabpanel" aria-labelledby="stepV-1">
          <div class="row">
            <div class="mb-3 col-md-4 row">
              <label for="cantidadVenta" class="col-lg-5 col-form-label">Cantidad $</label>
              <div class="col-lg-7">
                <input type="number" step="0.1" class="form-control" id="cantidadVenta" name="cantidadVenta" placeholder="Ejm: 65,5" wire:model.defer='cantidadVenta'>
                <!-- onkeypress="return event.charCode>=48 && event.charCode<=57" -->
              </div>
            </div>
            <div class="mb-3 col-md-8 row">
              <label for="recepcionVenta" class="col-lg-4 col-form-label">Método de Recepción</label>
              <div class="col-lg-8">  
                <select class="form-select" id="recepcionVenta" name="recepcionVenta" aria-label="Metodo de Pago" wire:model.defer='recepcionVenta'>
                  <option selected value="Banco">Transferencia Bancaria</option>
                  <option value="Payoneer">Payoneer</option>
                  <!-- <option value="AirTm">Paypal</option> -->
                  @php
                  $ruta = " ".url()->current()." ";

                  $existe = Str::contains($ruta, 'paypal');

                  @endphp
                  @if ($existe === false)
                  <option value="Zelle">Zelle</option>
                  <option value="Binance">Binance</option>
                  @endif

                </select>
              </div>
            </div>
            <div class="mb-3 col-12">
              <label for="notaVenta" class="form-label">Nota:</label>
              <textarea class="form-control" id="notaVenta" name="notaVenta" rows="3" wire:model.defer='notaVenta'></textarea>
            </div>
          </div>
        </div>
        <div id="stepV-2" class="tab-pane" role="tabpanel" aria-labelledby="stepV-2">
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
        <div id="stepV-3" class="tab-pane" role="tabpanel" aria-labelledby="stepV-3">
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
        <div id="stepV-4" class="tab-pane" role="tabpanel" aria-labelledby="stepV-4">
          <div class="row">
            <div class="mb-3 col-md-12 row">
              <div class="col-12 text-center">
                <h5 class="h6">
                  Aceptación Condiciones de Privacidad (*):
                </h5>
                <div class="my-3">
                  <input class="form-check-input" type="checkbox" id="terms" name="terms">
                  <x-jet-input-error for="terms"></x-jet-input-error>
                  <label class="form-check-label" for="terms">
                    He leído y acepto las políticas de privacidad | <a href="{{route('terms')}}" target="_blank">Leer Términos & Condiciones.</a>
                  </label>
                </div>
                <p class="mb-3">Al aceptar los términos de privacidad y enviar el formulario de cotización se creara automáticamente un usuario en nuestra plataforma, con lo cual facilitara futuras transacciones</p>
              </div>
              <a class="btn btn-small btn-primary text-center mx-auto col-3" onClick="onFinishVender('carrito');">
                <!-- onclick="document.forms.formVender.submit();" -->
                Añadir al Carrito
              </a>
              <a class="btn btn-small btn-primary text-center mx-auto col-3" onClick="onFinishVender('enviar');">
                <!-- onclick="document.forms.formVender.submit();" -->
                Enviar Cotización
              </a>

            </div>
            <div id="informativoVender" class="container">
            </div>
            
          </div>
        </div>
      </div>
      <!-- Include optional progressbar HTML -->
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        </div>
      </div>
    </div>
  </form>
</div>
@push('js')
  <script type="text/javascript">
    // alerts de error
    function abrirAlertVender(mensaje){
      var alertElVender = alert(mensaje);
      document.getElementById('informativoVender').appendChild(alertElVender);
      new bootstrap.Alert(alertElVender);
    };
  </script>
  <script type="text/javascript" defer>
    // enviar formulario
    function vaciarFormulario(){
      document.getElementById('informativoVender').innerHTML = "";
      console.log('resetie los alerts');
    }

    function onFinishVender(accion){
      pensar();
      vaciarFormulario();
      let formulario = $('#formVender').serializeArray();
      if(formulario[1].value && formulario[2].value){
        console.log('estan las tres completas');
        let nota = "";
        if (formulario[3].value == "") {
          nota = "Sin Nota";
        } else {
          nota = formulario[3].value;
        }
        onEnvioVender(nota, formulario[2].value, formulario[1].value, accion);
      }else if(formulario[1].value == ""){
        console.log('falta cantidad');
        let idNameVer = '#'+formulario[1].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[1].name;
        abrirAlertVender(val2);
        noPensar();
        console.log(idNameVer+' = '+val2);
      }else if(formulario[2].value == ""){
        console.log('falta metodo');
        let idNameVer = '#'+formulario[2].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[2].name;
        abrirAlertVender(val2);
        noPensar();
        console.log(idNameVer+' = '+val2);
      }
      // else if(formulario[3].value == ""){
      //   console.log('falta nota');
      //   let idNameVer = '#'+formulario[3].name;
      //   $(idNameVer).addClass('is-invalid');
      //   let val2 = 'debes llenar el campo '+formulario[3].name;
      //   abrirAlertVender(val2);
      //   noPensar();
      //   console.log(idNameVer+' = '+val2);
      // }
    };
    // evio ajax
    function onEnvioVender(notaVenta, recepcionVenta, cantidadVenta, accion){
      $.ajax({
        type:'POST',
        url: "{{ route('register') }}",
        data: $('#formVender').serialize(),
        cache: false,
        success: function(data){
          // alert("successful post "+data);
          let valor = cantidadVenta;
          valor = valor. replace(/,/g, '.');
          if(accion === 'carrito'){
            @this.addCardVenta(notaVenta, recepcionVenta, valor);
          }else{
            @this.enviarVenta(notaVenta, recepcionVenta, valor);
          }
        },
        error: function( jqXHR, textStatus, errorThrown ) {
          noPensar();
          if (jqXHR.status != 0 && jqXHR.status != 404 && jqXHR.status != 500) {
            if (jqXHR.responseText != "") {
              jsonRespText = $.parseJSON(jqXHR.responseText);
              if(jsonRespText.errors){
                $.each(jsonRespText, function(name, val){
                  if (name == "errors") {
                    jsonErr = $.parseJSON(JSON.stringify(val));
                    $.each(jsonErr, function(name2, val2){
                      idName = '#'+name2;
                      $(idName).addClass('is-invalid');
                      abrirAlertVender(val2);
                      console.log(name2+' = '+val2);
                    })
                  };
                });
              }else{
                $.each(jsonRespText, function(name, val){
                    if (name == "message"){  
                      abrirAlertVender(val);
                      console.log(name+' = '+val);
                    };
                });
              };
            };
          }else{
            abrirAlertVender('Error de conexion vuelve a intentarlo más tarde');
            console.log('Error = Error de Conexion');
          };
        }
      });
    };
    
    $('#cantidadVenta').keydown(function(event){
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
    $('#stepV-2 div div #phone').keydown(function(event){
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

    $("#smartwizard2").on("leaveStep", function(e, anchorObject, currentStepIdx, nextStepIdx, stepDirection) {
          // Validate only on forward movement
          let validate = false;


          let formValVenta = $('#formVender').serializeArray();
          console.log('formValVenta');
          console.log(formValVenta);
          
          let idNameUno = '#'+formValVenta[1].name;
          let idNameTres = '#'+formValVenta[3].name;

          let idNameCuatro = '#'+formValVenta[4].name;
          let idNameCinco = '#'+formValVenta[5].name;
          let idNameSeis = '#'+formValVenta[6].name;
          let idNameSiete = '#'+formValVenta[7].name;
          let idNameOcho = '#'+formValVenta[8].name;

          let idNameNueve = '#'+formValVenta[9].name;
          let idNameDies = '#'+formValVenta[10].name;
                    
          console.log('currentStepIdx');
          console.log(currentStepIdx);
          if(currentStepIdx == 0){
            if (formValVenta[1].value && formValVenta[3].value) {
              console.log('valido form uno');
              validate = true;
              $(idNameUno).removeClass('is-invalid');
              $(idNameTres).removeClass('is-invalid');
            }else{              
              if(formValVenta[1].value == ""){
                $(idNameUno).addClass('is-invalid');
              }else{
                $(idNameUno).removeClass('is-invalid');
              }
              if (formValVenta[3].value == "") {
                $(idNameTres).addClass('is-invalid');
              }else{
                $(idNameTres).removeClass('is-invalid');
              }
            }
          }else if(currentStepIdx == 1){
            if (formValVenta[4].value && formValVenta[5].value && formValVenta[6].value && formValVenta[7].value && formValVenta[8].value) {
              console.log('valido form dos');
              validate = true;
            }else{
              console.log('no se valido form dos');
              if (formValVenta[4].value == "") {
                $('#stepV-2 div div div input'+idNameCuatro).addClass('is-invalid');
              }else{
                $('#stepV-2 div div div input'+idNameCuatro).removeClass('is-invalid');
              }
              if (formValVenta[5].value == "") {
                $('#stepV-2 div div div input'+idNameCinco).addClass('is-invalid');
              }else{
                $('#stepV-2 div div div input'+idNameCinco).removeClass('is-invalid');
              }
              if (formValVenta[6].value == "") {
                $('#stepV-2 div div div input'+idNameSeis).addClass('is-invalid');
              }else{
                $('#stepV-2 div div div input'+idNameSeis).removeClass('is-invalid');
              }
              if (formValVenta[7].value == "") {
                $('#stepV-2 div div div input'+idNameSiete).addClass('is-invalid');
              }else{
                $('#stepV-2 div div div input'+idNameSiete).removeClass('is-invalid');
              }
              if (formValVenta[8].value == "") {
                $('#stepV-2 div div div input'+idNameOcho).addClass('is-invalid');
              }else{
                $('#stepV-2 div div div input'+idNameOcho).removeClass('is-invalid');
              }
            }
          }else if(currentStepIdx == 2){
            if (formValVenta[9].value && formValVenta[10].value) {
              validate = true;
            }else{
              console.log('no se valido form tres');
              if (formValVenta[9].value == "") {
                $('#stepV-3 div div div input'+idNameNueve).addClass('is-invalid');
              }else{
                $('#stepV-3 div div div input'+idNameNueve).removeClass('is-invalid');
              }

              if (formValVenta[10].value == "") {
                $('#stepV-3 div div div input'+idNameDies).addClass('is-invalid');
              }else{
                $('#stepV-3 div div div input'+idNameDies).removeClass('is-invalid');
              }
            }
          }else{
            $('#stepV-3 div div div input'+idNameNueve).removeClass('is-invalid');
            $('#stepV-3 div div div input'+idNameDies).removeClass('is-invalid');
          }

          if (stepDirection == 'forward') {
            console.log('entro en el step direction');
            let form = document.getElementById('stepV-' + (currentStepIdx + 1));
            if (form) {
              if (validate === false) {
                console.log('no se valido');
                // form.classList.add('was-validated');
                $('#smartwizard2').smartWizard("setState", [currentStepIdx], 'error');
                $("#smartwizard2").smartWizard('fixHeight');
                return false;
              }
              console.log('si se valido');
              $('#smartwizard2').smartWizard("unsetState", [currentStepIdx], 'error');
            }
          }
      });
  </script>
@endpush