<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserWiner extends Mailable
{
    use Queueable, SerializesModels;

    public $cotizacion, $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cotizacion, $user)
    {
        $this->cotizacion = $cotizacion;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        LOG::info('Dentro del mail');
        LOG::info('$this->cotizacion');
        LOG::info($this->cotizacion);
        LOG::info('$this->user');
        LOG::info($this->user);

        if(count($this->cotizacion) > 1){
            $titulo = 'Servicios Diversos';
            LOG::info('Cotizacion es mayor a uno');
        }else{
            LOG::info('Cotizacion es igual a uno');
            $elemento = $this->cotizacion[0]['tipo'];
            switch ($elemento) {
                case 'tarjetasgiftcardamazon':
                    $titulo = 'Giftcard Amazon';
                    break;
                case 'tarjetascreditovirtuales':
                    $titulo = 'Tarjeta Virtuales';
                    break;
                case 'enviodinerovenezuela':
                    $titulo = 'Dinero a Venezuela';
                    break;
                case 'Pago':
                    $titulo = 'Reporte de Pago';
                    break;
                default:
                    $titulo = $this->cotizacion[0]['accion'].' de saldo '.$elemento;
                    break;
            }
        }

        return $this->subject($titulo)->view('mail.user-ganador');        
    }
}
