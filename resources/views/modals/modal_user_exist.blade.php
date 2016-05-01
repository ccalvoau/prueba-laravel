<div id="user_exist" class="modal modal-primary" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fa fa-exclamation-triangle"></i>
                    @lang('validation.modals.user_exist.title')
                </h4>
            </div>
            <div class="modal-body">
                <p class="text-justify">
                    @lang('validation.modals.user_exist.notify1') <strong id="modal_user_email"></strong> @lang('validation.modals.user_exist.notify2')
                </p>
                <br>
                <p class="text-justify">
                    @lang('validation.modals.user_exist.user_name') <strong id="modal_user_name"></strong>.
                </p>
                <br>
                <p class="text-justify">
                    @lang('validation.modals.user_exist.information')
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onclick="resetForm();">
                    @lang('validation.modals.user_exist.close')
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->