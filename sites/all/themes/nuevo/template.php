<?php

/**
 * @file
 * template.php
 */
/**YO AGREGUE ESOT**/
function nuevo_preprocess_html(&$vars) {
    //dsm($vars);  //uncomment to get the DSM, check the classes_array
    $vars['classes_array'][3] = '';  //removes less than helpful no-sidebars class that is hard coded into drupal
    //adding theme-specific sidebar indicator class
    if (!empty($vars['page']['sidebar-second'])) {
        $vars['classes_array'][] = 'nuevo-sidebar-second';
    } else {
        $vars['classes_array'][] = 'nuevo-no-sidebar';
    }
}