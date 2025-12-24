import SignIn from "../components/SignInForm";
import Header from "../components/Header";

export default function Home() {
	return (
		<div>
			<Header></Header>
			<main className="mt-32">
				<div className="p-6 border-3 border-white/10 rounded-lg max-w-md mx-auto mt-10 bg-gray-200">
					<SignIn></SignIn>
				</div>
			</main>
		</div>
	);
}
