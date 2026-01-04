import React from "react";
import Header from "../components/Header";
import { Outlet } from "react-router";

const Home = () => {
	return (
		<div>
			<header className="min-w-full flex justify-between items-center py-5 px-10 border-green-600 border-b-2 text-white max-h-[65px]">
				<div>
					<span className="font-bold text-green-500 text-2xl">Ossin Tarefas</span>
				</div>
			</header>
			<main>
				<Outlet />
			</main>
		</div>
	);
};

export default Home;
