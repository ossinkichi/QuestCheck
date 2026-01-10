const Header = () => {
	return (
		<header className="min-w-full flex justify-between items-center py-5 px-10 border-green-600 border-b-2 text-white max-h-[65px]">
			<div>
				<span className="font-bold text-green-500 text-2xl">Ossin Tarefas</span>
			</div>
			<nav className="flex gap-6">
				<button
					className="cursor-pointer py-2 px-6 rounded-md
                text-base hover:bg-emerald-600 transition-all transition-discrete duration-500"
				>
					<a className="no-underline" href="/tasks/create">
						Criar nova tarefa
					</a>
				</button>
				<button
					className="cursor-pointer py-2 px-6 rounded-md
                text-base hover:bg-rose-500 transition-all transition-discrete duration-500"
				>
					<a className="no-underline" href="/">
						Sair
					</a>
				</button>
			</nav>
		</header>
	);
};

export default Header;
