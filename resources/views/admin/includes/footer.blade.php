<script src="{{ asset('admin-assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Include Choices JavaScript -->
<script src="{{ asset('admin-assets/vendors/choices.js/choices.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/form-element-select.js') }}"></script>



<!-- xzoom -->
<script src="{{ asset('admin-assets/vendors/xzoom/foundation.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/xzoom/setup.js') }}"></script>
<!-- datatable -->

<script src="{{ asset('admin-assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<!-- owl carousel -->
<script src="{{ asset('admin-assets/vendors/owl/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/owl/owl.carousel.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{ asset('admin-assets/js/mazer.js') }}"></script>

<!-- Tag Inputs -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
<script>
    var input = document.querySelector('input[name=ingredient_name]');
    new Tagify(input)
</script> -->

<script>
    const dataMarket = {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Weekly Sales',
            data: [18, 12, 6, 9, 12, 3, 9],
            backgroundColor: 'rgb(255,225,225)',
            borderColor: 'rgb(67,94,190)',
            tension: 0.5
        }]
    };

    const configMarket = {
        type: 'line',
        data: dataMarket,
        options: {
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    const myChartMarket = new Chart(
        document.getElementById('marketOverview'),
        configMarket
    );
</script>

<script>
    const up = (ctx, value) => ctx.p0.parsed.y < ctx.p1.parsed.y ? value : undefined;
    const down = (ctx, value) => ctx.p0.parsed.y > ctx.p1.parsed.y ? value : undefined;
    const dataSell = {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Weekly Sales',
            data: [18, 12, 6, 9, 12, 3, 9],
            fill: true,
            borderWidth: 1,
            segment: {
                borderColor: ctx => up(ctx, 'rgba(75, 192, 192, 1)') || down(ctx, 'rgba(75, 192, 192, 1)'),
                backgroundColor: ctx => up(ctx, '#fff') || down(ctx, '#fff'),
            }
        }]
    };

    const configSell = {
        type: 'line',
        data: dataSell,
        options: {
            scales: {
                x: {
                    display: false,
                },
                y: {
                    display: false,
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    };

    const myChartSell = new Chart(
        document.getElementById('sellGraph'),
        configSell
    );
</script>

<script>
    const up1 = (ctx, value) => ctx.p0.parsed.y < ctx.p1.parsed.y ? value : undefined;
    const down1 = (ctx, value) => ctx.p0.parsed.y > ctx.p1.parsed.y ? value : undefined;
    const dataSell1 = {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Weekly Sales',
            data: [20, 18, 16, 9, 2, 13, 5],
            fill: true,
            borderWidth: 1,
            segment: {
                borderColor: ctx => up1(ctx, 'rgba(75, 192, 192, 1)') || down1(ctx, 'rgba(75, 192, 192, 1)'),
                backgroundColor: ctx => up1(ctx, '#fff') || down1(ctx, '#fff'),
            }
        }]
    };

    const configSell1 = {
        type: 'line',
        data: dataSell1,
        options: {
            scales: {
                x: {
                    display: false,
                },
                y: {
                    display: false,
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    };

    const myChartSell1 = new Chart(
        document.getElementById('sellGraph1'),
        configSell1
    );
</script>

<script>
    const up2 = (ctx, value) => ctx.p0.parsed.y < ctx.p1.parsed.y ? value : undefined;
    const down2 = (ctx, value) => ctx.p0.parsed.y > ctx.p1.parsed.y ? value : undefined;
    const dataSell2 = {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Weekly Sales',
            data: [2, 10, 6, 13, 12, 15, 25],
            fill: true,
            borderWidth: 1,
            segment: {
                borderColor: ctx => up2(ctx, 'rgba(75, 192, 192, 1)') || down2(ctx, 'rgba(75, 192, 192, 1)'),
                backgroundColor: ctx => up2(ctx, '#fff') || down2(ctx, '#fff'),
            }
        }]
    };

    const configSell2 = {
        type: 'line',
        data: dataSell2,
        options: {
            scales: {
                x: {
                    display: false,
                },
                y: {
                    display: false,
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    };

    const myChartSell2 = new Chart(
        document.getElementById('sellGraph2'),
        configSell2
    );
</script>

<script>
    const up3 = (ctx, value) => ctx.p0.parsed.y < ctx.p1.parsed.y ? value : undefined;
    const down3 = (ctx, value) => ctx.p0.parsed.y > ctx.p1.parsed.y ? value : undefined;
    const dataSell3 = {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Weekly Sales',
            data: [22, 15, 16, 8, 10, 14, 20],
            fill: true,
            borderWidth: 1,
            segment: {
                borderColor: ctx => up3(ctx, 'rgba(75, 192, 192, 1)') || down3(ctx, 'rgba(75, 192, 192, 1)'),
                backgroundColor: ctx => up3(ctx, '#fff') || down3(ctx, '#fff'),
            }
        }]
    };

    const configSell3 = {
        type: 'line',
        data: dataSell3,
        options: {
            scales: {
                x: {
                    display: false,
                },
                y: {
                    display: false,
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    };

    const myChartSell3 = new Chart(
        document.getElementById('sellGraph3'),
        configSell3
    );
</script>

<script>
    const dataOrder = {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
                label: 'Red',
                data: [18, 12, 6, 9, 12, 3, 9],
                backgroundColor: 'rgb(25,135,84)',
                borderColor: 'rgb(25,135,84)',
                borderWidth: 1,
                borderSkipped: false
            },
            {
                label: 'red',
                data: [-18, -12, -6, -9, -12, -3, -9],
                backgroundColor: 'rgb(220,53,69)',
                borderColor: 'rgb(220,53,69)',
                borderWidth: 1,
                borderSkipped: false
            }
        ]
    };

    const configOrder = {
        type: 'bar',
        data: dataOrder,
        options: {
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: (context) => {
                            console.log(context)
                            const nett = Math.abs(context.raw)
                            return `${context.dataset.label}: ${nett}`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    beginAtZero: true,
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    };

    const myChartOrder = new Chart(
        document.getElementById('orderTiming'),
        configOrder
    );
</script>

</body>

</html>