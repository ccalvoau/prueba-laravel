@if ($errors->any())
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

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
            </div>
        </div>
    </div>
    <br />
@endif