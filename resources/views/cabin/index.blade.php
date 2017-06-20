@extends('layouts.app')

@section('content')

<div class="container generalBg" >
    <div style="position: relative;">
        <canvas id="cabinsChart" width="400" height="400"></canvas>
    </div>
</div>


@endsection

@section('script')

<script>
var ctx = document.getElementById("cabinsChart").getContext('2d');
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [{{ $solds }}, {{ $avaiable }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Indisponíveis',
            'Disponíveis',
        ]
    },
    options: {
        responsive: true
    }
});
</script>
@endsection