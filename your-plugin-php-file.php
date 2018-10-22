<?php
/***************************
*
*Custom Ajax Call
*
****************************/

add_action("wp_ajax_your_function_name", "your_function_name");
add_action("wp_ajax_nopriv_your_function_name", "your_function_name");

function your_function_name(){
    global $wpdb;
    $getpostedvalue = $_POST['getpostedvalue'];
    //your custom Code here;
}

 ?>
