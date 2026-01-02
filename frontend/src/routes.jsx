import Home from "./pages/Home";
import SignIn from "./components/Form/SignInForm";
import SingUp from "./components/Form/SignUpForm";
import Dashboard from "./pages/Dashboard";
import { Component } from "react";
import TaskList from "./components/TaskList";
import FormTaskRegister from "./components/Form/FormTaskRegister";
import DashboardLayout from "./layouts/DashboardLayout";

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
