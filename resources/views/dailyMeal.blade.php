@extends('layouts.master')
@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <!-- END: Page CSS-->
@endsection

@section('body')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1>Current Month : {{Carbon::now()->format('F')}}</h1>
                {{-- <h1>Number of Meal this Month : <span id="meal Number"></span> </h1> --}}
                <label for="fp-default">Default</label>
                <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                <div class="card text-left">
                  <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Meal Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                            $meal=$members[0]->meals->toArray();
                                // $from = '2021-08-01';
                                // $to = '2021-08-31';
                                // $period = \Carbon\CarbonPeriod::create($from, '1 day', $to);
                            @endphp --}}
                            {{dd($members)}}
                            @foreach ($members as $member)
                                <tr>
                                    <td>{{$member->name}}</td>


                                    <td>{{$member}}</td>
                                    {{-- <td>{{ $date->format('l') }}</td> --}}
                                    <td>
                                        <div class="custom-control custom-switch custom-switch-success">
                                            <input type="checkbox" class="custom-control-input"  checked onclick="numberOfChecked()"/>
                                            <label class="custom-control-label" >
                                                <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                <span class="switch-icon-right"><i data-feather="x"></i></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                    </table>

                  </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                hello world
            </div> --}}
            {{-- {{ \Carbon\Carbon::now()->daysInMonth }} --}}
            {{-- @php
               $now = Carbon::now();
            echo $now->year;
            echo $now->month;
            echo $now->weekOfYear;
            @endphp --}}

        </div>

    </div>
@endsection

@section('script')
 <!-- BEGIN: Page Vendor JS-->
 <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
 <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
 <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
 <script src="../../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
 <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
 <!-- END: Page Vendor JS-->


<script src="{{asset('custom-asset/js/meal.js')}}"></script>
<script src={{asset("app-assets/js/scripts/forms/pickers/form-pickers.js")}}></script>
@endsection
