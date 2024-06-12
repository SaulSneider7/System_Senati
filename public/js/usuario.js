$("#btn_crear_usuario").click(function(){
    var nombre = $("#nombre_usuario").val();
    var email = $("#email_usuario").val();
    var id_perfil = $("#id_perfil").val();
    var password = $("#password").val();
    var password2 = $("#password2").val();
    
    $.ajax({
        type: "POST",
        url: "../app/controller/usuarios/UsuarioController.php",
        dataType: "json",
        data: {
            action: 'crearUsuario',
            nombre: nombre,
            email: email,
            id_perfil: id_perfil,
            password: password,
            password2: password2
        },
        success: function(data){
            console.log(data);
        },
        error: function(data){
            console.log(data);
        }
    })
})