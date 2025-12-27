import React from "react";
import Header from "../components/Header";
import SignIn from "../components/SignInForm";
import SignUp from "../components/SignUpForm";

const Home = () => {
	const showForm = "Sign";
	return (
		<div>
			<Header />
			<main>{showForm == "SignIn" ? <SignIn /> : <SignUp />}</main>
		</div>
	);
};

export default Home;
