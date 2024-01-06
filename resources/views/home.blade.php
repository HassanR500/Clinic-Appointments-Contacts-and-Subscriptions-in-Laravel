@extends('layouts.backend.app')
@section('content')
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
    var chartData = {!! $chartData !!};
    var data = google.visualization.arrayToDataTable(chartData);

    var options = {
        legend: { position: 'top' },
        bar: { groupWidth: '85%' }, // Adjust bar width
        colors: ['#3366CC', '#DC3912', '#FF9900', '#109618'], // Set custom colors
        vAxis: { title: 'Values' }, // Vertical axis title
        hAxis: { title: 'Month', slantedText: true, slantedTextAngle: 45 }, // Horizontal axis title with angled labels
        height: 400,
        chartArea: { width: '70%', height: '85%' } // Adjust chart area
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('monthly_chart'));

    chart.draw(data, options);
}

    </script>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        table-layout: fixed;
    }

    th, td {
        border-bottom: 1px solid #2a2185;
        padding: 8px;
        text-align: left;
        word-wrap: break-word;
    }
    th {
        background-color: #2a2185;
        color: white;
    }
</style>
<!-- ======================= Cards ================== -->
<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader" style = "text-align:center">
            <h2>Monthly Trends</h2>
        </div>

        <div id="monthly_chart"></div>
    </div>

    <!-- ================= New Customers ================ -->
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Recent Customers</h2>
            
        </div>
        <div class="table-container" >
            <table>
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Appointment Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data -->
                    @foreach ($latestAppointments as $appointment)
                    <tr>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection