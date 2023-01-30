
@extends('layouts.frontend.app')

@push('css')
  
    @livewireStyles
   
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

@endpush

@section('content')
    {{ $slot }}
@stop

@push('js')

    <script type="text/javascript">
      const firstTabEl = document.querySelector('#comprarSaldoTab li #formulario-comprar-tab');
      const firstTab = new bootstrap.Tab(firstTabEl);
      function abrirFormComprarSaldo(){
        firstTab.show();
      }
      // 
      const twoTabEl = document.querySelector('#venderSaldoTab li #formulario-vender-tab');
      const twoTab = new bootstrap.Tab(twoTabEl);
      function abrirFormVenderSaldo(){
        twoTab.show();
      }
      // smart wizard
      if ( $('#smartwizard').length ) {
        $(function() {
            $('#smartwizard').smartWizard({
              selected: 0,
              theme: 'dots',
              autoAdjustHeight: false,
              contentCache:true,
              keyboard: {
                  keyNavigation: false,
              },
            });
              // justified: true,
        });
      }
      if ( $('#smartwizard2').length ) {
        $(function() {
            $('#smartwizard2').smartWizard({
              selected: 0,
              theme: 'dots',
              autoAdjustHeight: false,
              contentCache:true,
              keyboard: {
                  keyNavigation: false,
              },
            });
              // justified: true,
        });
      }

      // generar alert
      function alert(mensaje) {
        let htmlMarkup = `
          <div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
            <strong>${mensaje}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>
        `;

        var template = document.createElement('template');
        // var template = document.getElementById('informativo');
        html = htmlMarkup.trim();
        template.innerHTML = html;
        // template.appendChild(html);
        return template.content.firstChild;
      }
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        var altura = $('.menu').offset().top;
        
        $(window).on('scroll', function(){
          if ( $(window).scrollTop() > altura ){
            $('.menu').addClass('fixed-top');
            $('.menu').addClass('pt-0');
            // $('.menu > div').addClass('transparente');
            $('.menu > div').addClass('shadow');
            $('.menu > div').addClass('container-fluid');
            $('.menu > div').removeClass('container');
            $('.menu').removeClass('pt-md-2');
            // $('.menu > div').removeClass('bg-success');
            $('.menu > div').removeClass('mt-md-3');
            // $('.menu > div > div > ul > .dropdown > ul').removeClass('bg-success');
            // $('.menu > div > div > ul > .dropdown > ul').addClass('transparente');

          } else {
            $('.menu').removeClass('fixed-top');
            $('.menu').removeClass('pt-0');
            // $('.menu > div').removeClass('transparente');
            $('.menu > div').removeClass('shadow');
            $('.menu > div').removeClass('container-fluid');
            $('.menu > div').addClass('container');
            $('.menu').addClass('pt-md-2');
            // $('.menu > div').addClass('bg-success');
            $('.menu > div').addClass('mt-md-3');
            // $('.menu > div > div > ul > .dropdown > ul').addClass('bg-success');
            // $('.menu > div > div > ul > .dropdown > ul').removeClass('transparente');
          }
        });

      });
      $('#dni').keydown(function(event){
        //Permite números y una sola coma
        var bYaHayComa = $(this).val().indexOf('.') < 0 ? false : true;
        // Permitir: backspace, delete, tab, escape, y enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || 
          event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 188 && !bYaHayComa) ||//coma
           // Permitir: Ctrl+A, Ctrl+C, Ctrl+V y Ctrl+X           
          (event.keyCode == 65 && event.ctrlKey === true) ||
          (event.keyCode == 67 && event.ctrlKey === true) || 
          (event.keyCode == 86 && event.ctrlKey === true) ||
          (event.keyCode == 88 && event.ctrlKey === true) || 
           // Permitir: inicio, fin, left, right
          (event.keyCode >= 35 && event.keyCode <= 39) ) {
             // no hacer nada
             return;
        }
        else {
          // Asegura que es un numero
          if (event.shiftKey || 
            (event.keyCode < 48 || event.keyCode > 57) && 
            (event.keyCode < 96 || event.keyCode > 105 ) ) {
            event.preventDefault(); 
          }
        }
      });
      $('#phone').keydown(function(event){
        //Permite números y una sola coma
        var bYaHayComa = $(this).val().indexOf('.') < 0 ? false : true;
        // Permitir: backspace, delete, tab, escape, y enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || 
          event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 188 && !bYaHayComa) ||//coma
           // Permitir: Ctrl+A, Ctrl+C, Ctrl+V y Ctrl+X           
          (event.keyCode == 65 && event.ctrlKey === true) ||
          (event.keyCode == 67 && event.ctrlKey === true) || 
          (event.keyCode == 86 && event.ctrlKey === true) ||
          (event.keyCode == 88 && event.ctrlKey === true) || 
           // Permitir: inicio, fin, left, right
          (event.keyCode >= 35 && event.keyCode <= 39) ) {
             // no hacer nada
             return;
        }
        else {
          // Asegura que es un numero
          if (event.shiftKey || 
            (event.keyCode < 48 || event.keyCode > 57) && 
            (event.keyCode < 96 || event.keyCode > 105 ) ) {
            event.preventDefault(); 
          }
        }
      });
    </script>
  
    <!-- Template Main JS File -->
  
  @stack('modals')


@endpush