import { yupResolver } from "@hookform/resolvers/yup";
import { useForm } from "react-hook-form";
import createUser from "../../../services/user.service";
import registerSchema from "../../../validation/RegisterSchema";

const SingUp = () => {
	const {
		register,
		handleSubmit,
		reset,
		formState: { errors, isSubmitting },
	} = useForm({
		resolver: yupResolver(registerSchema),
	});

	async function onSubmit(data) {
		try {
			const res = await createUser(data);
			// const res = await axios.post("http://localhost:8000/api/user/register", data);
			console.log(res);
			reset();
		} catch (error) {
			if (error.response) {
				console.error(error.response.data.message || "Erro ao criar usuário.");
				return;
			}
			console.error("Erro ao conectar ao servidor.");
		}
	}

	return (
		<div className="p-6  border-3 border-white/10 rounded-lg max-w-md mx-auto mt-10 bg-gray-200 ">
			<form
				action=""
				method="post"
				className="flex flex-col gap-2"
				onSubmit={handleSubmit(onSubmit)}
			>
				<p className="text-center text-3xl text-green-600 font-bold mb-2">Criar conta</p>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Insira seu email:</label>
					<input
						className="p-2 rounded-md"
						type="email"
						{...register("email")}
						placeholder="seu@email.com"
					/>
					{errors.email && <span>{errors.email.message}</span>}
				</div>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Insira seu nome de usuário:</label>
					<input
						className="p-2 rounded-md"
						type="text"
						{...register("name")}
						placeholder="Usuário"
					/>
					{errors.name && <span>{errors.name.message}</span>}
				</div>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Insira uma senha:</label>
					<input
						className="p-2 rounded-md"
						type="password"
						{...register("password")}
						placeholder="********"
					/>
					{errors.password && <span>{errors.password.message}</span>}
				</div>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Confirme sua senha:</label>
					<input
						className="p-2 rounded-md"
						type="password"
						{...register("passwordConfirmation")}
						placeholder="********"
					/>
					{errors.passwordConfirmation && <span>{errors.passwordConfirmation.message}</span>}
				</div>
				<button
					type="submit"
					className="border-1 bg-green-600 p-2 rounded-md cursor-pointer text-white text-base font-semibold mt-5 hover:bg-green-700 transition-colors"
					disabled={isSubmitting}
				>
					{isSubmitting ? "Cadrastrando..." : "Cadastrar"}
				</button>
			</form>
			<p className="text-center mt-3">
				Já possui uma conta?{" "}
				<span className="text-green-700 underline underline-offset-3 hover:text-green-500 transition-all duration-300 cursor-pointer">
					Entrar em minha conta.
				</span>
			</p>
		</div>
	);
};

export default SingUp;
