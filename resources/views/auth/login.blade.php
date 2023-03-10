@push('css')

  <!-- Template Main CSS File -->
  <!-- <link href="{{ asset('assets/css/front/style.css') }}" rel="stylesheet"> -->

@endpush

@section('title', 'Login')

<x-guest-layout>
    <x-jet-authentication-card>
          
        <!-- ======= Form ======= -->

        <section id="info" class="section-cover-lg container text-white bg-light shadow-lg mt-4" >
            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-5" role="alert" style="z-index: 2000">
                  <strong>{{ session('message') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                {{ session()->forget('message') }}
            @endif
            
            <div class="container me-md-auto py-5 text-center">

                <div class="me-md-auto text-center" >
                    <h1 class= "titulo text-secondary">Ingresa</h1>
                </div>
            
                <div class="me-md-auto text-center">
                   <h6 class="info text-secondary">Introduzca sus Credenciales</h6>
                  <p class="info text-secondary">Los Datos Con Asterisco (*) son requeridos</p>
                </div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    @if (session()->has('redirect_to'))
                        <input id="redirect_to" name="redirect_to" type="hidden" value="{{ session('redirect_to') }}">
                        {{-- session()->forget('redirect_to') --}}
                        {{-- session(['redirect_to' => URL::previous()]) --}}
                    @else
                        {{-- session(['redirect_to' => URL::previous()]) --}}
                        <input id="redirect_to" name="redirect_to" type="hidden" value="{{ URL::previous() }}">
                    @endif
                    
                    <x-jet-validation-errors class="mb-3 rounded-0" />

                    @if (session()->has('status'))
                        <div class="alert alert-success mb-3 rounded-0" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">

                        <div class="form-group col-md-6">
                            <!-- <label class="titulo" for="correo">*e-mail</label>
                            <input type="text"  class="form-control"  id="e-mail" name="mail" placeholder="..." required=> -->

                            <x-jet-label class="titulo text-secondary" for="email" value="{{ __('*Correo') }}" />

                            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }} form-control" type="email"
                                         name="email" id="email" :value="old('email')" required />
                            
                            <x-jet-input-error for="email"></x-jet-input-error>
                        </div>
                        
                       <div class="form-group col-md-6">
                            <!-- <label class="titulo" for="Contrase??a">*Password</label>
                            <input type="password" class="form-control" id="Contrase??a" name="pass" placeholder="..." required=> -->

                            <x-jet-label class="titulo text-secondary" for="password" value="{{ __('*Contrase??a') }}" />

                            <x-jet-input class="{{ $errors->has('password') ? ' is-invalid' : '' }} form-control" id="password" type="password" name="password" required autocomplete="current-password" />
                            
                            <x-jet-input-error for="password"></x-jet-input-error>

                       </div>

                     </div><br>


                    <div class="form-group col-md-11 me-md-auto text-center align-items-center" >
                        @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="{{ route('password.request') }}">
                                {{ __('??Olvidaste tu Contrase??a?') }}
                            </a>
                        @endif
                        <input class="boton" type="submit" name="submit" value="Login">

                    </div>

                </form>

            </div>
          
        </section>

        <!-- ======= FormEnd ======= -->

    </x-jet-authentication-card>
</x-guest-layout>