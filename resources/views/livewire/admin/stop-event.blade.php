@section('title', 'Stop Event')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Event</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Event</li>
        <li class="breadcrumb-item active">Stop event</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-5" role="alert" style="z-index: 2000">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
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
                  <td>
                    <a type="button" class="btn btn-danger text-dark" wire:click="delete({{ $event->id }})">Delet</a>
                  </td>
                </tr>
              @endforeach
            @endforeach
          </tbody>
        </table>
  </section>

</main><!-- End #main -->

