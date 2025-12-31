import React from "react";
import TaskList from "../components/TaskList";
import HeaderAuthenticate from "../components/HeaderAuthenticate";

const Dashboard = () => {
	return (
		<>
			<HeaderAuthenticate />
			<main>
				<TaskList />
			</main>
		</>
	);
};

export default Dashboard;
