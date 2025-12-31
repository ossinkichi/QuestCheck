import React from "react";
import { createBrowserRouter } from "react-router";
import Home from "./pages/Home";
import SignIn from "./components/SignInForm";
import SingUp from "./components/SignUpForm";

const router = createBrowserRouter([
	{
		index: true,
		Component: SignIn,
	},
	{
		path: "/login",
		Component: SignIn,
	},
	{
		path: "/register",
		Component: SingUp,
	},
	{
		path: "/home",
		Component: Home,
	},
	{
		path: "/dashboard",
		Component: Home,
	},
]);

export default router;
