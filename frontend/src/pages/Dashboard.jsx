import React from "react";
import HeaderAuthenticate from "../components/HeaderAuthenticate";
import { Outlet } from "react-router";

const Dashboard = () => {
	return (
		<>
			<HeaderAuthenticate />
			<main>
				<Outlet />
			</main>
		</>
	);
};

export default Dashboard;
