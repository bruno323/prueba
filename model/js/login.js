$(document).ready(function(){
    $('#form_login').on('submit',function(e){
    e.preventDefault();
    var param = $(this).serialize()
    console.log(param);
    $.ajax({
        url:"controller/controllerLogin.php",
        data:param+"&action=Login",
        dataType:"json"
      }).done(function(response){
        if(response==1){
            console.log('ingreso');
        }
        console.log(response);
    })
    console.log('1');
})

});
