<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest Production Data</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        /* Add any additional styles here */
    </style>
</head>

<body>
    <!-- Dropdown to select the year -->
    <div class="form-group">
        <label for="yearSelect">Select Year</label>
        <select class="form-control" id="yearSelect">
            <!-- The options will be dynamically populated from JavaScript -->
        </select>
    </div>

    <!-- Your bar chart -->
    <div id="forest-area-chart" style="width: 100%; height: 400px;"></div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data for Forest Area Chart
            const forestData = <?php echo json_encode($forestData, 15, 512) ?>;

            // Extract unique years for the dropdown
            const years = [...new Set(forestData.map(row => row.id_tahun))];

            // Populate year dropdown
            const yearSelect = document.querySelector('#yearSelect');
            years.forEach(year => {
                const option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                yearSelect.appendChild(option);
            });

            // Initialize chart with the first year
            let selectedYear = years[0];

            // Function to filter data based on selected year
            function filterDataByYear(year) {
                return forestData.filter(row => row.id_tahun === parseInt(year));
            }
            // Update chart based on selected year
            function updateChart(selectedYear) {
                const filteredData = filterDataByYear(selectedYear);

                // Prepare series data for grouped bar chart
                const seriesData = [{
                        name: 'Suaka Alam dan Pelestarian Alam',
                        data: filteredData.map(row => row.Suaka_Alam_dan_Pelestarian_Alam),
                        color: '#0B2F9F'
                    },
                    {
                        name: 'Hutan Produksi Terbatas',
                        data: filteredData.map(row => row.Hutan_Produksi_Terbatas),
                        color: '#1230AE'
                    },
                    {
                        name: 'Hutan Produksi Tetap',
                        data: filteredData.map(row => row.Hutan_Produksi_Tetap),
                        color: '#6C48C5'
                    },
                    {
                        name: 'Hutan Produksi yang dapat Dikonversi',
                        data: filteredData.map(row => row.Hutan_Produksi_yang_dapat_Dikonversi),
                        color: '#C68FE6'
                    }
                ];

                const chartOptions = {
                    chart: {
                        type: 'bar',
                        height: 400
                    },
                    series: seriesData,
                    xaxis: {
                        categories: filteredData.map(row => row.kode_pulau),
                        title: {
                            text: 'Pulau'
                        }
                    },
                    yaxis: {
                        title: {
                            text: 'Total Area (in Ha)'
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '80%',
                            endingShape: 'rounded'
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        position: 'bottom',
                        horizontalAlign: 'center'
                    }
                };

                const chart = new ApexCharts(document.querySelector("#forest-area-chart"), chartOptions);
                chart.render();
            }

            // Initial chart render
            updateChart(selectedYear);

            // Listen for year change
            yearSelect.addEventListener('change', function() {
                selectedYear = this.value;
                updateChart(selectedYear);
            });
        });
    </script>
</body>

</html><?php /**PATH Z:\KULIAH\SEMESTER 5\IAK\dashboard\resources\views/wel.blade.php ENDPATH**/ ?>