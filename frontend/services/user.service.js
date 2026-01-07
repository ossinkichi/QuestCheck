import axios from "axios";

async function createUser(data) {
	const response = await axios.post("http://localhost:8000/api/user/register", data);

	return response;
}

function logout() {
	sessionStorage.clear();
}

export { createUser, logout };
