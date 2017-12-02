var ctx = document.getElementById("myChart1").getContext('2d');
var data = [12, 190, 3, 5, 20, 3];
var label = ["CHANDIGARH", "NEW DELHI", "JHARKHAND", "GUJRAT"];
var about = "Fever";
var Gtype = "bar";
drawgraph(about ,label , data ,Gtype );

var ctx = document.getElementById("myChart2").getContext('2d');
var data = [12, 19, 3, 5, 2, 30];
var label = ["CHANDIGARH","JHARKHAND", "CHENNAI", "BHOPAL", "GUJRAT"];
var about = "Maleraia";
var Gtype = "line";
drawgraph(about ,label , data ,Gtype );

function run(){
      var s = $('#sss').val();
      console.log(s);
}

function drawgraph(graphAbout , graphLable , graphData , graphType){
    var myChart = new Chart(ctx, {
        type: graphType,
        data: {
            labels: graphLable,
            datasets: [{
                label: graphAbout,
                data: graphData,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    
}