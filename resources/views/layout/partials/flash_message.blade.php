@if(Session::has('flash_message'))
    <div class="alert alert-{{ Session::get('flash_type', 'info') }}">
        @if(Session::get('flash_type') == "success")
            <i class="icon fa fa-thumbs-o-up"></i>
        @elseif(Session::get('flash_type') == "danger")
            <i class="icon fa fa-lock"></i>
        @elseif(Session::get('flash_type') == "info")
            <i class="icon fa fa-info"></i>
        @elseif(Session::get('flash_type') == "danger")
            <i class="icon fa fa-warning"></i>
        @endif
        {{ Session::get('flash_message') }}
    </div>
@endif