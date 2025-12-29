import React from "react";

const Input = ({ label, inputType, inputValue, inputPlaceholder, ...props }) => {
	return (
		<div className="flex flex-col gap-1 p-2">
			<label htmlFor={props.id}>{label}</label>
			<input
				id={props.id}
				className={("p-2 rounded-md", props.class)}
				type={inputType}
				value={inputValue}
				onChange={props.event}
				placeholder={inputPlaceholder}
				props
			/>
		</div>
	);
};

export default Input;
