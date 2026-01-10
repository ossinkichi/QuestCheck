import TaskList from "../components/TaskList";

const DashboardLayout = () => {
	return (
		<div className="grid grid-cols-5 gap-6">
			<TaskList />
			{/* <SimpleUserInfo user={user} /> */}
		</div>
	);
};

export default DashboardLayout;
