import React from "react";

const TaskList = () => {
	const tasks = [
		{ title: "Limpar a casa", complete: false },
		{ title: "Arrumar a cama", complete: true },
		{ title: "Comprar um carro", complete: true },
		{ title: "Pegar gold no lol", complete: false },
	];

	return (
		<>
			<table>
				<thead>
					<tr>
						<th>Titulo</th>
						<li>Status</li>
					</tr>
				</thead>
				<tbody>
					{tasks.map((task, index) => (
						<tr key={index}>
							<td>{task.title}</td>
							<td>{task.complete}</td>;
						</tr>
					))}
				</tbody>
			</table>
		</>
	);
};

export default TaskList;
