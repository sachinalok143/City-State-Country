@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <button id="showChart"> SHoW</button>
                   	
						          @include('layouts.show_chart')
                  <canvas id="projects-graph" style="height: 100px; width: 250px;  "></canvas>
                      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                     <div id="regions_div" style="width: 900px; height: 500px;"></div>
                     <div id="scatter_div" style="width: 900px; height: 500px;"></div>
                    <div style=" " id="charts">
                        {!! $charts->render()!!}
                    </div>

                    <div id="columnChart"></div>

   
                </div>
            </div>
        </div>
    </div>
</div>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>   -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> -->
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){

    
 // 	$(document).on('click','#showChart',function(){
 //  	$('#charts').html();
  
  

 //    lava.getChart('IMDB', function (googleChart, lavaChart) {
 //     console.log(googleChart);
 //     console.log(lavaChart);
 // });

//     lava.loadData('IMDB ',['sachin'=>10,'amit'=>20,'alok'=>50], function (chart) {
//     console.log(chart);
// });



//    function selectCallback (event, chart) {
//   // Useful for using chart methods such as chart.getSelection();
//   console.log(chart.getSelection());
// }

// lava.getDashboard('myFancyDashboard', function (googleDashboard, lavaDashboard) {
//     console.log(googleDashboard);
//     console.log(lavaDashboard);
// });

// $.getJSON('http://my.cool.site.com/api/whatever/getDataTableJson', function (dataTableJson) {
//   lava.loadData('Chart1', dataTableJson, function (chart) {
//     console.log(chart);
//   });
// });

$('#showChart').on('click',function(){
 


 $.get("{{ url('/filtercharts')}}")
    .done(function(data1) {
      // console.log(data1[1].rows[1].c[0].v);
      //alert(data1.rows[1].c[1].v);
      
    //     lava.loadData('IMDB', data, function (chart) {
   // alert('fghjk');
 




 /*-------------------------this is for geochart-----------------------------------------------------------------*/
    var geoChartData=[['Country', 'Popularity'],];

    for (var i = 0; i <data1[1].rows.length; i++) {
        var obj=[
          data1[1].rows[i].c[0].v,
          data1[1].rows[i].c[1].v
        ];
        geoChartData.push(obj);
      obj=[];
    }
// alert(geoChartData);
  
      google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable(geoChartData);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, {width:700,height:400});
      }
/*-----------------------------this is for bar chart------------------------------------------------------------*/

 google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawbarChart);

    function drawbarChart(){
      var data = google.visualization.arrayToDataTable(geoChartData);
var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnChart"));
      chart.draw(view, options);
  }
/*var myRows= [];
var JSONObj = new Object();
 for (var i = 0; i <data1.rows.length; i++) {
  myRows[i]["labels"]=data1.rows[i].c[0].v;
  myRows[i]["y"]=data1.rows[i].c[1].v;
    }*/











// afrealert(myData);
    
/*    new Chart(buyers).Line(buyerData, {
      bezierCurve : true
    });*/

/*-------------------------------this is for line chart---------------------------------------------------------*/    

var labels = [],data=[];
    for (var i = 0; i <data1[1].rows.length; i++) {
        data.push(data1[1].rows[i].c[1].v);
        labels.push(data1[1].rows[i].c[0].v);
    }
     
  var buyers = document.getElementById('projects-graph').getContext('2d');

    var buyerData = {
      labels : labels,
       
      datasets : [
        {
          fillColor : "rgba(240, 127, 110, 0.3)",
          strokeColor : "#f56954",
          pointColor : "#A62121",
          pointStrokeColor : "#741F1F",
          
          data : data
        }
      ]
    };

var chartInstance = new Chart(buyers,{
    type: 'line',
    name: 'Browser share',
    data: buyerData,

 
});
// alert('myRows');
    // alert(chartInstance); 

/*-------------------------------------this is for pie chart----------------------------------------------------*/
 var myData = [];
// data1.rows.each(function (index) {
   for (var i = 0; i <data1[1].rows.length; i++) {
    var obj = { 
        label: data1[1].rows[i].c[0].v,
        y: data1[1].rows[i].c[1].v
    };
    myData.push(obj);
}

var chart = new CanvasJS.Chart("chartContainer", {
    title:{
      text: "My First Chart in CanvasJS"              
    },
    is3D:{boolean:true},
    data: [              
    {
      // Change type to "doughnut", "line", "splineArea", etc.
      type: "pie",

      dataPoints: myData

    }
    ]
  });
  chart.render();



  $('#chart-div').html(chartInstance);
  //});
      


           
     
 
  /*--------------------------- this is for scatter chart-------------------------------------------------*/

        var scatterChartData=[['Age', 'Weight'],];

        for (var i = 0; i <data1[0].rows.length; i++) {
        var obj=[
          data1[0].rows[i].c[0].v,
          data1[0].rows[i].c[1].v
        ];
        scatterChartData.push(obj);
        obj=[];
        }
       // });

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);


      function drawChart() {

        var data = google.visualization.arrayToDataTable(scatterChartData);

        var options = {
          title: 'Age vs. Weight comparison',
          hAxis: {title: 'Age', minValue: 0, maxValue: 15},
          vAxis: {title: 'Weight', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('scatter_div'));

        chart.draw(data, options);
      }

 })
    .fail(function(xhr, textStatus, errorThrown){
      });
    return false;
    });

    });


//});


  	</script>


@endsection
