import React from "react";

const Input = ({
	id,
	label,
	inputType = "text",
	inputValue,
	inputPlaceholder,
	inputStyle,
	required = false,
	event,
	...rest
}) => {
	return (
		<div className="flex flex-col gap-1 p-2">
			<label htmlFor={id}>{label}</label>
			<input
				id={id}
				className={`p-2 rounded-md ${inputStyle ?? ""}`}
				type={inputType}
				value={inputValue}
				onChange={event}
				placeholder={inputPlaceholder}
				required={required}
				{...rest}
			/>
		</div>
	);
};

export default Input;
