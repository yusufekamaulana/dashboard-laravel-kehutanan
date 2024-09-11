<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest Data Visualization</title>
    <link rel="stylesheet" href="<?php echo e(asset('tailwindcharts/css/flowbite.min.css')); ?>">
</head>

<body>

    <div class="max-w-6xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Forest Area Visualization</h1>

        <div id="forest-area-chart"></div>
    </div>

    <script src="<?php echo e(asset('tailwindcharts/js/apexcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('tailwindcharts/js/flowbite.min.js')); ?>"></script>
    <script>
        // Data for Forest Area Chart
        const forestData = <?php echo json_encode($forestData, 15, 512) ?>;

        // Prepare series data for grouped column chart
        const seriesData = [
            { name: 'Hutan Lindung', data: [] },
            { name: 'Suaka Alam', data: [] },
            { name: 'Hutan Produksi Terbatas', data: [] },
            { name: 'Hutan Produksi Tetap', data: [] },
            { name: 'Hutan Konservasi', data: [] },
            { name: 'Luas Hutan dan Perairan', data: [] }
        ];

        // Populate series data
        forestData.forEach(row => {
            seriesData[0].data.push(row.hutan_lindung);
            seriesData[1].data.push(row.suaka_alam);
            seriesData[2].data.push(row.hutan_produksi_terbatas);
            seriesData[3].data.push(row.hutan_produksi_tetap);
            seriesData[4].data.push(row.hutan_konservasi);
            seriesData[5].data.push(row.luas_hutan_dan_perairan);
        });

        const forestChartOptions = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: seriesData,
            xaxis: {
                categories: forestData.map(row => row.kode_pulau),
                title: { text: 'Island Code' }
            },
            yaxis: {
                title: { text: 'Total Area (in Ha)' }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '80%',
                    endingShape: 'rounded'
                }
            },
            dataLabels: {
                enabled: false // Disable data labels
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            }
        };

        new ApexCharts(document.querySelector("#forest-area-chart"), forestChartOptions).render();
    </script>
</body>

</html>
<?php /**PATH Z:\KULIAH\SEMESTER 5\IAK\dashboard\resources\views/forest_data/index.blade.php ENDPATH**/ ?>