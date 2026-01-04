import * as yup from "yup";
const registerSchema = yup.object({
	name: yup
		.string()
		.required("Adicione seu nome de usuário!")
		.min(3, "O nome deve conter pelo menos 3 caracteres."),
	email: yup.string().required("Adicione um email.").email("Adicione um email válido."),
	password: yup
		.string()
		.required("Adicione uma senha!")
		.min(8, "A senha deve conter pelo menos 8 caracteres")
		.max(60, "A senha só pode conter 60 caracteres."),
	passwordConfirmation: yup
		.string()
		.required("Confirme sua senha")
		.oneOf([yup.ref("password")], "As senhas não coincidem."),
});

export default registerSchema;
