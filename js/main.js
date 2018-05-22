$(document).ready(function(){
	$('#form_login').validate({
		rules: {
			user_email: {
				required: true,
				email: true
			},
			user_password: {
				required: true,
				minlength: 5
			}

		},
		messages: {
			user_email: {
				required: "Campo email obrigatorio",
				email: "Digite um endereço de email valido"
			},
			user_password: {
				required: "Campo senha obrigatorio",
				minlength: "Minimo 5 caracteres"
			}
		}
	})
});