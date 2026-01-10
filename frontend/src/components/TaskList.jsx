import { useEffect, useState } from "react";
import { getAllTasks } from "../../services/quest.service";

const TaskList = () => {
	const [tasks, setTask] = useState([]);
	const user = JSON.parse(localStorage.getItem("user"));

	useEffect(() => {
		async function getTasks() {
			try {
				const tasks = await getAllTasks(user.id);

				setTask(tasks.data);
			} catch (error) {
				console.error(error.message);
			}
		}
		user?.id ?? getTasks();
		getTasks();
	}, [user?.id]);

	function handleSubmit(e) {
		e.preventDefault();
	}

	return (
		<div className="max-w-full mx-auto my-20 bg-white shadow-lg rounded-lg overflow-hidden p-4 col-start-1 col-end-6 w-10/12">
			<p className="text-3xl text-center text-emerald-600 font-semibold mb-7">Tarefas</p>
			<div className="flex flex-col border-t-2 border-slate-200">
				{tasks.length === 0 ? (
					<span className="text-center font-bold">Buscando Tarefas...</span>
				) : (
					tasks.data.map((task) => {
						return (
							<div className="flex justify-between border-b-2 border-slate-200 p-2 rounded-sm hover:bg-slate-100 items-center px-2">
								<p key={task.title}>{task.title}</p>
								{/* <span key={task.status} className={task.status ? "text-green-400" : "text-red-600"}>
										{task.status}
                                        </span> */}

								<form onSubmit={handleSubmit} action="">
									<button className="bg-emerald-500 p-2 rounded-lg text-white hover:bg-emerald-600 cursor-pointer">
										<a key={task.id} href={"#" + task.id}>
											Completar
										</a>
									</button>
								</form>
							</div>
						);
					})
				)}
			</div>
			<div className="flex justify-center mt-2"></div>
		</div>
	);
};

export default TaskList;
