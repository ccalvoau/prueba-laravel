<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- Bootstrap 3.3.5 -->
        <style type="text/css">{{ file_get_contents(public_path() . '/assets/adminlte/bootstrap/css/bootstrap.min.css') }}</style>
        <!-- AdminLTE Skin -->
        <style type="text/css">{{ file_get_contents(public_path() . '/assets/adminlte/dist/css/skins/skin-blue.min.css') }}</style>
        <style>
            p {
                text-align: justify;
                font-size: 14px;
            }
            .small p .small a {
                font-size: 12px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <h3>@lang('passwords.email.title')</h3>
                <p>@lang('passwords.email.hello'){{ $user->name }},</p>
                <p>@lang('passwords.email.password_changed.notify')</p>

                <p>
                    @lang('passwords.email.password_changed.instruction1'){{ $user->email }}@lang('passwords.email.password_changed.instruction2')
                    <a href="{{ $link = route('password') }}">
                        {{ $link }}
                    </a>
                </p>

                <br/>

                <p>@lang('passwords.email.password_changed.problems')</p>
                <p>@lang('passwords.email.closing')</p>

                <br/>

                <div align="center">
                    <b>@lang('passwords.email.signature')</b>
                    <br/>
                    <br/>
                    <img src="{{ $message->embed( public_path() . '/assets/img/company_logo.png') }}" alt="@lang('common.company_name')" title="@lang('common.company_name')"/>
                </div>

                <hr/>

                <p><b>@lang('passwords.email.postscript')</b> @lang('passwords.email.say_hello')</p>
            </div>
        </div>
    </body>
</html>