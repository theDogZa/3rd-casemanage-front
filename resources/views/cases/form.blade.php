@extends('layouts.case-manage')

@section('content')
<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Case Manage
        <small>New Case</small>
    </h2>
    <div class="row mb-10">
        <div class="col">
            <div class="float-left">
                 <button type="button" class="shadow-sm btn btn-primary-dark btn-hero btn-sm min-width-125 js-click-ripple-enabled"
                    data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                    <span class="click-ripple animate" style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>                    
                    <a href="/cases">
                        <i class="fa fa-long-arrow-left mr-5"></i>
                        Back
                    </a>
                </button>
            </div>
            <div class="float-right">
                <button type="button" class="js-swal-confirm2 shadow-sm btn btn-success btn-hero btn-sm min-width-125 js-click-ripple-enabled" 
                style="overflow: hidden; position: relative; z-index: 1;">
                <span class="click-ripple animate" style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>   
                <i class="fa fa-save mr-5"></i>
                Save
                </button>
            </div>
            <div class="float-right mr-10">
                <button type="button" class="shadow-sm btn btn-danger btn-hero btn-sm min-width-125 js-click-ripple-enabled"
                    data-toggle="modal" data-target="#modal-fadein" style="overflow: hidden; position: relative; z-index: 1;">
                    <span class="click-ripple animate" style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>                    
                    <i class="fa fa-ban mr-5"></i>  
                    Discard
                </button> 
            </div>
        </div>
    </div>
            <div class="row">
                <!-- case Information -->
                <div class="col-xl-4">
                    <div class="block block-themed">
                        <div class="block-header bg-gray">
                            <h3 class="block-title"><i class="fa fa-pencil-square-o mr-5"></i> Case Information (Heading)</h3>
                            <!-- <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div> -->
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <label for="example-nf-email">Product</label>
                                <select class="form-control form-control-lg" id="example-select" name="example-select">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-nf-email">Tag</label>
                                <select class="form-control form-control-lg" id="example-select" name="example-select">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-nf-email">Categoty</label>
                                <select class="form-control form-control-lg" id="example-select" name="example-select">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-nf-email">Type</label>
                                <select class="form-control form-control-lg" id="example-select" name="example-select">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-nf-email">Sub Type</label>
                                <select class="form-control form-control-lg" id="example-select" name="example-select">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END case Information -->

                <!-- case Information Detail -->
                @component('cases.components._case-information-detail')
                @endcomponent
                <!-- END case Information Detail -->

                <!-- case Additional Information -->
                @component('cases.components._additional-information')
                @endcomponent
                <!-- END Additional Information -->

                <!-- CJD CS -->
                @component('cases.components._cjd-cs')
                @endcomponent
                <!-- END CJD CS -->

                <!-- post reply -->
                @component('cases.components._post-reply')
                @endcomponent
                <!-- END post reply  -->
                <div class="spinner-border text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
            </div>

            <!-- Fade In Modal Confirm-->
            @component('components._model-confirm')
            @endcomponent
            <!-- END Fade In Modal Confirm -->
</div>
<!-- END Page Content -->
@endsection

@section('js_after')
<!-- Page JS Plugins -->

<script src="/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/js/plugins/es6-promise/es6-promise.auto.min.js"></script>
<script src="/js/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>

$(".js-swal-confirm2").on("click",function(n){
    Swal.fire({
    title: 'Are you sure?',
    text: 'You will not be able to recover this imaginary file!',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, keep it'
    }).then((result) => {
    if (result.value) {
        /* onsave */
        
        Swal.fire(
        'Saved !',
        'Save completed.',
        'success'
        )
    } else if (result.dismiss === Swal.DismissReason.cancel) {
        Swal.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
        )
    }
    })
});
</script>
@endsection
