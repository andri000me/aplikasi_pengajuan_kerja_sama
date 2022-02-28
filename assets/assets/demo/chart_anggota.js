Chart.plugins.register({
    ChartDataLabels
});
$(document).ready(function() {
    Chart.defaults.global.defaultFontSize = 10.5;
    $.ajax({
        url: `${BASE_URL}Dashboard/chart_Data`,
        method: "GET",
        success: function(data) {
            var value = [];
            console.log(data.data.length);
            max_1 = 0;
            i = 0;
            do {
                value.push(data.data[i].total);
                i++;
            } while (i < data.data.length);
            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Kerja Sama Eksternal", "Kerja Sama Internal", "Implementasi Kerja Sama", "Data Pengajuan"],
                    datasets: [{
                        label: "Jumlah",
                        lineTension: 0.3,
                        backgroundColor: "rgba(2,117,216,0.2)",
                        borderColor: "rgba(2,117,216,1)",
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(2,117,216,1)",
                        pointBorderColor: "rgba(255,255,255,0.8)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(2,117,216,1)",
                        pointHitRadius: 50,
                        pointBorderWidth: 2,
                        data: value,
                    }],
                },
                options: {
                    plugins: {
                        // Change options for ALL labels of THIS CHART

                        datalabels: {
                            color: 'rgb(25, 15, 39, 1)',
                            anchor: 'end',
                            align: 'start',
                            font: {
                                size: 10,
                                style: 'italic',
                                family: ["Century Gothic", "sans-serif"]

                            }

                        }
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{

                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 7
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 10,
                                maxTicksLimit: 10,
                                display: false,
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, .125)",
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });


        }
    });

    $.ajax({
        url: `${BASE_URL}Dashboard/chart_Data`,
        method: "GET",
        success: function(data) {
            var value = [];
            console.log(data.data.length);
            max_1 = 0;
            i = 0;
            do {
                value.push(data.data[i].total);
                i++;
            } while (i < data.data.length);
            var ctx = document.getElementById("myBarChart");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Kerja Sama Eksternal", "Kerja Sama Internal", "Implementasi Kerja Sama", "Data Pengajuan"],
                    datasets: [{
                        label: "Jumlah",
                        backgroundColor: "rgba(2,117,216,1)",
                        borderColor: "rgba(2,117,216,1)",
                        data: value,
                    }],
                },
                options: {

                    plugins: {
                        // Change options for ALL labels of THIS CHART

                        datalabels: {
                            color: 'rgb(25, 15, 39, 1)',
                            anchor: 'end',
                            align: 'end',
                            font: {
                                size: 11,
                                style: 'italic',
                                family: ["Century Gothic", "sans-serif"]

                            }

                        }
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{

                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 7
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 4,
                                maxTicksLimit: 5,
                                display: false,
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, .125)",
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });


        }
    });




});