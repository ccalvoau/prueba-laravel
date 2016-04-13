@if(Session::has('flash_message'))
    <hr />
    <div class="alert alert-success">
        {{Session::get('flash_message')}}
    </div>
@endif