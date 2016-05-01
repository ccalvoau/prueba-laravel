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
                        @lang('validation.attributes.cleaner.pt_cleaner')
                        <small>- @lang('validation.attributes.pt_index')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- form start -->
                    <form role="form">

                        <!-- .row General Info -->
                        <div class="row">
                            <!-- single column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">General Information</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="cleanerName">Cleaner Name</label>
                                            <input type="text" class="form-control" id="cleanerName"
                                                   placeholder="Cleaner Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="clientName">Client Name</label>
                                            <input type="text" class="form-control" id="clientName"
                                                   placeholder="Client Name">
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <select class="form-control select2">
                                                <option selected>Select an Address</option>
                                                <option>1012 / 601 Little Collins Street, Melbourne, 3000</option>
                                                <option>305 / 639 Little Bourke Street</option>
                                                <option>203 / 181 Exhibition Street, Melbourne, 3000</option>
                                                <option>304 / 270 King Street, Melbourne, 3000</option>
                                                <option>413 / 547 Flinders Lane, Melbourne, 3000</option>
                                                <option>2205 / 547 Spencer Street, Melbourne, 3000</option>
                                                <option>1905 / 547 Spencer Street, Melbourne, 3000</option>
                                            </select>
                                        </div>

                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Date</label>
                                            <div class="input-group date" id="dateQuote">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </div><!-- /.box -->
                            </div><!--/.col (single) -->
                        </div>   <!-- /.row -->

                        <!-- .row Kitchen -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Kitchen</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 80%">
                                                    <div class="input-group" style="width: 100%">
                                                        <select class="form-control select2" data-placeholder="Select an Address">
                                                            <option>SMALL</option>
                                                            <option selected>MEDIUM</option>
                                                            <option>LARGE</option>
                                                        </select>
                                                    </div>
                                                </th>
                                                <th style="width: 10%">
                                                    Quantity
                                                </th>
                                                <th style="width: 10%">
                                                    Total
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Oven & Rangehood
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Kitchen Cupboards / Doors / Benchtops
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Pantry (Large Cupboard)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Splashbacks / Tiles
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                        </table>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>
                        </div>

                        <!-- .row Bathroom -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Bathroom</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 80%">
                                                    <div class="input-group" style="width: 100%">
                                                        <select class="form-control select2" data-placeholder="Select an Address">
                                                            <option>SMALL</option>
                                                            <option selected>MEDIUM</option>
                                                            <option>LARGE</option>
                                                        </select>
                                                    </div>
                                                </th>
                                                <th style="width: 10%">
                                                    Quantity
                                                </th>
                                                <th style="width: 10%">
                                                    Total
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Shower - including exhaust fan
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Sink & Vanity Cupboard
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Bathroom Mirror Cabinet
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Toilet (including walls)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Bathtub
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                        </table>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>
                        </div>

                        <!-- .row Windows / Blinds -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Windows / Blinds (wash & blade wipe)</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 80%">
                                                    <div class="input-group" style="width: 100%">
                                                        <select class="form-control select2" data-placeholder="Select an Address">
                                                            <option>SMALL</option>
                                                            <option selected>MEDIUM</option>
                                                            <option>LARGE</option>
                                                        </select>
                                                    </div>
                                                </th>
                                                <th style="width: 10%">
                                                    Quantity
                                                </th>
                                                <th style="width: 10%">
                                                    Total
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Inside
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Outside
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Window Sills & Sliding Tracks
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Venetian Blinds (Small / Medium)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Venetian Blinds (Large)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                        </table>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>
                        </div>

                        <!-- .row Walls & Doors -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Walls & Doors</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 80%">
                                                    <div class="input-group" style="width: 100%">
                                                        <select class="form-control select2" data-placeholder="Select an Address">
                                                            <option>SMALL</option>
                                                            <option selected>MEDIUM</option>
                                                            <option>LARGE</option>
                                                        </select>
                                                    </div>
                                                </th>
                                                <th style="width: 10%">
                                                    Quantity
                                                </th>
                                                <th style="width: 10%">
                                                    Total
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dry Flat Mop Dusting (each wall)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Spot Clean (each wall)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Wash (each wall)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Mould Removal (each wall)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Skirting Boards (whole house per level)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Doors & Door Handles
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Cobwebs (whole house per level)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Light Switches
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                        </table>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>
                        </div>

                        <!-- .row Vents & Light Fittings -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Vents & Light Fittings</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 80%">
                                                    <div class="input-group" style="width: 100%">
                                                        <select class="form-control select2" data-placeholder="Select an Address">
                                                            <option>SMALL</option>
                                                            <option selected>MEDIUM</option>
                                                            <option>LARGE</option>
                                                        </select>
                                                    </div>
                                                </th>
                                                <th style="width: 10%">
                                                    Quantity
                                                </th>
                                                <th style="width: 10%">
                                                    Total
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Vent (dust & wet wipe)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Light Fitting (remove/wash & replace)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                        </table>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>
                        </div>

                        <!-- .row Floors -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Floors</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 80%">
                                                    <div class="input-group" style="width: 100%">
                                                        <select class="form-control select2" data-placeholder="Select an Address">
                                                            <option>SMALL</option>
                                                            <option selected>MEDIUM</option>
                                                            <option>LARGE</option>
                                                        </select>
                                                    </div>
                                                </th>
                                                <th style="width: 10%">
                                                    Quantity
                                                </th>
                                                <th style="width: 10%">
                                                    Total
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Vacuuming (per Level)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Mopping (per level)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Balcony (sweep & mop/wash)
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                        </table>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>
                        </div>

                        <!-- .row Total -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-solid box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Total</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td style="width: 90%">
                                                    TOTAL Hours
                                                </td>
                                                <td style="width: 10%">
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    TOTAL COST
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="inputEmail3"
                                                           placeholder="0"
                                                           disabled>
                                                </td>
                                            </tr>
                                        </table>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>
                        </div>

                        <!-- .row Button Options -->
                        <div class="row">
                            <!-- single column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-solid box-primary">
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </div><!-- /.box -->
                            </div><!--/.col (single) -->
                        </div><!-- /.row -->

                    </form>
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
        });
    </script>

@endsection