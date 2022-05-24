@if(Session::has('success'))
    <div class="row mr-2 ml-2">
            <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                    id="type-error" aria-label="Close">{{Session::get('success')}}
            </button>
    </div>
@endif
{{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> --}}