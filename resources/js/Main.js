// resources/js/components/HelloReact.js

import React from "react";
import ReactDOM from "react-dom";
import Chart from "./components/LineChart";

export default function Main() {
  return (
    <h1>
      <Chart />
    </h1>
  );
}

if (document.getElementById("react-app")) {
  ReactDOM.render(<Main />, document.getElementById("react-app"));
}
