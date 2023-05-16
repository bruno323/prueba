$(document).ready(function(){
    $('#form_login').on('submit',function(e){
    e.preventDefault();
    var param = $(this).serialize()
    $.ajax({
        url:"controller/controllerLogin.php",
        data:param+"&action=Login",
        dataType:"json"
      }).done(function(response){
        if(response==1){
            window.location('Home');
        }
    })
})

});
