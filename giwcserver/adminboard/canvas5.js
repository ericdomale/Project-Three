var january1 = document.getElementById("january1").value;
var february2 = document.getElementById("february2").value;
var march3 = document.getElementById("march3").value;
var april4 = document.getElementById("april4").value;
var may5 = document.getElementById("may5").value;
var june6 = document.getElementById("june6").value;
var july7 = document.getElementById("july7").value;
var august8 = document.getElementById("august8").value;
var september9 = document.getElementById("september9").value;
var october10 = document.getElementById("october10").value;
var november11 = document.getElementById("november11").value;
var december12 = document.getElementById("december12").value;


window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets : [
        {
            label : 'Expenses',
            backgroundColor: '#d9dcf7',
            borderColor: 'seagreen',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [january1, february2, march3, april4, may5, june6, july7, august8, september9, october10, november11, december12]
        }
    ]
};
var CHART = $("#mycanvas5");

var graph = new Chart(CHART, {
    type: 'line',
    data: chardata
});