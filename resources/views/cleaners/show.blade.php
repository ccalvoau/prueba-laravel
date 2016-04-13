@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('client.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.cleaner.pt_cleaner')
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('validation.attributes.cleaner.show_title_table'): {{ $cleaner->id }}
                            </h3>
                            <a href="{{ route('cleaners.index') }}" class="btn btn-default pull-right btn-xs">
                                @lang('validation.attributes.cleaner.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('cleaners.partials.data')

                        </div><!-- /.box-body -->

                    </div>

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('timetable.title_table')
                            </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="16%" class="text-center">
                                            @lang('timetable.time_day')
                                        </th>
                                        <th width="12%" class="text-center">
                                            @lang('timetable.monday')
                                        </th>
                                        <th width="12%" class="text-center">
                                            @lang('timetable.tuesday')
                                        </th>
                                        <th width="12%" class="text-center">
                                            @lang('timetable.wednesday')
                                        </th>
                                        <th width="12%" class="text-center">
                                            @lang('timetable.thursday')
                                        </th>
                                        <th width="12%" class="text-center">
                                            @lang('timetable.friday')
                                        </th>
                                        <th width="12%" class="text-center">
                                            @lang('timetable.saturday')
                                        </th>
                                        <th width="12%" class="text-center">
                                            @lang('timetable.sunday')
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center text-bold">
                                            00:00 - 01:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="00_1" class="success">
                                            {{--<i class="fa fa-check-square"></i>--}}
                                        </td>
                                        <td id="00_2">
                                        </td>
                                        <td id="00_3">
                                        </td>
                                        <td id="00_4">
                                        </td>
                                        <td id="00_5">
                                        </td>
                                        <td id="00_6">
                                        </td>
                                        <td id="00_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            01:00 - 02:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="01_1">
                                        </td>
                                        <td id="01_2">
                                        </td>
                                        <td id="01_3">
                                        </td>
                                        <td id="01_4">
                                        </td>
                                        <td id="01_5">
                                        </td>
                                        <td id="01_6">
                                        </td>
                                        <td id="01_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            02:00 - 03:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="02_1">
                                        </td>
                                        <td id="02_2">
                                        </td>
                                        <td id="02_3">
                                        </td>
                                        <td id="02_4">
                                        </td>
                                        <td id="02_5">
                                        </td>
                                        <td id="02_6">
                                        </td>
                                        <td id="02_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            03:00 - 04:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="03_1">
                                        </td>
                                        <td id="03_2">
                                        </td>
                                        <td id="03_3">
                                        </td>
                                        <td id="03_4">
                                        </td>
                                        <td id="03_5">
                                        </td>
                                        <td id="03_6">
                                        </td>
                                        <td id="03_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            04:00 - 05:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="04_1">
                                        </td>
                                        <td id="04_2">
                                        </td>
                                        <td id="04_3">
                                        </td>
                                        <td id="04_4">
                                        </td>
                                        <td id="04_5">
                                        </td>
                                        <td id="04_6">
                                        </td>
                                        <td id="04_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            05:00 - 06:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="05_1">
                                        </td>
                                        <td id="05_2">
                                        </td>
                                        <td id="05_3">
                                        </td>
                                        <td id="05_4">
                                        </td>
                                        <td id="05_5">
                                        </td>
                                        <td id="05_6">
                                        </td>
                                        <td id="05_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            06:00 - 07:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="06_1">
                                        </td>
                                        <td id="06_2">
                                        </td>
                                        <td id="06_3">
                                        </td>
                                        <td id="06_4">
                                        </td>
                                        <td id="06_5">
                                        </td>
                                        <td id="06_6">
                                        </td>
                                        <td id="06_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            07:00 - 08:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="07_1">
                                        </td>
                                        <td id="07_2">
                                        </td>
                                        <td id="07_3">
                                        </td>
                                        <td id="07_4">
                                        </td>
                                        <td id="07_5">
                                        </td>
                                        <td id="07_6">
                                        </td>
                                        <td id="07_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            08:00 - 09:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="08_1">
                                        </td>
                                        <td id="08_2">
                                        </td>
                                        <td id="08_3">
                                        </td>
                                        <td id="08_4">
                                        </td>
                                        <td id="08_5">
                                        </td>
                                        <td id="08_6">
                                        </td>
                                        <td id="08_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            09:00 - 10:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="09_1">
                                        </td>
                                        <td id="09_2">
                                        </td>
                                        <td id="09_3">
                                        </td>
                                        <td id="09_4">
                                        </td>
                                        <td id="09_5">
                                        </td>
                                        <td id="09_6">
                                        </td>
                                        <td id="09_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            10:00 - 11:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="10_1">
                                        </td>
                                        <td id="10_2">
                                        </td>
                                        <td id="10_3">
                                        </td>
                                        <td id="10_4">
                                        </td>
                                        <td id="10_5">
                                        </td>
                                        <td id="10_6">
                                        </td>
                                        <td id="10_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            11:00 - 12:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="11_1">
                                        </td>
                                        <td id="11_2">
                                        </td>
                                        <td id="11_3">
                                        </td>
                                        <td id="11_4">
                                        </td>
                                        <td id="11_5">
                                        </td>
                                        <td id="11_6">
                                        </td>
                                        <td id="11_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            12:00 - 13:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="12_1">
                                        </td>
                                        <td id="12_2">
                                        </td>
                                        <td id="12_3">
                                        </td>
                                        <td id="12_4">
                                        </td>
                                        <td id="12_5">
                                        </td>
                                        <td id="12_6">
                                        </td>
                                        <td id="12_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            13:00 - 14:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="13_1">
                                        </td>
                                        <td id="13_2">
                                        </td>
                                        <td id="13_3">
                                        </td>
                                        <td id="13_4">
                                        </td>
                                        <td id="13_5">
                                        </td>
                                        <td id="13_6">
                                        </td>
                                        <td id="13_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            14:00 - 15:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="14_1">
                                        </td>
                                        <td id="14_2">
                                        </td>
                                        <td id="14_3">
                                        </td>
                                        <td id="14_4">
                                        </td>
                                        <td id="14_5">
                                        </td>
                                        <td id="14_6">
                                        </td>
                                        <td id="14_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            15:00 - 16:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="15_1">
                                        </td>
                                        <td id="15_2">
                                        </td>
                                        <td id="15_3">
                                        </td>
                                        <td id="15_4">
                                        </td>
                                        <td id="15_5">
                                        </td>
                                        <td id="15_6">
                                        </td>
                                        <td id="15_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            16:00 - 17:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="16_1">
                                        </td>
                                        <td id="16_2">
                                        </td>
                                        <td id="16_3">
                                        </td>
                                        <td id="16_4">
                                        </td>
                                        <td id="16_5">
                                        </td>
                                        <td id="16_6">
                                        </td>
                                        <td id="16_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            17:00 - 18:00 <i class="fa fa-sun-o pull-right"></i>
                                        </td>
                                        <td id="17_1">
                                        </td>
                                        <td id="17_2">
                                        </td>
                                        <td id="17_3">
                                        </td>
                                        <td id="17_4">
                                        </td>
                                        <td id="17_5">
                                        </td>
                                        <td id="17_6">
                                        </td>
                                        <td id="17_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            18:00 - 19:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="18_1">
                                        </td>
                                        <td id="18_2">
                                        </td>
                                        <td id="18_3">
                                        </td>
                                        <td id="18_4">
                                        </td>
                                        <td id="18_5">
                                        </td>
                                        <td id="18_6">
                                        </td>
                                        <td id="18_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            19:00 - 20:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="19_1">
                                        </td>
                                        <td id="19_2">
                                        </td>
                                        <td id="19_3">
                                        </td>
                                        <td id="19_4">
                                        </td>
                                        <td id="19_5">
                                        </td>
                                        <td id="19_6">
                                        </td>
                                        <td id="19_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            20:00 - 21:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="20_1">
                                        </td>
                                        <td id="20_2">
                                        </td>
                                        <td id="20_3">
                                        </td>
                                        <td id="20_4">
                                        </td>
                                        <td id="20_5">
                                        </td>
                                        <td id="20_6">
                                        </td>
                                        <td id="20_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            21:00 - 22:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="21_1">
                                        </td>
                                        <td id="21_2">
                                        </td>
                                        <td id="21_3">
                                        </td>
                                        <td id="21_4">
                                        </td>
                                        <td id="21_5">
                                        </td>
                                        <td id="21_6">
                                        </td>
                                        <td id="21_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            22:00 - 23:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="22_1">
                                        </td>
                                        <td id="22_2">
                                        </td>
                                        <td id="22_3">
                                        </td>
                                        <td id="22_4">
                                        </td>
                                        <td id="22_5">
                                        </td>
                                        <td id="22_6">
                                        </td>
                                        <td id="22_7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-bold">
                                            23:00 - 00:00 <i class="fa fa-moon-o pull-right"></i>
                                        </td>
                                        <td id="23_1">
                                        </td>
                                        <td id="23_2">
                                        </td>
                                        <td id="23_3">
                                        </td>
                                        <td id="23_4">
                                        </td>
                                        <td id="23_5">
                                        </td>
                                        <td id="23_6">
                                        </td>
                                        <td id="23_7">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div><!-- /.box-body -->

                    </div>

                    <div class="box box-solid box-primary    {{--collapsed-box--}}">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('validation.attributes.payment_info.index_title_table')
                            </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div><!-- /.box-header -->

                        @if(!$payment_infos->isEmpty())
                        <div class="box-body">

                            @include('payment_infos.partials.table')

                        </div><!-- /.box-body -->
                        @else
                            <div class="box-body">

                                @lang('validation.attributes.empty.cleaner_payment_infos')

                            </div><!-- /.box-body -->
                        @endif

                    </div><!-- /.box form elements -->

                    <a class="btn btn-primary pull-right" href="{{asset('assets/pdf/manual/prueba.pdf')}}" download="Me cago en todo.pdf">
                        <i class="fa fa-download"></i> PDF Download
                    </a>

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

    <!-- DataTables -->
    {!! Html::script('/assets/adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('/assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}

    <!-- Page script -->
    <script>
        $(document).ready(function () {
            $("#tb_index_payment_infos").DataTable();

            var availability = '00:0;01:0;02:0;03:0;04:0;05:0;06:0;07:0;08:0;09:0;10:0;11:0;12:0;13:0;14:0;15:0;16:0;17:0;18:0;19:0;20:0;21:0;22:0;23:0,00:1;01:1;02:1;03:1;04:1;05:1;06:1;07:1;08:1;09:1;10:1;11:1;12:1;13:1;14:1;15:1;16:1;17:1;18:1;19:1;20:1;21:1;22:1;23:1,00:0;01:0;02:0;03:0;04:0;05:0;06:0;07:0;08:0;09:0;10:0;11:0;12:1;13:1;14:1;15:1;16:1;17:1;18:1;19:1;20:1;21:1;22:1;23:1,00:0;01:0;02:0;03:0;04:0;05:0;06:0;07:0;08:0;09:0;10:0;11:0;12:0;13:0;14:0;15:0;16:0;17:0;18:0;19:0;20:0;21:0;22:0;23:0,00:1;01:1;02:1;03:1;04:1;05:1;06:1;07:1;08:1;09:1;10:1;11:1;12:0;13:0;14:0;15:0;16:0;17:0;18:0;19:0;20:0;21:0;22:0;23:0,00:0;01:0;02:0;03:0;04:0;05:0;06:0;07:0;08:0;09:0;10:0;11:0;12:1;13:1;14:1;15:1;16:1;17:1;18:1;19:1;20:1;21:1;22:1;23:1,00:1;01:1;02:1;03:1;04:1;05:1;06:1;07:1;08:1;09:1;10:1;11:1;12:0;13:0;14:0;15:0;16:0;17:0;18:0;19:0;20:0;21:0;22:0;23:0';
            var availability_array = availability.split(',');
            var column_available = "";
            var cell_available = "";

            console.log(availability);

            for(i=0; i<availability_array.length; i++)
            {
                column_available = availability_array[i].split(';');

                for(j=0; j<column_available.length; j++)
                {
                    cell_available = column_available[j].split(':');

                    if (cell_available[1] == 0)
                    {
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).addClass('danger');
                    }
                    else
                    {
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).addClass('success');
                    }
                }
            }
        });
    </script>

@endsection