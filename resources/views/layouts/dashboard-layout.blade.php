<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Migration Master</title>
    <meta name="tittle" content="">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link media="all" rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
</head>

<body class="pt-70 bg-gray">

<header id="header" class="main-header student-header">
    <div class="header-holder">
        <div class="logo">
            <a href="/"><img src="{{ asset('images/logo.png') }}" width="150" height="62" alt="Trish Academy"></a>
        </div>
        <a href="#" class="nav-opener"><span></span></a>
        <div class="nav-holder">
            <nav id="nav">
                <ul class="nav center-nav">
                    <li class="current"><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/tests-dashboard">Take Test</a></li>
                    <li class="notification"><a href="/feedback">Feedback</a></li>
                    <li><a href="/history">History</a></li>

                </ul>
            </nav>

        </div>
    </div>
</header>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

    @yield('content')

{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--<script src="{{ secure_asset('js/jquery.main.js') }}" defer></script>--}}

{{--<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script src="/js/jquery.main.js" defer></script>

<script>
    AOS.init();

    $(".hamburger").click(function() {
        $(".nav-container").slideToggle();
    });

    $(".close-alert").click(function(e) {
        e.preventDefault();
        $(this).parent().fadeOut();
    })


    Highcharts.chart('chart-container', {
        title: false,
        yAxis: {
            title: {
                text: 'Band Scores'
            }
        },

        xAxis: {
            title: {
                text: 'Test Volume'
            }
        },

        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'top'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 2010
            }
        },

        series: [{
            name: 'Listening',
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
        }, {
            name: 'Reading',
            data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
        }, {
            name: 'Speaking',
            data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
        }, {
            name: 'Writing',
            data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },

                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

    Highcharts.chart('chart-container1', {
        title: false,
        yAxis: {
            title: {
                text: 'Band Scores'
            }
        },

        xAxis: {
            title: {
                text: 'Test Volume'
            }
        },

        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'top'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 2010
            }
        },

        series: [{
            name: 'Listening',
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
        }, {
            name: 'Reading',
            data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
        }, {
            name: 'Speaking',
            data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
        }, {
            name: 'Writing',
            data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },

                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

    Highcharts.chart('chart-container2', {
        title: false,
        yAxis: {
            title: {
                text: 'Band Scores'
            }
        },

        xAxis: {
            title: {
                text: 'Test Volume'
            }
        },

        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'top'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 2010
            }
        },

        series: [{
            name: 'Listening',
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
        }, {
            name: 'Reading',
            data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
        }, {
            name: 'Speaking',
            data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
        }, {
            name: 'Writing',
            data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },

                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>
@yield('js')
</body>
</html>
