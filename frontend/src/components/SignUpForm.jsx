import { useState } from "react";

export default function SingUp() {
	const [email, setEmail] = useState("");
	const [password, setPassword] = useState("");
	const [error] = useState("");

	return (
		<div>
			<form action="" method="post">
				{error && <p>{error}</p>}
				<div>
					<label htmlFor=""></label>
					<input
						type="email"
						value={email}
						onChange={(e) => setEmail(e.target.value)}
						placeholder="seu@email.com"
					/>
				</div>
				<div>
					<label htmlFor=""></label>
					<input
						type="email"
						value={password}
						onChange={(e) => setPassword(e.target.value)}
						placeholder="********"
					/>
				</div>
				<button type="submit">Entrar</button>
			</form>
		</div>
	);
}
