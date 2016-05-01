@if ($errors->any())
    <div class="box box-solid box-danger">
        <div class="box-header with-border">
            <i class="icon fa fa-warning"></i>
            @lang('common.errors_title')
        </div><!-- /.box-header -->
        <div class="box-body">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red">{{ $error }}</li>
                @endforeach
            </ul>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@endif