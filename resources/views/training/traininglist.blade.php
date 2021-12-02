
@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-dashboard"></i>
                            <span> Dashboard</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('home') }}">Admin Dashboard</a></li>
                            <li><a href="{{ route('em/dashboard') }}">Employee Dashboard</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->role_name=='Admin')
                        <li class="menu-title"> <span>Authentication</span> </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="{{ route('userManagement') }}">All User</a></li>
                                <li><a href="{{ route('activity/log') }}">Activity Log</a></li>
                                <li><a href="{{ route('activity/login/logout') }}">Activity User</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="menu-title">
                        <span>Employees</span>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i>
                            <span> Employees</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('all/employee/card') }}">All Employees</a></li>
                            <li><a href="{{ route('form/holidays/new') }}">Holidays</a></li>
                            <li><a href="{{ route('form/leaves/new') }}">Leaves (Admin) 
                                <span class="badge badge-pill bg-primary float-right">1</span></a>
                            </li>
                            <li><a href="{{route('form/leavesemployee/new')}}">Leaves (Employee)</a></li>
                            <li><a href="{{ route('form/leavesettings/page') }}">Leave Settings</a></li>
                            <li><a href="{{ route('attendance/page') }}">Attendance (Admin)</a></li>
                            <li><a href="{{ route('attendance/employee/page') }}">Attendance (Employee)</a></li>
                            <li><a href="departments.html">Departments</a></li>
                            <li><a href="designations.html">Designations</a></li>
                            <li><a href="timesheet.html">Timesheet</a></li>
                            <li><a href="shift-scheduling.html">Shift & Schedule</a></li>
                            <li><a href="overtime.html">Overtime</a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>HR</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-files-o"></i>
                            <span> Sales </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="estimates.html">Estimates</a></li>
                            <li><a class="active" href="{{ route('form/invoice/view/page') }}">Invoices</a></li>
                            <li><a href="payments.html">Payments</a></li>
                            <li><a href="expenses.html">Expenses</a></li>
                            <li><a href="provident-fund.html">Provident Fund</a></li>
                            <li><a href="taxes.html">Taxes</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i>
                            <span> Payroll</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/salary/page') }}"> Employee Salary </a></li>
                            <li><a href="{{ url('form/salary/view') }}"> Payslip </a></li>
                            <li><a href="{{ route('form/payroll/items') }}"> Payroll Items </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-pie-chart"></i>
                            <span> Reports </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/expense/reports/page') }}"> Expense Report </a></li>
                            <li><a href="{{ route('form/invoice/reports/page') }}"> Invoice Report </a></li>
                            <li><a href="payments-reports.html"> Payments Report </a></li>
                            <li><a href="employee-reports.html"> Employee Report </a></li>
                            <li><a href="payslip-reports.html"> Payslip Report </a></li>
                            <li><a href="attendance-reports.html"> Attendance Report </a></li>
                            <li><a href="{{ route('form/leave/reports/page') }}"> Leave Report </a></li>
                            <li><a href="{{ route('form/daily/reports/page') }}"> Daily Report </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> 
                        <span>Performance</span> 
                    </li>
                    <li class="submenu"> 
                        <a href="#">
                            <i class="la la-graduation-cap"></i>
                            <span> Performance </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/performance/indicator/page') }}"> Performance Indicator </a></li>
                            <li><a href="{{ route('form/performance/page') }}"> Performance Review </a></li>
                            <li><a href="{{ route('form/performance/appraisal/page') }}"> Performance Appraisal </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#" class="noti-dot">
                            <i class="la la-edit"></i>
                            <span> Training </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a class="active" href="{{ route('form/training/list/page') }}"> Training List </a></li>
                            <li><a href="trainers.html"> Trainers</a></li>
                            <li><a href="training-type.html"> Training Type </a></li>
                        </ul>
                    </li>
                    <li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
                    <li><a href="resignation.html"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
                    <li><a href="termination.html"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
                    <li class="menu-title"> <span>Administration</span> </li>
                    <li> <a href="assets.html"><i class="la la-object-ungroup">
                        </i> <span>Assets</span></a>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-briefcase"></i>
                        <span> Jobs </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="user-dashboard.html"> User Dasboard </a></li>
                            <li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
                            <li><a href="jobs.html"> Manage Jobs </a></li>
                            <li><a href="manage-resumes.html"> Manage Resumes </a></li>
                            <li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
                            <li><a href="interview-questions.html"> Interview Questions </a></li>
                            <li><a href="offer_approvals.html"> Offer Approvals </a></li>
                            <li><a href="experiance-level.html"> Experience Level </a></li>
                            <li><a href="candidates.html"> Candidates List </a></li>
                            <li><a href="schedule-timing.html"> Schedule timing </a></li>
                            <li><a href="apptitude-result.html"> Aptitude Results </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>Pages</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-user"></i>
                        <span> Profile </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="profile.html"> Employee Profile </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
        <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Training</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Training</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_training"><i class="fa fa-plus"></i> Add New </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">#</th>
                                    <th>Training Type</th>
                                    <th>Trainer</th>
                                    <th>Employee</th>
                                    <th>Time Duration</th>
                                    <th>Description </th>
                                    <th>Cost </th>
                                    <th>Status </th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Git Training</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar">
                                                <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                            </a>
                                            <a href="profile.html">John Doe </a>
                                        </h2>
                                    </td>
                                    <td>
                                        <ul class="team-members">
                                            <li>
                                                <a href="#" title="Bernardo Galaviz" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Richard Miles" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                </a>
                                            </li>
                                            <li class="dropdown avatar-dropdown">
                                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="avatar-group">
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-12.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-13.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-16.jpg') }}">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-pagination">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">«</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">»</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> 
                                        </ul>
                                    </td>
                                    <td>7 May 2019 - 10 May 2019</td>
                                    <td>Lorem ipsum dollar</td>
                                    <td>$400</td>
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Swift Training</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar">
                                                <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                            </a>
                                            <a href="profile.html">Richard Miles</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <ul class="team-members">
                                            <li>
                                                <a href="#" title="John Doe" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Richard Miles" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                </a>
                                            </li>
                                            <li class="dropdown avatar-dropdown">
                                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="avatar-group">
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-12.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-13.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-16.jpg') }}">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-pagination">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">«</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">»</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> 
                                        </ul>
                                    </td>
                                    <td>7 May 2019 - 10 May 2019</td>
                                    <td>Lorem ipsum dollar</td>
                                    <td>$800</td>
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Node Training</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar">
                                                <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                            </a>
                                            <a href="profile.html">John Doe </a>
                                        </h2>
                                    </td>
                                    <td>
                                        <ul class="team-members">
                                            <li>
                                                <a href="#" title="Bernardo Galaviz" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Richard Miles" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                </a>
                                            </li>
                                            <li class="dropdown avatar-dropdown">
                                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="avatar-group">
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-12.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-13.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-16.jpg') }}">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-pagination">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">«</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">»</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> 
                                        </ul>
                                    </td>
                                    <td>7 May 2019 - 10 May 2019</td>
                                    <td>Lorem ipsum dollar</td>
                                    <td>$400</td>
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Angular Training</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar">
                                                <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}">
                                            </a>
                                            <a href="profile.html">Mike Litorus </a>
                                        </h2>
                                    </td>
                                    <td>
                                        <ul class="team-members">
                                            <li>
                                                <a href="#" title="Bernardo Galaviz" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Richard Miles" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                </a>
                                            </li>
                                            <li class="dropdown avatar-dropdown">
                                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="avatar-group">
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-12.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-13.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-16.jpg') }}">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-pagination">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">«</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">»</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> 
                                        </ul>
                                    </td>
                                    <td>7 May 2019 - 10 May 2019</td>
                                    <td>Lorem ipsum dollar</td>
                                    <td>$400</td>
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Git Training</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar">
                                                <img alt="" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}">
                                            </a>
                                            <a href="profile.html">Wilmer Deluna </a>
                                        </h2>
                                    </td>
                                    <td>
                                        <ul class="team-members">
                                            <li>
                                                <a href="#" title="Bernardo Galaviz" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jp') }}g">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Richard Miles" data-toggle="tooltip">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                </a>
                                            </li>
                                            <li class="dropdown avatar-dropdown">
                                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="avatar-group">
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-12.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-13.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}">
                                                        </a>
                                                        <a class="avatar avatar-xs" href="#">
                                                            <img alt="" src="{{ URL::to('assets/img/profiles/avatar-16.jpg') }}">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-pagination">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">«</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">»</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> 
                                        </ul>
                                    </td>
                                    <td>7 May 2019 - 10 May 2019</td>
                                    <td>Lorem ipsum dollar</td>
                                    <td>$400</td>
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
        <!-- /Page Content -->

        <!-- Add Training List Modal -->
        <div id="add_training" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Training</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Training Type</label>
                                        <select class="select">
                                            <option>Node Training</option>
                                            <option>Swift Training</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Trainer</label>
                                        <select class="select">
                                            <option>Mike Litorus </option>
                                            <option>John Doe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Employees</label>
                                        <select class="select">
                                            <option>Bernardo Galaviz</option>
                                            <option>Jeffrey Warden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Training Cost <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Start Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>End Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Status</label>
                                        <select class="select">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Training List Modal -->
        
        <!-- Edit Training List Modal -->
        <div id="edit_training" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Training List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Training Type</label>
                                        <select class="select">
                                            <option selected>Node Training</option>
                                            <option>Swift Training</option>
                                            <option>Git Training</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Trainer</label>
                                        <select class="select">
                                            <option>Mike Litorus </option>
                                            <option selected>John Doe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Employees</label>
                                        <select class="select">
                                            <option>Bernardo Galaviz</option>
                                            <option selected>Jeffrey Warden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Training Cost <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="$400">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Start Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" value="07-08-2019" type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>End Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" value="10-08-2019" type="text"></div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4">Lorem ipsum ismap</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Status</label>
                                        <select class="select">
                                            <option selected>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Training List Modal -->
        
        <!-- Delete Training List Modal -->
        <div class="modal custom-modal fade" id="delete_training" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Training List</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Training List Modal -->
    
    </div>
    <!-- /Page Wrapper -->

@endsection
