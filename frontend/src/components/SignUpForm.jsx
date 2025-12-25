import { useState } from "react";

export default function SingUp() {
	const [email, setEmail] = useState("");
	const [password, setPassword] = useState("");
	const [username, setUsername] = useState("");
	const [error, setError] = useState("");

	function handleSubmit(e) {
		e.preventDefault();

		if (!email || !username || !password) {
			setError("Preencha todos os campos");
			return;
		}

		setError("");
		console.log("Form submitted:", { email: email, username: username, password: password });

		return;
	}

	return (
		<div className="p-6  border-3 border-white/10 rounded-lg max-w-md mx-auto mt-10 bg-gray-200 ">
			<form action="" method="post" className="flex flex-col gap-2" onSubmit={handleSubmit}>
				{error && <p>{error}</p>}
				<p className="text-center text-3xl text-green-600 font-bold mb-2">Criar conta</p>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Insira seu email:</label>
					<input
						className="p-2 rounded-md"
						type="email"
						value={email}
						onChange={(e) => setEmail(e.target.value)}
						placeholder="seu@email.com"
					/>
				</div>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Insira seu nome de usuário:</label>
					<input
						className="p-2 rounded-md"
						type="text"
						value={username}
						onChange={(e) => setUsername(e.target.value)}
						placeholder="Usuário"
					/>
				</div>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Insira uma senha:</label>
					<input
						className="p-2 rounded-md"
						type="password"
						value={password}
						onChange={(e) => setPassword(e.target.value)}
						placeholder="********"
					/>
				</div>
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Confirme sua senha:</label>
					<input
						className="p-2 rounded-md"
						type="password"
						value={password}
						onChange={(e) => setPassword(e.target.value)}
						placeholder="********"
					/>
				</div>
				<button
					type="submit"
					className="border-1 bg-green-600 p-2 rounded-md cursor-pointer text-white text-base font-semibold mt-5 hover:bg-green-700 transition-colors"
				>
					Cadastrar-se
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
}
