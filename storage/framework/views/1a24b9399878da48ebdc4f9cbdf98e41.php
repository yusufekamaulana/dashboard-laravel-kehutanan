<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="grid grid-cols-2 gap-4">
        <!-- Plot untuk Akasia -->
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between">
                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-2">Akasia</h5>
            </div>
            <div id="line-chart-akasia"></div>
        </div>

        <!-- Plot untuk Kelompok Kayu Indah -->
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between">
                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-2">Kelompok Kayu Indah</h5>
            </div>
            <div id="line-chart-kayu-indah"></div>
        </div>

        <!-- Plot untuk Kelompok Meranti -->
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between">
                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-2">Kelompok Meranti</h5>
            </div>
            <div id="line-chart-meranti"></div>
        </div>

        <!-- Plot untuk Kelompok Rimba Campuran -->
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between">
                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-2">Kelompok Rimba Campuran</h5>
            </div>
            <div id="line-chart-rimba-campuran"></div>
        </div>
    </div>
    <script src="<?php echo e(asset('tailwindcharts/js/apexcharts.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Data untuk setiap jenis kayu
        const dataAkasia = [512354, 500225.95, 532044.99, 813374];
        const dataKayuIndah = [2763, 5786, 23348, 29044];
        const dataMeranti = [3961000, 3390140, 4833969, 4351834];
        const dataRimbaCampuran = [1698694, 1364598.05, 666162.01, 570167];

        const years = [2019, 2020, 2021, 2022];

        // Fungsi untuk membuat chart
        function createLineChart(elementId, seriesName, data, color) {
            const options = {
                chart: {
                    type: "area",
                    height: "100%",
                    maxWidth: "100%",
                    toolbar: {
                        show: false
                    },
                    fontFamily: "Inter, sans-serif",
                    dropShadow: {
                        enabled: false,
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: 5
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        opacityFrom: 0.55,
                        opacityTo: 0,
                        shade: color,
                        gradientToColors: [color]
                    },
                },
                series: [{
                    name: seriesName,
                    data: data,
                    color: color
                }],
                xaxis: {
                    categories: years,
                    title: {
                        text: "Tahun"
                    }
                },
                yaxis: {
                    title: {
                        text: "Produksi Kayu Bulat"
                    }
                },
                tooltip: {
                    enabled: true,
                    shared: true
                },
                grid: {
                    strokeDashArray: 4
                }
            };

            const chart = new ApexCharts(document.getElementById(elementId), options);
            chart.render();
        }

        // Membuat chart untuk setiap jenis kayu
        createLineChart("line-chart-akasia", "Akasia", dataAkasia, "#1A56DB");
        createLineChart("line-chart-kayu-indah", "Kelompok Kayu Indah", dataKayuIndah, "#FF7F0E");
        createLineChart("line-chart-meranti", "Kelompok Meranti", dataMeranti, "#2CA02C");
        createLineChart("line-chart-rimba-campuran", "Kelompok Rimba Campuran", dataRimbaCampuran, "#D62728");
    </script>
</body>

</html><?php /**PATH Z:\KULIAH\SEMESTER 5\IAK\dashboard\resources\views/well.blade.php ENDPATH**/ ?>