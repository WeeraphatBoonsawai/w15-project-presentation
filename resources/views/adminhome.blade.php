@extends('layouts.admin')

@section('nav')
<li>
    <a class="block px-4 py-2.5 text-slate-200 font-semibold  hover:bg-emerald-950 hover:text-white rounded-lg bg-emerald-950" href="{{ url('/adminhome') }}">Home</a>
</li>
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg " href="{{ url('/user') }}">Profile</a>

</li>
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="{{ url('/chart') }}">Dashboard</a>
</li>


<li class=" pb-2">
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg " href="{{ url('/members') }}">Data Base</a>
   
</li>
@endsection

@section('3')
<li class="before:mx-2">Home</li>
@endsection



@section('Page Name')
Home
@endsection

@section('page')
<main>
    <div class="pt-6 px-4">
       <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
             <div class="flex items-center justify-between mb-4">
                <div class="flex-shrink-0">
                   <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">Generation Chart</span>

                </div>
                
             </div>
             <canvas id="myChart" class="w-full h-20"></canvas>
          </div>

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
             <div class="mb-4 flex items-center justify-between">
                <div>
                   <h3 class="text-xl font-bold text-gray-900 mb-2">Music</h3>
                   <span class="text-base font-normal text-gray-500">This is a list of Music</span>
                </div>
                <div class="flex-shrink-0">
                   <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View all</a>
                </div>
             </div>
             <div class="flex flex-col mt-8">
                <div class="overflow-x-auto rounded-lg">
                   <div class="align-middle inline-block min-w-full">
                      <div class="shadow overflow-hidden sm:rounded-lg">
                         <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                
                               <tr>
                                  <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     No
                                  </th>
                                  <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     
                                  </th>
                                  <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                 </th>

                               </tr>
                               
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($musics as $item)
                               <tr>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                    {{ $item->id }}
                                  </td>
                                  <td class="p-4 py-3 px-3 whitespace-nowrap text-sm font-normal text-gray-500">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12  rounded-full" src={{ $item->music_img }} alt="Neil image">
                                     </div>
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                    {{ $item->music_name }}
                                  </td>

                               </tr>
                               @endforeach
                            </tbody>
                         </table>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
      
       <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
          <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
             <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold leading-none text-gray-900">Talent</h3>
                <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                View all
                </a>
             </div>
             <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200">

                    @foreach ($Memberss as $item)
                   <li class="py-3 sm:py-4">
                      <div class="flex items-center space-x-4">
                         <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full" src={{ asset('images/Portrait/'.$item->members_img_icon) }} alt="Neil image">
                         </div>
                         <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                                {{ $item->members_name }}
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                               <a class="__cf_email__" data-cfemail="17727a767e7b57607e7973646372653974787a">{{ $item->generation->generation_name}}</a>
                            </p>
                         </div>
                         
                         <div class="inline-flex items-center text-base font-semibold text-gray-500">
                            <a href="{{ $item->members_youtube}}">
                            {{ $item->members_youtube_name}}
                        </a>
                         </div>
                      </div>
                   </li>

                   @endforeach

             </div>
          </div>

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
             <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold leading-none text-gray-900">Generation</h3>
                <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                View all
                </a>
             </div>
             <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                   <thead>

                      <tr>
                         <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">No</th>
                         <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Name</th>
                        </tr>
                   </thead>
                   <tbody class="divide-y divide-gray-100">
                      <tr class="text-gray-500">
                        @foreach ($generations as $item)
                         <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">{{ $item->id }}</th>
                         <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">{{ $item->generation_name }}</td>
                         
                      </tr>
                      @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
<script type="text/javascript">
  
    var labels =  {{ Js::from($labels) }};
    var datas =  {{ Js::from($data) }};

  
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

    
 

  

</script>


@endsection
