@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('place.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.place.pt_place')
                        <small>- @lang('validation.attributes.pt_edit')</small>
                    </h1>

                    @include('layout.partials.flash_message')
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.errors')

                            <!-- box form elements -->
                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('validation.attributes.place.edit_title_table'): {{ $place->id }}
                            </h3>
                            <a href="{{ route('places.index') }}" class="btn btn-default pull-right btn-xs">
                                @lang('validation.attributes.place.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::model($place, ['route' => ['places.update', $id], 'class' => 'form-horizontal', 'method' => 'put']) !!}

                                @include('places.partials.fields')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.place.button_update')
                                    </button>
                                </div><!-- /.col12 -->

                            {!! Form::close() !!}

                        </div><!-- /.box-body -->

                    </div><!-- /.box form elements -->

                </section>
                <!-- /.content -->

            </div>
            <!-- /.column -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

@endsection


@section('scripts')

    <!-- Select2 -->
    {!! Html::script('/assets/adminlte/plugins/select2/select2.full.min.js') !!}

    <!-- InputMask -->
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.js') !!}
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') !!}
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') !!}

    <!-- Page script -->
    <script>
        $(document).ready(function () {
            //Initialize Select2 Elements
            $(".select2").select2();

            $("[data-mask]").inputmask();
        });
    </script>

@endsection