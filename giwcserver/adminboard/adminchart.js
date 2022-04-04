Chart.defaults.global.defaultFontFamily = 'Circular Std';
Chart.defaults.global.defaultFontSize = 13;
Chart.defaults.global.defaultFontColor = 'seagreen';



var Joy = document.getElementById("Joy").value;
var Faith = document.getElementById("Faith").value;
var Love = document.getElementById("Love").value;
var Grace = document.getElementById("Grace").value;

window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Joy','Faith','Love','Grace'],
    datasets : [
        {
            label : 'Chapels',
            backgroundColor: 'seagreen',
            borderColor: 'seagreen',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [Joy, Faith, Love, Grace]
        }
    ]
};
var CHART = $("#mycanvas");

var barGraph = new Chart(CHART, {
    type: 'bar',
    data: chardata
});








var Male = document.getElementById("Male").value;
var Female = document.getElementById("Female").value;

window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Male','Female'],
    datasets : [
        {
            label : 'Gender',
            backgroundColor: ['orange','#112266'],
            borderColor: 'white',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [Male, Female]
        }
    ]
};
var CHART = $("#mycanvas2");

var graph = new Chart(CHART, {
    type: 'doughnut',
    data: chardata
});






var January = document.getElementById("January").value;
var February = document.getElementById("February").value;
var March = document.getElementById("March").value;
var April = document.getElementById("April").value;
var May = document.getElementById("May").value;
var June = document.getElementById("June").value;
var July = document.getElementById("July").value;
var August = document.getElementById("August").value;
var September = document.getElementById("September").value;
var October = document.getElementById("October").value;
var November = document.getElementById("November").value;
var December = document.getElementById("December").value;


window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets : [
        {
            label : 'Revenue',
            backgroundColor: '#d9dcf7',
            borderColor: '#112266',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [January, February, March, April, May, June, July, August, September, October, November, December]
        }
    ]
};
var CHART = $("#mycanvas4");

var graph = new Chart(CHART, {
    type: 'line',
    data: chardata
});




var Sunday = document.getElementById("Sunday").value;
var Thanksgiving = document.getElementById("Thanksgiving").value;
var Anoiniting = document.getElementById("Anointing").value;
var Special = document.getElementById("Special").value;
var Tuesday = document.getElementById("Tuesday").value;
var Friday = document.getElementById("Friday").value;


window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Sun', 'Thks', 'Ano', 'Spe', 'Tues', 'Fri'],
    datasets : [
        {
            label : 'Services',
            backgroundColor: '#112266',
            borderColor: '#112266',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [Sunday, Thanksgiving, Anointing, Special, Tuesday, Friday]
        }
    ]
};
var CHART = $("#mycanvas6");

var graph = new Chart(CHART, {
    type: 'bar',
    data: chardata
});









/*$(document).ready(function(){
    $.ajax({
        //url:"adminchart.php",
        //method: "GET",
        success: function(data){
            //var memberno =[];
            var chapel = [];

            for(var i in data) {
               // memberno.push("ID " + data[i].memberno);
               // chapel.push(data[i].chapel);
            }

            var chardata = {
                labels: ['Faith Chapel','Love Chapel','Joy Chapel','Grace Chapel'],
                datasets : [
                    {
                        label : 'Chapels',
                        backgroundColor: 'seagreen',
                        borderColor: 'seagreen',
                        hoverBackgroundColor: '#24aa41',
                        hoverBorderColor: 'white',
                        data: [12, 30, 20, 77]
                    }
                ]
            };
            var CHART = $("#mycanvas");

            Chart.defaults.global.defaultFontFamily = 'Circular Std';
            Chart.defaults.global.defaultFontSize = 13;
            Chart.defaults.global.defaultFontColor = 'black';

            var barGraph = new Chart(CHART, {
                type: 'bar',
                data: chardata
            });
        },
        error:function(data){

        }
        
    });

});*/







/*var config = {
    type: 'bar',
    dataset: {
        label : 'Chapels',
        backgroundColor: 'seagreen',
        borderColor: 'seagreen',
        hoverBackgroundColor: '#24aa41',
        hoverBorderColor: 'white',
        data: [Joy, Faith, Love, Grace]
    }
};

var ctx = document.getElementById('mycanvas').getContext('2d');
window.myPie = new Chart(ctx,config);*/







/*$(document).ready(function(){
    $.ajax({
       // url:"adminchart.php",
        //method: "GET",
        success: function(data){
            //var memberno = [];
            ///var gender = [];

            for(var i in data) {
              //memberno.push("ID " + data[i].memberno);
               // gender.push(data[i].gender);
            }

            var chardata = {
                labels: ['Male','Female'],
                datasets : [
                    {
                        label : 'gender',
                        backgroundColor: ['orange','#112266'],
                        borderColor: 'white',
                        hoverBackgroundColor: '#24aa41',
                        hoverBorderColor: 'white',
                        data: [10, 58]
                    }
                ]
            };
            var CHART = $("#mycanvas2");

            var graph = new Chart(CHART, {
                type: 'doughnut',
                data: chardata
            });
        },
        error:function(data){error}
        
    });

});*/






$(document).ready(function(){
    $.ajax({
        //url:"adminchart.php",
        //method: "GET",
        success: function(data){
            //var memberno = [];
            //var gender = [];

            for(var i in data) {
             // memberno.push("ID " + data[i].memberno);
                //gender.push(data[i].gender);
            }

            var chardata = {
                labels: ['Male','Female'],
                datasets : [
                    {
                        label : 'gender',
                        backgroundColor: ['#e9e900','crimson'],
                        borderColor: 'white',
                        hoverBackgroundColor: '#24aa41',
                        hoverBorderColor: 'white',
                        data: [39, 58]
                    }
                ]
            };
            var CHART = $("#mycanvas3");

            var graph = new Chart(CHART, {
                type: 'doughnut',
                data: chardata
            });
        },
        error:function(data){}
        
    });

});


/*$(document).ready(function(){
    $.ajax({
        //url:"adminchart.php",
        //method: "GET",
        success: function(data){
            //var memberno = [];
            //var gender = [];

            for(var i in data) {
             // memberno.push("ID " + data[i].memberno);
                //gender.push(data[i].gender);
            }

           /* var chardata = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets : [
                    {
                        label : 'months',
                        backgroundColor: '#d9dcf7',
                        borderColor: '#112266',
                        hoverBackgroundColor: '#24aa41',
                        hoverBorderColor: 'white',
                        data: [100, 200, 89, 400, 300, 700, 650, 710]
                    }
                ]
            };
            var CHART = $("#mycanvas4");

            var graph = new Chart(CHART, {
                type: 'line',
                data: chardata
            });
        },
        error:function(data){}
        
    });

});*/



/*$(document).ready(function(){
    $.ajax({
        //url:"adminchart.php",
        //method: "GET",
        success: function(data){
            //var memberno = [];
            //var gender = [];

            for(var i in data) {
             // memberno.push("ID " + data[i].memberno);
                //gender.push(data[i].gender);
            }

            var chardata = {
                labels:  ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets : [
                    {
                        label : 'months',
                        backgroundColor: '#d9dcf7',
                        borderColor: 'seagreen',
                        hoverBackgroundColor: '#24aa41',
                        hoverBorderColor: 'white',
                        data: [150, 1100, 89, 200, 300, 700, 650, 80]
                    }
                ]
            };
            var CHART = $("#mycanvas5");

            var graph = new Chart(CHART, {
                type: 'line',
                data: chardata
            });
        },
        error:function(data){}
        
    });

});*/



/*$(document).ready(function(){
    $.ajax({
        //url:"adminchart.php",
        //method: "GET",
        success: function(data){
            //var memberno = [];
            //var gender = [];

            for(var i in data) {
             // memberno.push("ID " + data[i].memberno);
                //gender.push(data[i].gender);
            }

            var chardata = {
                labels:  ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets : [
                    {
                        label : 'months',
                        backgroundColor: '#d9dcf7',
                        borderColor: 'orange',
                        hoverBackgroundColor: '#24aa41',
                        hoverBorderColor: 'white',
                        data: [100, 200, 189, 400, 100, 700, 650, 410]
                    }
                ]
            };
            var CHART = $("#mycanvas6");

            var graph = new Chart(CHART, {
                type: 'line',
                data: chardata
            });
        },
        error:function(data){}
        
    });

});*/