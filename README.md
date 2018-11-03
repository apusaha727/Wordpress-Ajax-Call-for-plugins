# Wordpress-Ajax-Call-for-plugins
This is How you call ajax in your custom plugins

step one: First create a js function which you need to call any change or other function.
```
<script>
//Call
function applyAjax(){
  var data = {
    'action': 'your_function_name',
    'extravar': extravar
  };
    $.post('/wp-admin/admin-ajax.php', data, function(response) {
        //find your response here
    });
}
</script>
```

Step two: Then you need to create a php function in your plugin function page exctly give the name which your javascript function action name.
and then apply add_action hooks.

```
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
 
 ```
