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
        'subject'           => 'Novus Cleaning Company - Forgotten Password Reset Link',
        'title'             => 'Novus Cleaning Company',
        'hello'             => 'Hi ',
        'notify'            => 'Somebody (hopefully you) recently requested to reset your password for your Novus Cleaning App account. No changes have been made to your account yet.',
        'instruction'       => 'You can reset your password by clicking in the button bellow:',
        'reset_button'      => 'Reset Password',
        'not_requested'     => 'If you did not request a password reset, please ignore this email or reply to let us know. This password reset is only valid for the next '.Config::get('auth.password.expire', 120).' minutes.',
        'closing'           => 'Yours,',
        'signature'         => 'Nick from Novus Cleaning Company',
        'say_hello'         => 'We also love hearing from you and helping you with any issues you have. Please reply to this email if you want to ask any question or just say hello :).',
        'postscript'        => 'P.S.',
        'optional_link'     => 'If you are having trouble clicking the password reset button, please copy and paste the URL below into your web browser.',
    ],
];
