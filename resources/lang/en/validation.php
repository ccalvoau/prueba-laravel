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
        'name'                      => 'Name:',
        'email'                     => 'Email address:',
        'password'                  => 'Password:',
        'password_confirmation'     => 'Confirm your Password:',

        'pt_index'                  => 'LIST',
        'pt_show'                   => 'SHOW',
        'pt_create'                 => 'CREATE',
        'pt_edit'                   => 'EDIT',

        'tag_yes'                   => 'YES',
        'tag_no'                    => 'NO',
        'tag_active'                => 'ACTIVE',
        'tag_inactive'              => 'INACTIVE',

        'charts' => [
            'pie_title_example'         => 'Pie Chart - Cleaning Jobs per State',
            'bar_title_example'         => 'Bar Chart - Cleaning Jobs per State',

            'pie_legend_example'        => 'Cleaning Jobs per State in Pie Chart',
            'bar_legend_example'        => 'Cleaning Jobs per State in Bar Chart',
        ],


        'cleaner' => [
            'pt_cleaner'                => 'CLEANER',

            'name'                      => 'Name',
            'ide'                       => 'Identification',
            'first_name1'               => 'First Name 1',
            'first_name2'               => 'First Name 2',
            'last_name1'                => 'Last Name 1',
            'last_name2'                => 'Last Name 2',
            'age'                       => 'Age',
            'birthday'                  => 'Date of Birth',
            'gender'                    => 'Gender',
            'phone_number'              => 'Phone Number',
            'email'                     => 'Email',
            'tfn'                       => 'TFN',
            'abn'                       => 'ABN',
            'dlicence_no'               => 'Driving Licence',
            'vehicle'                   => 'Vehicle',
            'own_vehicle'               => 'Own Vehicle',
            'status'                    => 'Status',
            'description'               => 'Description',

            'index_title_table'         => 'Cleaners',
            'button_add'                => 'Add a new Cleaner',

            'show_title_table'          => 'Showing Cleaner',
            'button_list'               => 'List Cleaners',

            'create_title_table'        => 'Adding a new Cleaner',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Cleaner',
            'button_update'             => 'Update',

            'gender_male'               => 'MALE',
            'gender_female'             => 'FEMALE',
        ],

        'payment_info' => [
            'pt_payment_info'           => 'PAYMENT INFORMATION',

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

            'create_title_table'        => 'Adding new Payment Information',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Payment Information',
            'button_update'             => 'Update',
        ],

        'client' => [
            'pt_client'                 => 'CLIENT',

            'name'                      => 'Name',
            'first_name1'               => 'First Name 1',
            'first_name2'               => 'First Name 2',
            'last_name1'                => 'Last Name 1',
            'last_name2'                => 'Last Name 2',
            'client_type'               => 'Client Type',
            'phone_number'              => 'Phone Number',
            'email'                     => 'Email',
            'status'                    => 'Status',
            'description'               => 'Description',

            'index_title_table'         => 'Clients',
            'button_add'                => 'Add a new Client',

            'show_title_table'          => 'Showing Client',
            'button_list'               => 'List Clients',

            'create_title_table'        => 'Adding a new Client',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Client',
            'button_update'             => 'Update',
        ],

        'place' => [
            'pt_place'                  => 'PLACE',

            'client_name'               => 'Client Name',
            'unit_number'               => 'Unit Number',
            'street_number'             => 'Street Number',
            'street_name'               => 'Street Name',
            'street_type'               => 'Street Type',
            'suburb'                    => 'Suburb',
            'state'                     => 'State',
            'postcode'                  => 'Postcode',
            'referencep'                => 'Reference',
            'verified'                  => 'Verified',
            'cleaner_name'              => 'Cleaner Name',
            'no_jobs'                   => 'No. Jobs',

            'index_title_table'         => 'Places',
            'button_add'                => 'Add a new Place',

            'show_title_table'          => 'Showing Place',
            'button_list'               => 'List Places',

            'create_title_table'        => 'Adding a new Place',
            'button_create'             => 'Create',

            'edit_title_table'          => 'Edit Place',
            'button_update'             => 'Update',
        ]
    ],

];
