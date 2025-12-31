import React from "react";

const TaskList = () => {
	const tasks = [
		{ title: "Limpar a casa", complete: false },
		{ title: "Limpar a cama", complete: true },
		{ title: "Comprar um carro", complete: true },
		{ title: "Pegar gold no lol", complete: false },
	];
	return (
		<>
			<thead>
				<ul>
					{tasks.map((task) => {
						<li key={task.index}></li>;
					})}
				</ul>
			</thead>
			<tbody>
				<ul>
					{tasks.map((task) => (
						<li key={task.title}>{task}</li>
					))}
				</ul>
			</tbody>
		</>
	);
};

export default TaskList;
