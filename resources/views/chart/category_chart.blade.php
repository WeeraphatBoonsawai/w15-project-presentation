@extends('layouts.admin')

@section('nav')
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold  hover:bg-emerald-950 hover:text-white rounded-lg" href="{{ url('/adminhome') }}">Home</a>
</li>
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg " href="{{ url('/user') }}">Profile</a>

</li>
<li>
    <a class="block px-4 py-2.5 text-slate-200 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg bg-emerald-950" href="{{ url('/chart') }}">Dashboard</a>
</li>


<li class=" pb-2">
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg " href="{{ url('/members') }}">Data Base</a>
   
</li>
@endsection

@section('3')
<li class="before:mx-2">Chart</li>
@endsection



@section('Page Name')
Dashboard
@endsection

@section('page')
<div class="grid grid-cols-2 gap-4 lg:grid-cols-3">
 <!-- chart  -->
 <div class="m-2 lg:col-span-1 shadow-md">
    <h2 class="text-xl p-2">Generation Chart</h2>
    <canvas id="myChart" height="w-full"></canvas>  
</div>

 <!-- candle list -->
 <div class="m-2 lg:col-span-2 shadow-md">
    <h2 class="text-xl p-2">Affiliation Chart</h2>
    <canvas id="affiliationChart" height="w-full"></canvas> 

</div>


</div>


<div class="m-2 lg:col-span-1 shadow-md">
    <h2 class="text-xl p-2">Gender Chart</h2>
    
    <canvas id="Charts" height="w-full"></canvas>  
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  {{ Js::from($labels) }};
    var datas =  {{ Js::from($data) }};
    var labels_affiliation =  {{ Js::from($labels_affiliation) }};
    var datas_affiliation =  {{ Js::from($data_affiliation) }};
    var labels_gender =  {{ Js::from($labels_gender) }};
    var datas_gender =  {{ Js::from($data_gender) }};

  
    const data = {
        labels: labels,
        datasets: [{
            backgroundColor: ["#6499E9", "#9EDDFF","#A6F6FF","#BEFFF7"],
            borderColor: 'rgb(176,196,222)',
            data: datas,
        }]
    };
  
    const config = {
        type: 'doughnut',
        data: data,
        options: {}
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    

    const affiliationChart = new Chart(document.getElementById('affiliationChart'), {
    type: 'line',
    data: {
      labels: labels_affiliation,
      datasets: [{
        label: 'Affiliation',
        backgroundColor: ["#6499E9"],
        borderColor: "#9EDDFF",
        data: datas_affiliation
      }]
    }
  });

  const Charts = new Chart(document.getElementById('Charts'), {
    type: 'bar',
    data: {
      labels: labels_gender,
      datasets: [{
        label: 'Gender',
        backgroundColor: ["#6499E9"],
        borderColor: "#9EDDFF",
        data: datas_gender
      }]
    }
  });
 

  

</script>



@endsection

