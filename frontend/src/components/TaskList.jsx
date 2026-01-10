import { getAllTasks } from "../../services/quest.service";

const TaskList = () => {
	const user = JSON.parse(localStorage.getItem("user"));

	const tasksList = getAllTasks(user.id)
		.then((res) => res.data)
		.then((data) => {
			const tasksList = data;
			return tasksList;
		})
		.catch((error) => error.message);
	console.log(tasksList);

	const tasks = [
		{
			id: 1,
			title: "Titulo da tarefa",
			description: "Isso é um teste!",
			points: 0,
			status: "pending",
			completed_at: null,
			failed_at: null,
			created_at: "26/05/2025",
		},
	];

	return (
		<div className="max-w-full mx-auto my-20 bg-white shadow-lg rounded-lg overflow-hidden p-4 col-start-1 col-end-6 w-10/12">
			<p className="text-3xl text-center text-emerald-600 font-semibold mb-7">Tarefas</p>
			<div className="flex flex-col border-t-2 border-slate-200">
				{tasks == [] ? (
					<span className="text-center font-bold">Buscando Tarefas...</span>
				) : (
					tasks.map((task) => {
						return (
							<a key={task.id} href={"#" + task.id}>
								<div className="flex justify-between border-b-2 border-slate-200 p-2 rounded-sm hover:bg-slate-100">
									<p key={task.title}>{task.title}</p>
									<span className={task.complete ? "text-green-400" : "text-red-600"}>
										{task.complete ? "Concluido" : "Pendente"}
									</span>
								</div>
							</a>
						);
					})
				)}
			</div>
			<div className="flex justify-center mt-2"></div>
		</div>
	);
};

export default TaskList;
