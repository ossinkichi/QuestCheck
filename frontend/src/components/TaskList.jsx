import React from "react";

const TaskList = () => {
	const tasks = [
		{ title: "Limpar a casa", complete: false },
		{ title: "Arrumar a cama", complete: true },
		{ title: "Comprar um carro", complete: true },
		{ title: "Pegar gold no lol", complete: false },
	];

	return (
		<div className="max-w-5xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
			<table className="w-full text-sm text-left text-gray-600">
				<thead className="bg-gray-800 text-white uppercase text-xs">
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
			</table>
		</div>
	);
};

export default TaskList;
