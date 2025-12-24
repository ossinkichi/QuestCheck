export default function Header() {
	return (
		<header className="flex justify-between items-center py-5 px-10 border-green-600 border-b-2 text-white">
			<div>
				<span className="font-bold text-green-500 text-2xl">Ossin Tarefas</span>
			</div>
			<nav className="flex gap-6">
				<button
					className="border-none cursor-pointer p-2
                text-base hover:text-green-600 hover:underline hover:underline-offset-8 transition-all transition-discrete duration-500"
				>
					Entrar
				</button>
				<button className="border-none cursor-pointer p-2 text-basehover:text-green-600 hover:underline hover:underline-offset-8 transition-all transition-discrete duration-500">
					Cadastre-se
				</button>
			</nav>
		</header>
	);
}
