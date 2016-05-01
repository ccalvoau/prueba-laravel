@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.availability.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.availability.pt_availability')
                        <small>- @lang('validation.attributes.pt_edit')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.flash_message')

                    @include('layout.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.availability.edit_title_table'): {{ $cleaner->availability->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('availabilities::show', [$cleaner->availability->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-search"></i>
                                    @lang('validation.attributes.availability.button_show')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::model($cleaner->availability, ['route' => ['availabilities::update', $id], 'class' => 'form-horizontal', 'method' => 'put']) !!}

                                @include('availabilities.partials.fields')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary" onclick="saveTimeTable();">
                                        @lang('validation.attributes.availability.button_update')
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

    <!-- iCheck 1.0.1 -->
    {!! Html::script('/assets/adminlte/plugins/iCheck/icheck.min.js') !!}

    <!-- Page script -->
    <script type="text/javascript">
        $(document).ready(function () {
            //iCheck for checkbox and radio inputs
            $('input').iCheck({
                handle: 'checkbox',
                checkboxClass: 'icheckbox_minimal-blue',
                increaseArea: '100%',
                focusClass: ''
            });

            var availability = $('#h_timetable').val();
            var availability_array = availability.split(',');
            var column_available = "";
            var cell_available = "";

            for(i=0; i<availability_array.length; i++)
            {
                column_available = availability_array[i].split(';');

                for(j=0; j<column_available.length; j++)
                {
                    cell_available = column_available[j].split(':');

                    if (cell_available[1] == 0)
                    {
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).removeClass('success');
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).addClass('danger');
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).attr('title', '@lang('validation.attributes.tag_unavailable')');
                    }
                    else
                    {
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).removeClass('danger');
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).addClass('success');
                        $('#checkbox' + cell_available[0].substr(0,2) + '_' + (i+1)).iCheck('check');
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).attr('title', '@lang('validation.attributes.tag_available')');
                    }
                }
            }
            $('#div_availability').show();

            $("input:checkbox").on('ifChanged', function () {
                var $id = this.id;
                var $checkbox_id = $id.replace('checkbox','');
                if(this.checked)
                {
                    $('#' + $checkbox_id).removeClass('danger');
                    $('#' + $checkbox_id).addClass('success');
                    $('#' + $checkbox_id).prop('checked',true);
                    $('#' + $checkbox_id).attr('title', '@lang('validation.attributes.tag_available')');
                }
                else
                {
                    $('#' + $checkbox_id).removeClass('success');
                    $('#' + $checkbox_id).addClass('danger');
                    $('#' + $checkbox_id).prop('checked',false);
                    $('#' + $checkbox_id).attr('title', '@lang('validation.attributes.tag_unavailable')');
                }
                //saveTimeTable();
            });
        });
    </script>


    <script type="text/javascript">
        function saveTimeTable()
        {
            var h_timetable = "";
            var is_available = false;

            for (j = 1; j <= 7; j++) {
                for(i=0; i<24; i++) {
                    hour = i;
                    if(i.toString().length==1)
                    {
                        hour = '0'+i;
                    }

                    if($('#checkbox'+hour+'_'+j).parent().attr('aria-checked')=="true")
                    {
                        h_timetable = h_timetable + hour+':1'+';';
                        is_available = true;
                    }
                    else
                    {
                        h_timetable = h_timetable + hour+':0'+';';
                    }
                }
                if(hour==23)
                {
                    i=0;
                    h_timetable = h_timetable.substr(0, h_timetable.length-1) + ',';
                }
                if(j==7)
                {
                    h_timetable = h_timetable.substr(0, h_timetable.length-1);
                }
            }

            $('#h_timetable').val(h_timetable);
            $('#h_is_available').val(is_available);
        }
    </script>

@endsection