@section('title', 'Event Data')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Event</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Event</li>
          <li class="breadcrumb-item active">Events data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-5" role="alert" style="z-index: 2000">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <table class="table text-center">
            <thead>
              <tr class="py-auto">
                <th scope="col py-auto my-auto">#</th>
                <th scope="col py-auto my-auto">Cliente</th>
                <th scope="col py-auto my-auto">Accion</th>
                <th scope="col py-auto my-auto">Cantidad $</th>
                <th scope="col py-auto my-auto">Plataforma</th>
                <th scope="col py-auto my-auto">nota</th>
                <th scope="col py-auto my-auto">Metodo de<br>Pago</th>
                <th scope="col py-auto my-auto">Estado de<br>transaccion</th>
                <th scope="col py-auto my-auto">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                @foreach($user->events as $event)
                  @php
                    $accion = $event->accion;
                    $cantidad = $event->cantidad;
                    $plataforma = $event->tipo;
                    $nota = $event->nota;
                    $metodo = $event->metodo;
                    $status = $event->constatus;
                    
                    if($status === 'In_Process'){
                      $color = 'table-warning';
                    } else if ($status === 'Aproved'){
                      $color = 'table-success';
                    }else{
                      $color = 'table-danger';
                    }
                  @endphp
                  <tr>
                    <th scope="row">{{$loop->parent->index + 1}}</th>
                    <td>{{$user->name}} {{$user->apellido}}</td>
                    <td>{{$accion}}</td>
                    <td>${{$cantidad}}</td>
                    <td>{{$plataforma}}</td>
                    <td>{{$nota}}</td>
                    <td>{{$metodo}}</td>
                    <td class="{{$color}}">{{$status}}</td>
                    <td>
                      <a type="button" class="btn btn-primary text-dark" wire:click="edit({{ $event->id }})">Edit</a>
                      <a type="button" class="btn btn-danger text-dark" wire:click="delete({{ $event->id }})">Delet</a>
                    </td>
                  </tr>
                @endforeach
              @endforeach
            </tbody>
          </table>
          @if($isModalOpen)
            <div class="modal show d-block" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true" role="dialog" aria-modal="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" aria-label="Close" wire:click="closeModalPopover()"></button>
                  </div>
                  <div class="modal-body row">
                    <div class="mb-3 col-12 mx-auto">
                      <label for="status" class="form-label">Status</label>
                      <select class="form-control" aria-describedby="duratonHelp" id="status" wire:model.defer='status'>
                        <option value="1">En_Proceso</option>
                        <option value="2">Pagado</option>
                        <option value="3">Fraude</option>
                        <option value="4">Borrado</option>
                        <option value="5">Finalizado</option>
                      </select>
                      <div id="duratonHelp" class="form-text">Seleccione el estado de esta transaccion.</div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModalPopover()" >Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store()">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          @endif

    </section>

</main><!-- End #main -->

