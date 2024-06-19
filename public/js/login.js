console.log("login");
$("#ingresar").click(function(){
    var email_formulario = $("#email").val();
    var password_formulario = $("#password").val();
    $.ajax({
        type: "POST",
        url: "../app/controller/login/ingresar.php",
        dataType: "json",
        data:{
            email: email_formulario,
            password: password_formulario
        },
        success: function(data){
            if (data.status=='success') {
                // console.log(data);
                window.location.href = data.url;
            } else {
                alert(data.message);
            }
        },
        error: function(data){
            console.log(data);
        }
    })
});