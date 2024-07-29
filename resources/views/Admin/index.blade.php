@extends('Admin.Layouts.adminApp')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                <p class="mb-4">
                                    You have done <span class="fw-medium">72%</span> more sales today. Check your new
                                    badge in
                                    your profile.
                                </p>

                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../Admin/assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../Admin/assets/img/icons/unicons/chart-success.png"
                                            alt="chart success" class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-medium d-block mb-1">Profit</span>
                                <h3 class="card-title mb-2">$12,628</h3>
                                <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../Admin/assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span>Sales</span>
                                <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                                <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Revenue -->
            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-8">
                            <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                            <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                                <div id="apexchartskzfwqme6"
                                    class="apexcharts-canvas apexchartskzfwqme6 apexcharts-theme-light"
                                    style="width: 595px; height: 300px;"><svg id="SvgjsSvg1696" width="595" height="300"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="595" height="300">
                                            <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                    data:collapsed="false" style="margin: 2px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                        style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="2021" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                    data:collapsed="false" style="margin: 2px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                        style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="2020" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g id="SvgjsG1698" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(53.796875, 51)">
                                            <defs id="SvgjsDefs1697">
                                                <linearGradient id="SvgjsLinearGradient1702" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1703" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1704" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1705" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskkzfwqme6">
                                                    <rect id="SvgjsRect1707" width="531.203125" height="223.73" x="-5"
                                                        y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskkzfwqme6"></clipPath>
                                                <clipPath id="nonForecastMaskkzfwqme6"></clipPath>
                                                <clipPath id="gridRectMarkerMaskkzfwqme6">
                                                    <rect id="SvgjsRect1708" width="525.203125" height="221.73" x="-2"
                                                        y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1706" width="24.571004464285714" height="217.73" x="0"
                                                y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient1702)" class="apexcharts-xcrosshairs"
                                                y2="217.73" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1728" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1729" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1731"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="37.228794642857146" y="246.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1732">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText1734"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="111.68638392857144" y="246.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1735">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1737"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="186.14397321428575" y="246.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1738">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1740"
                                                        font-family="Helvetica, Arial, sans-serif" x="260.6015625"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1741">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1743"
                                                        font-family="Helvetica, Arial, sans-serif" x="335.0591517857143"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1744">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1746"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="409.51674107142856" y="246.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1747">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1749"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="483.97433035714283" y="246.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1750">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1765" class="apexcharts-grid">
                                                <g id="SvgjsG1766" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1768" x1="0" y1="0" x2="521.203125" y2="0"
                                                        stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1769" x1="0" y1="43.546" x2="521.203125"
                                                        y2="43.546" stroke="#eceef1" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1770" x1="0" y1="87.092" x2="521.203125"
                                                        y2="87.092" stroke="#eceef1" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1771" x1="0" y1="130.638" x2="521.203125"
                                                        y2="130.638" stroke="#eceef1" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1772" x1="0" y1="174.184" x2="521.203125"
                                                        y2="174.184" stroke="#eceef1" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1773" x1="0" y1="217.73" x2="521.203125"
                                                        y2="217.73" stroke="#eceef1" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1767" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1775" x1="0" y1="217.73" x2="521.203125" y2="217.73"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                                <line id="SvgjsLine1774" x1="0" y1="1" x2="0" y2="217.73"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1709" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1710" class="apexcharts-series" seriesName="2021" rel="1"
                                                    data:realIndex="0">
                                                    <path id="SvgjsPath1712"
                                                        d="M 24.94329241071429 118.638L 24.94329241071429 64.25520000000002Q 24.94329241071429 52.255200000000016 36.94329241071429 52.255200000000016L 31.514296875 52.255200000000016Q 43.514296875 52.255200000000016 43.514296875 64.25520000000002L 43.514296875 64.25520000000002L 43.514296875 118.638Q 43.514296875 130.638 31.514296875 130.638L 36.94329241071429 130.638Q 24.94329241071429 130.638 24.94329241071429 118.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 24.94329241071429 118.638L 24.94329241071429 64.25520000000002Q 24.94329241071429 52.255200000000016 36.94329241071429 52.255200000000016L 31.514296875 52.255200000000016Q 43.514296875 52.255200000000016 43.514296875 64.25520000000002L 43.514296875 64.25520000000002L 43.514296875 118.638Q 43.514296875 130.638 31.514296875 130.638L 36.94329241071429 130.638Q 24.94329241071429 130.638 24.94329241071429 118.638z"
                                                        pathFrom="M 24.94329241071429 118.638L 24.94329241071429 118.638L 43.514296875 118.638L 43.514296875 118.638L 43.514296875 118.638L 43.514296875 118.638L 43.514296875 118.638L 24.94329241071429 118.638"
                                                        cy="52.255200000000016" cx="96.40088169642858" j="0" val="18"
                                                        barHeight="78.38279999999999" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1713"
                                                        d="M 99.40088169642858 118.638L 99.40088169642858 112.15580000000001Q 99.40088169642858 100.15580000000001 111.40088169642858 100.15580000000001L 105.97188616071429 100.15580000000001Q 117.97188616071429 100.15580000000001 117.97188616071429 112.15580000000001L 117.97188616071429 112.15580000000001L 117.97188616071429 118.638Q 117.97188616071429 130.638 105.97188616071429 130.638L 111.40088169642858 130.638Q 99.40088169642858 130.638 99.40088169642858 118.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 99.40088169642858 118.638L 99.40088169642858 112.15580000000001Q 99.40088169642858 100.15580000000001 111.40088169642858 100.15580000000001L 105.97188616071429 100.15580000000001Q 117.97188616071429 100.15580000000001 117.97188616071429 112.15580000000001L 117.97188616071429 112.15580000000001L 117.97188616071429 118.638Q 117.97188616071429 130.638 105.97188616071429 130.638L 111.40088169642858 130.638Q 99.40088169642858 130.638 99.40088169642858 118.638z"
                                                        pathFrom="M 99.40088169642858 118.638L 99.40088169642858 118.638L 117.97188616071429 118.638L 117.97188616071429 118.638L 117.97188616071429 118.638L 117.97188616071429 118.638L 117.97188616071429 118.638L 99.40088169642858 118.638"
                                                        cy="100.15580000000001" cx="170.85847098214288" j="1" val="7"
                                                        barHeight="30.482199999999995" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1714"
                                                        d="M 173.85847098214288 118.638L 173.85847098214288 77.31900000000002Q 173.85847098214288 65.31900000000002 185.85847098214288 65.31900000000002L 180.4294754464286 65.31900000000002Q 192.4294754464286 65.31900000000002 192.4294754464286 77.31900000000002L 192.4294754464286 77.31900000000002L 192.4294754464286 118.638Q 192.4294754464286 130.638 180.4294754464286 130.638L 185.85847098214288 130.638Q 173.85847098214288 130.638 173.85847098214288 118.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 173.85847098214288 118.638L 173.85847098214288 77.31900000000002Q 173.85847098214288 65.31900000000002 185.85847098214288 65.31900000000002L 180.4294754464286 65.31900000000002Q 192.4294754464286 65.31900000000002 192.4294754464286 77.31900000000002L 192.4294754464286 77.31900000000002L 192.4294754464286 118.638Q 192.4294754464286 130.638 180.4294754464286 130.638L 185.85847098214288 130.638Q 173.85847098214288 130.638 173.85847098214288 118.638z"
                                                        pathFrom="M 173.85847098214288 118.638L 173.85847098214288 118.638L 192.4294754464286 118.638L 192.4294754464286 118.638L 192.4294754464286 118.638L 192.4294754464286 118.638L 192.4294754464286 118.638L 173.85847098214288 118.638"
                                                        cy="65.31900000000002" cx="245.31606026785715" j="2" val="15"
                                                        barHeight="65.31899999999999" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1715"
                                                        d="M 248.31606026785715 118.638L 248.31606026785715 16.35460000000002Q 248.31606026785715 4.354600000000019 260.31606026785715 4.354600000000019L 254.88706473214285 4.354600000000019Q 266.88706473214285 4.354600000000019 266.88706473214285 16.35460000000002L 266.88706473214285 16.35460000000002L 266.88706473214285 118.638Q 266.88706473214285 130.638 254.88706473214285 130.638L 260.31606026785715 130.638Q 248.31606026785715 130.638 248.31606026785715 118.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 248.31606026785715 118.638L 248.31606026785715 16.35460000000002Q 248.31606026785715 4.354600000000019 260.31606026785715 4.354600000000019L 254.88706473214285 4.354600000000019Q 266.88706473214285 4.354600000000019 266.88706473214285 16.35460000000002L 266.88706473214285 16.35460000000002L 266.88706473214285 118.638Q 266.88706473214285 130.638 254.88706473214285 130.638L 260.31606026785715 130.638Q 248.31606026785715 130.638 248.31606026785715 118.638z"
                                                        pathFrom="M 248.31606026785715 118.638L 248.31606026785715 118.638L 266.88706473214285 118.638L 266.88706473214285 118.638L 266.88706473214285 118.638L 266.88706473214285 118.638L 266.88706473214285 118.638L 248.31606026785715 118.638"
                                                        cy="4.354600000000019" cx="319.77364955357143" j="3" val="29"
                                                        barHeight="126.28339999999999" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1716"
                                                        d="M 322.77364955357143 118.638L 322.77364955357143 64.25520000000002Q 322.77364955357143 52.255200000000016 334.77364955357143 52.255200000000016L 329.3446540178571 52.255200000000016Q 341.3446540178571 52.255200000000016 341.3446540178571 64.25520000000002L 341.3446540178571 64.25520000000002L 341.3446540178571 118.638Q 341.3446540178571 130.638 329.3446540178571 130.638L 334.77364955357143 130.638Q 322.77364955357143 130.638 322.77364955357143 118.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 322.77364955357143 118.638L 322.77364955357143 64.25520000000002Q 322.77364955357143 52.255200000000016 334.77364955357143 52.255200000000016L 329.3446540178571 52.255200000000016Q 341.3446540178571 52.255200000000016 341.3446540178571 64.25520000000002L 341.3446540178571 64.25520000000002L 341.3446540178571 118.638Q 341.3446540178571 130.638 329.3446540178571 130.638L 334.77364955357143 130.638Q 322.77364955357143 130.638 322.77364955357143 118.638z"
                                                        pathFrom="M 322.77364955357143 118.638L 322.77364955357143 118.638L 341.3446540178571 118.638L 341.3446540178571 118.638L 341.3446540178571 118.638L 341.3446540178571 118.638L 341.3446540178571 118.638L 322.77364955357143 118.638"
                                                        cy="52.255200000000016" cx="394.2312388392857" j="4" val="18"
                                                        barHeight="78.38279999999999" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1717"
                                                        d="M 397.2312388392857 118.638L 397.2312388392857 90.3828Q 397.2312388392857 78.3828 409.2312388392857 78.3828L 403.8022433035714 78.3828Q 415.8022433035714 78.3828 415.8022433035714 90.3828L 415.8022433035714 90.3828L 415.8022433035714 118.638Q 415.8022433035714 130.638 403.8022433035714 130.638L 409.2312388392857 130.638Q 397.2312388392857 130.638 397.2312388392857 118.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 397.2312388392857 118.638L 397.2312388392857 90.3828Q 397.2312388392857 78.3828 409.2312388392857 78.3828L 403.8022433035714 78.3828Q 415.8022433035714 78.3828 415.8022433035714 90.3828L 415.8022433035714 90.3828L 415.8022433035714 118.638Q 415.8022433035714 130.638 403.8022433035714 130.638L 409.2312388392857 130.638Q 397.2312388392857 130.638 397.2312388392857 118.638z"
                                                        pathFrom="M 397.2312388392857 118.638L 397.2312388392857 118.638L 415.8022433035714 118.638L 415.8022433035714 118.638L 415.8022433035714 118.638L 415.8022433035714 118.638L 415.8022433035714 118.638L 397.2312388392857 118.638"
                                                        cy="78.3828" cx="468.688828125" j="5" val="12"
                                                        barHeight="52.255199999999995" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1718"
                                                        d="M 471.688828125 118.638L 471.688828125 103.44660000000002Q 471.688828125 91.44660000000002 483.688828125 91.44660000000002L 478.2598325892857 91.44660000000002Q 490.2598325892857 91.44660000000002 490.2598325892857 103.44660000000002L 490.2598325892857 103.44660000000002L 490.2598325892857 118.638Q 490.2598325892857 130.638 478.2598325892857 130.638L 483.688828125 130.638Q 471.688828125 130.638 471.688828125 118.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 471.688828125 118.638L 471.688828125 103.44660000000002Q 471.688828125 91.44660000000002 483.688828125 91.44660000000002L 478.2598325892857 91.44660000000002Q 490.2598325892857 91.44660000000002 490.2598325892857 103.44660000000002L 490.2598325892857 103.44660000000002L 490.2598325892857 118.638Q 490.2598325892857 130.638 478.2598325892857 130.638L 483.688828125 130.638Q 471.688828125 130.638 471.688828125 118.638z"
                                                        pathFrom="M 471.688828125 118.638L 471.688828125 118.638L 490.2598325892857 118.638L 490.2598325892857 118.638L 490.2598325892857 118.638L 490.2598325892857 118.638L 490.2598325892857 118.638L 471.688828125 118.638"
                                                        cy="91.44660000000002" cx="543.1464174107143" j="6" val="9"
                                                        barHeight="39.191399999999994" barWidth="24.571004464285714">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1719" class="apexcharts-series" seriesName="2020" rel="2"
                                                    data:realIndex="1">
                                                    <path id="SvgjsPath1721"
                                                        d="M 24.94329241071429 154.638L 24.94329241071429 187.24779999999998Q 24.94329241071429 199.24779999999998 36.94329241071429 199.24779999999998L 31.514296875 199.24779999999998Q 43.514296875 199.24779999999998 43.514296875 187.24779999999998L 43.514296875 187.24779999999998L 43.514296875 154.638Q 43.514296875 142.638 31.514296875 142.638L 36.94329241071429 142.638Q 24.94329241071429 142.638 24.94329241071429 154.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 24.94329241071429 154.638L 24.94329241071429 187.24779999999998Q 24.94329241071429 199.24779999999998 36.94329241071429 199.24779999999998L 31.514296875 199.24779999999998Q 43.514296875 199.24779999999998 43.514296875 187.24779999999998L 43.514296875 187.24779999999998L 43.514296875 154.638Q 43.514296875 142.638 31.514296875 142.638L 36.94329241071429 142.638Q 24.94329241071429 142.638 24.94329241071429 154.638z"
                                                        pathFrom="M 24.94329241071429 154.638L 24.94329241071429 154.638L 43.514296875 154.638L 43.514296875 154.638L 43.514296875 154.638L 43.514296875 154.638L 43.514296875 154.638L 24.94329241071429 154.638"
                                                        cy="175.24779999999998" cx="96.40088169642858" j="0" val="-13"
                                                        barHeight="-56.60979999999999" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1722"
                                                        d="M 99.40088169642858 154.638L 99.40088169642858 209.0208Q 99.40088169642858 221.0208 111.40088169642858 221.0208L 105.97188616071429 221.0208Q 117.97188616071429 221.0208 117.97188616071429 209.0208L 117.97188616071429 209.0208L 117.97188616071429 154.638Q 117.97188616071429 142.638 105.97188616071429 142.638L 111.40088169642858 142.638Q 99.40088169642858 142.638 99.40088169642858 154.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 99.40088169642858 154.638L 99.40088169642858 209.0208Q 99.40088169642858 221.0208 111.40088169642858 221.0208L 105.97188616071429 221.0208Q 117.97188616071429 221.0208 117.97188616071429 209.0208L 117.97188616071429 209.0208L 117.97188616071429 154.638Q 117.97188616071429 142.638 105.97188616071429 142.638L 111.40088169642858 142.638Q 99.40088169642858 142.638 99.40088169642858 154.638z"
                                                        pathFrom="M 99.40088169642858 154.638L 99.40088169642858 154.638L 117.97188616071429 154.638L 117.97188616071429 154.638L 117.97188616071429 154.638L 117.97188616071429 154.638L 117.97188616071429 154.638L 99.40088169642858 154.638"
                                                        cy="197.0208" cx="170.85847098214288" j="1" val="-18"
                                                        barHeight="-78.38279999999999" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1723"
                                                        d="M 173.85847098214288 154.638L 173.85847098214288 169.8294Q 173.85847098214288 181.8294 185.85847098214288 181.8294L 180.4294754464286 181.8294Q 192.4294754464286 181.8294 192.4294754464286 169.8294L 192.4294754464286 169.8294L 192.4294754464286 154.638Q 192.4294754464286 142.638 180.4294754464286 142.638L 185.85847098214288 142.638Q 173.85847098214288 142.638 173.85847098214288 154.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 173.85847098214288 154.638L 173.85847098214288 169.8294Q 173.85847098214288 181.8294 185.85847098214288 181.8294L 180.4294754464286 181.8294Q 192.4294754464286 181.8294 192.4294754464286 169.8294L 192.4294754464286 169.8294L 192.4294754464286 154.638Q 192.4294754464286 142.638 180.4294754464286 142.638L 185.85847098214288 142.638Q 173.85847098214288 142.638 173.85847098214288 154.638z"
                                                        pathFrom="M 173.85847098214288 154.638L 173.85847098214288 154.638L 192.4294754464286 154.638L 192.4294754464286 154.638L 192.4294754464286 154.638L 192.4294754464286 154.638L 192.4294754464286 154.638L 173.85847098214288 154.638"
                                                        cy="157.8294" cx="245.31606026785715" j="2" val="-9"
                                                        barHeight="-39.191399999999994" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1724"
                                                        d="M 248.31606026785715 154.638L 248.31606026785715 191.6024Q 248.31606026785715 203.6024 260.31606026785715 203.6024L 254.88706473214285 203.6024Q 266.88706473214285 203.6024 266.88706473214285 191.6024L 266.88706473214285 191.6024L 266.88706473214285 154.638Q 266.88706473214285 142.638 254.88706473214285 142.638L 260.31606026785715 142.638Q 248.31606026785715 142.638 248.31606026785715 154.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 248.31606026785715 154.638L 248.31606026785715 191.6024Q 248.31606026785715 203.6024 260.31606026785715 203.6024L 254.88706473214285 203.6024Q 266.88706473214285 203.6024 266.88706473214285 191.6024L 266.88706473214285 191.6024L 266.88706473214285 154.638Q 266.88706473214285 142.638 254.88706473214285 142.638L 260.31606026785715 142.638Q 248.31606026785715 142.638 248.31606026785715 154.638z"
                                                        pathFrom="M 248.31606026785715 154.638L 248.31606026785715 154.638L 266.88706473214285 154.638L 266.88706473214285 154.638L 266.88706473214285 154.638L 266.88706473214285 154.638L 266.88706473214285 154.638L 248.31606026785715 154.638"
                                                        cy="179.6024" cx="319.77364955357143" j="3" val="-14"
                                                        barHeight="-60.96439999999999" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1725"
                                                        d="M 322.77364955357143 154.638L 322.77364955357143 152.411Q 322.77364955357143 164.411 334.77364955357143 164.411L 329.3446540178571 164.411Q 341.3446540178571 164.411 341.3446540178571 152.411L 341.3446540178571 152.411L 341.3446540178571 154.638Q 341.3446540178571 142.638 329.3446540178571 142.638L 334.77364955357143 142.638Q 322.77364955357143 142.638 322.77364955357143 154.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 322.77364955357143 154.638L 322.77364955357143 152.411Q 322.77364955357143 164.411 334.77364955357143 164.411L 329.3446540178571 164.411Q 341.3446540178571 164.411 341.3446540178571 152.411L 341.3446540178571 152.411L 341.3446540178571 154.638Q 341.3446540178571 142.638 329.3446540178571 142.638L 334.77364955357143 142.638Q 322.77364955357143 142.638 322.77364955357143 154.638z"
                                                        pathFrom="M 322.77364955357143 154.638L 322.77364955357143 154.638L 341.3446540178571 154.638L 341.3446540178571 154.638L 341.3446540178571 154.638L 341.3446540178571 154.638L 341.3446540178571 154.638L 322.77364955357143 154.638"
                                                        cy="140.411" cx="394.2312388392857" j="4" val="-5"
                                                        barHeight="-21.772999999999996" barWidth="24.571004464285714">
                                                    </path>
                                                    <path id="SvgjsPath1726"
                                                        d="M 397.2312388392857 154.638L 397.2312388392857 204.6662Q 397.2312388392857 216.6662 409.2312388392857 216.6662L 403.8022433035714 216.6662Q 415.8022433035714 216.6662 415.8022433035714 204.6662L 415.8022433035714 204.6662L 415.8022433035714 154.638Q 415.8022433035714 142.638 403.8022433035714 142.638L 409.2312388392857 142.638Q 397.2312388392857 142.638 397.2312388392857 154.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 397.2312388392857 154.638L 397.2312388392857 204.6662Q 397.2312388392857 216.6662 409.2312388392857 216.6662L 403.8022433035714 216.6662Q 415.8022433035714 216.6662 415.8022433035714 204.6662L 415.8022433035714 204.6662L 415.8022433035714 154.638Q 415.8022433035714 142.638 403.8022433035714 142.638L 409.2312388392857 142.638Q 397.2312388392857 142.638 397.2312388392857 154.638z"
                                                        pathFrom="M 397.2312388392857 154.638L 397.2312388392857 154.638L 415.8022433035714 154.638L 415.8022433035714 154.638L 415.8022433035714 154.638L 415.8022433035714 154.638L 415.8022433035714 154.638L 397.2312388392857 154.638"
                                                        cy="192.6662" cx="468.688828125" j="5" val="-17"
                                                        barHeight="-74.0282" barWidth="24.571004464285714"></path>
                                                    <path id="SvgjsPath1727"
                                                        d="M 471.688828125 154.638L 471.688828125 195.957Q 471.688828125 207.957 483.688828125 207.957L 478.2598325892857 207.957Q 490.2598325892857 207.957 490.2598325892857 195.957L 490.2598325892857 195.957L 490.2598325892857 154.638Q 490.2598325892857 142.638 478.2598325892857 142.638L 483.688828125 142.638Q 471.688828125 142.638 471.688828125 154.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskkzfwqme6)"
                                                        pathTo="M 471.688828125 154.638L 471.688828125 195.957Q 471.688828125 207.957 483.688828125 207.957L 478.2598325892857 207.957Q 490.2598325892857 207.957 490.2598325892857 195.957L 490.2598325892857 195.957L 490.2598325892857 154.638Q 490.2598325892857 142.638 478.2598325892857 142.638L 483.688828125 142.638Q 471.688828125 142.638 471.688828125 154.638z"
                                                        pathFrom="M 471.688828125 154.638L 471.688828125 154.638L 490.2598325892857 154.638L 490.2598325892857 154.638L 490.2598325892857 154.638L 490.2598325892857 154.638L 490.2598325892857 154.638L 471.688828125 154.638"
                                                        cy="183.957" cx="543.1464174107143" j="6" val="-15"
                                                        barHeight="-65.31899999999999" barWidth="24.571004464285714">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1711" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG1720" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            </g>
                                            <line id="SvgjsLine1776" x1="0" y1="0" x2="521.203125" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1777" x1="0" y1="0" x2="521.203125" y2="0"
                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1778" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1779" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1780" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1751" class="apexcharts-yaxis" rel="0"
                                            transform="translate(15.796875, 0)">
                                            <g id="SvgjsG1752" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1753"
                                                    font-family="Helvetica, Arial, sans-serif" x="20" y="52.5"
                                                    text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1754">30</tspan>
                                                    <title>30</title>
                                                </text><text id="SvgjsText1755"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="96.04599999999999" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1756">20</tspan>
                                                    <title>20</title>
                                                </text><text id="SvgjsText1757"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="139.59199999999998" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1758">10</tspan>
                                                    <title>10</title>
                                                </text><text id="SvgjsText1759"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="183.13799999999998" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1760">0</tspan>
                                                    <title>0</title>
                                                </text><text id="SvgjsText1761"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="226.68399999999997" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1762">-10</tspan>
                                                    <title>-10</title>
                                                </text><text id="SvgjsText1763"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="270.22999999999996" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1764">-20</tspan>
                                                    <title>-20</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1699" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(3, 195, 236);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 612px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                            id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            2022
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId"
                                            style="">
                                            <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="growthChart" style="min-height: 154.875px;">
                                <div id="apexchartswba09yvo"
                                    class="apexcharts-canvas apexchartswba09yvo apexcharts-theme-light"
                                    style="width: 306px; height: 154.875px;"><svg id="SvgjsSvg1781" width="306"
                                        height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1783" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(46, -25)">
                                            <defs id="SvgjsDefs1782">
                                                <clipPath id="gridRectMaskwba09yvo">
                                                    <rect id="SvgjsRect1785" width="222" height="285" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskwba09yvo"></clipPath>
                                                <clipPath id="nonForecastMaskwba09yvo"></clipPath>
                                                <clipPath id="gridRectMarkerMaskwba09yvo">
                                                    <rect id="SvgjsRect1786" width="220" height="287" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1791" x1="1" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1792" stop-opacity="1"
                                                        stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1793" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1794" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1802" x1="1" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1803" stop-opacity="1"
                                                        stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1804" stop-opacity="0.6"
                                                        stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1805" stop-opacity="0.6"
                                                        stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1787" class="apexcharts-radialbar">
                                                <g id="SvgjsG1788">
                                                    <g id="SvgjsG1789" class="apexcharts-tracks">
                                                        <g id="SvgjsG1790"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="17.357317073170734"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1796">
                                                        <g id="SvgjsG1801"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Growth" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1806"
                                                                d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="url(#SvgjsLinearGradient1802)"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="17.357317073170734" stroke-dasharray="5"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="234" data:value="78" index="0" j="0"
                                                                data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle1797" r="54.65121951219512" cx="108"
                                                            cy="108" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                        <g id="SvgjsG1798" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText1799" font-family="Public Sans" x="108"
                                                                y="123" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="15px" font-weight="500" fill="#566a7f"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                                id="SvgjsText1800" font-family="Public Sans" x="108"
                                                                y="99" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="22px" font-weight="500" fill="#566a7f"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: &quot;Public Sans&quot;;">78%</text>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1807" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1808" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1784" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="text-center fw-medium pt-3 mb-2">62% Company Growth</div>

                            <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-primary p-2"><i
                                                class="bx bx-dollar text-primary"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2022</small>
                                        <h6 class="mb-0">$32.5k</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-info p-2"><i
                                                class="bx bx-wallet text-info"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2021</small>
                                        <h6 class="mb-0">$41.2k</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 307px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Revenue -->
            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../Admin/assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block mb-1">Payments</span>
                                <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i>
                                    -14.82%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../Admin/assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-medium d-block mb-1">Transactions</span>
                                <h3 class="card-title mb-2">$14,857</h3>
                                <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                            </div>
                        </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                    style="position: relative;">
                                    <div
                                        class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2">Profile Report</h5>
                                            <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                        </div>
                                        <div class="mt-sm-auto">
                                            <small class="text-success text-nowrap fw-medium"><i
                                                    class="bx bx-chevron-up"></i> 68.2%</small>
                                            <h3 class="mb-0">$84,686k</h3>
                                        </div>
                                    </div>
                                    <div id="profileReportChart" style="min-height: 80px;">
                                        <div id="apexcharts82zv03yvh"
                                            class="apexcharts-canvas apexcharts82zv03yvh apexcharts-theme-light"
                                            style="width: 260px; height: 80px;"><svg id="SvgjsSvg1810" width="260"
                                                height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1812" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1811">
                                                        <clipPath id="gridRectMask82zv03yvh">
                                                            <rect id="SvgjsRect1817" width="261" height="85" x="-4.5"
                                                                y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask82zv03yvh"></clipPath>
                                                        <clipPath id="nonForecastMask82zv03yvh"></clipPath>
                                                        <clipPath id="gridRectMarkerMask82zv03yvh">
                                                            <rect id="SvgjsRect1818" width="256" height="84" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <filter id="SvgjsFilter1824" filterUnits="userSpaceOnUse"
                                                            width="200%" height="200%" x="-50%" y="-50%">
                                                            <feFlood id="SvgjsFeFlood1825" flood-color="#ffab00"
                                                                flood-opacity="0.15" result="SvgjsFeFlood1825Out"
                                                                in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1826"
                                                                in="SvgjsFeFlood1825Out" in2="SourceAlpha" operator="in"
                                                                result="SvgjsFeComposite1826Out"></feComposite>
                                                            <feOffset id="SvgjsFeOffset1827" dx="5" dy="10"
                                                                result="SvgjsFeOffset1827Out"
                                                                in="SvgjsFeComposite1826Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1828"
                                                                stdDeviation="3 " result="SvgjsFeGaussianBlur1828Out"
                                                                in="SvgjsFeOffset1827Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1829" result="SvgjsFeMerge1829Out"
                                                                in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1830"
                                                                    in="SvgjsFeGaussianBlur1828Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1831"
                                                                    in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1832" in="SourceGraphic"
                                                                in2="SvgjsFeMerge1829Out" mode="normal"
                                                                result="SvgjsFeBlend1832Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <line id="SvgjsLine1816" x1="0" y1="0" x2="0" y2="80"
                                                        stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80"
                                                        fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG1833" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1834" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1842" class="apexcharts-grid">
                                                        <g id="SvgjsG1843" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1845" x1="0" y1="0" x2="252" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1846" x1="0" y1="20" x2="252" y2="20"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1847" x1="0" y1="40" x2="252" y2="40"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1848" x1="0" y1="60" x2="252" y2="60"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1849" x1="0" y1="80" x2="252" y2="80"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1844" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1851" x1="0" y1="80" x2="252" y2="80"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1850" x1="0" y1="1" x2="0" y2="80"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1819"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1820" class="apexcharts-series"
                                                            seriesName="seriesx1" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1823"
                                                                d="M 0 76C 17.64 76 32.760000000000005 12 50.400000000000006 12C 68.04 12 83.16000000000001 62 100.80000000000001 62C 118.44000000000001 62 133.56 22 151.20000000000002 22C 168.84000000000003 22 183.96000000000004 38 201.60000000000002 38C 219.24 38 234.36 6 252 6"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="5"
                                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                                clip-path="url(#gridRectMask82zv03yvh)"
                                                                filter="url(#SvgjsFilter1824)"
                                                                pathTo="M 0 76C 17.64 76 32.760000000000005 12 50.400000000000006 12C 68.04 12 83.16000000000001 62 100.80000000000001 62C 118.44000000000001 62 133.56 22 151.20000000000002 22C 168.84000000000003 22 183.96000000000004 38 201.60000000000002 38C 219.24 38 234.36 6 252 6"
                                                                pathFrom="M -1 120L -1 120L 50.400000000000006 120L 100.80000000000001 120L 151.20000000000002 120L 201.60000000000002 120L 252 120">
                                                            </path>
                                                            <g id="SvgjsG1821" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1857" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker whvmw3dj2 no-pointer-events"
                                                                        stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1822" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1852" x1="0" y1="0" x2="252" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1853" x1="0" y1="0" x2="252" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1854" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1855" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1856" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1815" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG1841" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1813" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 171, 0);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 398px; height: 117px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Order Statistics -->
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Order Statistics</h5>
                            <small class="text-muted">42.82k Total Sales</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2">8,258</h2>
                                <span>Total Orders</span>
                            </div>
                            <div id="orderStatisticsChart" style="min-height: 137.55px;">
                                <div id="apexcharts4gepls36"
                                    class="apexcharts-canvas apexcharts4gepls36 apexcharts-theme-light"
                                    style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg1858" width="130"
                                        height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1860" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-7, 0)">
                                            <defs id="SvgjsDefs1859">
                                                <clipPath id="gridRectMask4gepls36">
                                                    <rect id="SvgjsRect1862" width="150" height="173" x="-4.5" y="-2.5"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask4gepls36"></clipPath>
                                                <clipPath id="nonForecastMask4gepls36"></clipPath>
                                                <clipPath id="gridRectMarkerMask4gepls36">
                                                    <rect id="SvgjsRect1863" width="145" height="172" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1864" class="apexcharts-pie">
                                                <g id="SvgjsG1865" transform="translate(0, 0) scale(1)">
                                                    <circle id="SvgjsCircle1866" r="44.835365853658544" cx="70.5"
                                                        cy="70.5" fill="transparent"></circle>
                                                    <g id="SvgjsG1867" class="apexcharts-slices">
                                                        <g id="SvgjsG1868"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Electronic" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1869"
                                                                d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                fill="rgba(105,108,255,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="5" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                index="0" j="0" data:angle="153" data:startAngle="0"
                                                                data:strokeWidth="5" data:value="85"
                                                                data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1870"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Sports" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1871"
                                                                d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                fill="rgba(133,146,163,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="5" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                index="0" j="1" data:angle="27" data:startAngle="153"
                                                                data:strokeWidth="5" data:value="15"
                                                                data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1872"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Decor" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath1873"
                                                                d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                fill="rgba(3,195,236,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="5" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                index="0" j="2" data:angle="90" data:startAngle="180"
                                                                data:strokeWidth="5" data:value="50"
                                                                data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1874"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Fashion" rel="4" data:realIndex="3">
                                                            <path id="SvgjsPath1875"
                                                                d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                fill="rgba(113,221,55,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="5" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                index="0" j="3" data:angle="90" data:startAngle="270"
                                                                data:strokeWidth="5" data:value="50"
                                                                data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1876" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"><text id="SvgjsText1877"
                                                        font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="0.8125rem" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-datalabel-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text
                                                        id="SvgjsText1878" font-family="Public Sans" x="70.5" y="71.5"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="1.5rem"
                                                        font-weight="400" fill="#566a7f"
                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                        style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                            </g>
                                            <line id="SvgjsLine1879" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1880" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1861" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(133, 146, 163);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(3, 195, 236);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(113, 221, 55);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 398px; height: 139px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-mobile-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Electronic</h6>
                                        <small class="text-muted">Mobile, Earbuds, TV</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-medium">82.5k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i
                                            class="bx bx-closet"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Fashion</h6>
                                        <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-medium">23.8k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Decor</h6>
                                        <small class="text-muted">Fine Art, Dining</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-medium">849k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-secondary"><i
                                            class="bx bx-football"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Sports</h6>
                                        <small class="text-muted">Football, Cricket Kit</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-medium">99</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->

            <!-- Expense Overview -->
            <div class="col-md-6 col-lg-4 order-1 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-tabs-line-card-income"
                                    aria-controls="navs-tabs-line-card-income" aria-selected="true">
                                    Income
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" aria-selected="false"
                                    tabindex="-1">Expenses</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" aria-selected="false"
                                    tabindex="-1">Profit</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-0">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel"
                                style="position: relative;">
                                <div class="d-flex p-4 pt-3">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../Admin/assets/img/icons/unicons/wallet.png" alt="User">
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Total Balance</small>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$459.10</h6>
                                            <small class="text-success fw-medium">
                                                <i class="bx bx-chevron-up"></i>
                                                42.9%
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div id="incomeChart" style="min-height: 215px;">
                                    <div id="apexchartsleb6fiv6i"
                                        class="apexcharts-canvas apexchartsleb6fiv6i apexcharts-theme-light"
                                        style="width: 445px; height: 215px;"><svg id="SvgjsSvg1881" width="445"
                                            height="215" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1883" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 10)">
                                                <defs id="SvgjsDefs1882">
                                                    <clipPath id="gridRectMaskleb6fiv6i">
                                                        <rect id="SvgjsRect1888" width="433.635009765625"
                                                            height="175.73" x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskleb6fiv6i"></clipPath>
                                                    <clipPath id="nonForecastMaskleb6fiv6i"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskleb6fiv6i">
                                                        <rect id="SvgjsRect1889" width="455.635009765625"
                                                            height="201.73" x="-14" y="-14" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1909" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1910" stop-opacity="0.5"
                                                            stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                        <stop id="SvgjsStop1911" stop-opacity="0.25"
                                                            stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                        <stop id="SvgjsStop1912" stop-opacity="0.25"
                                                            stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1887" x1="0" y1="0" x2="0" y2="173.73"
                                                    stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="173.73"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                                </line>
                                                <g id="SvgjsG1915" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1916" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1918"
                                                            font-family="Helvetica, Arial, sans-serif" x="0" y="202.73"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1919"></tspan>
                                                            <title></title>
                                                        </text><text id="SvgjsText1921"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="61.09071568080358" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1922">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText1924"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="122.18143136160717" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1925">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText1927"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="183.27214704241072" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1928">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText1930"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="244.36286272321428" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1931">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1933"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="305.45357840401783" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1934">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText1936"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="366.5442940848214" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1937">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText1939"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="427.63500976562494" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1940">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1943" class="apexcharts-grid">
                                                    <g id="SvgjsG1944" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1946" x1="0" y1="0" x2="427.635009765625"
                                                            y2="0" stroke="#eceef1" stroke-dasharray="3"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1947" x1="0" y1="43.4325"
                                                            x2="427.635009765625" y2="43.4325" stroke="#eceef1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1948" x1="0" y1="86.865"
                                                            x2="427.635009765625" y2="86.865" stroke="#eceef1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1949" x1="0" y1="130.29749999999999"
                                                            x2="427.635009765625" y2="130.29749999999999"
                                                            stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1950" x1="0" y1="173.73"
                                                            x2="427.635009765625" y2="173.73" stroke="#eceef1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1945" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1952" x1="0" y1="173.73" x2="427.635009765625"
                                                        y2="173.73" stroke="transparent" stroke-dasharray="0"
                                                        stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1951" x1="0" y1="1" x2="0" y2="173.73"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1890"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1891" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1913"
                                                            d="M 0 173.73L 0 112.92450000000001C 21.38175048828125 112.92450000000001 39.70896519252232 125.95425 61.09071568080357 125.95425C 82.47246616908481 125.95425 100.79968087332588 86.86500000000001 122.18143136160714 86.86500000000001C 143.5631818498884 86.86500000000001 161.89039655412947 121.611 183.27214704241072 121.611C 204.65389753069195 121.611 222.98111223493305 34.74600000000001 244.36286272321428 34.74600000000001C 265.7446132114955 34.74600000000001 284.0718279157366 104.238 305.45357840401783 104.238C 326.8353288922991 104.238 345.16254359654016 65.14875 366.54429408482144 65.14875C 387.9260445731027 65.14875 406.2532592773438 91.20825 427.635009765625 91.20825C 427.635009765625 91.20825 427.635009765625 91.20825 427.635009765625 173.73M 427.635009765625 91.20825z"
                                                            fill="url(#SvgjsLinearGradient1909)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskleb6fiv6i)"
                                                            pathTo="M 0 173.73L 0 112.92450000000001C 21.38175048828125 112.92450000000001 39.70896519252232 125.95425 61.09071568080357 125.95425C 82.47246616908481 125.95425 100.79968087332588 86.86500000000001 122.18143136160714 86.86500000000001C 143.5631818498884 86.86500000000001 161.89039655412947 121.611 183.27214704241072 121.611C 204.65389753069195 121.611 222.98111223493305 34.74600000000001 244.36286272321428 34.74600000000001C 265.7446132114955 34.74600000000001 284.0718279157366 104.238 305.45357840401783 104.238C 326.8353288922991 104.238 345.16254359654016 65.14875 366.54429408482144 65.14875C 387.9260445731027 65.14875 406.2532592773438 91.20825 427.635009765625 91.20825C 427.635009765625 91.20825 427.635009765625 91.20825 427.635009765625 173.73M 427.635009765625 91.20825z"
                                                            pathFrom="M -1 217.1625L -1 217.1625L 61.09071568080357 217.1625L 122.18143136160714 217.1625L 183.27214704241072 217.1625L 244.36286272321428 217.1625L 305.45357840401783 217.1625L 366.54429408482144 217.1625L 427.635009765625 217.1625">
                                                        </path>
                                                        <path id="SvgjsPath1914"
                                                            d="M 0 112.92450000000001C 21.38175048828125 112.92450000000001 39.70896519252232 125.95425 61.09071568080357 125.95425C 82.47246616908481 125.95425 100.79968087332588 86.86500000000001 122.18143136160714 86.86500000000001C 143.5631818498884 86.86500000000001 161.89039655412947 121.611 183.27214704241072 121.611C 204.65389753069195 121.611 222.98111223493305 34.74600000000001 244.36286272321428 34.74600000000001C 265.7446132114955 34.74600000000001 284.0718279157366 104.238 305.45357840401783 104.238C 326.8353288922991 104.238 345.16254359654016 65.14875 366.54429408482144 65.14875C 387.9260445731027 65.14875 406.2532592773438 91.20825 427.635009765625 91.20825"
                                                            fill="none" fill-opacity="1" stroke="#696cff"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskleb6fiv6i)"
                                                            pathTo="M 0 112.92450000000001C 21.38175048828125 112.92450000000001 39.70896519252232 125.95425 61.09071568080357 125.95425C 82.47246616908481 125.95425 100.79968087332588 86.86500000000001 122.18143136160714 86.86500000000001C 143.5631818498884 86.86500000000001 161.89039655412947 121.611 183.27214704241072 121.611C 204.65389753069195 121.611 222.98111223493305 34.74600000000001 244.36286272321428 34.74600000000001C 265.7446132114955 34.74600000000001 284.0718279157366 104.238 305.45357840401783 104.238C 326.8353288922991 104.238 345.16254359654016 65.14875 366.54429408482144 65.14875C 387.9260445731027 65.14875 406.2532592773438 91.20825 427.635009765625 91.20825"
                                                            pathFrom="M -1 217.1625L -1 217.1625L 61.09071568080357 217.1625L 122.18143136160714 217.1625L 183.27214704241072 217.1625L 244.36286272321428 217.1625L 305.45357840401783 217.1625L 366.54429408482144 217.1625L 427.635009765625 217.1625">
                                                        </path>
                                                        <g id="SvgjsG1892" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG1894" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskleb6fiv6i)">
                                                                <circle id="SvgjsCircle1895" r="6" cx="0"
                                                                    cy="112.92450000000001"
                                                                    class="apexcharts-marker no-pointer-events wmfqv9yqu"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="0" j="0" index="0"
                                                                    default-marker-size="6"></circle>
                                                                <circle id="SvgjsCircle1896" r="6"
                                                                    cx="61.09071568080357" cy="125.95425"
                                                                    class="apexcharts-marker no-pointer-events wun7jj60o"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="1" j="1" index="0"
                                                                    default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1897" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskleb6fiv6i)">
                                                                <circle id="SvgjsCircle1898" r="6"
                                                                    cx="122.18143136160714" cy="86.86500000000001"
                                                                    class="apexcharts-marker no-pointer-events wuhw00rdz"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="2" j="2" index="0"
                                                                    default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1899" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskleb6fiv6i)">
                                                                <circle id="SvgjsCircle1900" r="6"
                                                                    cx="183.27214704241072" cy="121.611"
                                                                    class="apexcharts-marker no-pointer-events wf4l7rbr6"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="3" j="3" index="0"
                                                                    default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1901" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskleb6fiv6i)">
                                                                <circle id="SvgjsCircle1902" r="6"
                                                                    cx="244.36286272321428" cy="34.74600000000001"
                                                                    class="apexcharts-marker no-pointer-events wmiyt2c5l"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="4" j="4" index="0"
                                                                    default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1903" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskleb6fiv6i)">
                                                                <circle id="SvgjsCircle1904" r="6"
                                                                    cx="305.45357840401783" cy="104.238"
                                                                    class="apexcharts-marker no-pointer-events wi9qby2oh"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="5" j="5" index="0"
                                                                    default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1905" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskleb6fiv6i)">
                                                                <circle id="SvgjsCircle1906" r="6"
                                                                    cx="366.54429408482144" cy="65.14875"
                                                                    class="apexcharts-marker no-pointer-events wudggn33r"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="6" j="6" index="0"
                                                                    default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1907" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskleb6fiv6i)">
                                                                <circle id="SvgjsCircle1908" r="6" cx="427.635009765625"
                                                                    cy="91.20825"
                                                                    class="apexcharts-marker no-pointer-events w1w4rrbzu"
                                                                    stroke="#696cff" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="7" j="7"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1893" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1953" x1="0" y1="0" x2="427.635009765625" y2="0"
                                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1954" x1="0" y1="0" x2="427.635009765625" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1955" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1956" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1957" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1958" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1959" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1886" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1941" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG1942" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1884" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 108, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center pt-4 gap-2">
                                    <div class="flex-shrink-0" style="position: relative;">
                                        <div id="expensesOfWeek" style="min-height: 57.7px;">
                                            <div id="apexcharts7kzvi48n"
                                                class="apexcharts-canvas apexcharts7kzvi48n apexcharts-theme-light"
                                                style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg1960" width="60"
                                                    height="57.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1962" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(-10, -10)">
                                                        <defs id="SvgjsDefs1961">
                                                            <clipPath id="gridRectMask7kzvi48n">
                                                                <rect id="SvgjsRect1964" width="86" height="87" x="-3"
                                                                    y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask7kzvi48n"></clipPath>
                                                            <clipPath id="nonForecastMask7kzvi48n"></clipPath>
                                                            <clipPath id="gridRectMarkerMask7kzvi48n">
                                                                <rect id="SvgjsRect1965" width="84" height="89" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG1966" class="apexcharts-radialbar">
                                                            <g id="SvgjsG1967">
                                                                <g id="SvgjsG1968" class="apexcharts-tracks">
                                                                    <g id="SvgjsG1969"
                                                                        class="apexcharts-radialbar-track apexcharts-track"
                                                                        rel="1">
                                                                        <path id="apexcharts-radialbarTrack-0"
                                                                            d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="rgba(236,238,241,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="2.0408536585365864"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area"
                                                                            data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG1971">
                                                                    <g id="SvgjsG1975"
                                                                        class="apexcharts-series apexcharts-radial-series"
                                                                        seriesName="seriesx1" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath1976"
                                                                            d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"
                                                                            fill="none" fill-opacity="0.85"
                                                                            stroke="rgba(105,108,255,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="4.081707317073173"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                            data:angle="234" data:value="65" index="0"
                                                                            j="0"
                                                                            data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095">
                                                                        </path>
                                                                    </g>
                                                                    <circle id="SvgjsCircle1972" r="18.881402439024395"
                                                                        cx="40" cy="40"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                    <g id="SvgjsG1973"
                                                                        class="apexcharts-datalabels-group"
                                                                        transform="translate(0, 0) scale(1)"
                                                                        style="opacity: 1;"><text id="SvgjsText1974"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="40" y="45" text-anchor="middle"
                                                                            dominant-baseline="auto" font-size="13px"
                                                                            font-weight="400" fill="#697a8d"
                                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                                            style="font-family: Helvetica, Arial, sans-serif;">$65</text>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1977" x1="0" y1="0" x2="80" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1978" x1="0" y1="0" x2="80" y2="0"
                                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g id="SvgjsG1963" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 61px; height: 59px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-n1 mt-1">Expenses This Week</p>
                                        <small class="text-muted">$39 less than last week</small>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 446px; height: 377px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Expense Overview -->

            <!-- Transactions -->
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../Admin/assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Paypal</small>
                                        <h6 class="mb-0">Send money</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+82.6</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../Admin/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Wallet</small>
                                        <h6 class="mb-0">Mac'D</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+270.69</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../Admin/assets/img/icons/unicons/chart.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Transfer</small>
                                        <h6 class="mb-0">Refund</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+637.91</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../Admin/assets/img/icons/unicons/cc-success.png" alt="User"
                                        class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Credit Card</small>
                                        <h6 class="mb-0">Ordered Food</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">-838.71</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../Admin/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Wallet</small>
                                        <h6 class="mb-0">Starbucks</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+203.33</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../Admin/assets/img/icons/unicons/cc-warning.png" alt="User"
                                        class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Mastercard</small>
                                        <h6 class="mb-0">Ordered Food</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">-92.45</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>
@endsection