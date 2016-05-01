@if(Session::has('status'))
    <div class="alert alert-success">
        <i class="icon fa fa-thumbs-o-up"></i>
        {{Session::get('status')}}
    </div>
@endif

@if(Session::has('flash_message_danger'))
    <div class="alert alert-danger">
        <i class="icon fa fa-lock"></i>
        {{Session::get('flash_message_danger')}}
    </div>
@endif