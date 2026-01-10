import axios from "axios";

export async function createUser(data) {
	const response = await axios.post("http://localhost:8000/api/user/register", data);

	return response;
}

export function logout() {
	sessionStorage.clear();
}
