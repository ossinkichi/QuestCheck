import React, { useState } from "react";
import Input from "./Input";
import Button from "./Button";

const FormTaskRegister = () => {
	const [task, setTask] = useState("");
	const [describe, setDescribe] = useState("");
	const [time, setTime] = useState("");
	const [date, setDate] = useState("");

	function handleSubmit(e) {
		e.preventDefault();

		console.log(task, describe, date, time);
	}

	return (
		<div className="p-6 border-3 border-white/10 rounded-lg max-w-md mx-auto mt-10 bg-gray-200">
			<form className="flex flex-col gap-2" onSubmit={handleSubmit} action="" method="post">
				<p className="text-center text-3xl text-green-500 font-bold">Criar Tarefa</p>
				<Input
					id="task"
					label="Tarefa"
					inputValue={task}
					inputPlaceholder="Adicione o titulo da tarefa"
					event={(e) => setTask(e.target.value)}
					required={true}
				/>
				<Input
					id="describe"
					label="Descrição"
					inputValue={describe ?? ""}
					inputPlaceholder="Descreva a tarefa"
					event={(e) => setDescribe(e.target.value)}
				/>
				<div className="flex">
					<Input
						id="dateLimite"
						label="Data limite"
						inputType="date"
						inputValue={date}
						event={(e) => setDate(e.target.value)}
					/>
					<Input
						id="timeLimit"
						label="Tempo limite"
						inputValue={time}
						inputType="time"
						event={(e) => setTime(e.target.value)}
					/>
				</div>
				<Button text="Criar" />
			</form>
		</div>
	);
};

export default FormTaskRegister;
