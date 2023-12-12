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
    // 'between' => [
    //     'numeric' => ':attributeは:min ～ :max is false',
    //     'file' => ':attributeは:min ～ :max is flase',
    //     'string' => ':attributeは:min ～ :max is flase',
    //     'array' => ':attributeは:min ～ :max is flase',
    // ],
    // 'email' => ' is flase',
    // 'exists' => ' is flase',
    // 'required' => ':attribute is required',
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
        'mailAddress' => [
            'unique' => 'mail address already exist',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
     */
    'attributes' => [
        'mailAddress' => 'mail',
    ],
];
