<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    @livewireStyles

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/cover.css') }}" rel="stylesheet" type="text/css">
    
    <link href="{{ asset('assets/css/list-groups.css') }}" rel="stylesheet" type="text/css">
    
    <link href="{{ asset('assets/css/smart_wizard_all.min.css') }}" rel="stylesheet" type="text/css"/>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>! Turemesa.net - Envíos de Remesas a Venezuela, Compra y Venta de Saldo Paypal, Airtm, Payoneer, Zelle y Zinli</title>
    
    <!-- Favicons -->
    
    <link rel="icon" href="{{ asset('assets/img/logos/favicon.svg') }}" type="image/svg">
    <meta name="theme-color" content="#7952b3">

    <meta content="Envíos de Remesas a Venezuela, Compra y Venta de Saldo Paypal, Airtm, Payoneer, Zelle y Zinli" name="description">

    <meta content="Turemesa.net ; Envíos de Remesas a Venezuela ; Envíos ; Remesas ; Venezuela ; Compra y Venta de Saldo Paypal ; Compra y Venta de Saldo Airtm ; Compra y Venta de Saldo Payoneer ; Compra y Venta de Saldo Zelle ; Compra y Venta de Saldo Zinli ; Compra y Venta de Saldo binance ; Compra y Venta de Saldo ; Compra y Venta ; Saldo ; airtm ; paypal ; binance ; payoneer ; zelle ; zinli ; Tarjetas Giftcard Amazon ; Tarjetas de Credito Virtuales ; Envio de Dinero a Venezuela" name="keywords">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    @stack('css')

</head>
<body class="bg-white">

<x-spinner />
  
@include('layouts.frontend.partial._header')
    
@yield('content')

@include('layouts.frontend.partial._footer')


  <!-- Vendor JS Files -->

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  
  <script src="{{ mix('js/app.js') }}" ></script>

  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" type="text/javascript"></script>

  <!-- JavaScript -->
  <script src="{{ asset('assets/js/jquery.smartWizard.min.js') }}" type="text/javascript"></script>
  
  @stack('js')

  {{-- {!! Toastr::message() !!} --}}
  
  @livewireScripts
    
</body>
</html>