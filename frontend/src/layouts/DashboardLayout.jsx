import React from "react";
import TaskList from "../components/TaskList";
import SimpleUserInfo from "../components/SimpleUserInfo";

const DashboardLayout = () => {
	return (
		<div className="grid grid-cols-6 gap-6">
			<TaskList />
			<SimpleUserInfo />
		</div>
	);
};

export default DashboardLayout;
