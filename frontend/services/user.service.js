import api from "./api";

async function createUser(data) {
	const response = await api.post("/user/register", data);

	return response;
}

function logout() {
	sessionStorage.clear();
}

export default {
	createUser,
	logout,
};
