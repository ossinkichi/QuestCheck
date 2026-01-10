import axios from "axios";

export async function getAllTasks(user) {
	try {
		const res = await axios.get(`http://localhost:8000/api/quest/${user}`);

		return res;
	} catch (error) {
		console.error("Error ao buscar os dados: ", error);
		throw error;
	}
}

export function createTask(data) {
	const res = axios.post(`http://localhost:8000/api/quest/create`, data);

	return res;
}
export function updateDescribeTask(data) {
	const res = axios.post(`http://localhost:8000/api/quest/`, data);

	return res;
}
export function checkTask(data) {
	const res = axios.get(`http://localhost:8000/api/quest/${data.user}/${data.quest}`);

	return res;
}
export function failTask(data) {
	const res = axios.get(`http://localhost:8000/api/quest/${data.user}/${data.quest}`);

	return res;
}
