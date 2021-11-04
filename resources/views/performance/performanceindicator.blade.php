
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
                        <a href="#" class="noti-dot">
                            <i class="la la-graduation-cap"></i>
                            <span> Performance </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a class="active" href="{{ route('form/performance/indicator/page') }}"> Performance Indicator </a></li>
                            <li><a href="{{ route('form/performance/page') }}"> Performance Review </a></li>
                            <li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-edit"></i>
                        <span> Training </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="training.html"> Training List </a></li>
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
                        <h3 class="page-title">Performance Indicator</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Performance</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_indicator"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Added By</th>
                                    <th>Create At</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Web Designer </td>
                                    <td>Designing</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}"></a>
                                            <a href="profile.html">John Doe </a>
                                        </h2>
                                    </td>
                                    <td>
                                        7 May 2019
                                    </td>
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
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_indicator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_indicator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>IOS Developer </td>
                                    <td>IOS</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}"></a>
                                            <a href="profile.html">Mike Litorus </a>
                                        </h2>
                                    </td>
                                    <td>
                                        7 May 2019
                                    </td>
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
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_indicator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_indicator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Web Designer </td>
                                    <td>Designing</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}"></a>
                                            <a href="profile.html">John Smith </a>
                                        </h2>
                                    </td>
                                    <td>
                                        7 May 2019
                                    </td>
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
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_indicator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_indicator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Web Designer </td>
                                    <td>Designing</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-12.jpg') }}"></a>
                                            <a href="profile.html">Jeffrey Warden </a>
                                        </h2>
                                    </td>
                                    <td>
                                        7 May 2019
                                    </td>
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
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_indicator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_indicator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Web Designer </td>
                                    <td>Designing</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}"></a>
                                            <a href="profile.html">Wilmer Deluna </a>
                                        </h2>
                                    </td>
                                    <td>
                                        7 May 2019
                                    </td>
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
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_indicator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_indicator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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

        <!-- Add Performance Indicator Modal -->
        <div id="add_indicator" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Set New Indicator</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Designation</label>
                                        <select class="select">
                                            <option>Select Designation</option>
                                            <option>Web Designer</option>
                                            <option>IOS Developer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="modal-sub-title">Technical</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Customer Experience</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Marketing</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Management</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Administration</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Presentation Skill</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Quality Of Work</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Efficiency</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="modal-sub-title">Organizational</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Integrity</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Professionalism</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Team Work</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Critical Thinking</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Conflict Management</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Attendance</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Ability To Meet Deadline</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
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
        <!-- /Add Performance Indicator Modal -->
        
        <!-- Edit Performance Indicator Modal -->
        <div id="edit_indicator" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Performance Indicator</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Designation</label>
                                        <select class="select">
                                            <option>Select Designation</option>
                                            <option selected>Web Designer</option>
                                            <option>IOS Developer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="modal-sub-title">Technical</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Customer Experience</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option selected>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Marketing</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option selected>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Management</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option selected>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Administration</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option selected>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Presentation Skill</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Quality Of Work</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Efficiency</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                </div>
                                        <div class="col-sm-6">
                                    <h4 class="modal-sub-title">Organizational</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Integrity</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Professionalism</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option selected>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Team Work</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Critical Thinking</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option selected>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Conflict Management</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option selected>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Attendance</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option selected>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Ability To Meet Deadline</label>
                                        <select class="select">
                                            <option>None</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option selected>Advanced</option>
                                            <option>Expert / Leader</option>
                                        </select>
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
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Performance Indicator Modal -->
        
        <!-- Delete Performance Indicator Modal -->
        <div class="modal custom-modal fade" id="delete_indicator" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Performance Indicator List</h3>
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
        <!-- /Delete Performance Indicator Modal -->
    </div>
    <!-- /Page Wrapper -->

@endsection
