@extends('layouts.master')
@section('style')
<link rel="stylesheet" href="{{URL::to('src/collapse/collapse.css')}}">
<script src="{{URL::to('src/table2excel/jquery.table2excel.js')}}"></script>
<style>
    @font-face {
    font-family: "Khmer Os Battambang";
    font-style: normal;
    font-weight: normal;
    src: local("Khmer Os Battambang"), url("/fonts/KhmerOSbattambang.woff") format
    ("woff"), url("/fonts/KhmerOSbattambang.ttf") format("truetype");
    }
    
    label{
        position: relative;
        cursor: pointer;
        color: #666;
        font-size: 14px;
    }
    input[type="checkbox"], input[type="radio"]{
        position: absolute;
        right: 9000px; 
    }
    .fa-gradient {
        display: block;
        background: black;
        border-radius: 100%;
        height: 25px;
        width: 25px;
        margin: 0;
        background: radial-gradient(circle at 10px 10px, #FF0000, #000);
    }

    .fa-orange{
        display: block;
        background: black;
        border-radius: 100%;
        height: 25px;
        width: 25px;
        margin: 0;
        background: radial-gradient(circle at 10px 10px, #FFFF00, #000);
    }

    .fa-green{
        display: block;
        background: black;
        border-radius: 100%;
        height: 25px;
        width: 25px;
        margin: 0;
        background: radial-gradient(circle at 10px 10px, #00AB66, #000);
    }

    /*Check box*/
    input[type="checkbox"] + .label-text:before{
        content: "\f096";
        font-family: "FontAwesome";
        font-size: 20px;
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing:antialiased;
        width: 1em;
        display: inline-block;
        margin-right: 5px;
    }

    input[type="checkbox"]:checked + .label-text:before{
        content: "\f14a";
        color: #2980b9;
        animation: effect 250ms ease-in;
    }

    input[type="checkbox"]:disabled + .label-text{
        color: #aaa;
    }

    input[type="checkbox"]:disabled + .label-text:before{
        content: "\f0c8";
        color: #ccc;
    }

    /*Radio box*/

    input[type="radio"] + .label-text:before{
        content: "\f10c";
        font-family: "FontAwesome";
        speak: none;
        font-size: 20px;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing:antialiased;
        width: 1em;
        display: inline-block;
        margin-right: 5px;
    }

    input[type="radio"]:checked + .label-text:before{
        content: "\f192";
        color: #8e44ad;
        animation: effect 250ms ease-in;
    }

    input[type="radio"]:disabled + .label-text{
        color: #aaa;
    }

    input[type="radio"]:disabled + .label-text:before{
        content: "\f111";
        color: #ccc;
    }

    /*Radio Toggle*/

    .toggle input[type="radio"] + .label-text:before{
        content: "\f204";
        font-family: "FontAwesome";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing:antialiased;
        width: 1em;
        display: inline-block;
        margin-right: 10px;
    }

    .toggle input[type="radio"]:checked + .label-text:before{
        content: "\f205";
        color: #16a085;
        animation: effect 250ms ease-in;
    }

    .toggle input[type="radio"]:disabled + .label-text{
        color: #aaa;
    }

    .toggle input[type="radio"]:disabled + .label-text:before{
        content: "\f204";
        color: #ccc;
    }

    @keyframes effect{
        0%{transform: scale(0);}
        25%{transform: scale(1.3);}
        75%{transform: scale(1.4);}
        100%{transform: scale(1);}
    }

    input[type="radio"] {
        margin-top: -3px;
        vertical-align: middle;
    }
</style>
<style>
        
    h3{
        font-weight: bold;
        color: #BE955B;
    }
    .sticky {
        position: fixed;
        top:7.5%;
        width: 100%;
        z-index: 999;
        opacity:0.6;
    }

    .header {
        padding: 10px 16px;
        background: #555;
        color: #f1f1f1;
        /* text-align: right; */
    }
    .header:hover{
        opacity: 1;
    }
    .error {
        color: red;
        /* text-align: right; */
        /* background-color: #acf; */
    }
    #tableexport th,td{
        border: dotted 1px grey;
        padding: 9px;
    }
    #tableexport tr:hover{
        background-color: #F1F1F1;
        cursor: pointer;
    }         
</style>

@endsection
@section('title_page')
    View Report    
@endsection
@section('breadcrumbs')
    <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">View Report</a></li>
    <li class="active">Filter</li>
@endsection
@section('sidebar')
    @include('sidebar.trackrecord')
@endsection
@section('content')

<!-- Sidebar  -->
<nav id="sidebar1">
    <div id="dismiss1">
        <i class="fa fa-mail-reply"></i>
    </div>

    <div class="sidebar-header">
        <h3>Filter Option</h3>
    </div>

    <div class="col-md-12" style="padding: 15px">
        <form id="frm_filter" method="post" action="{{route('filterbankform')}}">
            {!! csrf_field() !!}
            <table width="100%">
                <tr>
                    <td style="border: none;padding: 0;">
                        <label>Request Type</label>
                        <select class="form-control" name="formname">                                
                            @foreach($request_type as $requests)
                                <option value="{{$requests->id}}">{{$requests->request_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>From Date</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right fromdatereport" id="fromdatereport" name="fromdatereport">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>To Date</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right fromdatereport" id="todatereport" name="todatereport">
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding-top: 20px;text-align: right;border: none;">                            
                        <button type="submit" class="btn btn-info" name="submit">
                            <i class="fa fa-filter"></i> Filter
                        </button>
                    </td>
                </tr>
            </table>
        </form> 
    </div>                
</nav>
<div class="overlay1"></div>  
    
<div class="row">
    <div class="header" id="myHeader">       
        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fa fa-align-left"></i>
            <span>Export Report</span>
        </button> 
        <button id="export" class="btn btn-success" onclick="exportToExcel('exTable')">
            TO CSV &nbsp;<i class="fa fa-file-excel-o"></i>
        </button>
    </div>

    <!-- Default box -->
    <div class="box box-danger">        
         <div class="box-body" style="overflow-x: scroll;padding: 15px 0 0 15px;">
            <table width="100%" border="0" id="table_header">
                <tr>
                    <td rowspan="5" style="border: none;width:170px;">
                        <img src="{{URL::to('src/img/logo/report_logo.png')}}" style="width: 140px;">
                    </td>
                </tr>
                <tr>
                    <td style="border: none;font-size: 15px;padding: 2px;font-weight: bold;">PRINCE BANK</td>
                </tr>
                <tr>
                    <td style="border: none;font-size: 15px;padding: 2px;font-weight: bold;">ADMIN DEPARTMENT</td>
                </tr>
                <tr>
                    <td style="border: none;font-size: 15px;padding: 2px;font-weight: bold;">BANKFORM REPORT</td>
                </tr>
                 <tr>
                    <td style="border: none;font-size: 15px;padding: 2px;font-weight: bold;">FROM: {{$from}} TO: {{$to}}</td>
                </tr>
            </table>
            <br>
            <div class="table-responsive">
                <table width="110%" id="tableexport" border="1">
                    <thead>
                        <tr style="background-color: #45B6FE;color: white;">
                            <th valign="center">No</th>
                            <th>Code</th>
                            <th>Item_Description_Eng</th>
                            <th>Item_Description_KH</th>
                            <th>U/M</th>
                            <th>Being</th>
                            <th>Total Out</th>
                            <th>Balance</th>
                            @if(count($result_department)>0)
                                @foreach($result_department as $key=>$value)
                                    <th style="text-align: center;">{{$value->reqfor_branch}}</th>
                                @endforeach
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_bankform as $key =>$value)                       
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$value->items_code}}</td>
                                <td>{{$value->item_description_eng}}</td>
                                <td style="font-family: Khmer Os Battambang;font-size: 12.5px">{{$value->item_description_kh}}</td>
                                <td style="text-align: center;font-family: Khmer Os Battambang;font-size: 12.5px">{{$value->um}}</td>
                                <td style="text-align: center;">{{$value->being}}</td>
                                <td style="background-color:#FCF4A3;text-align: center; ">
                                    <?php $total_out=0; ?>
                                    @foreach($result as $val) 
                                        @if(!empty($val->amount_doer))                               
                                            @if($val->item_desc_kh==$value->item_description_kh)
                                                <?php $total_out += (int)$val->amount_doer ?>
                                            @endif
                                            @else
                                            @if($val->item_desc_kh==$value->item_description_kh)
                                            <?php $total_out += (int)$val->amount ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    @if($total_out>0)
                                        <span style="color: blue;font-weight: bold;">{{$total_out}}</span>
                                    @else
                                        <span style="font-weight: bold;color: red">{{$total_out}}</span>
                                    @endif
                                </td>
                                <td style="background-color:#FCF4A3;text-align: center; ">
                                    <?php $balance=0; ?>
                                    <?php $total_amount=0; ?>
                                    @foreach($result as $val)                                
                                        @if(!empty($val->amount_doer))                             
                                            @if($val->item_desc_kh==$value->item_description_kh)
                                                @if(!empty($val->amount_doer))
                                                    <?php $total_amount += (int)$val->amount_doer ?>
                                                    <?php $balance = (int)$value->being - (int)$total_amount ?>
                                                @else
                                                    <?php $total_amount += (int)$val->amount_doer + (int)$val->amount ?>
                                                    <?php $balance = (int)$value->being - (int)$total_amount ?>
                                                @endif
                                            @endif
                                            @else
                                            @if($val->item_desc_kh==$value->item_description_kh)
                                                <?php $total_amount += (int)$val->amount_doer + (int)$val->amount ?>
                                                <?php $balance = (int)$value->being - (int)$total_amount ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    @if($balance>0)
                                        <span style="color: blue;font-weight: bold;">{{$balance}}</span>
                                    @else
                                        <span style="font-weight: bold;color: red">{{$value->being}}</span>
                                    @endif
                                </td>
                                @if(count($result_department)>0)
                                    @foreach($result_department as $key=>$vals)
                                        <td style="text-align: center;">
                                        <?php $total=0; ?>
                                        @foreach($result as $val)                                
                                            @if($val->item_desc_kh==$value->item_description_kh)
                                                @if(!empty($val->amount_doer))
                                                    @if($vals->reqfor_branch==$val->reqfor_branch)
                                                        <?php $total += (int)$val->amount_doer ?>
                                                    @endif
                                                    @else
                                                    @if($vals->reqfor_branch==$val->reqfor_branch)
                                                        <?php $total += (int)$val->amount ?>
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
                                        @if($total>0)
                                            <span style="color: blue;font-weight: bold;">{{$total}}</span>
                                        @else
                                            <span style="font-weight: bold;color: red;">{{$total}}</span>
                                        @endif
                                    </td>
                                    @endforeach
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <table class="table-form-reqfor" id="exTable" style="display: none">
                    <tr>
                        <td></td>
                        <td style="padding: 0;">
                            <img src="https://eform.princebank.com.kh/src/img/logo/report_logo.png" style="width: 110px">
                        </td>
                        <td style="padding: 0;">
                            <table style="width: 100%">
                                <tr>
                                    <td style="border: none;font-size: 15px;padding: 2px;font-weight: bold;">PRINCE BANK</td>
                                </tr>
                                <tr>
                                    <td style="border: none;font-size: 15px;padding: 2px;font-weight: bold;">ADMIN DEPARTMENT</td>
                                </tr>
                                <tr>
                                    <td style="border: none;font-size: 15px;padding: 2px;font-weight: bold;">BANKFORM REPORT</td>
                                </tr>
                                <tr>
                                    <td style="border: none;font-size: 15px;padding: 2px;font-weight: bold;">FROM: {{$from}} TO: {{$to}}</td>
                                </tr>
                            </table>
                        </td>
                        <td style="border: none;font-size: 20px;padding: 2px;font-weight: bold;" class="text-center">MONTHLY BANK FORM REQUEST REPORT</td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <br>
                        <br>
                        <td>
                        </td>
                    </tr>                  
                    <tr style="border: solid 1px black;">
                        <th valign="center">No</th>
                        <th>Code</th>
                        <th>Item_Description_Eng</th>
                        <th>Item_Description_KH</th>
                        <th>U/M</th>
                        <th>Being</th>
                        <th>Total Out</th>
                        <th>Balance</th>
                        @if(count($result_department)>0)
                            @foreach($result_department as $key=>$value)
                                <th style="text-align: center;">{{$value->reqfor_branch}}</th>
                            @endforeach
                        @endif   
                    </tr>
                    @foreach($list_bankform as $key =>$value)                       
                        <tr valign="top" style="border: solid 1px black;">
                            <td valign="middle"><span>{{++$key}}</span></td>
                            <td valign="middle">
                                <span>{{$value->items_code}}</span>
                            </td>
                            <td valign="middle">
                               sss
                            </td>
                            <td >sdfsdf</td>
                            <td >DDD</td>
                            <td>Test</td>
                            <td valign="middle" style="background-color:#FCF4A3;text-align: center; ">
                               Test
                            </td>
                            <td style="background-color:#FCF4A3;text-align: center; ">
                            DDDD
                            </td>
                            Test
                            </td>
                              
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>              
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: bold;">Requested by:</td>
                        <td style="font-weight: bold;">Reviewed by:</td>
                        <td style="font-weight: bold;">Approve by:</td>
                        <td></td>
                        <td></td>
                        <td></td>              
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>              
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>	              
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>              
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>              
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <table style="width:100%" border="0">
                                
                                <tr>       
                                    <td style="border: none;" colspan="2">Name:</td>
                                </tr>
                                <tr>              
                                    <td style="border: none;"  colspan="2">Position: 
                                    
                                    </td>
                                </tr>
                                <tr>          
                                    <td style="border: none;" colspan="2">Date:</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table style="width:100%" border="0">
                                <tr>       
                                    <td style="border: none;" colspan="2">Name:</td>
                                </tr>
                                <tr>              
                                    <td style="border: none;"  colspan="2">Position:</td>
                                </tr>
                                <tr>          
                                    <td style="border: none;" colspan="2">Date:</td>
                                </tr>
                            </table>			
                        </td>
                        <td>
                            <table style="width:100%" border="0">
                                <tr>       
                                    <td style="border: none;" colspan="2">Name: </td>
                                </tr>
                                <tr>              
                                    <td style="border: none;"  colspan="2">Position:</td>
                                </tr>
                                <tr>          
                                    <td style="border: none;" colspan="2">Date:</td>
                                </tr>
                            </table> 
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>              
                    </tr>
                    <tr>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box -->
</div>

@endsection
@section('script')
<!-- Bootstrap JS -->
<!-- jQuery Custom Scroller CDN -->
<script src="{{URL::to('src/collapse/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script src="{{URL::to('src/table2excel/bankFormExportToExcel.js')}}" defer></script>
<script src="{{URL::to('src/table2excel/jspdf.min.js')}}"></script>
<script src="{{URL::to('src/table2excel/jspdf.plugin.autotable.min.js')}}"></script>
<script src="{{URL::to('src/table2excel/tableHTMLExport.js')}}"></script>

<script>
    var dt = new Date();
    var time = dt.getHours() + "-" + dt.getMinutes() + "-" + dt.getSeconds();
    $('#json').on('click',function(){
        $("#tableexport").tableHTMLExport({type:'json',filename:'Eform_Rrport'+time+'.json'});
    })
    $('#csv').on('click',function(){
        $("#tableexport").tableHTMLExport({type:'csv',filename:'Eform_Rrport'+time+'.csv'});
    })
    $('#pdf').on('click',function(){
        $("#tableexport").tableHTMLExport({type:'pdf',filename:'Eform_Rrport'+time+'.pdf'});
    })
</script>

@endsection
