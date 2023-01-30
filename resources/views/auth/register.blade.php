@push('css')

  <!-- Template Main CSS File -->
  <!-- <link href="{{ asset('assets/css/front/style.css') }}" rel="stylesheet"> -->
  
@endpush

@section('title', 'Register')

<x-guest-layout>
    <x-jet-authentication-card>
        <section id="info" class="section-cover-lg container text-white bg-light shadow-lg mt-4" >
            <div class="container me-md-auto py-5 text-center">
                @if (session()->has('message'))
                    <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-5" role="alert" style="z-index: 2000">
                      <strong>{{ session('message') }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    {{ session()->forget('message') }}
                @endif

                <div class="me-md-auto text-center" >
                    <h1 class="titulo text-secondary" >¡Registrarse es Gratis!</h1>
                </div>
                  
                <div class="me-md-auto text-center">
                    <p class="info text-secondary">Los Datos Con Asterisco (*) son requeridos</p>
                </div>

              
                    <form method="POST" action="{{ route('register') }}">
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
                          <div class="form-group col-md-3 mx-auto">
                                <x-jet-label class="titulo text-secondary" value="{{ __('*Nombres') }}" />

                                <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }} form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-jet-input-error for="name"></x-jet-input-error>   
                          </div>

                          <div class="form-group col-md-3 mx-auto">
                                <x-jet-label class="titulo text-secondary" value="{{ __('*Apellidos') }}" />

                                <x-jet-input class="{{ $errors->has('apellido') ? 'is-invalid' : '' }} form-control" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
                                <x-jet-input-error for="apellido"></x-jet-input-error>
                          </div>

                          <div class="form-group col-md-3 mx-auto">
                                <x-jet-label class="titulo text-secondary" value="{{ __('*C.I, D.N.I, etc.') }}" />

                                <x-jet-input class="{{ $errors->has('dni') ? 'is-invalid' : '' }} form-control" type="text" name="dni" :value="old('dni')" required autofocus autocomplete="dni" />
                                <x-jet-input-error for="dni"></x-jet-input-error>
                          </div>

                          <div class="form-group col-md-3 mx-auto">
                                <x-jet-label class="titulo text-secondary" value="{{ __('*Telefono') }}" />

                                <x-jet-input class="{{ $errors->has('phone') ? 'is-invalid' : '' }} form-control" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                                <x-jet-input-error for="phone"></x-jet-input-error>
                          </div>

                        <div class="form-group col-md-3 mx-auto">
                          <x-jet-label class="titulo text-secondary" value="{{ __('*Pais') }}" />
                          <div class="col-lg-12">
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
                          

                          <div class="form-group col-md-3 mx-auto">
                                <x-jet-label class="titulo text-secondary" value="{{ __('*Correo') }}" />

                                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }} form-control" type="email" name="email" :value="old('email')" required />
                                
                                <x-jet-input-error for="email"></x-jet-input-error>
                              
                          </div>
                          
                        <div class="form-group col-md-3 mx-auto">
                            <x-jet-label class="titulo text-secondary" value="{{ __('*Contraseña') }}" />

                            <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }} form-control" type="password" name="password" required autocomplete="new-password" />
                            <x-jet-input-error for="password"></x-jet-input-error>

                        </div>                            

                       </div>

                       @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="my-3">
                                <div class="">
                                    <x-jet-checkbox id="terms" name="terms" />
                                    <label class="{{ $errors->has('terms') ? 'is-invalid' : '' }} titulo text-secondary" for="terms">
                                        {!! __('Yo acepto los :terms_of_service y las :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms').'">'.__('Términos de Servicios').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('terms').'">'.__('Políticas de Privacidad').'</a>',
                                        ]) !!}
                                    </label>
                                    <x-jet-input-error for="terms"></x-jet-input-error>
                                </div>
                            </div>
                        @endif


                      <div class="form-group col-md-11 my-md-1 text-center align-items-center" >
                          
                          <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}#info">{{ __('¿Ya estas Registrado?') }}</a>

                          <input class="boton" type="submit" name="submit" value="Registrarse">

                      </div>

                    </form>
                  
                </div>
            
            </section>

 
        
    </x-jet-authentication-card>
</x-guest-layout>