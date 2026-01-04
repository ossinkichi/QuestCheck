import api from "./api";

export default async function authUser(data) {
	const response = await api.post("/user/register", data);

	return response;
}
