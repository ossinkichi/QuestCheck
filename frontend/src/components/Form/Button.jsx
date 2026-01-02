import React from "react";

const Button = ({ text }) => {
	return (
		<button
			type="submit"
			className="border-1 bg-green-600 p-2 rounded-md cursor-pointer text-white text-base font-semibold mt-5 hover:bg-green-700 transition-colors"
		>
			{text}
		</button>
	);
};

export default Button;
