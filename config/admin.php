<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Default admin user (HR and GS)
    |--------------------------------------------------------------------------
    |
    | Default user will be created at project installation/deployment
    |
    */
    'administator_name' => env('ADMINISTRATOR_NAME', ''),
    'administator_email' => env('ADMINISTRATOR_EMAIL', ''),
    'administator_role' => env('ADMINISTRATOR_ROLE', ''),
    'administator_password' =>env('ADMINISTRATOR_PASSWORD', ''),

    'hr_name' => env('HR_NAME', ''),
    'hr_email' => env('HR_EMAIL', ''),
    'hr_role' => env('HR_ROLE', ''),
    'hr_password' =>env('HR_PASSWORD', ''),

    'gs_name' => env('GS_NAME', ''),
    'gs_email' => env('GS_EMAIL', ''),
    'gs_role' => env('GS_ROLE', ''),
    'gs_password' =>env('GS_PASSWORD', ''),

    'auditor_name' => env('AUDITOR_NAME', ''),
    'audito_email' => env('AUDITOR_EMAIL', ''),
    'audito_role' => env('AUDITOR_ROLE', ''),
    'audito_password' =>env('AUDITOR_PASSWORD', '')
    ];
    ?>