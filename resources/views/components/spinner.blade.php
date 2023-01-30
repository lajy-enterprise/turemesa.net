<div class="d-flex justify-content-center align-items-center h-100 w-100 position-fixed top-0" style="z-index: 4000;background-color: #222221e6;" id="spinner">
    <div class="spinner-border text-success" role="status" style="width: 4rem; height: 4rem;">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

@push('js')
    <script type="text/javascript">
        function pensar(){
            $('#spinner').removeClass('d-none');
        }

        function noPensar(){
            $('#spinner').addClass('d-none');
        }

        window.addEventListener('load', () => {
          noPensar()        
        });
    </script>
@endpush