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
		console.log("Form submitted:", { email, password });
	}

	return (
		<div>
			<form className="flex flex-col gap-4" action="" method="post" onChange={handleSubmit}>
				{error && <p>{error}</p>}
				<div className="flex flex-col gap-1 p-2">
					<label htmlFor="">Email</label>
					<input
						className="p-2 rounded-md"
						type="email"
						value={email}
						onChange={(e) => setEmail(e.target.value)}
						placeholder="seu@email.com"
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
					/>
				</div>
				<button
					type="submit"
					className="border-1 bg-green-600 p-2 rounded-md cursor-pointer text-white text-base mt-5 hover:bg-green-700 transition-colors"
				>
					Entrar
				</button>
			</form>
		</div>
	);
}
