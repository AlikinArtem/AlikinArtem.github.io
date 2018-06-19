var ctx = document.getElementById("myChart").getContext('2d');
Chart.defaults.global.legend.display = false;
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["Video", "Social"],
        datasets: [{
            //label: 'Channel Performance',
            data: [3500, 2120],
            backgroundColor: [
                '#00B7F1',
                '#00B7F1',
            ],
            borderColor: [
                '#00B7F1',
                '#00B7F1',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true,
                    min: 0,
                    max: 4000,
                    stepSize: 500
                }   
            }],
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});





var ctx = document.getElementById("myChart2").getContext('2d');
Chart.defaults.global.legend.display = false;
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Social", "Video"],
        datasets: [{
            //label: '79% Conversions',
            data: [79, 21],
            backgroundColor: [
                '#00B7F1',
                '#44B900',
            ],
            borderColor: [
                '#00B7F1',
                '#44B900',
            ],
            borderWidth: 1
        }]
    },
    options: {
    elements: {
      center: {
      text: '79%',
      color: '#414141', //Default black
      fontStyle: 'Helvetica', //Default Arial
      sidePadding: 15 //Default 20 (as a percentage)
    }
  }
}
});





var ctx = document.getElementById("myChart3").getContext('2d');
Chart.defaults.global.legend.display = false;
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["New", "Returning"],
        datasets: [{
            //label: '25% Conversions',
            data: [25, 75],
            backgroundColor: [
                '#00B7F1',
                '#F39C12',
            ],
            borderColor: [
                '#00B7F1',
                '#F39C12',
            ],
            borderWidth: 1
        }]
    },
    options: {
    elements: {
      center: {
      text: '25%',
      color: '#414141', //Default black
      fontStyle: 'Helvetica', //Default Arial
      sidePadding: 15 //Default 20 (as a percentage)
    }
  }
}
});





var ctx = document.getElementById("myChart4").getContext('2d');
Chart.defaults.global.legend.display = false;
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["Video", "Social", "Social"],
        datasets: [{
            //label: ,
            data: [3250, 2000, 2120],
            backgroundColor: [
                '#44B900',
                '#44B900',
                '#00B7F1',
            ],
            borderColor: [
                '#44B900',
                '#44B900',
                '#00B7F1',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
             xAxes: [{
                ticks: {
                    beginAtZero: true,
                    min: 0,
                    max: 4000,
                    stepSize: 500
                }   
            }],
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});






 Chart.pluginService.register({
  beforeDraw: function (chart) {
    if (chart.config.options.elements.center) {
      //Get ctx from string
      var ctx = chart.chart.ctx;

      //Get options from the center object in options
      var centerConfig = chart.config.options.elements.center;
      var fontStyle = centerConfig.fontStyle || 'Arial';
      var txt = centerConfig.text;
      var color = centerConfig.color || '#000';
      var sidePadding = centerConfig.sidePadding || 20;
      var sidePaddingCalculated = (sidePadding/100) * (chart.innerRadius * 2)
      //Start with a base font of 30px
      ctx.font = "30px " + fontStyle;

      //Get the width of the string and also the width of the element minus 10 to give it 5px side padding
      var stringWidth = ctx.measureText(txt).width;
      var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

      // Find out how much the font can grow in width.
      var widthRatio = elementWidth / stringWidth;
      var newFontSize = Math.floor(15 * widthRatio);
      var elementHeight = (chart.innerRadius * 2);

      // Pick a new font size so it will not be larger than the height of label.
      var fontSizeToUse = Math.min(newFontSize, elementHeight);

      //Set font settings to draw it correctly.
      ctx.textAlign = 'center';
      ctx.textBaseline = 'middle';
      var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
      var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
      ctx.font = fontSizeToUse+"px " + fontStyle;
      ctx.fillStyle = color;

      //Draw text in center
      ctx.fillText(txt, centerX, centerY);
    }
  }
});