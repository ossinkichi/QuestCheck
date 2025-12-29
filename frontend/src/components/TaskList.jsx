import React from "react";

const TaskList = (tasks) => {

    const tasks = [
        {title:"Limpar a casa", complete: false},
        {title:"Limpar a cama", complete: true},
        {title:"Comprar um carro", complete: true},
        {title:"Pegar gold no lol", complete: false},
    ]
	return (
		<>
			<ul>
                {tasks.map() = (task) =>
				<li>{task.title}</li>
                }
			</ul>
		</>
	);
};

export default TaskList;
