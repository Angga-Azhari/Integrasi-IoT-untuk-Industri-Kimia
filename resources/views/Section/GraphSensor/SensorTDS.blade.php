<div id="chart" wire:ignore></div>
@push('scripts')
    <script>
        var options = {
            chart: {
                type: 'line',
                height: '500px',
                stroke: {
                    curve: 'smooth',
                }
            },
            series: [],
            xaxis: {
                categories: [],
                title: 'Time Series Data'
            },
            scrollbar: {
                enabled: true
            },
            markers: {
                size: 0 ,
            },
            legend: {
                position: 'top',
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        document.addEventListener('livewire:init', () => {
            Livewire.on('refreshData', (event) => {
                const graphData = event[0]?.data || {};
                if (Object.keys(graphData).length === 0) {
                    console.error('Data format is incorrect or empty:', graphData);
                    return;
                }
                chart.updateSeries([
                    {
                        name: 'TDS',
                        data: graphData.data_4
                    },
                ]);

                chart.updateOptions({
                    xaxis: {
                        categories: graphData.data_x
                    }
                });
            });
        });
    </script>
@endpush
