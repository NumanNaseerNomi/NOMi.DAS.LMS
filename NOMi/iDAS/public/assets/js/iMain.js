// NOMi - Prevents from closing when clicked inside - Start
function prevent()
{
  event.stopPropagation();
}
// NOMi - Prevents from closing when clicked inside - End

// NOMi - Plot Chart with Chart.JS Plugin - Start
function plotChart(chartConfig)
{
  // chartConfig = {chartWrapper:, chartLabels:, chartData:, chartDataSetLabel:, chartType: 'bar'};
  const data =
  {
    labels: chartConfig.chartLabels,
    datasets:
    [
      {
        label: chartConfig.chartDataSetLabel,
        data: chartConfig.chartData,
        borderWidth: 1,
        
        backgroundColor:
        [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],

        borderColor:
        [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ]
      }
    ]
  };

  const config =
  {
    type: chartConfig.chartType,
    data
  };

  var chartWrapper = document.getElementById(chartConfig.chartWrapper);
  chartWrapper.innerHTML = "<canvas></canvas>";

  new Chart(chartWrapper.getElementsByTagName("canvas"), config);
}
// NOMi - Plot Chart with Chart.JS Plugin - End

// NOMi - PWA Support - Start
// if ('serviceWorker' in navigator) {
//   window.addEventListener('load', function() {
//     navigator.serviceWorker.register('swiDAS.js').then(function(registration) {
//       // Registration was successful
//       console.log('ServiceWorker registration successful with scope: ', registration.scope);
//     }, function(err) {
//       // registration failed :(
//       console.log('ServiceWorker registration failed: ', err);
//     });
//   });
// }



if('serviceWorker' in navigator)
{
  navigator.serviceWorker.register('iDASServiceWorker.js')
    .then(reg => console.log('ServiceWorker registration successful with scope: ', reg.scope))
    .catch(err => console.log('ServiceWorker registration failed: ', err));
}

// NOMi - PWA Support - End
