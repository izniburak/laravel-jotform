<?php

return [

    /**
     * API Key - Jotform API Key for your account
     *
     * @string
     */
    'api_key' => env('JOTFORM_API_KEY'),


    /**
     * Output Type - Jotform API Response output type
     *
     * @values json|xml
     * @string
     */
    'output' => env('JOTFORM_OUTPUT', 'json'),

    /**
     * Debug Mode
     *
     * @bool
     */
    'debug' => env('JOTFORM_DEBUG', false),

];
