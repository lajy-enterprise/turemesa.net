<div class="btn-group dropup position-fixed bottom-0 end-0" style="bottom: 25px !important;right: 25px !important; z-index: 4000;">
    <button type="button" 
        class="btn btn-success btn-sm dropdown-toggle border border-3 border-secondary bg-gradient"
        data-bs-toggle="dropdown" aria-expanded="false"
        >
        <span >
            <i class="bi bi-cart4 fs-4"></i>
        </span>
    </button>
    <div class="overflow-auto shadow-lg dropdown-menu" style="transform: translate(-243px, -79px) !important; width: 300px !important; max-height: 400px !important;">
      <div class="px-2 py-2 text-center">
        @if(session()->has('addCard'))
            {{-- @json(session('addCard')) --}}

            @php
                $hayCompra = false;
                foreach(session('addCard') as $card){
                    if($card['accion'] == 'Compra'){
                        $hayCompra = true;
                        break;
                    }
                };
                $hayVenta = false;
                foreach(session('addCard') as $card){
                    if($card['accion'] == 'Venta'){
                        $hayVenta = true;
                        break;
                    }
                }

            @endphp
          
            @if($hayCompra)
                <h5>Compras</h5>
            @endif
        
            @if($hayCompra)
                <table class="table text-center">
                    <thead>
                      <tr class="py-auto">
                        <th scope="col py-auto my-auto px-0 mx-0"><FONT SIZE=2>#</FONT></th>
                        <th scope="col py-auto my-auto px-0 mx-0"><FONT SIZE=2>Plataforma</FONT></th>
                        <th scope="col py-auto my-auto px-0 mx-0"><FONT SIZE=2> $ </FONT></th>
                        <th scope="col py-auto my-auto px-0 mx-0"><FONT SIZE=2>Actions</FONT></th>
                      </tr>
                    </thead>
                    <tbody>
              @foreach(session('addCard') as $id => $card)
                @if($card['accion'] == 'Compra')
                        <tr>
                            @if($card['tipo'] === 'Pago' or $card['tipo'] === 'enviodinerovenezuela')
                            <th scope="row" rowspan="2" valign="center"><FONT SIZE=2>{{$loop->index + 1}}</FONT></th>
                            @else
                            <th scope="row" valign="center"><FONT SIZE=2>{{$loop->index + 1}}</FONT></th>
                            @endif
                            <td><FONT SIZE=2>
                                @if($card['tipo'] === 'tarjetasgiftcardamazon')
                                    Giftcard Amazon
                                @elseif($card['tipo'] === 'tarjetascreditovirtuales')
                                    Tarjeta Virtuales
                                @elseif($card['tipo'] === 'enviodinerovenezuela')
                                    Dinero a Venezuela
                                @else
                                    {{$card['tipo']}}
                                @endif
                            </FONT></td>
                            <td><FONT SIZE=2>{{$card['cantidad']}}</FONT></td>

                            @if($card['tipo'] === 'Pago' or $card['tipo'] === 'enviodinerovenezuela')
                            <td rowspan="2" valign="center">
                                <a type="button" class="btn btn-primary text-dark" wire:click="borrar({{$id}})">
                                    <FONT SIZE=2>Borrar</FONT>
                                </a>
                            </td>
                            @else
                            <td valign="center">
                                <a type="button" class="btn btn-primary text-dark" wire:click="borrar({{$id}})">
                                    <FONT SIZE=2>Borrar</FONT>
                                </a>
                            </td>
                            @endif
                        </tr>
                        @if($card['tipo'] === 'Pago' or $card['tipo'] === 'enviodinerovenezuela')
                        <tr>
                            <td><FONT SIZE=2>{{$card['cuentaBeneficiario']}}</FONT></td>
                            <td><FONT SIZE=2>{{$card['tipoCuenta']}}</FONT></td>                            
                        </tr>
                        @endif
                @endif
              @endforeach
                    </tbody>
                </table>
            @endif
            
            @if($hayVenta && $hayCompra)
                <div class="my-2"><hr class="dropdown-divider"></div>
            @endif
                
            @if($hayVenta)
                <h5>Ventas</h5>
            @endif
          
            @if($hayVenta)
                <table class="table text-center">
                    <thead>
                      <tr class="py-auto">
                        <th scope="col py-auto my-auto px-0 mx-0"><FONT SIZE=2>#</FONT></th>
                        <th scope="col py-auto my-auto px-0 mx-0"><FONT SIZE=2>Plataforma</FONT></th>
                        <th scope="col py-auto my-auto px-0 mx-0"><FONT SIZE=2> $ </FONT></th>
                        <th scope="col py-auto my-auto px-0 mx-0"><FONT SIZE=2>Actions</FONT></th>
                      </tr>
                    </thead>
                    <tbody>
              @foreach(session('addCard') as $id => $card)            
                @if($card['accion'] == 'Venta')
                        <tr>
                            <th scope="row"><FONT SIZE=2>{{$loop->index + 1}}</FONT></th>
                            <td><FONT SIZE=2>{{$card['tipo']}}</FONT></td>
                            <td><FONT SIZE=2>{{$card['cantidad']}}</FONT></td>
                            <td>
                                <a type="button" class="btn btn-primary text-dark" wire:click="borrar({{$id}})">
                                    <FONT SIZE=2>Borrar</FONT>
                                </a>
                            </td>
                        </tr>
                @endif
              @endforeach
                    </tbody>
                </table>
            @endif
                
              
          <a class="btn btn-primary text-dark mx-auto" wire:click="enviarCarrito(null,null,null,null)">
            Enviar cotización
          </a>
          
        @endif
      </div>
    </div>
</div>