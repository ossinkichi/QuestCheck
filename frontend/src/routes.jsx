import FormTaskRegister from "./components/Form/FormTaskRegister";
import SignIn from "./components/Form/SignInForm";
import SingUp from "./components/Form/SignUpForm";
import DashboardLayout from "./layouts/DashboardLayout";
import Dashboard from "./pages/Dashboard";
import Home from "./pages/Home";

const routes = [
	{
		path: "/",
		Component: Home,
		children: [
			{
				index: true,
				Component: SignIn,
			},
			{
				path: "login",
				Component: SignIn,
			},
			{
				path: "register",
				Component: SingUp,
			},
		],
	},
	{
		path: "tasks",
		Component: Dashboard,
		children: [
			{
				index: true,
				Component: DashboardLayout,
			},
			{
				path: "create",
				Component: FormTaskRegister,
			},
		],
	},
];

export default routes;
