import React from "react";

const SimpleUserInfo = () => {
	const userInfo = {
		name: "Rodrigo Gonsales",
	};

	return (
		<div className="col-span-1 col-start-5 col-end-7 w-10/12 h-72 flex flex-col gap-10 justify-center items-center mt-20 bg-white shadow-lg rounded-lg overflow-hidden p-6">
			<p className="font-bold text-2xl text-emerald-700">{userInfo.name}</p>
			<div className="flex gap-4 text-white">
				<div className="rounded-md bg-rose-700 border-slate-100 border-2 p-6">
					<span className="text-xl font-semibold">0</span>
				</div>
				<div className="rounded-md bg-slate-500 border-slate-100 border-2 p-6">
					<span className="text-xl font-semibold">0</span>
				</div>
				<div className="rounded-md bg-emerald-600 border-slate-100 border-2 p-6">
					<span className="text-xl font-semibold">0</span>
				</div>
			</div>
		</div>
	);
};

export default SimpleUserInfo;
