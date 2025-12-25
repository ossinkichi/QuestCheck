import Header from "../components/Header";
import SignIn from "../components/SignInForm";
import SignUp from "../components/SignUpForm";

export default function Home() {
	const showForm = "SignIn";
	return (
		<div>
			<Header></Header>
			<main>{showForm == "SignIn" ? <SignIn></SignIn> : <SignUp></SignUp>}</main>
		</div>
	);
}
