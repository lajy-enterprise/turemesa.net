<div>
  @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-5" role="alert" style="z-index: 2000">
      <strong>{{ session('message') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <section id="info" class="section-cover-lg container text-white bg-light shadow-lg mt-4" >
    <div class="container mt-md-3">
      <div class="text-center text-dark pt-4">
        <h5>¿ Que desea hacer ?</h5>
        <p class="my-0">Por favor seleccione una opción.</p> <br>
        <div class="row my-1">
          <div class="col-12 col-md-6 mb-5 mb-md-0">
            <h6> Recargamos su cuenta Zelle en dólares y paga en Bolívares, Payoneer, Binance, USDT o Airtm. </h6>
            <a data-bs-toggle="modal" href="#comprarSaldoToggle" role="button">
              <img src="{{ asset('assets/img/botones/zelle-comprar.jpg') }}" class="img-fluid grayscale" alt="">
            </a>
          </div>
          <div class="col-12 col-md-6">
              <h6> Compramos su saldo Zelle y le pagamos en Bolívares, Payoneer, Paypal, Binance, USDT o Airtm.</h6>
            <a data-bs-toggle="modal" href="#venderSaldoToggle" role="button">
              <img src="{{ asset('assets/img/botones/zelle-vender.jpg') }}" class="img-fluid grayscale" alt="">
            </a>
          </div>
        </div>
        <div class="col-12 my-3 pb-2">
          <h5 class="text-center my-1 text-dark"> Seleccione una opción de acuerdo a su necesidad </h5>
          <p class="text-center text-dark">Venda / Compre saldo Zelle seguro y confiable.</p>
          <div class="card text-dark mb-3">
            <div class="card-header">
              <h5 class="card-title text-center text-warning">TERMINOS Y CONDICIONES PARA LA RECARGA ZELLE</h5>
            </div>
            <div class="card-body overflow-scroll pb-3" style="height: 175px;">
              <p class="card-text py-0 my-0">
                <ol class="text-start">
                  <li>Las partes intervinientes declaran que los fondos utilizados en cualquier transacción provienen de actividades legales.</li>
                  <li>Al momento de recibir sus datos y confirmar su pago (que este efectiva en nuestra cuenta bancaria) se le recargará su cuenta en el transcurso de 20 minutos a 3 horas, los pagos se hacer por orden de llegada.</li>
                  <li>No hacemos recargas urgentes. Se recomienda hacer los depósitos con tiempo y prevenir su urgencia.</li>
                  <li>Favor envíe los datos de la recarga solo una vez, si lo hace varias veces retrasará la recarga.</li>
                  <li>Los reportes de pagos no se hacen por teléfono solo vía formulario o E-mail.</li>
                  <li>La tasa del dólar puede cambiar sin previo aviso, según se compre para el momento y la variación en el mercado. Esta tasa de cambio es el resultado de un acuerdo sólo entre las partes intervinientes y no de otro factor.</li>
                  <li>La recarga se le puede hacer fraccionada (no necesariamente) es decir; en varios pagos en distintas horas.</li>
                  <li>Si no está de acuerdo con dichos términos, por favor no utilice nuestros servicios.</li>
                  <li>Gracias por confiar en nosotros. Para servirle...</li>
                </ol>
              </p>
              <a href="{{ route('terms') }}#info" target="_blank" class="btn btn-primary mx-auto">Ver mas Términos y Condiciones</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modales -->
  <!-- modalCompraSaldo -->
  <div class="modal fade" id="comprarSaldoToggle" aria-hidden="true" aria-labelledby="comprarSaldoToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-centered modal-dialog-scrollable ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="comprarSaldoToggleLabel">Comprar Saldo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs" id="comprarSaldoTab" role="tablist">
            <li class="nav-item w-50" role="presentation">
              <button class="nav-link active text-dark w-100" id="informacion-comprar-tab" data-bs-toggle="tab" data-bs-target="#informacion-comprar" type="button" role="tab" aria-controls="informacion" aria-selected="true">Información</button>
            </li>
            <li class="nav-item w-50" role="presentation">
              <button class="nav-link text-dark w-100" id="formulario-comprar-tab" data-bs-toggle="tab" data-bs-target="#formulario-comprar" type="button" role="tab" aria-controls="formulario-comprar" aria-selected="false">Formulario</button>
            </li>
          </ul>
          <div class="tab-content" id="comprarSaldoTabContent">
            <div class="tab-pane fade show active" id="informacion-comprar" role="tabpanel" aria-labelledby="informacion-comprar-tab">
              <div class="col-12 col-lg-10 col-xl-10 mx-auto text-center">
                <h6 class="my-3 text-center"><strong>¿Cómo recargar mi saldo Zelle en Venezuela?</strong></h6>
                <p class="text-center">
                  <strong> Para recargar saldo a su cuenta Zelle solo debe realizar: </strong><br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>Una transferencia bancaria en bolívares a la tasa que tengamos disponible para el momento.<br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>El monto mínimo a recargar es de $20 y el máximo dependiendo de la disponibilidad.<br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>También puede pagar con Payoneer, Zinli, Binance o USDT.<br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>Para recibir en su e-mail o vía whatsapp instrucciones, detalles y tasa de cambio, dar click al botón y llene el formulario que ponemos a su disposición.
                  @auth
                  @else
                  <br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>Al llenar el formulario automáticamente se creara un usuario en nuestra plataforma lo cual facilitara futuras transacciones | Si ya realizo este proceso <a href="{{ route('login') }}#info">Ir a Login</a>.
                  @endif
                </p>
                <a class="btn btn-primary text-center mx-auto" href="#" onclick="abrirFormComprarSaldo()">Ir al Formulario</a>
              </div>
            </div>
            <div class="tab-pane fade" id="formulario-comprar" role="tabpanel" aria-labelledby="formulario-comprar-tab">
              @auth
              <x-form-comprar-auth />
              @else
              <x-form-comprar /> <!-- :evento="$evento" class="col-md-3 mb-3"  -->
              @endif
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#comprarSaldoToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modalVentaSaldo -->
  <div class="modal fade" id="venderSaldoToggle" aria-hidden="true" aria-labelledby="venderSaldoToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-centered modal-dialog-scrollable ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="venderSaldoToggleLabel">Vender Saldo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs" id="venderSaldoTab" role="tablist">
            <li class="nav-item w-50" role="presentation">
              <button class="nav-link active text-dark w-100" id="informacion-vender-tab" data-bs-toggle="tab" data-bs-target="#informacion-vender" type="button" role="tab" aria-controls="informacion-vender" aria-selected="true">Información</button>
            </li>
            <li class="nav-item w-50" role="presentation">
              <button class="nav-link text-dark w-100" id="formulario-vender-tab" data-bs-toggle="tab" data-bs-target="#formulario-vender" type="button" role="tab" aria-controls="formulario-vender" aria-selected="false">Formulario</button>
            </li>
          </ul>
          <div class="tab-content" id="venderSaldoTabContent">
            <div class="tab-pane fade show active" id="informacion-vender" role="tabpanel" aria-labelledby="informacion-vender">
              <div class="col-12 col-lg-10 col-xl-10 mx-auto text-center">
                <h6 class="my-3 text-center"><strong>¿Cómo vender mi saldo Zelle en Venezuela?</strong></h6>
                <p class="text-center">
                  <strong>Para vender el saldo de su cuenta Zelle solo debe comprender que:</strong> <br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>Compramos su saldo Zelle y reciba Bolívares en su cuenta bancaria de Venezuela o a través de Binance, USDT, Payoneer o Paypal.<br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>Hacemos transferencias a todos los Bancos en Venezuela.<br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>Lo mínimo que se permite por Zelle para enviar son $20, no hay monto máximo para la compra.<br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>Para recibir en su e-mail o vía whatsapp instrucciones, detalles y tasa de cambio, dar click al botón y llene el formulario que ponemos a su disposición.
                  @auth
                  @else
                  <br><br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check text-success mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                  </svg>Al llenar el formulario automáticamente se creara un usuario en nuestra plataforma lo cual facilitara futuras transacciones | Si ya realizo este proceso <a href="{{ route('login') }}">Ir a Login</a>.
                  @endif
                </p>
                <a class="btn btn-primary text-center mx-auto" href="#" onclick="abrirFormVenderSaldo()">Ir al Formulario</a>
              </div>
            </div>
            <div class="tab-pane fade" id="formulario-vender" role="tabpanel" aria-labelledby="formulario-vender-tab">
              @auth
              <x-form-vender-auth />
              @else
              <x-form-vender /> <!-- :evento="$evento" class="col-md-3 mb-3"  -->
              @endif
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#comprarSaldoToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  @if(session()->has('addCard'))
    @if(session('addCard') !== null)
    @empty(!session('addCard'))
    <x-carrito-compra /> <!-- :evento="$evento" class="col-md-3 mb-3"  -->
    @endempty
    @endif
  @endif
</div>