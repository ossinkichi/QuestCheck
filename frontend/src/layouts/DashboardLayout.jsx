import TaskList from "../components/TaskList";

const DashboardLayout = () => {
	// const userInfo = JSON.parse(localStorage.getItem("user"));
	return (
		<div className="grid grid-cols-5 gap-6">
			<TaskList />
			{/* <SimpleUserInfo user={userInfo} /> */}
		</div>
	);
};

export default DashboardLayout;
