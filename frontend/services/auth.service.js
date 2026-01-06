import axios from "axios";

export default async function authUser(data) {
	const response = await axios.post("http://localhost:8000/api/user/login", data);

	return response;
}
