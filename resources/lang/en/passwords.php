<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reminder Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'password' => 'Passwords must be at least six characters and match the confirmation.',
    'reset' => 'Your password has been reset!',
    'sent' => 'We have e-mailed your password reset link!',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that e-mail address.",



    'email' => [

        'welcome' => [
            'subject'                   => '[Novus Cleaning Company] - Welcome',
            'notify'                    => 'On behalf of Novus Cleaning Company, I would like to welcome you to our Novus Cleaning Company application. From here, you will be able to manage your jobs in a more efficient way.',
            'notify2'                   => 'Your user has been created successfully! You will use your email (',
            'notify3'                   => ') to Login into the application.',
            'instruction'               => 'In order to make your user available, you need first validate your email by clicking in the button bellow:',
            'validate_email_button'     => 'Validate Email',
            'optional_link'             => 'If you are having any trouble clicking the validate email button, please copy and paste the URL below into your web browser.',
        ],

        'set_password' => [
            'subject'                   => '[Novus Cleaning Company] - Set Password Link',
            'notify'                    => 'Somebody (hopefully you) recently requested to set your password for your Novus Cleaning account. No changes have been made to your account yet.',
            'instruction'               => 'You can now set your password by clicking in the button bellow:',
            'set_password_button'       => 'Set Password',
            'time_set_password'         => 'This password setting is only valid for the next '.Config::get('auth.password.expire', 120).' minutes.',
            'optional_link'             => 'If you are having any trouble clicking the password set button, please copy and paste the URL below into your web browser.',
        ],

        'password' => [
            'subject'                   => '[Novus Cleaning Company] - Forgotten Password Reset Link',
            'notify'                    => 'Somebody (hopefully you) recently requested to reset your password for your Novus Cleaning account. No changes have been made to your account yet.',
            'instruction'               => 'You can reset your password by clicking in the button bellow:',
            'reset_button'              => 'Reset Password',
            'not_requested'             => 'If you did not request a password reset, please ignore this email or reply to let us know. This password reset is only valid for the next '.Config::get('auth.password.expire', 120).' minutes.',
            'optional_link'             => 'If you are having any trouble clicking the password reset button, please copy and paste the URL below into your web browser.',
        ],

        'password_changed' => [
            'subject'                   => '[Novus Cleaning Company] - Your Password has been changed',
            'notify'                    => 'We wanted to let you know that your account password was changed.',
            'instruction1'              => 'If you did not perform this action, you can recover access by entering ',
            'instruction2'              => 'into the form at ',
            'problems'                  => 'If you run into problems, please contact support by visiting https://github.com/contact or replying to this email.',
        ],
    ],
];