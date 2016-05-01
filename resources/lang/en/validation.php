    <?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

        'pt_index'                  => 'LIST',
        'pt_show'                   => 'SHOW',
        'pt_create'                 => 'CREATE',
        'pt_edit'                   => 'EDIT',
        'pt_form'                   => 'FORM',

        'tag_yes'                   => 'YES',
        'tag_no'                    => 'NO',
        'tag_active'                => 'ACTIVE',
        'tag_inactive'              => 'INACTIVE',
        'tag_male'                  => 'MALE',
        'tag_female'                => 'FEMALE',
        'tag_available'             => 'AVAILABLE',
        'tag_unavailable'           => 'UNAVAILABLE',
        'toggle_columns'            => 'Toggle columns',
        'select_an_option'          => 'SELECT AN OPTION',

        'calendar' => [
            'page_title'                => 'Calendar',
        ],

        'contact' => [
            'pt_contact'                => 'CONTACT',
            'page_title'                => 'Contact',

            'name'                      => 'Your Name',
            'emailatt'                  => 'Your Email',
            'message'                   => 'Your Message',

            'create_title_table'        => 'Email Contact',
            'button_contact'            => 'Contact Us!',

            'email' => [
                'subject'                   => 'Novus Cleaning Company - Novus Feedback',
                'notify'                    => 'You have received a message from Novus.com',

                'from_description'          => 'Novus Support',
                
                'name'                      => 'NAME',
                'email'                     => 'EMAIL',
                'message'                   => 'MESSAGE',
            ],
        ],
        
        'charts' => [
            'page_title'                => 'Charts',
            
            'pie_title_example'         => 'Pie Chart - Cleaning Jobs per State',
            'bar_title_example'         => 'Bar Chart - Cleaning Jobs per State',

            'pie_legend_example'        => 'Cleaning Jobs per State in Pie Chart',
            'bar_legend_example'        => 'Cleaning Jobs per State in Bar Chart',
        ],

        'home' => [
            'pt_home'                   => 'HOME',
            'pt_index'                  => 'Welcome',
        ],

        'auth' => [
            'login_header'              => 'Login',
            'register_header'           => 'Register',

            'pt_auth'                   => '',

            'pt_login'                  => '',
            'pt_register'               => '',
            'pt_reset'                  => '',
            'pt_password'               => '',
            'pt_password_set'           => '',
            'pt_set_password'           => '',

            'first_name'                => 'First Name',
            'last_name'                 => 'Last Name',
            'email'                     => 'Email',
            'password'                  => 'Password',
            'password_confirmation'     => 'Confirm your Password',
            'forgot_password'           => 'Forgot Your Password?',

            'login_title'               => 'Login',
            'remember'                  => 'Remember Me',
            'button_login'              => 'Login',

            'register_title'            => 'Register',
            'button_register'           => 'Register',

            'password_title'            => 'Reset Password',
            'button_password'           => 'Send Password Reset Link',

            'reset_title'               => 'Reset Password',
            'button_reset'              => 'Reset Password',

            'password_set_title'        => 'Set Password',
            'button_password_set'       => 'Send Password Set Link',

            'set_password_title'        => 'Set Password',
            'button_set_password'       => 'Set Password',
        ],

        'user' => [
            'pt_user'                   => 'USER',
            'page_title'                => 'Users',

            'name'                      => 'Name',
            'first_name'                => 'First Name',
            'last_name'                 => 'Last Name',
            'email'                     => 'Email',
            'password_by_email'         => 'User Password will be set through an email link.',
            'role_id'                   => 'ID Role',
            'cleaner'                   => 'Cleaner Name',
            'cleaner_info'              => 'Cleaner Information',
            'show_cleaner_info'         => 'Show Cleaner Information',
            'role'                      => 'Role',
            'description'               => 'Description',
            'status'                    => 'Status',

            'index_title_table'         => 'Users',
            'button_add'                => 'Add a new User',

            'show_title_table'          => 'Showing User',
            'button_list'               => 'List Users',
            'button_edit'               => 'Edit Users',

            'create_title_table'        => 'Adding a new User',
            'button_create'             => 'Create',
            'profile_picture'           => 'Profile Picture',
            'profile_picture_notify'    => 'If you do not choose a new profile picture, you will automatically keep the current one.',
            'permission'                => 'Permission',

            'edit_title_table'          => 'Edit User',
            'button_update'             => 'Update',
            'button_show'               => 'Show User',
        ],

        'cleaner' => [
            'pt_cleaner'                => 'CLEANER',
            'page_title'                => 'Cleaners',

            'name'                      => 'Name',
            'id_type'                   => 'ID Type',
            'id_number'                 => 'ID Number',
            'ide'                       => 'Identification',
            'first_name1'               => 'First Name 1',
            'first_name2'               => 'First Name 2',
            'last_name1'                => 'Last Name 1',
            'last_name2'                => 'Last Name 2',
            'phone_number'              => 'Phone Number',
            'email'                     => 'Email',
            'password_by_email'         => 'User Password will be set through an email link.',
            'age'                       => 'Age',
            'date_of_birth'             => 'Date of Birth',
            'gender'                    => 'Gender',
            'nationality'               => 'Nationality',
            'mother_tongue'             => 'Mother Tongue',
            'english_level'             => 'English Level',
            'picture'                   => 'Picture',
            'tfn'                       => 'TFN',
            'abn'                       => 'ABN',
            'driving_licence'           => 'Driving Licence',
            'vehicle'                   => 'Vehicle',
            'own_vehicle'               => 'Own Vehicle',
            'licence_picture'           => 'Licence Picture',
            'permission'                => 'Cleaner User Permission',
            'role_id'                   => 'Role',
            'description'               => 'Description',
            'status'                    => 'Status',
            'no_jobs'                   => 'Jobs',
            'no_hours'                  => 'Hours',
            'profit'                    => 'Profit',

            'index_title_table'         => 'Cleaners',
            'button_add'                => 'Add a new Cleaner',

            'show_title_table'          => 'Showing Cleaner',
            'button_list'               => 'List Cleaners',
            'tfn_none'                  => 'Not specified.',
            'abn_none'                  => 'Not specified.',
            'driving_licence_none'      => 'Does not have.',
            'payment_infos_empty'       => 'There is not Payments Information for this Cleaner.',
            'button_edit'               => 'Edit Cleaner',
            'show_user'                 => 'Show Cleaner User',

            'create_title_table'        => 'Adding a new Cleaner',
            'button_create'             => 'Create',
            'profile_picture'           => 'Profile Picture',
            'profile_picture_notify'    => 'If you do not choose a new profile picture, you will automatically keep the current one.',
            'taxation'                  => 'Taxation',
            'transportation'            => 'Transportation',

            'edit_title_table'          => 'Edit Cleaner',
            'button_update'             => 'Update',
            'button_show'               => 'Show Cleaner',

            'gender_male'               => 'MALE',
            'gender_female'             => 'FEMALE',
        ],

        'availability' => [
            'pt_availability'           => 'AVAILABILITY',
            'page_title'                => 'Availabilities',

            'cleaner_name'              => 'Cleaner Name',
            'is_available'              => 'You should be available to work. You must choose at least an hour available',

            'show_title_table'          => 'Showing Availability',
            'button_edit'               => 'Edit Availability',

            'edit_title_table'          => 'Edit Availability',
            'button_update'             => 'Update',
            'button_show'               => 'Show Availability',
        ],

        'payment_info' => [
            'pt_payment_info'           => 'PAYMENT INFORMATION',
            'page_title'                => 'Payment Information',

            'cleaner_name'              => 'Cleaner Name',
            'bank_name'                 => 'Bank Name',
            'bsb'                       => 'BSB',
            'account_number'            => 'Account Number',
            'is_default'                => 'Default',
            'description'               => 'Description',

            'index_title_table'         => 'Payments Information',
            'button_add'                => 'Add new Payment Information',

            'show_title_table'          => 'Showing Payment Information',
            'button_list'               => 'List Payments Information',
            'button_edit'               => 'Edit Payments Information',

            'create_title_table'        => 'Adding new Payment Information',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Payment Information',
            'button_update'             => 'Update',
            'button_show'               => 'Show Payment Information',
        ],

        'client' => [
            'pt_client'                 => 'CLIENT',
            'page_title'                => 'Clients',

            'name'                      => 'Name',
            'first_name1'               => 'First Name 1',
            'first_name2'               => 'First Name 2',
            'last_name1'                => 'Last Name 1',
            'last_name2'                => 'Last Name 2',
            'client_type'               => 'Client Type',
            'phone_number'              => 'Phone Number',
            'email'                     => 'Email',
            'description'               => 'Description',
            'status'                    => 'Status',

            'index_title_table'         => 'Clients',
            'button_add'                => 'Add a new Client',

            'show_title_table'          => 'Showing Client',
            'button_list'               => 'List Clients',
            'places_empty'              => 'There is not places registered for this Client.',
            'button_edit'               => 'Edit Client',

            'create_title_table'        => 'Adding a new Client',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Client',
            'button_update'             => 'Update',
            'button_show'               => 'Show Client',
        ],

        'place' => [
            'pt_place'                  => 'PLACE',
            'page_title'                => 'Places',

            'client_name'               => 'Client Name',
            'unit_no'                   => 'Unit No',
            'unit_number'               => 'Unit Number',
            'street_no'                 => 'Street No',
            'street_number'             => 'Street Number',
            'street_name'               => 'Street Name',
            'street_type'               => 'Street Type',
            'suburb'                    => 'Suburb',
            'state'                     => 'State',
            'postcode'                  => 'Postcode',
            'reference'                 => 'Reference',
            'status'                    => 'Status',
            'verified'                  => 'Verified',
            'latitude'                  => 'Latitude',
            'longitude'                 => 'Longitude',
            'location_verified'         => 'This Place has been verified',
            'location_not_verified'     => 'This Place has NOT been verified',
            'cleaner_name'              => 'Cleaner Name',
            'no_jobs'                   => 'No. Jobs',

            'index_title_table'         => 'Places',
            'button_add'                => 'Add a new Place',

            'show_title_table'          => 'Showing Place',
            'button_list'               => 'List Places',
            'button_edit'               => 'Edit Place',

            'create_title_table'        => 'Adding a new Place',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Place',
            'button_update'             => 'Update',
            'button_show'               => 'Show Place',
        ],

        'team' => [
            'pt_team'                   => 'TEAM',
            'page_title'                => 'Teams',

            'alias'                     => 'Alias',
            'leader'                    => 'Leader',
            'cleaners'                  => 'Cleaners',
            'cleaner2'                  => 'Second Cleaner',
            'cleaner3'                  => 'Third Cleaner',
            'cleaner4'                  => 'Fourth Cleaner',
            'cleaner5'                  => 'Fifth Cleaner',
            'cleaner6'                  => 'Sixth Cleaner',
            'select_multiple'           => 'SELECT AT LEAST 1 CLEANER AND NO MORE THAN 5',
            'vehicle_id'                => 'Vehicle',
            'vehicle_plate'             => 'Vehicle Plate',
            'description'               => 'Description',
            'status'                    => 'Status',

            'index_title_table'         => 'Teams',
            'button_add'                => 'Add a new Team',

            'show_title_table'          => 'Showing Team',
            'button_list'               => 'List Teams',
            'button_edit'               => 'Edit Team',

            'create_title_table'        => 'Adding a new Team',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Team',
            'button_update'             => 'Update',
            'button_show'               => 'Show Team',
        ],

        'vehicle' => [
            'pt_vehicle'                => 'VEHICLE',
            'page_title'                => 'Vehicles',

            'registration_no'           => 'Registration No.',
            'vin'                       => 'VIN',
            'engine_no'                 => 'Engine No.',
            'make'                      => 'Make',
            'colour'                    => 'Colour',
            'type'                      => 'Type',
            'plate'                     => 'Plate',
            'year'                      => 'Year',
            'registration_expire'       => 'Registration Expire',
            'expire'                    => 'Expire',
            'owner'                     => 'Owner',
            'vehicle_picture'           => 'Vehicle Picture',
            'description'               => 'Description',
            'status'                    => 'Status',

            'index_title_table'         => 'Vehicles',
            'button_add'                => 'Add a new Vehicle',

            'show_title_table'          => 'Showing Vehicle',
            'button_list'               => 'List Vehicles',
            'button_edit'               => 'Edit Vehicle',

            'create_title_table'        => 'Adding a new Vehicle',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Vehicle',
            'button_update'             => 'Update',
            'button_show'               => 'Show Vehicle',
        ],
    ],


    'messages' => [

        'no_permission'                 => 'ATTENTION: You do not have enough permissions to access to that page. Please check your Role and contact the App Administrator.',

        'users' => [
            'create'                    => 'A new User has been added successfully! Also an email has been sent with the instructions to Authenticate!',
            'update'                    => 'The User has been updated successfully!',
            'user_validated'            => 'Your User has been validated successfully! Now you need to set your Password',
            'set_password_link'         => 'We have e-mailed your password set link! Please check your mailbox.'
        ],

        'cleaners' => [
            'create_user'               => 'A new Cleaner and their User have been added successfully!',
            'create'                    => 'A new Cleaner has been added successfully!',
            'update'                    => 'The Cleaner has been updated successfully!',
            'destroy'                   => 'The Cleaner has been deleted successfully!',
        ],

        'availabilities' => [
            'update'                    => 'The Availability has been updated successfully!',
        ],

        'clients' => [
            'create'                    => 'A new Client has been added successfully!',
            'update'                    => 'The Client has been updated successfully!',
            'destroy'                   => 'The Client has been deleted successfully!',
        ],

        'payment_infos' => [
            'create'                    => 'New Payment Information has been added successfully!',
            'update'                    => 'Payment Information has been updated successfully!',
            'destroy'                   => 'Payment Information has been deleted successfully!',
        ],

        'places' => [
            'create'                    => 'A new Place has been added successfully!',
            'update'                    => 'The Place has been updated successfully!',
            'destroy'                   => 'The Place has been deleted successfully!',
        ],

        'teams' => [
            'create'                    => 'A new Team has been added successfully!',
            'update'                    => 'The Team has been updated successfully!',
            'destroy'                   => 'The Team has been deleted successfully!',
        ],

        'vehicles' => [
            'create'                    => 'A new Vehicle has been added successfully!',
            'update'                    => 'The Vehicle has been updated successfully!',
            'destroy'                   => 'The Vehicle has been deleted successfully!',
        ],

        'email_sent'                => 'Your message has been sent successfully!',
    ],

    'placeholders' => [
        'email'                     => 'EMAIL',
        'password'                  => 'PASSWORD',
        'password_confirmation'     => 'CONFIRM PASSWORD',

        'name'                      => 'NAME',
        'message'                   => 'MESSAGE',
        
        'identification'            => 'IDENTIFICATION',
        'first_name'                => 'FIRST NAME',
        'first_name1'               => 'FIRST NAME 1',
        'first_name2'               => 'FIRST NAME 2',
        'last_name'                 => 'LAST NAME',
        'last_name1'                => 'LAST NAME 1',
        'last_name2'                => 'LAST NAME 2',
        'date'                      => 'XXX-XX-XX',
        'phone_number'              => 'XXXX XXX XXX',
        'tfn'                       => 'XXX XXX XXX',
        'abn'                       => 'XX XXX XXX XXX',
        'driving_licence'           => 'DRIVING LICENCE',
        'description'               => 'DESCRIPTION',

        'unit_number'               => 'UNIT NUMBER',
        'street_number'             => 'STREET NUMBER',
        'street_name'               => 'STREET NAME',
        'suburb'                    => 'SUBURB',
        'postcode'                  => 'POSTCODE',
        'reference'                 => 'REFERENCE',

        'registration_no'           => 'REGISTRATION NUMBER',
        'vin'                       => 'VIN',
        'engine_no'                 => 'ENGINE NUMBER',
        'make'                      => 'MAKE',
        'colour'                    => 'COLOUR',
        'type'                      => 'TYPE',
        'plate'                     => 'PLATE',
        'year'                      => 'XXXX',
        'owner'                     => 'OWNER',
        
        'alias'                     => 'ALIAS',

        'bsb'                       => 'BSB',
        'account_number'            => 'ACCOUNT NUMBER',
    ],

    'modals' => [

        'user_exist' => [
            'title'                     => 'Existent User',
            'notify1'                   => 'The user with email',
            'notify2'                   => 'who you are intending to create already exists as a User.',
            'user_name'                 => 'The user name is:',
            'information'               => 'You can not create another user with the above email as it must be a unique one among the users.',
            'close'                     => 'Close',
        ],

        'cleaner_exist' => [
            'title'                     => 'Existent Cleaner Confirm',
            'notify1'                   => 'The user with email',
            'notify2'                   => 'who you are intending to create already exists as a Cleaner.',
            'cleaner_name'              => 'The cleaner name is:',
            'recommendation'            => 'If you are sure the user you want to create is for the above mentioned cleaner, we strongly recommend to use the cleaner information already registered in the App.',
            'close'                     => 'Close',
            'use_cleaner'               => 'Use Cleaner Information',
        ],
    ],       
];