import ApexCharts from "apexcharts";

// ===== chartOne
const chart01 = (uploadsByMonth, downloadsByMonth, chartMonths) => {
  let uploadData = [];
  let downloadData = [];

  if (uploadsByMonth && uploadsByMonth.length > 0) {
    uploadData = uploadsByMonth.map((doc) => doc.count);
  }

  if (downloadsByMonth && downloadsByMonth.length > 0) {
    downloadData = downloadsByMonth.map((doc) => doc.count);
  }

  // console.log(uploadData);
  const chartOneOptions = {
    series: [
      {
        name: "Total Uploads",
        data: uploadData,
      },

      {
        name: "Total Downloads",
        data: downloadData,
      },
    ],
    xaxis: {
  type: 'series'
  },
    legend: {
      show: false,
      position: "top",
      horizontalAlign: "left",
    },
    colors: ["#3C50E0", "#80CAEE"],
    chart: {
      fontFamily: "Satoshi, sans-serif",
      height: 335,
      type: "area",
      dropShadow: {
        enabled: true,
        color: "#623CEA14",
        top: 10,
        blur: 4,
        left: 0,
        opacity: 0.1,
      },

      toolbar: {
        show: false,
      },
    },
    responsive: [
      {
        breakpoint: 1024,
        options: {
          chart: {
            height: 300,
          },
        },
      },
      {
        breakpoint: 1366,
        options: {
          chart: {
            height: 350,
          },
        },
      },
    ],
    stroke: {
      width: [2, 2],
      curve: "straight",
    },

    markers: {
      size: 0,
    },
    labels: {
      show: false,
      position: "top",
    },
    grid: {
      xaxis: {
        lines: {
          show: true,
        },
      },
      yaxis: {
        lines: {
          show: true,
        },
      },
    },
    dataLabels: {
      enabled: false,
    },
    markers: {
      size: 4,
      colors: "#fff",
      strokeColors: ["#3056D3", "#80CAEE"],
      strokeWidth: 3,
      strokeOpacity: 0.9,
      strokeDashArray: 0,
      fillOpacity: 1,
      discrete: [],
      hover: {
        size: undefined,
        sizeOffset: 5,
      },
    },
    xaxis: {
      type: 'categories',
      categories: chartMonths,
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      title: {
        style: {
          fontSize: "0px",
        },
      },
      min: 0,
      max: 100,
    },
  };

    const chartSelector = document.querySelectorAll("#chartOne");

  //   if (chartSelector.length) {
  //     const chartOne = new ApexCharts(
  //       document.querySelector("#chartOne"),
  //       chartOneOptions
  //     );
  //     chartOne.render();
  //   }
  // };

  // export default chart01;

  if (chartSelector.length) {
    const chartOne = new ApexCharts(
      document.querySelector("#chartOne"),
      chartOneOptions
    );
    chartOne.render();

    document.addEventListener("livewire:load", function () {
      Livewire.hook("afterDomUpdate", function () {
        window.livewire.on("chartData", function (data) {
          chartOne.updateOptions({
            series: [
              {
                name: "Total Uploads",
                data: data.uploadsByMonth.map((doc) => doc.count),
              },

              {
                name: "Total Downloads",
                data: data.downloadsByMonth.map((doc) => doc.count),
              },
            ],
            xaxis: {
              categories: data.chartMonths,
            },
          });
        });
      });
    });
  }
};

export default chart01;
