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
                <h3>@lang('common.email.title')</h3>
                <p>@lang('common.email.hello'){{ $name }},</p>
                <p>@lang('passwords.email.welcome.notify')</p>
                <p>@lang('passwords.email.welcome.notify2'){{ $email }}@lang('passwords.email.welcome.notify3')</p>
                <p>@lang('passwords.email.welcome.instruction')</p>

                <br/>

                <div align="center">
                    <a class="btn btn-primary" href="{{ $link = route('password_set/{email}', ['email' => $email]) }}">
                        @lang('passwords.email.welcome.validate_email_button')
                    </a>
                </div>

                <br/>

                <p>@lang('common.email.closing')</p>

                <br/>

                <div align="center">
                    <b>@lang('common.email.signature')</b>
                    <br/>
                    <br/>
                    <img src="{{ $message->embed( public_path() . '/assets/img/company_logo.png') }}" alt="@lang('common.company_name')" title="@lang('common.company_name')"/>
                </div>

                <hr/>

                <p><b>@lang('common.email.postscript')</b> @lang('common.email.say_hello')</p>

                <hr/>

                <p class="small">@lang('passwords.email.welcome.optional_link')</p>
                <a class="small" href="{{ $link }}"> {{ $link }} </a>
            </div>
        </div>
    </body>
</html>