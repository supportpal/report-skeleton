<?php declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Report Name (required)
    |--------------------------------------------------------------------------
    |
    | The name of your report, which will be displayed in the Reports list in
    | the operator area. Can be either a plain text name or a language key to
    | work with translations.
    |
    */

    'name' => 'Reports#Skeleton::lang.addon_name',

    /*
    |--------------------------------------------------------------------------
    | Report URI (optional)
    |--------------------------------------------------------------------------
    |
    | The home page of the report - where you may store documentation or
    | general information about the report.
    |
    */

    'uri' => '',

    /*
    |--------------------------------------------------------------------------
    | Report Description (optional)
    |--------------------------------------------------------------------------
    |
    | A short description of the report, as displayed in the Report section
    | in the operator area. Try to keep this short and sweet.
    |
    */

    'description' => 'Reports#Skeleton::lang.addon_description',

    /*
    |--------------------------------------------------------------------------
    | Report Version (optional)
    |--------------------------------------------------------------------------
    |
    | The current version number of the report, such as 1.0 or 1.0.3. Note that
    | versions are compared using version_compare() e.g. 1.02 is greater
    | than 1.1.
    |
    */

    'version' => '1.0',

    /*
    |--------------------------------------------------------------------------
    | Report Author (optional)
    |--------------------------------------------------------------------------
    |
    | The name of the report author. More than one author may be listed as a string.
    |
    */

    'author' => ':author_name',

    /*
    |--------------------------------------------------------------------------
    | Report Author URI (optional)
    |--------------------------------------------------------------------------
    |
    | Optionally provide a link to the author's profile or contact page.
    |
    */

    'author_uri' => ':author_uri',

    /*
    |--------------------------------------------------------------------------
    | Report Icon (optional)
    |--------------------------------------------------------------------------
    |
    | An icon for the report. Set the full path to an image on the file system.
    |
    */

    'icon' => '',

];
