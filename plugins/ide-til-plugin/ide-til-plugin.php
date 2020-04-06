<?php
/**
 * Plugin Name: Ide Til Plugin
 * Description: Dette er et eksempel på et plugin til eksamen
**/ 

function ide_til_plugin ()
{
    $content= "Dette er et mega basic plugin";
    
    $content .= "<div>Dette er en div</div>";
    $content .= "<p>Dette er en paragraftekst</p>";
    
    return $content;
}
add_shortcode('eksempel','ide_til_plugin');


function ide_admin_option ()
{
    add_menu_page('Header & Footer Scripts','Site Scripts','manage_options','ide-til-plug','ide_script_page','',200);
}

add_action('admin_menu','ide_admin_option');




function nyhedsformular()
{
    /*content variable*/ 
    
    $content ='';
    return $content ='';
}

add_shortcode('kogle_nyhedsformular','nyhedsformular'); 






?>