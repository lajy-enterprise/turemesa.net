@section('title', 'General Table')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Event</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Event</li>
        <li class="breadcrumb-item active">Administrators data</li>
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

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Cliente</th>
              <th scope="col">Telefono</th>
              <th scope="col">Email</th>
              <th scope="col">Pais</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <th scope="row col-md-3">{{$loop->index + 1}}</th>
              <td>{{$user->name}} {{$user->apellido}}</td>
              <td><a href="https://wa.me/{{$user->phone ? $user->phone : '00000000000' }}/?text=usted%20tiene%20una%20cotizacion%20con%turemesa.net" target="_blank">{{$user->phone ? $user->phone : 'not' }}</a></td>
              <td><a href="mailto:{{$user->email}}" target="_blank">{{$user->email}}</a></td>
              <td>{{$user->pais ? $user->address : 'not' }}</td>
              <td>
                <a type="button" class="btn btn-danger text-white" wire:click="delete({{ $user->id }})">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </section>
</main><!-- End #main -->