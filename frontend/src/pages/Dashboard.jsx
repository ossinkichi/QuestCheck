import { Outlet } from "react-router";
import Header from "../components/Header";

const Dashboard = () => {
	return (
		<>
			<Header />
			<main>
				<Outlet />
			</main>
		</>
	);
};

export default Dashboard;
