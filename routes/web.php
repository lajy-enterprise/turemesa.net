<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Models\Event;
use App\Mail\EventCreate;


Route::get('/mail/{mail}', function ($mail) {
    $envio = null;
    $envio = Mail::to($mail)->send(new EventCreate);
    $respuesta = 'correo enviado a email: ' . $mail;
    return $respuesta;
})->name('mail');

Route::get(
    '/envios/{metodo?}',
    App\Http\Livewire\Remesa::class
)->name('envioDinero');

Route::get('/{metodo?}',
    App\Http\Livewire\Pago::class
)->name('welcome');

Route::get('/privacidad', function () {
    return view('terms');
})->name('terms');


Route::get(
    '/targetas/{metodo}',
    App\Http\Livewire\Remesa::class
)->name('tarjetas');

Route::get(
    '/recarga/{metodo}',
    App\Http\Livewire\Remesa::class
)->name('recargas');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin',
])->prefix('admin')->group(function () {

    Route::get('/eventdata', App\Http\Livewire\Admin\EventData::class )->name('adminEventdata');
    
    Route::get('/stopevent', App\Http\Livewire\Admin\StopEvent::class )->name('adminStopevent');

    Route::get('/generaltable', App\Http\Livewire\Admin\GeneralTable::class )->name('adminGeneraltable');
});
