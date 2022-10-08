@extends('layouts.case-manage')

@section('content')
<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Case Manage
        <small>Case List</small>
    </h2>
    <div class="row row mb-10">
        <div class="col">
            <!-- Add Btn -->
            <div class="float-right">
                <button type="button" class="btn btn-primary btn-hero min-width-125 js-click-ripple-enabled"
                    data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                    <span class="click-ripple animate"
                        style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>
                    <a href="cases/create">
                        <i class="fa fa-plus mr-5"></i>
                        New Case
                    </a>
                </button>
            </div>
            <div class="float-right mr-3">
                <button type="button" class="btn btn-info btn-hero min-width-125 js-click-ripple-enabled"
                    data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                    <span class="click-ripple animate" style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>                    
                        <a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#block-search" aria-expanded="false" aria-controls="block-search"><i class="fa fa-search mr-5"></i>
                        Search</a>
                </button>
            </div>
            
        </div>
    </div>
    @component('cases.components._block-search')
    @endcomponent
    <!-- Dynamic Table Simple -->
    <div class="block mt-10">
        <div class="block-header bg-danger">
            <h3 class="block-title"><i class="fa fa-list-alt mr-5"></i> All Case List
                <!-- <small>With only sorting and pagination</small> -->
            </h3>
            <!-- <div class="float-right mr-3">
                <button type="button" class="btn btn-info min-width-125 js-click-ripple-enabled"
                    data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                    <span class="click-ripple animate" style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>                    
                        <a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#block-search" aria-expanded="false" aria-controls="block-search"><i class="fa fa-search mr-5"></i>
                        Search</a>
                </button>
            </div>
            <div class="float-right">
                <button type="button" class="btn btn-primary min-width-125 js-click-ripple-enabled"
                    data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                    <span class="click-ripple animate"
                        style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>
                    <a href="cases/create">
                        <i class="fa fa-plus mr-5"></i>
                        New Case
                    </a>
                </button>
            </div> -->
            
        </div>
        <div class="block-content block-content-full">        
            <!-- <table class="table table-bordered table-striped table-vcenter js-dataTable-simple table-hover"> -->
            <table class="table table-hover table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center d-none d-sm-table-cell">Help Topic</th>
                        <th class="text-center">Start Time</th>
                        <th class="text-center">Target Time</th>
                        <th class="text-center">Finish Time</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Overdue</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Owner</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($listData)==0)
                    <tr id="row-bank">
                        <td class="text-center" colspan="200"> {{ ucfirst(__('core.no records')) }} </td>
                    </tr>
                    @endif
                    @foreach($listData as $item)
                    @if($item->current_status != null)
                    <tr data-id="{!! $item->id !!}">
                        <td class="text-center">
                            {!! $item->id !!}
                        </td>
                        <td>
                            @component('cases.components._popover',['data' => $item ])
                            @endcomponent

                            @if(!empty($item->sub_type_name)) {{ $item->sub_type_name }}
                            @elseif(!empty($item->type_name)) {{ $item->type_name }}
                            @elseif(!empty($item->category_name)) {{ $item->category_name }}
                            @else {{ $item->category_name }}
                            @endif
                        </td>
                        <td class="text-center">
                            {{ _h_formatDate( $item->start_time ) }}
                        </td>
                        <td class="text-center">
                            {{ _h_formatDate( $item->target_time ) }}
                        </td>
                        <td class="text-center">
                            {{ _h_formatDate( $item->finish_time ) }}
                        </td>
                        <td class="text-center">
                            {!! _h_LabelStatus($item->current_status) !!}
                        </td>
                        <td class="text-center">
                            @if($item->overdue_flag == false) <span class="text-success"><i
                                    class="fa fa-check-circle fa-2x"></i></span>
                            @else <span class="text-danger"><i class="fa fa-exclamation-circle fa-2x"></i></span>
                            @endif
                        </td>
                        <td class="text-center">{!! $item->department_name !!}</td>
                        <td class="text-center">{!! $item->case_owner_fullname !!}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
    <!-- END Dynamic Table Simple -->
</div>
<!-- END Page Content -->
@endsection

@section('js_after')
<!-- Page JS Plugins -->
<script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page JS Code -->
<script src="js/plugins/datatables/be_tables_datatables.min.js"></script>
@endsection
