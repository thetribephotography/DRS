import ApexCharts from "apexcharts";

// ===== chartFiveteen
const chart15 = () => {
  const chart15Options = {
    series: [65, 34],
    chart: {
      type: "donut",
      width: 380,
    },
    colors: ["#3C50E0", "#0FADCF"],
    labels: ["Desktops", "Tablet"],
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

  const chartSelector = document.querySelectorAll("#chart15");

  if (chartSelector.length) {
    const chartThree = new ApexCharts(
      document.querySelector("#chart15", "chart15"),
      chart15Options
    );
    chart15.render();
  }
};

export default chart15;
