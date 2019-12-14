jQuery(function() {
    jQuery( "#reg" ).validate({
            rules: {
                 nom: {
                            required: true,
                            minlength: 4,
                            maxlength: 10
                 },
                 ape: {
                            required: true,
                            minlength: 5,
                            maxlength: 30
                 },
                 usr: {
                            required: true,
                            minlength: 3,
                            maxlength: 10
                 },
                 mail: {
                            required: true,
                            email: true
                 },
                 pwd: {
                     minlength: 5,
                     maxlength: 12
                 },
                 pwd2: {
                     equalTo: "#pwd"
                 }
            },
            messages: {
                 nom: {
                            required: "Nombre requerido",
                            minlength: $.format("Mínimo {0} caracteres"),
                            maxlength: $.format("{0} caracteres máximos")
                 },
                 ape: {
                            required: "Apellidos requeridos",
                            minlength: $.format("Mínimo {0} caracteres"),
                            maxlength: $.format("{0} caracteres máximos")
                 },
                 usr: {
                            required: "Nombre de usuario necesario",
                            minlength: $.format("Mínimo {0} caracteres"),
                            maxlength: $.format("{0} caracteres máximos")
                 },
                 mail: {
                            required: "Debes introducir un email",
                            email: "Introduce un email correcto"
                 },
                 pwd: {
                         required: "Debes introducir una contraseña",
                         minlength: $.format("Mínimo {0} caracteres"),
                         maxlength: $.format("{0} caracteres máximos")
                 },
                 pwd2: {
                         required: " ",
                         equalTo: "Las contraseñas no coinciden"
                 }
            }
    });
    jQuery( "#log" ).validate({
            rules: {
                 usuario: {
                            required: true
                 },
                 password: {
                            required: true
                 }
            },
            messages: {
                 usuario: {
                            required: "Nombre de usuario incorrecto"
                 },
                 password: {
                            required: "Contraseña incorrecta"
                 }
            }
    });
 });

jQuery(function() {
        jQuery( "#reg" ).validate();
        jQuery( "#log" ).validate();
});