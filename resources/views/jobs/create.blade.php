@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.job.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.job.pt_job')
                        <small>- @lang('validation.attributes.pt_create')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.job.create_title_table')
                            </div>
                            <a href="{{ route('jobs::index') }}" class="btn btn-default pull-right btn-xs">
                                <i class="fa fa-navicon"></i>
                                @lang('validation.attributes.job.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::open(['route' => 'jobs::store', 'class' => 'form-horizontal']) !!}

                                @include('jobs.partials.fields_create')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.job.button_create')
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
    <!-- InputMask -->
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.js') !!}
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') !!}
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') !!}
    <!-- Date-range-picker -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js') !!}
    {!! Html::script('/assets/adminlte/plugins/daterangepicker/daterangepicker.js') !!}
    <!-- Bootstrap Datepicker -->
    {!! Html::script('/assets/adminlte/plugins/datepicker/bootstrap-datepicker.js') !!}
    <!-- Bootstrap Timepicker -->
    {!! Html::script('/assets/js/bootstrap-clockpicker.js') !!}
    <!-- DataTables -->
    {!! Html::script('/assets/adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('/assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}
    <!-- Numeric Format -->
    {!! Html::script('/assets/js/numeral.js') !!}
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>

    <!-- Page script -->
    <script type="text/javascript">
        $(document).ready(function () {
            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            $('#client_id').select2({ placeholder: $option });
            $('#client_type_id').select2({ placeholder: $option });
            $('#place_id').select2({ placeholder: $option });
            $('#team_id').select2({ placeholder: $option });
            $('#status_job_id').select2({ placeholder: $option });

            $("[data-mask]").inputmask();

            //Date picker
            $('#dp_job_date').datepicker({
                format: "yyyy/mm/dd",
                startDate: "today",
                language: "en",
                autoclose: true,
                toggleActive: true
            });

            $('#cp_job_time').clockpicker({
                autoclose: true
            });

            var $table = $("#tb_index_previous_jobs").DataTable({
                "order": [ 0, "asc" ],
                "aoColumns" : [
                    { sWidth: '15%' },
                    { sWidth: '15%' },
                    { sWidth: '15%' },
                    { sWidth: '15%' },
                    { sWidth: '15%', sClass: "text-right" },
                    { sWidth: '15%', sClass: "text-right" },
                    { sWidth: '10%' }
                ],
            });

            $('#client_id').on('change', function () {
                var $client_id = $('#client_id').val();

                if($client_id != "")
                {
                    $.get('/ajax/client_type/'+$client_id+'/job.json', function(client_type_id)
                    {
                        $('#client_type_id').select2({ placeholder: $option }).select2('val', client_type_id);
                    });
                    $.get('/ajax/place/'+$client_id+'/job.json', function(places)
                    {
                        $('#place_id').empty();

                        var options = $("#place_id");
                        options.append($("<option />").val('').text('SELECT AN OPTION'));
                        $.each(places, function(key, value) {
                            options.append($("<option />").val(key).text(value));
                        });
                        $('#place_id').select2({ placeholder: $option });
                        $('#div_previous_jobs').hide();
                    });
                }
            });

            $('#team_id').on('change', function () {
                var $team_id = $('#team_id').val();

                if($team_id != "")
                {
                    $.get('/ajax/leader/'+$team_id+'/job.json', function(leader)
                    {
                        $('#leader_name').val(leader);
                        $('#div_leader').show();
                    });
                }
            });


            $('#place_id').on('change', function () {
                var $client_id = $('#client_id').val();
                var $place_id = $('#place_id').val();

                if($client_id != "" && $place_id != "")
                {
                    $.get('/ajax/jobs/'+$client_id+'/'+$place_id+'/job.json', function(jobs)
                    {
                        if(jobs != "")
                        {
                            $.each(jobs, function(k, job) {
                                price = job.price;

                                $table.row.add( [
                                    job.job_date,
                                    job.job_time,
                                    job.team_alias,
                                    job.leader_name,
                                    '<i class="fa fa-dollar pull-left"></i>'+numeral(price).format('0,0.00'),
                                    '<i class="fa fa-hourglass-o pull-left"></i>'+job.no_hours,
                                    job.status_name,
                                ] ).draw( true );

                                $('#div_no_previous_jobs').hide();
                                $('#div_table_previous_jobs').show();
                            });
                        }
                        else
                        {
                            $table.rows().remove().draw();
                            $('#div_table_previous_jobs').hide();
                            $('#div_no_previous_jobs').show();
                        }

                        $('#div_previous_jobs').show();
                    });
                }
            });
        });
    </script>


    <script type="text/javascript">
    </script>

@endsection