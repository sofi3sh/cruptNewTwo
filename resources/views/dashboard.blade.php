<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Stan's Crypto Terminal</title>
    <!-- Custom CSS -->
{{--    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">--}}
{{--    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">--}}



{{--    <link href="{{asset('assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">--}}

    <link href="{{ URL::asset('resources/css/style.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('resources/css/c3.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('resources/css/chartist.min.css') }}" rel="stylesheet" type="text/css"/>

{{--    <link href="{{ URL::asset('resources/css/style.css') }}" rel="stylesheet" type="text/css"/>--}}





{{--    <link href="resources/css/style.min.css" rel="stylesheet">--}}
{{--    <link href="resources/css/style.css" rel="stylesheet">--}}


{{--    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />--}}

    <!-- Custom CSS -->
{{--    <link href="dist/css/style.min.css" rel="stylesheet">--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-header-position="fixed" data-boxed-layout="full" class="bg-dark text-light">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand">
            <div class="navbar-brand ml-5">
                <a href="index.html">
                    <img src="img/logo.svg" alt="homepage" class="dark-logo" />
                </a>
            </div>
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                <!-- Notification -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pl-md-3 position-relative text-light" href="javascript:void(0)"
                       id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <span><i data-feather="bell" class="svg-icon"></i></span>
                        <span class="badge badge-light notify-no rounded-circle">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" style="max-height: 80vh; overflow-y: scroll">
                        <ul class="list-style-none">
                            <li>
                                <div class="message-center notifications position-relative">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i
                                                data-feather="airplay" class="text-white"></i></div>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Shitcoin/USDT</h6>
                                            <span class="font-12 text-nowrap d-block text-muted">
                                                    Листинг на Kucoin, торговалась на Lbank, Huobi. Чистая прибыль $123 (23%)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">01.01.2021 09:30</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Статистика за сегодня</h6>
                                            <span
                                                class="font-12 text-nowrap d-block text-muted text-truncate">Чистая прибыль составила $423 (32% от баланса на прошлые сутки)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">17.05.2022 23:59</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-warning rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Изменение настроек</h6>
                                            <span
                                                class="font-12 text-nowrap d-block text-muted text-truncate">Терминал был включен</span>
                                            <span class="font-12 text-nowrap d-block text-muted">23.05.2022 19:08</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i
                                                data-feather="airplay" class="text-white"></i></div>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Shitcoin/USDT</h6>
                                            <span class="font-12 text-nowrap d-block text-muted">
                                                    Листинг на Kucoin, торговалась на Lbank, Huobi. Чистая прибыль $123 (23%)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">01.01.2021 09:30</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-dark rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Предстоящий листинг</h6> <span
                                                class="font-12 text-nowrap d-block text-muted">Скоро, в 13:00, произойдет листинг монеты Shitcoin</span>
                                            <span class="font-12 text-nowrap d-block text-muted">25.05.2022 09:02</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i
                                                data-feather="airplay" class="text-white"></i></div>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Shitcoin/USDT</h6>
                                            <span class="font-12 text-nowrap d-block text-muted">
                                                    Листинг на Kucoin, торговалась на Lbank, Huobi. Чистая прибыль $123 (23%)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">01.01.2021 09:30</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Статистика за сегодня</h6>
                                            <span
                                                class="font-12 text-nowrap d-block text-muted text-truncate">Чистая прибыль составила $423 (32% от баланса на прошлые сутки)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">17.05.2022 23:59</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-warning rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Изменение настроек</h6>
                                            <span
                                                class="font-12 text-nowrap d-block text-muted text-truncate">Терминал был включен</span>
                                            <span class="font-12 text-nowrap d-block text-muted">23.05.2022 19:08</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i
                                                data-feather="airplay" class="text-white"></i></div>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Shitcoin/USDT</h6>
                                            <span class="font-12 text-nowrap d-block text-muted">
                                                    Листинг на Kucoin, торговалась на Lbank, Huobi. Чистая прибыль $123 (23%)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">01.01.2021 09:30</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-dark rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Предстоящий листинг</h6> <span
                                                class="font-12 text-nowrap d-block text-muted">Скоро, в 13:00, произойдет листинг монеты Shitcoin</span>
                                            <span class="font-12 text-nowrap d-block text-muted">25.05.2022 09:02</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i
                                                data-feather="airplay" class="text-white"></i></div>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Shitcoin/USDT</h6>
                                            <span class="font-12 text-nowrap d-block text-muted">
                                                    Листинг на Kucoin, торговалась на Lbank, Huobi. Чистая прибыль $123 (23%)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">01.01.2021 09:30</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Статистика за сегодня</h6>
                                            <span
                                                class="font-12 text-nowrap d-block text-muted text-truncate">Чистая прибыль составила $423 (32% от баланса на прошлые сутки)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">17.05.2022 23:59</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-warning rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Изменение настроек</h6>
                                            <span
                                                class="font-12 text-nowrap d-block text-muted text-truncate">Терминал был включен</span>
                                            <span class="font-12 text-nowrap d-block text-muted">23.05.2022 19:08</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i
                                                data-feather="airplay" class="text-white"></i></div>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Shitcoin/USDT</h6>
                                            <span class="font-12 text-nowrap d-block text-muted">
                                                    Листинг на Kucoin, торговалась на Lbank, Huobi. Чистая прибыль $123 (23%)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">01.01.2021 09:30</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-dark rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Предстоящий листинг</h6> <span
                                                class="font-12 text-nowrap d-block text-muted">Скоро, в 13:00, произойдет листинг монеты Shitcoin</span>
                                            <span class="font-12 text-nowrap d-block text-muted">25.05.2022 09:02</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i
                                                data-feather="airplay" class="text-white"></i></div>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Shitcoin/USDT</h6>
                                            <span class="font-12 text-nowrap d-block text-muted">
                                                    Листинг на Kucoin, торговалась на Lbank, Huobi. Чистая прибыль $123 (23%)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">01.01.2021 09:30</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Статистика за сегодня</h6>
                                            <span
                                                class="font-12 text-nowrap d-block text-muted text-truncate">Чистая прибыль составила $423 (32% от баланса на прошлые сутки)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">17.05.2022 23:59</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-warning rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Изменение настроек</h6>
                                            <span
                                                class="font-12 text-nowrap d-block text-muted text-truncate">Терминал был включен</span>
                                            <span class="font-12 text-nowrap d-block text-muted">23.05.2022 19:08</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i
                                                data-feather="airplay" class="text-white"></i></div>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Shitcoin/USDT</h6>
                                            <span class="font-12 text-nowrap d-block text-muted">
                                                    Листинг на Kucoin, торговалась на Lbank, Huobi. Чистая прибыль $123 (23%)</span>
                                            <span class="font-12 text-nowrap d-block text-muted">01.01.2021 09:30</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                       class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-dark rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                        <div class="d-inline-block v-middle pl-2 mr-3">
                                            <h6 class="message-title mb-0 mt-1">Предстоящий листинг</h6> <span
                                                class="font-12 text-nowrap d-block text-muted">Скоро, в 13:00, произойдет листинг монеты Shitcoin</span>
                                            <span class="font-12 text-nowrap d-block text-muted">25.05.2022 09:02</span>
                                        </div>
                                        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                    <strong>Посмотреть всю статистику</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="settings" class="svg-icon"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Терминал включен
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Терминал выключен
                                </label>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="javascript:void(0)" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                        <span class="d-none d-lg-inline-block">
                                	<span class="text-light">Stan</span>
                                	<i data-feather="chevron-down" class="svg-icon"></i>
                                </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item disabled text-muted" href="javascript:void(0)"><i data-feather="user"
                                                                                                  class="svg-icon mr-2 ml-1"></i>
                            Профиль</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                                                              class="svg-icon mr-2 ml-1"></i>
                            Выйти</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="page-wrapper bg-dark">
        <div class="container-fluid">
            <!-- <div class="card-group">
                <div class="card bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-light mb-1 w-100 text-truncate font-weight-medium"><sup class="set-doller">$</sup>18 306/14 121</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Общий/торговый баланс <br>(среднее за период)
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><sup class="set-doller">$</sup>10 123.32</h2>
                                    <span
                                        class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">+18.33%</span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Чистая прибыль <br>(всего за период)
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-light mb-1 font-weight-medium">432/532</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Реализовано листингов/ордеров <br>(за период)</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-light mb-1 font-weight-medium"><sup class="set-doller">$</sup>123.55</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Торговая комиссия <br>(за период)
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h4 class="card-title text-light">Общий баланс: $421 123.43</h4>
                            <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                            <ul class="list-style-none mb-0">
                                <li>
                                    <i class="fas fa-circle text-orange font-10 mr-2"></i>
                                    <span class="text-muted">kucoin.com</span>
                                    <span class="text-light float-right font-weight-medium">$2346</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">gate.io</span>
                                    <span class="text-light float-right font-weight-medium">$2108</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                    <span class="text-muted">mecx.com</span>
                                    <span class="text-light float-right font-weight-medium">$1204</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-secondary font-10 mr-2"></i>
                                    <span class="text-muted">lbank.info</span>
                                    <span class="text-light float-right font-weight-medium">$1234</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-light font-10 mr-2"></i>
                                    <span class="text-muted">huobi.com</span>
                                    <span class="text-light float-right font-weight-medium">$435</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">okex.com</span>
                                    <span class="text-light float-right font-weight-medium">$5234</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h4 class="card-title text-light">Торговый баланс: $21 123.43 <small>(5.1% от общего)</small></h4>
                            <div id="campaign-v3" class="mt-2" style="height:283px; width:100%;"></div>
                            <ul class="list-style-none mb-0">
                                <li>
                                    <i class="fas fa-circle text-orange font-10 mr-2"></i>
                                    <span class="text-muted">kucoin.com</span>
                                    <span class="text-light float-right font-weight-medium">$2346</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">gate.io</span>
                                    <span class="text-light float-right font-weight-medium">$2108</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                    <span class="text-muted">mecx.com</span>
                                    <span class="text-light float-right font-weight-medium">$1204</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-secondary font-10 mr-2"></i>
                                    <span class="text-muted">lbank.info</span>
                                    <span class="text-light float-right font-weight-medium">$1234</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-light font-10 mr-2"></i>
                                    <span class="text-muted">huobi.com</span>
                                    <span class="text-light float-right font-weight-medium">$435</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">okex.com</span>
                                    <span class="text-light float-right font-weight-medium">$5234</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h4 class="card-title text-light">Чистая прибыль: $1 123.43 <small>(5.1% от торгового)</small></h4>
                            <div class="net-income mt-4 position-relative" style="height:414px;"></div>
                            <ul class="list-inline text-center mt-5 mb-2">
                                <li class="list-inline-item text-muted font-italic">за выбранный период</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3 border-dark">
                                <li class="nav-item">
                                    <a href="#platforms" data-toggle="tab" aria-expanded="false" class="nav-link text-danger active">
                                        <span>Биржи</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#coins" data-toggle="tab" aria-expanded="false" class="nav-link text-danger ">
                                        <span>Листинги СЕХ</span>
                                    </a>
                                </li>
                                <form class="d-flex align-items-center flex-wrap ml-auto">
                                    <div class="customize-input mr-2 ml-1 d-flex align-items-center">
                                        <span class="mr-2">От </span>
                                        <input class="form-control custom-shadow custom-radius border-0" type="date" placeholder="Выберите дату" aria-label="Период">
                                    </div>
                                    <div class="customize-input d-flex align-items-center">
                                        <span class="mr-2">до </span>
                                        <input class="form-control custom-shadow custom-radius border-0" type="date" placeholder="Выберите дату" aria-label="Период">
                                    </div>
                                </form>
                            </ul>
                            <div class="table-responsive tab-content">
                                <table class="table no-wrap v-middle mb-0 tab-pane active" id="platforms">
                                    <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">Биржи (6) <br><small>(список подключенных бирж)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Общий баланс ($6533)<br><small>(максимальный за период)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Чистая прибыль ($43251)<br><small>(за период)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Проведено листингов (312)<br><small>(всего за период)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Отработано листингов (878)<br><small>(всего за период)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Ордеров (1100)<br><small>(всего за период)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Стоп-лоссов (897/84%)<br><small>(всего за период)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Тейк-профитов (123/16%)<br><small>(всего за период)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Комиссии тейк-профит ($123)<br><small>(всего за период)</small></th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-3 text-center">Торговые комиссии ($1244)<br><small>(всего за период)</small></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="d-flex no-block align-items-center dropdown sub-dropdown">
                                                <div class="mr-3 dropdown-toggle lighter-wrapper" type="button" id="kucoin_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/platforms/kucoin.svg" alt="" width="100" height="45" />
                                                    <div class="lighter"></div>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="kucoin_menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#kucoin-modal">Индивидуальные настройки</a>
                                                    <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Биржа включена
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Биржа выключена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-light mb-0 font-16 font-weight-medium"><a href="https://kucoin.com" class="text-light">kucoin.com</a></h5>
                                                    <span class="font-14">текущий статус: включен</span><br>
                                                    <span class="text-muted font-14">текущий баланс $1234</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">$3121</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">5</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">4</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">10</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">8 (80%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">1 (10%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">$123</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">$423</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4">
                                            <div class="d-flex no-block align-items-center dropdown sub-dropdown">
                                                <div class="mr-3 dropdown-toggle lighter-wrapper" type="button" id="gate_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/platforms/gate.svg" alt="" width="100" height="45" />
                                                    <div class="lighter lighter_off"></div>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gate_menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#gate-modal">Индивидуальные настройки</a>
                                                    <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Биржа включена
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Биржа выключена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-light mb-0 font-16 font-weight-medium"><a href="https://gate.io" class="text-light">gate.io</a></h5>
                                                    <span class="font-14">текущий статус: выключен</span><br>
                                                    <span class="text-muted font-14">текущий баланс $1234</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$3121</td>
                                        <td class="border-success text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">5</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">4</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">10</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">8 (80%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">1 (10%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$123</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$423</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4">
                                            <div class="d-flex no-block align-items-center dropdown sub-dropdown">
                                                <div class="mr-3 dropdown-toggle lighter-wrapper" type="button" id="mexc_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/platforms/mexc.svg" alt="" width="100" height="45" />
                                                    <div class="lighter lighter_inprocess"></div>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="mexc_menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#mexc-modal">Индивидуальные настройки</a>
                                                    <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Биржа включена
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Биржа выключена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-light mb-0 font-16 font-weight-medium"><a href="https://mexc.com" class="text-light">mexc.com</a></h5>
                                                    <span class="font-14">текущий статус: окончание</span><br>
                                                    <span class="text-muted font-14">текущий баланс $1234</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$3121</td>
                                        <td class="border-success text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">5</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">4</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">10</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">8 (80%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">1 (10%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$123</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$423</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4">
                                            <div class="d-flex no-block align-items-center dropdown sub-dropdown">
                                                <div class="mr-3 dropdown-toggle lighter-wrapper" type="button" id="lbank_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/platforms/lbank.svg" alt="" width="100" height="45" />
                                                    <div class="lighter "></div>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="lbank_menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#lbank-modal">Индивидуальные настройки</a>
                                                    <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Биржа включена
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Биржа выключена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-light mb-0 font-16 font-weight-medium"><a href="https://lbank.info" class="text-white">lbank.info</a></h5>
                                                    <span class="font-14">текущий статус: включен</span><br>
                                                    <span class="text-muted font-14">текущий баланс $1234</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$3121</td>
                                        <td class="border-success text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">5</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">4</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">10</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">8 (80%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">1 (10%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$123</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$423</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4">
                                            <div class="d-flex no-block align-items-center dropdown sub-dropdown">
                                                <div class="mr-3 dropdown-toggle lighter-wrapper" type="button" id="huobi_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/platforms/huobi.svg" alt="" width="100" height="45" />
                                                    <div class="lighter lighter_off"></div>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="huobi_menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#huobi-modal">Индивидуальные настройки</a>
                                                    <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Биржа включена
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Биржа выключена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-light mb-0 font-16 font-weight-medium"><a href="https://huobi.com" class="text-light">huobi.com</a></h5>
                                                    <span class="font-14">текущий статус: включен</span><br>
                                                    <span class="text-muted font-14">текущий баланс $1234</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$3121</td>
                                        <td class="border-success text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">5</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">4</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">10</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">8 (80%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">1 (10%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$123</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$423</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4">
                                            <div class="d-flex no-block align-items-center dropdown sub-dropdown">
                                                <div class="mr-3 dropdown-toggle lighter-wrapper" type="button" id="okx_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/platforms/okx.svg" alt="" width="100" height="45" />
                                                    <div class="lighter lighter_off"></div>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="okx_menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#okx-modal">Индивидуальные настройки</a>
                                                    <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Биржа включена
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Биржа выключена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-light mb-0 font-16 font-weight-medium"><a href="https://okx.com" class="text-light">okx.com</a></h5>
                                                    <span class="font-14">текущий статус: включен</span><br>
                                                    <span class="text-muted font-14">текущий баланс $1234</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$3121</td>
                                        <td class="border-success text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">5</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">4</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">10</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">8 (80%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">1 (10%)</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$123</td>
                                        <td class="text-muted px-2 py-4 font-14 text-center">$423</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table class="table no-wrap v-middle mb-0 tab-pane" id="coins">
                                    <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">Листинги СЕХ (12)</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Дата и время листинга</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Листинг на бирже</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Торговалась на</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Чистая прибыль</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Дополнительно</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Shitcoin/USDT</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2022 14:28</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance, <br>Huobi</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#orders-modal">Статистика ордеров</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Shitcoin/USDT</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2022 14:28</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance, <br>Huobi</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#orders-modal">Статистика ордеров</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Shitcoin/USDT</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2022 14:28</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance, <br>Huobi</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#orders-modal">Статистика ордеров</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Shitcoin/USDT</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2022 14:28</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance, <br>Huobi</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#orders-modal">Статистика ордеров</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Shitcoin/USDT</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2022 14:28</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance, <br>Huobi</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#orders-modal">Статистика ордеров</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Shitcoin/USDT</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2022 14:28</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance, <br>Huobi</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#orders-modal">Статистика ордеров</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Shitcoin/USDT</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2022 14:28</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance, <br>Huobi</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">$321 (9%)</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center font-weight-medium">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#orders-modal">Статистика ордеров</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center text-muted">
            All Rights Reserved by Stan's CT. Designed and Developed by <a class="text-danger"
                                                                           href="https://danielsolution.com">Explicit Gold</a>.
        </footer>
    </div>
</div>


<div id="kucoin-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-right: 14px;" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Настройки для Kucoin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Торговый баланс, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Деньги, на которые торгует бот"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="87">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Сумма позиции, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Сумма покупки монеты"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="8">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Стоп-лосс от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент снижения цены для продажи ниже цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="74">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Тейк-профит от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышения цены для продажи выше цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="12">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Ребай, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышение цены после продажи для повторной покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="432">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Финиш-тайм, сек</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Время после листинга, в течение которого происходит торговля"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="13">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <small class="text-danger">Изменять параметры можно 1 раз в сутки</small>
                <button type="button" class="btn btn-danger">Сохранить настройки</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="gate-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-right: 14px;" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Настройки для Gate</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Торговый баланс, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Деньги, на которые торгует бот"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="87">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Сумма позиции, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Сумма покупки монеты"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="8">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Стоп-лосс от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент снижения цены для продажи ниже цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="74">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Тейк-профит от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышения цены для продажи выше цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="12">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Ребай, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышение цены после продажи для повторной покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="432">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Финиш-тайм, сек</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Время после листинга, в течение которого происходит торговля"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="13">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <small class="text-danger">Изменять параметры можно 1 раз в сутки</small>
                <button type="button" class="btn btn-danger">Сохранить настройки</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="mexc-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-right: 14px;" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Настройки для Mexc</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Торговый баланс, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Деньги, на которые торгует бот"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="87">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Сумма позиции, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Сумма покупки монеты"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="8">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Стоп-лосс от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент снижения цены для продажи ниже цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="74">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Тейк-профит от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышения цены для продажи выше цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="12">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Ребай, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышение цены после продажи для повторной покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="432">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Финиш-тайм, сек</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Время после листинга, в течение которого происходит торговля"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="13">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <small class="text-danger">Изменять параметры можно 1 раз в сутки</small>
                <button type="button" class="btn btn-danger">Сохранить настройки</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="lbank-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-right: 14px;" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Настройки для Lbank</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Торговый баланс, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Деньги, на которые торгует бот"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="87">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Сумма позиции, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Сумма покупки монеты"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="8">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Стоп-лосс от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент снижения цены для продажи ниже цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="74">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Тейк-профит от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышения цены для продажи выше цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="12">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Ребай, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышение цены после продажи для повторной покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="432">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Финиш-тайм, сек</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Время после листинга, в течение которого происходит торговля"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="13">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <small class="text-danger">Изменять параметры можно 1 раз в сутки</small>
                <button type="button" class="btn btn-danger">Сохранить настройки</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="huobi-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-right: 14px;" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Настройки для Huobi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Торговый баланс, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Деньги, на которые торгует бот"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="87">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Сумма позиции, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Сумма покупки монеты"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="8">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Стоп-лосс от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент снижения цены для продажи ниже цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="74">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Тейк-профит от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышения цены для продажи выше цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="12">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Ребай, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышение цены после продажи для повторной покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="432">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Финиш-тайм, сек</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Время после листинга, в течение которого происходит торговля"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="13">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <small class="text-danger">Изменять параметры можно 1 раз в сутки</small>
                <button type="button" class="btn btn-danger">Сохранить настройки</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="okx-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-right: 14px;" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Настройки для OKX</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Торговый баланс, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Деньги, на которые торгует бот"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="87">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Сумма позиции, $</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Сумма покупки монеты"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="8">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Стоп-лосс от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент снижения цены для продажи ниже цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="74">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Тейк-профит от цены, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышения цены для продажи выше цены покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="12">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Ребай, %</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Процент повышение цены после продажи для повторной покупки"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="432">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="form-text text-muted">Финиш-тайм, сек</small>
                            <small class="badge badge-default badge-secondary form-text text-white float-right" data-toggle="tooltip" data-placement="bottom" title="Время после листинга, в течение которого происходит торговля"><i data-feather="info" class="svg-icon mr-1"></i>Подсказка</small>
                        </div>
                        <input type="number" class="form-control" aria-describedby="name" value="13">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <small class="text-danger">Изменять параметры можно 1 раз в сутки</small>
                <button type="button" class="btn btn-danger">Сохранить настройки</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<div id="orders-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-right: 14px;" aria-modal="true">
    <div class="modal-dialog modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Статистика ордеров для Shitcoin/USDT</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="max-width: 100%; overflow-x: auto">
                <table class="table no-wrap v-middle mb-0" id="coins">
                    <thead>
                    <tr class="border-0">
                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Время покупки/продажи</th>
                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Биржа торговли</th>
                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Сумма позиции</th>
                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Цена покупки/продажи</th>
                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Комиссия покупки/продажи</th>
                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Реализованный ордер</th>
                        <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Профит/убыток</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2021 00:00/ <br>01.01.2021 00:00</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">126 USD<br>423 SHC<br>2343 UAH</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">12 USD / 534 USD<br>12 SHC / 321 SHC<br>12 UAH / 321 UAH</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">63 USD / 68 USD<br>12 SHC / 321 SHC<br>12 UAH / 321 UAH</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Тейк профит</td>
                        <td class="border-top-0 text-success px-2 py-4 font-14 text-center">+ 123 USD<br>4231 SHC<br>432 UAH</td>
                    </tr>
                    <tr>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">01.01.2021 00:00/ <br>01.01.2021 00:00</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Binance</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">126 USD<br>423 SHC<br>2343 UAH</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">12 USD / 534 USD<br>12 SHC / 321 SHC<br>12 UAH / 321 UAH</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">63 USD / 68 USD<br>12 SHC / 321 SHC<br>12 UAH / 321 UAH</td>
                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">Тейк профит</td>
                        <td class="border-top-0 text-danger px-2 py-4 font-14 text-center">- 123 USD<br>4231 SHC<br>432 UAH</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Закрыть окно</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/app-style-switcher.js"></script>
<script src="dist/js/feather.min.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="assets/extra-libs/c3/d3.js"></script>
<script src="assets/extra-libs/c3/c3.js"></script>
<script src="assets/libs/chartist/dist/chartist.min.js"></script>
<script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<script>
    $(function () {
        var chart1 = c3.generate({
            bindto: '#campaign-v2',
            data: {
                columns: [
                    ['kucoin.com', 25],
                    ['gate.io', 15],
                    ['mecx.com', 10],
                    ['lbank.info', 15],
                    ['huobi.com', 15],
                    ['okex.com', 15]
                ],

                type: 'donut',
                tooltip: {
                    show: true
                }
            },
            donut: {
                label: {
                    show: false
                },
                title: 'Total: $421 123.43',
                width: 18
            },

            legend: {
                hide: true
            },
            color: {
                pattern: [
                    '#fb8c00',
                    '#ff4f70',
                    '#01caf1',
                    '#6c757d',
                    '#edf2f6',
                    '#22ca80'
                ]
            }
        });

        d3.select('#campaign-v2 .c3-chart-arcs-title').style('font-family', 'Rubik');

        var chart2 = c3.generate({
            bindto: '#campaign-v3',
            data: {
                columns: [
                    ['kucoin.com', 13],
                    ['gate.io', 24],
                    ['mecx.com', 15],
                    ['lbank.info', 5],
                    ['huobi.com', 15],
                    ['okex.com', 15]
                ],

                type: 'donut',
                tooltip: {
                    show: true
                }
            },
            donut: {
                label: {
                    show: false
                },
                title: 'Total: $21 123.43',
                width: 18
            },

            legend: {
                hide: true
            },
            color: {
                pattern: [
                    '#fb8c00',
                    '#ff4f70',
                    '#01caf1',
                    '#6c757d',
                    '#edf2f6',
                    '#22ca80'
                ]
            }
        });

        d3.select('#campaign-v3 .c3-chart-arcs-title').style('font-family', 'Rubik');

        // ==============================================================
        // income
        // ==============================================================
        var data = {
            labels: ['kuc 14%', 'gate­ 32%', 'mexc 12%', 'lbank 45%', 'huobi 21%', 'okex 32%'],
            series: [
                [534, 344, 123, 677, 53, 140],
            ]
        };

        var options = {
            axisX: {
                showGrid: false
            },
            seriesBarDistance: 1,
            chartPadding: {
                top: 15,
                right: 15,
                bottom: 5,
                left: 0
            },
            plugins: [
                Chartist.plugins.tooltip()
            ],
            width: '100%'
        };

        var responsiveOptions = [
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 5,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value[0];
                    }
                }
            }]
        ];
        new Chartist.Bar('.net-income', data, options, responsiveOptions);

    })
</script>
<style>
    .c3-tooltip-container{
        color: black;
    }
    .ct-bar:nth-child(1){
        stroke: #fb8c00 !important;
    }
    .ct-bar:nth-child(2){
        stroke: #ff4f70 !important;
    }
    .ct-bar:nth-child(3){
        stroke: #01caf1 !important;
    }
    .ct-bar:nth-child(4){
        stroke: #6c757d !important;
    }
    .ct-bar:nth-child(5){
        stroke: #edf2f6 !important;
    }
    .ct-bar:nth-child(6){
        stroke: #22ca80 !important;
    }
    .bg-dark{
        background-color: #0C091D !important;
    }
    .chartist-tooltip{
        background-color: #0C091D !important;
    }
    .chartist-tooltip::before{
        display: none;
    }
    .table td{
        border-top: 1px solid rgba(232, 238, 243, .4);
    }
    .lighter-wrapper{
        position: relative;
    }
    .lighter{
        position: absolute;
        animation: 2s lighter_anim infinite ease;
        z-index: 1;
        width: 60%;
        height: 50%;
        opacity: 0;
        filter: blur(30px);
        -webkit-filter: blur(30px);
        top: 25%;
        left: 30%;
        background-color: rgba(0, 226, 63, 0.7);
    }
    .lighter.lighter_off{
        animation: 3s lighter_anim infinite ease;
        background-color: rgba(226, 0, 198, 0.7);
    }
    .lighter.lighter_inprocess{
        animation: 1s lighter_anim infinite ease;
        background-color: rgba(233, 77, 16, 1);
    }
    @keyframes lighter_anim {
        0% {opacity: 1}
        50% {opacity: 0}
        100% {opacity: 1}
    }
</style>
</body>

</html>


