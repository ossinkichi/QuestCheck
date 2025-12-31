import Home from "./pages/Home";
import SignIn from "./components/Form/SignInForm";
import SingUp from "./components/Form/SignUpForm";
import Dashboard from "./pages/Dashboard";

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
		path: "dashboard",
		Component: Dashboard,
	},
];

export default routes;
