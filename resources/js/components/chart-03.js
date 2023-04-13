import ApexCharts from "apexcharts";

// ===== chartThree
const chart03 = () => {
  const chartThreeOptions = {
    series: [45, 55],
    chart: {
      type: "donut",
      width: 380,
    },
    colors: ["#3C50E0", "#0FADCF"],
    labels: ["Downloads", "Uploads",],
    legend: {
      show: false,
      position: "bottom",
    },

    plotOptions: {
      pie: {
        donut: {
          size: "65%",
          background: "transparent",
        },
      },
    },

    dataLabels: {
      enabled: false,
    },
    responsive: [
      {
        breakpoint: 640,
        options: {
          chart: {
            width: 200,
          },
        },
      },
    ],
  };

  const chartSelector = document.querySelectorAll("#chartThree");

  if (chartSelector.length) {
    const chartThree = new ApexCharts(
      document.querySelector("#chartThree", "chartThree"),
      chartThreeOptions
    );
    chartThree.render();
  }
};

export default chart03;
