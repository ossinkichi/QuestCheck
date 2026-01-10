import { yupResolver } from "@hookform/resolvers/yup";
import { useForm } from "react-hook-form";
import { useNavigate } from "react-router-dom";
import authUser from "../../../services/auth.service";
import loginSchema from "../../../validation/loginSchema";

const SignIn = () => {
	const navigate = useNavigate();
	const {
		register,
		handleSubmit,
		reset,
		formState: { errors, isSubmitting },
	} = useForm({
		resolver: yupResolver(loginSchema),
	});

	async function onSubmit(data) {
		try {
			const res = await authUser(data);
			localStorage.setItem("user", JSON.stringify(res.data.data));

			navigate("/tasks");
			reset();
		} catch (erro) {
			if (erro.response) {
				console.error(erro.response.message || "Email ou senha inválidos!");
				return;
			}
			console.error("Erro ao conectar ao servidor");
		}
	}

	return (
		<div className="p-6 border-3 border-white/10 rounded-lg max-w-md mx-auto mt-10 bg-gray-200 ">
			<form
				className="flex flex-col gap-2"
				action=""
				method="post"
				onSubmit={handleSubmit(onSubmit)}
			>
				<p className="text-center text-3xl text-green-600 font-bold">Entrar</p>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Email</label>
					<input
						className="p-2 rounded-md"
						type="email"
						{...register("email")}
						placeholder="seu@email.com"
						required
					/>
					{errors.email && <span className="text-rose-600">{errors.email.message}</span>}
				</div>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Senha</label>
					<input
						className="p-2 rounded-md"
						type="password"
						{...register("password")}
						placeholder="********"
						required
					/>
					{errors.password && <span className="text-rose-600">{errors.password.message}</span>}
				</div>
				<button
					type="submit"
					className="border-1 bg-green-600 p-2 rounded-md cursor-pointer text-white text-base font-semibold mt-5 hover:bg-green-700 transition-colors"
					disabled={isSubmitting}
				>
					{isSubmitting ? "verificando..." : "Entrar"}
				</button>
			</form>
			<p className="text-center mt-3">
				Não possui uma conta?{" "}
				<a
					href="/register"
					className="text-green-700 underline underline-offset-3 hover:text-green-500 transition-all duration-300 cursor-pointer"
				>
					Cadastre-se agora!
				</a>
			</p>
		</div>
	);
};

export default SignIn;
