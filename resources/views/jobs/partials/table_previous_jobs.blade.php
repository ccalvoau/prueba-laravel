<div class="box box-solid box-primary" id="div_previous_jobs" style="display: none">

    <div class="box-header with-border">
        <div class="box-title">
            @lang('validation.attributes.job.previous_jobs')
        </div>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body" id="div_table_previous_jobs">
        <table id="tb_index_previous_jobs" class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                @include('jobs.partials.thead_previous_jobs')
            </tr>
            </thead>

            <tbody>
            </tbody>

            <tfoot>
            <tr>
                @include('jobs.partials.thead_previous_jobs')
            </tr>
            </tfoot>
        </table>
    </div>

    <div class="box-body" id="div_no_previous_jobs">
        @lang('validation.attributes.job.no_previous_jobs')
    </div>
</div>