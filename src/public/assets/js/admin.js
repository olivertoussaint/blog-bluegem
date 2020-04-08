var ctxL = document.getElementById("lineChart").getContext('2d');
      var gradientFill = ctxL.createLinearGradient(0, 0, 0, 250);
      var gradientFill2 = ctxL.createLinearGradient(0, 0, 0, 150);
      var gradientFill3 = ctxL.createLinearGradient(0, 0, 0, 100);
      gradientFill.addColorStop(0, "rgba(29, 140, 248, 1)");
      gradientFill.addColorStop(1, "rgba(29, 140, 248, 0.1)");
      gradientFill2.addColorStop(0, "rgba(90, 200, 148, 1)");
      gradientFill2.addColorStop(1, "rgba(90, 200, 148, 0.1)");
      gradientFill3.addColorStop(0, "rgba(190, 200, 148, 1)");
      gradientFill3.addColorStop(1, "rgba(190, 200, 148, 0.1)");
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["JAN", "FEV", "MAR", "AVR", "MAI", "JUI"],
        datasets: [
          {
            label: "Publication(s)",
            data: [1, 5, 1, 0, 0, 0],
            backgroundColor: gradientFill,
            borderColor: [
              '#1d8cf8',
            ],
            borderWidth: 2,
            pointBorderColor: "#fff",
            pointBackgroundColor: "#1d8cf8",
          },
          {
            label: "Commentaires(s)",
            data: [1, 2, 0, 3, 2, 0],
            backgroundColor: gradientFill2,
            borderColor: [
              '#ad35ba',
            ],
            borderWidth: 3,
            pointBorderColor: "#ad35ba",
            pointBackgroundColor: "#ad35ba",
          },
          {
            label: "Signalement(s)",
            data: [1, 0, 1, 4, 5, 0],
            backgroundColor: gradientFill,
            borderColor: [
              '#7fffd4',
            ],
            borderWidth: 1,
            pointBorderColor: "#7fffd4",
            pointBackgroundColor: "#7fffd4",
          },


        ]
      },
      options: {
        responsive: true,
        legend: {
          display: false,
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
            },
            ticks: {
              fontColor: 'rgba(255, 255, 255, .5)'
            }
          }],

          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
            },
            ticks: {
              min: 0,
              max: 10,
              padding: 0,
              fontColor: 'rgba(255, 255, 255, .5)'
            },
            gridLines: {
              display: false,
            }
          }]
        
      }
    }
    });