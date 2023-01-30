<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Mail\UserWiner;

use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class Remesa extends Component
{
    use WithPagination;

    public $metodo;

    public $notaCompra, $recepcionCompra, $cantidadCompra;

    public $notaVenta, $recepcionVenta, $cantidadVenta;

    public function borrar($item){
        session()->pull('addCard.'.$item);
        session()->flash('message', 'Item borrado del Carrito.');
    }

    public function addCardCompra($notaCompra, $recepcionCompra, $cantidadCompra){
        session()->push('addCard', [
            'tipo' => $this->metodo,
            'accion' => 'Compra',
            'nota' => $notaCompra,
            'metodo' => $recepcionCompra,
            'cantidad' => $cantidadCompra,
            'status' => 1,
        ]);
        session()->flash('message', 'La cotizacion fue añadida al carrito.');
        redirect(session('redirect_to'));
    }

    public function addCardVenta($notaVenta, $recepcionVenta, $cantidadVenta){
        session()->push('addCard', [
            'tipo' => $this->metodo,
            'accion' => 'Venta',
            'nota' => $notaVenta,//$this->notaVenta,
            'metodo' => $recepcionVenta,//$this->recepcionVenta,
            'cantidad' => $cantidadVenta,//$this->cantidadVenta,
            'status' => 1,
        ]);
        session()->flash('message', 'La cotizacion fue añadida al carrito.');
        redirect(session('redirect_to'));
    }

    public function enviarCarrito($nota, $recepcion, $cantidad, $accion){
        if (isset($accion)) {
            LOG::info('existe accion');
            session()->push('addCard', [
                'tipo' => $this->metodo,
                'accion' => $accion,
                'nota' => $nota,
                'metodo' => $recepcion,
                'cantidad' => $cantidad,
                'status' => 1,
            ]);
        };
        if (session()->has('addCard')) {
            LOG::info('existe session addCard');
            foreach (session('addCard') as $card) {
                $card['user_id'] = Auth::user()->id;
                Event::create($card);
            }
            $envio = Mail::to([
                // 'master.angelus.1@gmail.com',
                'info@myenvios.com',
                // 'info@turemesa.net'
            ])->send( new UserWiner(
                session('addCard'),
                Auth::user()
            ));
            LOG::info('$envio');
            LOG::info($envio);
            session()->forget('addCard');
            session()->flash('message', 'Su solicitud fue enviada exitosamente.');
            redirect(session('redirect_to'));
        }
    }

    public function enviarCompra($nota, $recepcion, $cantidad){
        if (auth()->check()) {
            if (session()->has('enviarCompra')) {
                $envio = session('enviarCompra');
                $envio['user_id'] = Auth::user()->id;
                Event::create($envio);

                $envio = Mail::to([
                    // 'master.angelus.1@gmail.com',
                    'info@myenvios.com',
                    // 'info@turemesa.net'
                ])->send( new UserWiner(
                    session('enviarCompra'),
                    Auth::user()
                ));
                LOG::info('$envio');
                LOG::info($envio);

                session()->forget('enviarCompra');
                session()->flash('message', 'Su solicitud fue enviada exitosamente.');
                redirect(session('redirect_to'));
            }else{
                $array = Event::create([
                    'user_id' => Auth::user()->id,
                    'tipo' => $this->metodo,
                    'accion' => 'Compra',
                    'nota' => $nota,
                    'metodo' => $recepcion,
                    'cantidad' => $cantidad,
                    'status' => 1,     
                ]);

                $object = (object)$array;
                $addcarro = array($object);

                $envio = Mail::to([
                    // 'master.angelus.1@gmail.com',
                    'info@myenvios.com',
                    // 'info@turemesa.net'
                ])->send( new UserWiner(
                    $addcarro,
                    Auth::user()
                ));
                LOG::info('$envio');
                LOG::info($envio);

                session()->flash('message', 'Su solicitud fue enviada exitosamente.');
                redirect(session('redirect_to'));
            }
        }else{
            session(['enviarCompra' => [
                'tipo' => $this->metodo,
                'accion' => 'Compra',
                'nota' => $nota,
                'metodo' => $recepcion,
                'cantidad' => $cantidad,
                'status' => 1,     
            ]]);
            redirect(session('redirect_to'));
        }
    }

    public function enviarVenta($nota, $recepcion, $cantidad){
        if (auth()->check()) {
            if (session()->has('enviarVenta')) {
                $envio = session('enviarVenta');
                $envio['user_id'] = Auth::user()->id;
                Event::create($envio);

                $envio = Mail::to([
                    // 'master.angelus.1@gmail.com',
                    'info@myenvios.com',
                    // 'info@turemesa.net'
                ])->send( new UserWiner(
                    session('enviarVenta'),
                    Auth::user()
                ));
                LOG::info('$envio');
                LOG::info($envio);

                session()->forget('enviarVenta');
                session()->flash('message', 'Su solicitud fue enviada exitosamente.');
                redirect(session('redirect_to'));
            }else{
                $array = Event::create([
                    'user_id' => Auth::user()->id,
                    'tipo' => $this->metodo,
                    'accion' => 'Venta',
                    'nota' => $nota,
                    'metodo' => $recepcion,
                    'cantidad' => $cantidad,
                    'status' => 1,     
                ]);

                $object = (object)$array;
                $addcarro = array($object);

                $envio = Mail::to([
                    // 'master.angelus.1@gmail.com',
                    'info@myenvios.com',
                    // 'info@turemesa.net'
                ])->send( new UserWiner(
                    $addcarro,
                    Auth::user()
                ));
                LOG::info('$envio');
                LOG::info($envio);

                session()->flash('message', 'Su solicitud fue enviada exitosamente.');
                redirect(session('redirect_to'));
            }
        }else{
            session(['enviarVenta' => [
                'tipo' => $this->metodo,
                'accion' => 'Compra',
                'nota' => $nota,
                'metodo' => $recepcion,
                'cantidad' => $cantidad,
                'status' => 1,     
            ]]);
            redirect(session('redirect_to'));
        }
    }

    public function mount($metodo = null)
    {
        if (auth()->check()) {
            if (session()->has('enviarVenta')) {
                $this->enviarVenta(null, null, null);
            };
            if (session()->has('enviarCompra')) {
                $this->enviarCompra(null, null, null);
            };
        };

        $existe = false;
        $metodos = [
            'airtm',
            'paypal',
            'binance',
            'payoneer',
            'zelle',
            'zinli',
            'tarjetasgiftcardamazon',
            'tarjetascreditovirtuales',
        ];

        foreach ($metodos as $key) {
            if($key === $metodo){
                $existe = true;
            }
        }

        if (isset($metodo) && $existe === true) {
            $this->metodo = $metodo;
        }else{
            redirect('/');
        }

        if (auth()->check()) {
            if (session()->has('redirect_to')) {
                session()->forget('redirect_to');
            }
            session(['redirect_to' => url()->full()]);
            
        }else{
            if (session()->has('redirect_to')) {
                session()->forget('redirect_to');
            }
            session(['redirect_to' => url()->full()]);
        }

        Log::info('desde el mount');
        
        Log::info('cierro desde el mount');
        
        Log::info('esta es la variable redirect_to desde session');
        Log::info( session('redirect_to') );
        Log::info('cierro la variable redirect_to desde session');

    }

    public function render()
    {
        $this->metodo;
        
        if (isset($this->metodo)) {
            return view('livewire.remesa.'.$this->metodo)
                ->layout('layouts.guest');
        }
    }
}
