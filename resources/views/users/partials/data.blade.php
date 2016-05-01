<table id="tb_data_user" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.user.name'):
            </td>
            <td class="td_data_values">
                {{ $user->name }}
            </td>
            <td rowspan="5" width="200px" align="center">
                <div class="small-box bg-primary" style="width: 180px; height: 180px;">
                    <div class="inner">
                        {!! Html::image('assets/img/profile_pictures/'.$user->profile_picture, '', ['id' => 'profile_picture_box', 'width' => '160px', 'height' => '160px', 'align' => 'center']) !!}
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.user.email'):
            </td>
            @if($user->validated)
            <td class="td_data_values text-success">
                {{ $user->email }} <i class="fa fa-check"></i>
            @else
            <td class="td_data_values text-danger">
                {{ $user->email }} <i class="fa fa-close"></i>
            @endif
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.user.role'):
            </td>
            <td class="td_data_values">
                {{ $user->role->name }}
                @if ($user->role->id == 1)
                    <i class="fa fa-star"></i>
                @elseif($user->role->id == 2)
                    <i class="fa fa-star-half-empty"></i>
                @elseif($user->role->id == 3)
                    <i class="fa fa-star-o"></i>
                @else
                    <i class="fa fa-circle-o"></i>
                @endif
            </td>
        </tr>

        @if($user->cleaner_id)
            <tr>
                <td colspan="2">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td class="td_data_names">
                    @lang('validation.attributes.user.cleaner_info'):
                </td>
                <td class="td_data_values">
                    <a href="{{ route('cleaners::show', $user->cleaner_id) }}">
                        @lang('validation.attributes.user.show_cleaner_info')
                    </a>
                </td>
            </tr>
        @else
            <tr>
                <td colspan="2">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    &nbsp;
                </td>
            </tr>
        @endif

        <tr>
            <td colspan="3">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.user.status'):
            </td>
            <td class="td_data_values" colspan="2">
                @if($user->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>
        </tr>
        @if($user->description)
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.user.description'):
            </td>
            <td class="td_data_values just" colspan="2">
                {{ $user->description }}
            </td>
        </tr>
        @endif
    </tbody>
</table>