import { useState } from "react";

export default function SignIn() {
	const [email, setEmail] = useState("");
	const [password, setPassword] = useState("");
	const [error, setError] = useState("");

	function handleSubmit(e) {
		e.preventDefault();
		if (!email || !password) {
			setError("Preencha todos os campos");
			return;
		}

		setError("");
		console.log("Form submitted:", { email: email, password: password });
	}

	return (
		<div className="p-6 border-3 border-white/10 rounded-lg max-w-md mx-auto mt-10 bg-gray-200 ">
			<form className="flex flex-col gap-2" action="" method="post" onSubmit={handleSubmit}>
				{error && <p>{error}</p>}
				<p className="text-center text-3xl text-green-600 font-bold">Entrar</p>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Email</label>
					<input
						className="p-2 rounded-md"
						type="email"
						value={email}
						onChange={(e) => setEmail(e.target.value)}
						placeholder="seu@email.com"
						required
					/>
				</div>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Senha</label>
					<input
						className="p-2 rounded-md"
						type="password"
						value={password}
						onChange={(e) => setPassword(e.target.value)}
						placeholder="********"
						required
					/>
				</div>
				<button
					type="submit"
					className="border-1 bg-green-600 p-2 rounded-md cursor-pointer text-white text-base font-semibold mt-5 hover:bg-green-700 transition-colors"
				>
					Entrar
				</button>
			</form>
			<p className="text-center mt-3">
				Não possui uma conta?{" "}
				<span className="text-green-700 underline underline-offset-3 hover:text-green-500 transition-all duration-300 cursor-pointer">
					Cadastre-se agora!
				</span>
			</p>
		</div>
	);
}
