@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.team.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.team.pt_team')
                        <small>- @lang('validation.attributes.pt_create')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.team.create_title_table')
                            </div>
                            <a href="{{ route('teams::index') }}" class="btn btn-default pull-right btn-xs">
                                <i class="fa fa-navicon"></i>
                                @lang('validation.attributes.team.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::open(['route' => 'teams::store', 'class' => 'form-horizontal']) !!}

                                @include('teams.partials.fields_create')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.team.button_create')
                                    </button>
                                </div><!-- /.col12 -->

                            {!! Form::close() !!}

                        </div><!-- /.box-body -->

                    </div>

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

    <!-- Page script -->
    <script>
        $(document).ready(function () {
            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            var $option_cleaners = '@lang('validation.attributes.team.select_multiple')';
            $('#leader').select2({ placeholder: $option });
            if($('#leader').val() != "")
            {
                $("#cleaners option[value='" + $('#leader').val() + "']").attr('disabled',true);
            }
            $('#cleaners').select2({ placeholder: $option_cleaners,
                                    maximumSelectionLength: 5 }).select2('val', [
                                        $('#h_cleaner_id2').val(),
                                        $('#h_cleaner_id3').val(),
                                        $('#h_cleaner_id4').val(),
                                        $('#h_cleaner_id5').val(),
                                        $('#h_cleaner_id6').val()]
            );
            $('#vehicle_id').select2({ placeholder: $option });

            $('#leader').on('change', function () {
                if($('#h_leader').val() != "")
                {
                    $("#cleaners option[value='" + $('#h_leader').val() + "']").removeAttr('disabled');
                }
                $('#h_leader').val($('#leader').val());
                $("#cleaners option[value='" + $('#leader').val() + "']").attr('disabled',true);
                $('#cleaners').removeAttr('disabled')
                $('#cleaners').select2({ placeholder: $option_cleaners, maximumSelectionLength: 5 });
            });

            $('#cleaners').on('change', function () {
                var $values = $('#cleaners').select2("val");
                $values = $values+"";
                $values_arr = $values.split(',');
                for (i=0;i<$values_arr.length;i++)
                {
                    j=i+2;
                    $('#h_cleaner_id'+j).val($values_arr[i]);
                }
            });
        });
    </script>

@endsection