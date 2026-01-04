import * as yup from "yup";

const taskSchema = yup.object({
	title: yup
		.string()
		.required("O titulo é obrigatório.")
		.min(5, "Deve conter no minimo 5 caracteres."),
	describe: yup.string(),
	time: yup.string(),
	date: yup.string(),
});

export default taskSchema;
