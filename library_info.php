<?php

/*******************************************************************************
    Library Admin - jQuery Library
    (c) 2010 - 2012 Bianka Martinovic - All rights reserved
    http://www.webbird.de/
*******************************************************************************/

global $lib_info;
$lib_info = array(
    'library_path'    => 'lib_jquery',
    'library_name'    => 'jQuery',
    'library_version' => '1.8.3',
    'library_info'    => 'Includes jQuery Core v1.8.3, jQuery UI 1.9.2, UI Theme "base"',
    'library_class'   => 'jQueryAdmin',
    'preset_suffix'   => 'jquery',
    'scan_dirs'       => array(
                            '/presets',
                            '/jquery/presets',
                         ),
);

?>