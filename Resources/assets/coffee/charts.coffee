class Charts
  constructor: ->
    $ =>
      @initLineChart()
      @initBarChart()
      @initRadarChart()
      @initPolarAreaChart()
      @initPieChart()
      @initDoughnutChart()

  initLineChart: ->
    data = {
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
    }

    options = {
      responsive: true,
    }

    $lineChart = $('#line-chart')

    if $lineChart.length > 0
      ctx = $lineChart[0].getContext('2d')
      myLineChart = new Chart(ctx).Line(data, options)

  initBarChart: ->
    data = {
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
    }

    options = {
      responsive: true,
    }

    $barChart = $('#bar-chart')

    if $barChart.length > 0
      ctx = $barChart[0].getContext('2d')
      myBarChart = new Chart(ctx).Bar(data, options)

  initRadarChart: ->
    data = {
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
    }

    options = {
      responsive: true,
    }

    $radarChart = $('#radar-chart')

    if $radarChart.length > 0
      ctx = $radarChart[0].getContext('2d')
      myRadarChart = new Chart(ctx).Radar(data, options)

  initPolarAreaChart: ->
    data = [
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
    ]

    options = {
      responsive: true,
    }

    $polarChart = $('#polar-area-chart')

    if $polarChart.length > 0
      ctx = $polarChart[0].getContext('2d')
      myPolarAreaChart = new Chart(ctx).PolarArea(data, options)

  initPieChart: ->
    data = [
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
    ]

    options = {
      responsive: true,
      showTooltips: false,
    }

    $pieChart = $('#pie-chart')

    if $pieChart.length > 0
      ctx = $pieChart[0].getContext('2d')
      myPieChart = new Chart(ctx).Pie(data, options)

  initDoughnutChart: ->
    data = [
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
    ]

    options = {
      responsive: true,
    }

    $doughnutChart = $('#doughnut-chart')

    if $doughnutChart.length > 0
      ctx = $doughnutChart[0].getContext('2d')
      myDoughnutChart = new Chart(ctx).Doughnut(data, options)


Charts.current = new Charts()

window.Charts = Charts
