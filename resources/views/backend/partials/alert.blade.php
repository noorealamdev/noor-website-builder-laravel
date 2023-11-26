@if(session()->has('msg'))
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="solid-successToast" class="toast colored-toast bg-{{ session('type') }} text-fixed-white" role="alert" aria-live="assertive"
             aria-atomic="true">
            <div class="toast-header bg-{{ session('type') }} text-fixed-white">
                <strong class="me-auto">{!! session('msg') !!}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
            </div>
            <div class="toast-body">

            </div>
        </div>
    </div>
    @push('script')
        <script>
            /*Top right toast js */
            const toprightToast = document.getElementById('solid-successToast')
            window.addEventListener('load', function () {
                const toast = new bootstrap.Toast(toprightToast)
                toast.show()
            });
        </script>
    @endpush
@endif

@if(session()->has('inlineMsg'))
    <div class="alert alert-{{ session('type') }} mt-3">
        {!! session('inlineMsg') !!}
    </div>
@endif


@if($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
