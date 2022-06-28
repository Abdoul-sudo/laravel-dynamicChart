import React from "react";
import { Bar } from "react-chartjs-2";

const LineChart = () => {
  const labels = ["2015", "2016", "2017", "2018", "2019", "2020"];
  return (
    <div>
      <Bar
        datasetIdKey="id"
        data={{
          labels: labels && labels,
        }}
        height={400}
        width={600}
      />
    </div>
  );
};

export default LineChart;
