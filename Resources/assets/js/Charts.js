export class Charts {

  constructor(element) {
    if ($(element).data('type') == "line-chart"){
      this.initLineChart(element);
    }
    else if ($(element).data('type') == "bar-chart"){
      this.initBarChart(element);
    }
    else if ($(element).data('type') == "radar-chart") {
      this.initRadarChart(element);
    }
    else if ($(element).data('type') == 'polar-area-chart') {
      this.initPolarAreaChart(element);
    }
    else if ($(element).data('type') == 'pie-chart') {
      this.initPieChart(element);
    }
    else if ($(element).data('type') == 'doughnut-chart') {
      this.initDoughnutChart(element);
    }
  }

  initLineChart(element) {
    let $lineChart = $(element);
    let data = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };
    let options = {
      responsive: true,
    };

    if ($lineChart.length > 0) {
      let myLineChart;
      let ctx = $lineChart[0].getContext('2d');
      return myLineChart = new Chart(ctx).Line(data, options);
    }
  }

  initBarChart(element) {
    let data = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.5)",
          strokeColor: "rgba(220,220,220,0.8)",
          highlightFill: "rgba(220,220,220,0.75)",
          highlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.5)",
          strokeColor: "rgba(151,187,205,0.8)",
          highlightFill: "rgba(151,187,205,0.75)",
          highlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };

    let options = {
      responsive: true,
    };

    let $barChart = $(element);

    if ($barChart.length > 0) {
      let myBarChart;
      let ctx = $barChart[0].getContext('2d');
      return myBarChart = new Chart(ctx).Bar(data, options);
    }
  }

  initRadarChart(element) {
    let data = {
      labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 96, 27, 100]
        }
      ]
    };

    let options = {
      responsive: true,
    };

    let $radarChart = $(element);

    if ($radarChart.length > 0) {
      let myRadarChart;
      let ctx = $radarChart[0].getContext('2d');
      return myRadarChart = new Chart(ctx).Radar(data, options);
    }
  }

  initPolarAreaChart(element) {
    let data = [
      {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
      },
      {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
      },
      {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
      },
      {
        value: 40,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Grey"
      },
      {
        value: 120,
        color: "#4D5360",
        highlight: "#616774",
        label: "Dark Grey"
      }
    ];

    let options = {
      responsive: true,
    };

    let $polarChart = $(element);

    if ($polarChart.length > 0) {
      let myPolarAreaChart;
      let ctx = $polarChart[0].getContext('2d');
      return myPolarAreaChart = new Chart(ctx).PolarArea(data, options);
    }
  }

  initPieChart(element) {
    let data = [
      {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
      },
      {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
      },
      {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
      }
    ];

    let options = {
      responsive: true,
      showTooltips: false,
    };

    let $pieChart = $(element);

    if ($pieChart.length > 0) {
      let myPieChart;
      let ctx = $pieChart[0].getContext('2d');
      return myPieChart = new Chart(ctx).Pie(data, options);
    }
  }

  initDoughnutChart(element) {
    let data = [
      {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
      },
      {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
      },
      {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
      }
    ];

    let options = {
      responsive: true,
    };

    let $doughnutChart = $(element);

    if ($doughnutChart.length > 0) {
      let myDoughnutChart;
      let ctx = $doughnutChart[0].getContext('2d');
      return myDoughnutChart = new Chart(ctx).Doughnut(data, options);
    }
  }
}

$('.chart').each((index, element) => {
  element.chart = new Charts($(element));
});
