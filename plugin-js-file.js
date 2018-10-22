
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
