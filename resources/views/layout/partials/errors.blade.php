@if ($errors->any())
    <hr />

    <div class="box box-solid box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="icon fa fa-warning"></i>
                @lang('common.errors_title')
            </h3>
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