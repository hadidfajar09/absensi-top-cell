
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
                            <li><a href="{{ route('form/performance/indicator/page') }}"> Performance Indicator </a></li>
                            <li><a class="active" href="{{ route('form/performance/page') }}"> Performance Review </a></li>
                            <li><a href="{{ route('form/performance/appraisal/page') }}"> Performance Appraisal </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-edit"></i>
                        <span> Training </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/training/list/page') }}"> Training List </a></li>
                            <li><a href="trainers.html"> Trainers</a></li>
                            <li><a href="training-type.html"> Training Type </a></li>
                        </ul>
                    </li>
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
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Performance</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Performance</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <section class="review-section information">
                <div class="review-header text-center">
                    <h3 class="review-title">Employee Basic Information</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-nowrap review-table mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <form>
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="depart3">Department</label>
                                                    <input type="text" class="form-control" id="depart3">
                                                </div>
                                                <div class="form-group">
                                                    <label for="departa">Designation</label>
                                                    <input type="text" class="form-control" id="departa">
                                                </div>
                                                <div class="form-group">
                                                    <label for="qualif">Qualification: </label>
                                                    <input type="text" class="form-control" id="qualif">
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <form>
                                                <div class="form-group">
                                                    <label for="doj">Emp ID</label>
                                                    <input type="text" class="form-control" value="DGT-009">
                                                </div>
                                                <div class="form-group">
                                                    <label for="doj">Date of Join</label>
                                                    <input type="text" class="form-control" id="doj">
                                                </div>
                                                <div class="form-group">
                                                    <label for="doc">Date of Confirmation</label>
                                                    <input type="text" class="form-control" id="doc">
                                                </div>
                                                <div class="form-group">
                                                    <label for="qualif1">Previous years of Exp</label>
                                                    <input type="text" class="form-control" id="qualif1">
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <form>
                                                <div class="form-group">
                                                    <label for="name1"> RO's Name</label>
                                                    <input type="text" class="form-control" id="name1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="depart1"> RO Designation: </label>
                                                    <input type="text" class="form-control" id="depart1">
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>	 
            
            <section class="review-section professional-excellence">
                <div class="review-header text-center">
                    <h3 class="review-title">Professional Excellence</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>Key Result Area</th>
                                        <th>Key Performance Indicators</th>
                                        <th>Weightage</th>
                                        <th>Percentage achieved <br>( self Score )</th>
                                        <th>Points Scored <br>( self )</th>
                                        <th>Percentage achieved <br>( RO's Score )</th>
                                        <th>Points Scored <br>( RO )</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2">1</td>
                                        <td rowspan="2">Production</td>
                                        <td>Quality</td>
                                        <td><input type="text" class="form-control" readonly value="30"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>TAT (turn around time)</td>
                                        <td><input type="text" class="form-control" readonly value="30"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Process Improvement</td>
                                        <td>PMS,New Ideas</td>
                                        <td><input type="text" class="form-control" readonly value="10"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Team Management</td>
                                        <td>Team Productivity,dynaics,attendance,attrition</td>
                                        <td><input type="text" class="form-control" readonly value="5"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Knowledge Sharing</td>
                                        <td>Sharing the knowledge for team productivity </td>
                                        <td><input type="text" class="form-control" readonly value="5"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Reporting and Communication</td>
                                        <td>Emails/Calls/Reports and Other Communication</td>
                                        <td><input type="text" class="form-control" readonly value="5"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center">Total </td>
                                        <td><input type="text" class="form-control" readonly value="85"></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section class="review-section personal-excellence">
                <div class="review-header text-center">
                    <h3 class="review-title">Personal Excellence</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>Personal Attributes</th>
                                        <th>Key Indicators</th>
                                        <th>Weightage</th>
                                        <th>Percentage achieved <br>( self Score )</th>
                                        <th>Points Scored <br>( self )</th>
                                        <th>Percentage achieved <br>( RO's Score )</th>
                                        <th>Points Scored <br>( RO )</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2">1</td>
                                        <td rowspan="2">Attendance</td>
                                        <td>Planned or Unplanned Leaves</td>
                                        <td><input type="text" class="form-control" readonly value="2"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Time Consciousness</td>
                                        <td><input type="text" class="form-control" readonly value="2"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2</td>
                                        <td rowspan="2">Attitude & Behavior</td>
                                        <td>Team Collaboration</td>
                                        <td><input type="text" class="form-control" readonly value="2"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Professionalism & Responsiveness</td>
                                        <td><input type="text" class="form-control" readonly value="2"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Policy & Procedures </td>
                                        <td>Adherence to policies and procedures</td>
                                        <td><input type="text" class="form-control" readonly value="2"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                    <td>4</td>
                                        <td>Initiatives</td>
                                        <td>Special Efforts, Suggestions,Ideas,etc.</td>
                                        <td><input type="text" class="form-control" readonly value="2"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Continuous Skill Improvement</td>
                                        <td>Preparedness to move to next level & Training utilization</td>
                                        <td><input type="text" class="form-control" readonly value="3"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center">Total </td>
                                        <td><input type="text" class="form-control" readonly value="15"></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                        <td><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center"><b>Total Percentage(%)</b></td>
                                        <td colspan="5" class="text-center"><input type="text" class="form-control" readonly value="0"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <div class="grade-span">
                                                <h4>Grade</h4>
                                                <span class="badge bg-inverse-danger">Below 65 Poor</span> 
                                                <span class="badge bg-inverse-warning">65-74 Average</span> 
                                                <span class="badge bg-inverse-info">75-84 Satisfactory</span> 
                                                <span class="badge bg-inverse-purple">85-92 Good</span> 
                                                <span class="badge bg-inverse-success">Above 92 Excellent</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Special Initiatives, Achievements, contributions if any</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-review review-table mb-0" id="table_achievements">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>By Self</th>
                                        <th>RO's Comment</th>
                                        <th>HOD's Comment</th>
                                        <th style="width: 64px;"><button type="button" class="btn btn-primary btn-add-row"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>
                                <tbody id="table_achievements_tbody">
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Comments on the role</h3>
                    <p class="text-muted">alterations if any requirred like addition/deletion of responsibilities</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-review review-table mb-0" id="table_alterations">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>By Self</th>
                                        <th>RO's Comment</th>
                                        <th>HOD's Comment</th>
                                        <th style="width: 64px;"><button type="button" class="btn btn-primary btn-add-row"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>
                                <tbody id="table_alterations_tbody">
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Comments on the role</h3>
                    <p class="text-muted">alterations if any requirred like addition/deletion of responsibilities</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>Strengths</th>
                                        <th>Area's for Improvement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Appraisee's Strengths and Areas for Improvement perceived by the Reporting officer</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>Strengths</th>
                                        <th>Area's for Improvement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Appraisee's Strengths and Areas for Improvement perceived by the Head of the Department</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>Strengths</th>
                                        <th>Area's for Improvement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Personal Goals</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>Goal Achieved during last year</th>
                                        <th>Goal set for current year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Personal Updates</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>Last Year</th>
                                        <th>Yes/No</th>
                                        <th>Details</th>
                                        <th>Current Year</th>
                                        <th>Yes/No</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Married/Engaged?</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>	
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td>Marriage Plans</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Higher Studies/Certifications?</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td>Plans For Higher Study</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Health Issues?</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td>Certification Plans</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Others</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td>Others</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Professional Goals Achieved for last year</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-review review-table mb-0" id="table_goals">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>By Self</th>
                                        <th>RO's Comment</th>
                                        <th>HOD's Comment</th>
                                        <th style="width: 64px;"><button type="button" class="btn btn-primary btn-add-row"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>
                                <tbody id="table_goals_tbody">
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Professional Goals for the forthcoming year</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-review review-table mb-0" id="table_forthcoming">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>By Self</th>
                                        <th>RO's Comment</th>
                                        <th>HOD's Comment</th>
                                        <th style="width: 64px;"><button type="button" class="btn btn-primary btn-add-row"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>
                                <tbody id="table_forthcoming_tbody">
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Training Requirements</h3>
                    <p class="text-muted">if any to achieve the Performance Standard Targets completely</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-review review-table mb-0" id="table_targets">
                                <thead>
                                    <tr>
                                    <th style="width:40px;">#</th>
                                    <th>By Self</th>
                                    <th>RO's Comment</th>
                                    <th>HOD's Comment</th>
                                    <th style="width: 64px;"><button type="button" class="btn btn-primary btn-add-row"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>
                                <tbody id="table_targets_tbody">
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">Any other general comments, observations, suggestions etc.</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-review review-table mb-0" id="general_comments">
                                <thead>
                                    <tr>
                                    <th style="width:40px;">#</th>
                                    <th>Self</th>
                                    <th>RO</th>
                                    <th>HOD</th>
                                    <th style="width: 64px;"><button type="button" class="btn btn-primary btn-add-row"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>
                                <tbody id="general_comments_tbody" >
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">For RO's Use Only</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Yes/No</th>
                                        <th>If Yes - Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>The Team member has Work related Issues</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>The Team member has Leave Issues</td>
                                        <td>
                                        <select class="form-control select">
                                            <option>Select</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>The team member has Stability Issues</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>The Team member exhibits non-supportive attitude</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>Any other points in specific to note about the team member</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                    <td>Overall Comment /Performance of the team member</td>
                                        <td>
                                            <select class="form-control select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-section">
                <div class="review-header text-center">
                    <h3 class="review-title">For HRD's Use Only</h3>
                    <p class="text-muted">Lorem ipsum dollar</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Overall Parameters</th>
                                        <th>Available Points</th>
                                        <th>Points Scored</th>
                                        <th>RO's Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>KRAs Target Achievement Points (will be considered from the overall score specified in this document by the Reporting officer)</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>Professional Skills Scores(RO's Points furnished in the skill & attitude assessment sheet will be considered)</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>Personal Skills Scores(RO's Points furnished in the skill & attitude assessment sheet will be considered)</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>Special Achievements Score (HOD to furnish)</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td>Overall Total Score</td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                        <td><input type="text" class="form-control" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered review-table mb-0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Signature</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Employee</td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                </tr>
                                <tr>
                                    <td>Reporting Officer</td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                </tr>
                                <tr>
                                    <td>HOD</td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                </tr>
                                <tr>
                                    <td>HRD</td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
    @section('script')
    <!-- Add Table Row JS -->
    <script>
        $(function () {
            $(document).on("click", '.btn-add-row', function () {
                var id = $(this).closest("table.table-review").attr('id');  // Id of particular table
                console.log(id);
                var div = $("<tr />");
                div.html(GetDynamicTextBox(id));
                $("#"+id+"_tbody").append(div);
            });
            $(document).on("click", "#comments_remove", function () {
                $(this).closest("tr").prev().find('td:last-child').html('<button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button>');
                $(this).closest("tr").remove();
            });
            function GetDynamicTextBox(table_id) {
                $('#comments_remove').remove();
                var rowsLength = document.getElementById(table_id).getElementsByTagName("tbody")[0].getElementsByTagName("tr").length+1;
                return '<td>'+rowsLength+'</td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button></td>'
            }
        });
    </script>
    @endsection
@endsection
