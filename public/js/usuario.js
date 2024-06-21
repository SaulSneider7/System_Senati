// DATATABLE USUARIOS
//Jquery
$("#tabla_usuarios").DataTable();
//JS
// let table = new DataTable('#tabla_usuarios');

// CREAR USUARIO
$("#btn_crear_usuario").click(function () {
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
        success: function (data) {
            console.log(data);
            if (data.status == 'success') {
                alert(data.message);
            } else {
                alert(data.message);
            }
        },
        error: function (data) {
            console.log(data);
            alert(data.message);
        }
    });
});

//EDITAR USUARIO
$("#btn_editar_usuario").click(function () {
    var nombre = $("#nombre_usuario").val();
    var email = $("#email_usuario").val();
    var id_perfil = $("#id_perfil").val();
    var id_usuario = $("#id_usuario").val();

    $.ajax({
        type: "POST",
        url: "../app/controller/usuarios/UsuarioController.php",
        dataType: "json",
        data: {
            action: 'editarUsuario',
            id_usuario: id_usuario,
            nombre: nombre,
            email: email,
            id_perfil: id_perfil
        },
        success: function (data) {
            console.log(data);
            if (data.status == 'success') {
                alert(data.message);
            } else {
                alert(data.message);
            }
        },
        error: function (data) {
            console.log(data);
            alert(data.message);
        }
    });
});
// ELIMINAR USUARIO
function eliminar_usuario(id_usuario) {
    $.ajax({
        type: "POST",
        url: "../app/controller/usuarios/UsuarioController.php",
        dataType: "json",
        data: {
            action: 'eliminarUsuario',
            id_usuario: id_usuario,
        },
        success: function (data) {
            console.log(data);
            if (data.success == 'success') {
                window.location.href = "index.php";
            }else{
                console.log(data);
            }
        },
        error: function (data) {
            console.log(data);
        }
    });
}

//RESETAR PASSWORD
function resetPassword(id_usuario) {
    $.ajax({
        type: "POST",
        url: "../app/controller/usuarios/UsuarioController.php",
        dataType: "json",
        data: {
            action: 'resetPassword',
            id_usuario: id_usuario,
        },
        success: function (data) {
            console.log(data);
            if (data.success == 'success') {
                alert(data.message);
            }else{
                console.log(data);
            }
        },
        error: function (data) {
            console.log(data);
        }
    });
}