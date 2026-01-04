import api from "./api";

export default async function createUser(data) {
	const response = await api.post("/user/register", data);

	return response;
}
