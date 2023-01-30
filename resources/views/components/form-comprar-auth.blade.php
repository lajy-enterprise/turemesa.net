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
            <a class="nav-link " href="#step-2">
              <span class="num">2</span>
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
            <div class="mb-3 col-12">
              <label for="notaCompra" class="form-label">Nota:</label>
              <textarea class="form-control" id="notaCompra" name="notaCompra" rows="3" wire:model.defer='notaCompra'></textarea>
            </div>
          </div>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
            <div class="row">
              <div class="mb-3 col-md-12 row">
                <div class="col-12 text-center">
                  <h5 class="h6">
                    Aceptación Condiciones de Privacidad (*):
                  </h5>
                  <div class="my-3">
                    <input class="form-check-input" type="checkbox" id="termsComprar" name="termsComprar">
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

                @php
                  $existeCarrito = false;
                  if(session()->has('addCard')){
                    if(session('addCard') !== null){
                      if(!empty(session('addCard'))){
                        $existeCarrito = true;
                      }
                    }
                  }
                @endphp
                @if($existeCarrito === true)
                <a class="btn btn-small btn-primary text-center mx-auto col-3" onClick="onFinishComprar('enviarCarrito')">
                  Enviar cotización
                </a>
                @else
                <a class="btn btn-small btn-primary text-center mx-auto col-3" onClick="onFinishComprar('enviar');">
                  <!-- onclick="document.forms.formVender.submit();" -->
                  Enviar Cotización
                </a>                
                @endif
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
      vaciarFormularioComprar();
      let formulario = $('#formComprar').serializeArray();
      if ($('#termsComprar').prop("checked") ){
        termsComprar = true;
      }
      if(formulario[1].value && formulario[2].value && termsComprar === true){
        console.log('estan las tres');
        let nota = "";
        if (formulario[3].value == "") {
          nota = "Sin Nota";
        } else {
          nota = formulario[3].value;
        }
        onEnvioComprar(nota, formulario[2].value, formulario[1].value, accion);
      }else if(formulario[1].value == ""){
        console.log('falta cantidad');
        let idNameVer = '#'+formulario[1].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[1].name;
        abrirAlertComprar(val2);
        console.log(idNameVer+' = '+val2);
      }else if(formulario[2].value == ""){
        console.log('falta metodo');
        let idNameVer = '#'+formulario[2].name;
        $(idNameVer).addClass('is-invalid');
        let val2 = 'debes llenar el campo '+formulario[2].name;
        abrirAlertComprar(val2);
        console.log(idNameVer+' = '+val2);
      }
      // else if(formulario[3].value == ""){
      //   console.log('falta nota');
      //   let idNameVer = '#'+formulario[3].name;
      //   $(idNameVer).addClass('is-invalid');
      //   let val2 = 'debes llenar el campo '+formulario[3].name;
      //   abrirAlertComprar(val2);
      //   console.log(idNameVer+' = '+val2);
      // }
      else if(termsComprar != true){
        console.log('falta termsComprar');
        let idNameVer = '#termsComprar';
        $(idNameVer).addClass('is-invalid');
        let val2 = 'Debes seleccionar el campo terms';
        abrirAlertComprar(val2);
        console.log('terms = '+val2);
      }
    };
    // evio ajax
    function onEnvioComprar(notaCompra, recepcionCompra, cantidadCompra, accion){
      let valor = cantidadCompra;
      valor = valor. replace(/,/g, '.');
      if(accion === 'carrito'){
        pensar();
        @this.addCardCompra(notaCompra, recepcionCompra, valor);
      }else if(accion === 'enviarCarrito'){
        pensar();
        @this.enviarCarrito(notaCompra, recepcionCompra, valor, 'Compra');
      }else{
        pensar();
        @this.enviarCompra(notaCompra, recepcionCompra, valor);
      }
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
  </script>
@endpush