import React from "react";

const TaskList = () => {
	const tasks = [
		{ title: "Limpar a casa", complete: false },
		{ title: "Arrumar a cama", complete: true },
		{ title: "Comprar um carro", complete: true },
		{ title: "Pegar gold no lol", complete: false },
	];

	return (
		<div className="max-w-5xl mx-auto mt-20 bg-white shadow-lg rounded-lg overflow-hidden p-4">
			<ul>
				{tasks.map((task) => {
					return (
						<div className="">
							<li className="text-black">
								<div className="flex justify-between">
									<p>{task.title}</p>
									<span className={task.complete ? "text-green-400" : "text-red-600"}>
										{task.complete ? "Concluido" : "Pendente"}
									</span>
								</div>
							</li>
						</div>
					);
				})}
			</ul>
			{/* <table className="w-full text-sm text-left text-gray-600">
				<thead className="uppercase text-xs">
					<tr>
						<th className="px-6 py-3">Titulo</th>
						<th className="px-6 py-3">Status</th>
					</tr>
				</thead>
				<tbody>
					{tasks.map((task, index) => (
						<tr className="border-b hover:bg-gray-50" key={index}>
							<td>{task.title}</td>
							<td>{task.complete ? "Concluida" : "Pendente"}</td>
						</tr>
					))}
				</tbody>
			</table> */}
		</div>
	);
};

export default TaskList;
