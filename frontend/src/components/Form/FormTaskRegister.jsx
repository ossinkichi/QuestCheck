import { yupResolver } from "@hookform/resolvers/yup";
import { useForm } from "react-hook-form";
import taskSchema from "../../../validation/taskSchema";
import Button from "./Button";
import Input from "./Input";

const FormTaskRegister = () => {
	const alert = "";
	const {
		register,
		handleSubmit,
		reset,
		formState: { errors, isSubmitting },
	} = useForm({
		resolver: yupResolver(taskSchema),
	});

	async function onSubmit(data) {
		try {
			// const res = await createTask(data);

			console.log(data);
			reset();
		} catch (erro) {
			if (erro.response) {
				console.error(erro.response.message || "Nào foi possivel criar a tarefa.");
				return;
			}
			console.error("Erro ao conectar ao servidor");
		}
	}

	return (
		<div className="p-6 border-3 border-white/10 rounded-lg max-w-md mx-auto mt-10 bg-gray-200">
			<form
				className="flex flex-col gap-2"
				onSubmit={handleSubmit(onSubmit)}
				action=""
				method="post"
			>
				<p className="text-center text-3xl text-green-500 font-bold">Criar Tarefa</p>
				<Input
					id="task"
					label="Tarefa"
					{...register.title}
					inputPlaceholder="Adicione o titulo da tarefa"
					required={true}
				/>
				{errors.task && <span>{errors.title}</span>}
				<Input
					id="describe"
					label="Descrição"
					{...register.describe}
					inputPlaceholder="Descreva a tarefa"
				/>
				<div className="flex">
					<Input id="dateLimite" label="Data limite" inputType="date" {...register.date} />
					<Input id="timeLimit" label="Tempo limite" {...register.time} inputType="time" />
				</div>
				<Button text={isSubmitting ? "Criando" : "Criar"} disabled={isSubmitting} />
			</form>
			{alert ?? <span>{alert}</span>}
		</div>
	);
};

export default FormTaskRegister;
