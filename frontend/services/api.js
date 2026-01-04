import axios from "axios";

const api = axios.create({
	baseUrl: import.meta.env.API_URL,
	headers: {
		"Content-Type": "application/json",
	},
});

export default api;
