
@extends('layouts.master')
{{-- @section('menu')
@extends('sidebar.dashboard')
@endsection --}}
@section('content')
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
                        <a href="#" class="noti-dot">
                            <i class="la la-user"></i>
                            <span> Employees</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('all/employee/card') }}">All Employees</a></li>
                            <li><a class="active" href="{{ route('form/holidays/new') }}">Holidays</a></li>
                            <li><a href="leaves.html">Leaves (Admin) 
                                <span class="badge badge-pill bg-primary float-right">1</span></a>
                            </li>
                            <li><a href="leaves-employee.html">Leaves (Employee)</a></li>
                            <li><a href="leave-settings.html">Leave Settings</a></li>
                            <li><a href="attendance.html">Attendance (Admin)</a></li>
                            <li><a href="attendance-employee.html">Attendance (Employee)</a></li>
                            <li><a href="departments.html">Departments</a></li>
                            <li><a href="designations.html">Designations</a></li>
                            <li><a href="timesheet.html">Timesheet</a></li>
                            <li><a href="shift-scheduling.html">Shift & Schedule</a></li>
                            <li><a href="overtime.html">Overtime</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-rocket"></i> 
                            <span> Projects</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="tasks.html">Tasks</a></li>
                            <li><a href="task-board.html">Task Board</a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>HR</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-files-o"></i>
                        <span> Sales </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="estimates.html">Estimates</a></li>
                            <li><a href="invoices.html">Invoices</a></li>
                            <li><a href="payments.html">Payments</a></li>
                            <li><a href="expenses.html">Expenses</a></li>
                            <li><a href="provident-fund.html">Provident Fund</a></li>
                            <li><a href="taxes.html">Taxes</a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-files-o"></i>
                        <span> Accounting </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="categories.html">Categories</a></li>
                            <li><a href="budgets.html">Budgets</a></li>
                            <li><a href="budget-expenses.html">Budget Expenses</a></li>
                            <li><a href="budget-revenues.html">Budget Revenues</a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-money"></i>
                        <span> Payroll </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="salary.html"> Employee Salary </a></li>
                            <li><a href="salary-view.html"> Payslip </a></li>
                            <li><a href="payroll-items.html"> Payroll Items </a></li>
                        </ul>
                    </li>
                    <li> <a href="policies.html">
                        <i class="la la-file-pdf-o"></i>
                        <span>Policies</span></a>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-pie-chart"></i>
                        <span> Reports </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="expense-reports.html"> Expense Report </a></li>
                            <li><a href="invoice-reports.html"> Invoice Report </a></li>
                            <li><a href="payments-reports.html"> Payments Report </a></li>
                            <li><a href="project-reports.html"> Project Report </a></li>
                            <li><a href="task-reports.html"> Task Report </a></li>
                            <li><a href="user-reports.html"> User Report </a></li>
                            <li><a href="employee-reports.html"> Employee Report </a></li>
                            <li><a href="payslip-reports.html"> Payslip Report </a></li>
                            <li><a href="attendance-reports.html"> Attendance Report </a></li>
                            <li><a href="leave-reports.html"> Leave Report </a></li>
                            <li><a href="daily-reports.html"> Daily Report </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>Performance</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-graduation-cap"></i>
                        <span> Performance </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="performance-indicator.html"> Performance Indicator </a></li>
                            <li><a href="performance.html"> Performance Review </a></li>
                            <li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-crosshairs"></i>
                        <span> Goals </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="goal-tracking.html"> Goal List </a></li>
                            <li><a href="goal-type.html"> Goal Type </a></li>
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
                            <li><a href="client-profile.html"> Client Profile </a></li>
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
                        <h3 class="page-title">Holidays <span id="year"></span></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Holidays</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_holiday"><i class="fa fa-plus"></i> Add Holiday</a>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title </th>
                                    <th>Holiday Date</th>
                                    <th>Day</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="holiday-completed">
                                    <td>1</td>
                                    <td>New Year</td>
                                    <td>1 Jan 2019</td>
                                    <td>Sunday</td>
                                    <td></td>
                                </tr>
                                <tr class="holiday-completed">
                                    <td>2</td>
                                    <td>Good Friday</td>
                                    <td>14 Apr 2019</td>
                                    <td>Friday</td>
                                    <td></td>
                                </tr>
                                <tr class="holiday-completed">
                                    <td>3</td>
                                    <td>May Day</td>
                                    <td>1 May 2019</td>
                                    <td>Monday</td>
                                    <td class="text-center">
                                    </td>
                                </tr>
                                <tr class="holiday-completed">
                                    <td>4</td>
                                    <td>Memorial Day</td>
                                    <td>28 May 2019</td>
                                    <td>Monday</td>
                                    <td class="text-center">
                                    </td>
                                </tr>
                                <tr class="holiday-completed">
                                    <td>5</td>
                                    <td>Ramzon</td>
                                    <td>26 Jun 2019</td>
                                    <td>Monday</td>
                                    <td></td>
                                </tr>
                                <tr class="holiday-upcoming">
                                    <td>6</td>
                                    <td>Bakrid</td>
                                    <td>2 Sep 2019</td>
                                    <td>Saturday</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="holiday-upcoming">
                                    <td>7</td>
                                    <td>Deepavali</td>
                                    <td>18 Oct 2019</td>
                                    <td>Wednesday</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="holiday-upcoming">
                                    <td>8</td>
                                    <td>Christmas</td>
                                    <td>25 Dec 2019</td>
                                    <td>Monday</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
        <!-- Add Holiday Modal -->
        <div class="modal custom-modal fade" id="add_holiday" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Holiday</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Holiday Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Holiday Date <span class="text-danger">*</span></label>
                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Holiday Modal -->

        <!-- Edit Holiday Modal -->
        <div class="modal custom-modal fade" id="edit_holiday" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Holiday</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Holiday Name <span class="text-danger">*</span></label>
                                <input class="form-control" value="New Year" type="text">
                            </div>
                            <div class="form-group">
                                <label>Holiday Date <span class="text-danger">*</span></label>
                                <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Holiday Modal -->

        <!-- Delete Holiday Modal -->
        <div class="modal custom-modal fade" id="delete_holiday" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Holiday</h3>
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
        <!-- /Delete Holiday Modal -->
       
    </div>
    <!-- /Page Wrapper -->
    @section('script')
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
    {{-- update js --}}
    <script>
        $(document).on('click','.userUpdate',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.id').text());
            $('#e_name').val(_this.find('.name').text());
            $('#e_email').val(_this.find('.email').text());
            $('#e_phone_number').val(_this.find('.phone_number').text());
            $('#e_image').val(_this.find('.image').text());

            var name_role = (_this.find(".role_name").text());
            var _option = '<option selected value="' + name_role+ '">' + _this.find('.role_name').text() + '</option>'
            $( _option).appendTo("#e_role_name");

            var position = (_this.find(".position").text());
            var _option = '<option selected value="' +position+ '">' + _this.find('.position').text() + '</option>'
            $( _option).appendTo("#e_position");

            var department = (_this.find(".department").text());
            var _option = '<option selected value="' +department+ '">' + _this.find('.department').text() + '</option>'
            $( _option).appendTo("#e_department");

            var statuss = (_this.find(".statuss").text());
            var _option = '<option selected value="' +statuss+ '">' + _this.find('.statuss').text() + '</option>'
            $( _option).appendTo("#e_status");
            
        });
    </script>
    @endsection

@endsection
