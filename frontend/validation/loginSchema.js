import * as yup from "yup";

const loginSchema = yup.object({
	email: yup.string().required("Insira seu email.").email("insira um email válido."),
	password: yup.string().required("Insira sua senha!").min(8, "Email ou senha inválidos"),
});

export default loginSchema;
