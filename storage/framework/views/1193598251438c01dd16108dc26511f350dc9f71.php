<?php $__env->startSection('content'); ?>
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
                <button type="button" class="shadow-sm btn btn-success btn-hero btn-sm min-width-125 js-click-ripple-enabled"
                    data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                    <span class="click-ripple animate" style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>                    
                    <i class="fa fa-save mr-5"></i>
                    Save
                </button>
            </div>
            <div class="float-right mr-10">
                <button type="button" class="shadow-sm btn btn-danger btn-hero btn-sm min-width-125 js-click-ripple-enabled"
                    data-toggle="modal"  data-target="#modal-fadein" style="overflow: hidden; position: relative; z-index: 1;">
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
                <div class=" col-xl-8">
                    <div class="block block-themed">
                        <div class="block-header bg-gray">
                            <h3 class="block-title"><i class="fa fa-pencil-square-o mr-5"></i> Case Information (Detail)</h3>
                            <!-- <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div> -->
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-nf-email">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div>
                </div>
                <!-- END case Information Detail -->

                <!-- case Additional Information -->
                <?php $__env->startComponent('cases.components._additional-information'); ?>
                <?php echo $__env->renderComponent(); ?>
                <!-- END Additional Information -->

                <!-- CJD CS -->
                <?php $__env->startComponent('cases.components._cjd-cs'); ?>
                <?php echo $__env->renderComponent(); ?>
                <!-- END CJD CS -->

                <!-- post reply -->
                <?php $__env->startComponent('cases.components._post-reply'); ?>
                <?php echo $__env->renderComponent(); ?>
                <!-- END post reply  -->
            </div>
<!-- Fade In Modal -->
<div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title"> <i class="fa fa-exclamation-circle mr-5"></i> Confirm</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="pb-10 mt-20 mb-20">
                    <h3>Do you sure to discard ?</h3>
                    </div>   
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check mr-5"></i> Yes
                </button> -->
                <button type="button" class="shadow-sm btn btn-success btn-hero btn-sm min-width-125 js-click-ripple-enabled"
                    data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;" data-dismiss="modal">
                    <span class="click-ripple animate" style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>                    
                    <i class="fa fa-check mr-5"></i> Yes
                </button>
                <!-- <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">
                <i class="fa fa-close mr-5"></i> No
                </button> -->
                <button type="button" class="shadow-sm btn btn-secondary btn-hero btn-sm min-width-125 js-click-ripple-enabled"
                    data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;" data-dismiss="modal">
                    <span class="click-ripple animate" style="height: 125px; width: 125px; top: -44.5px; left: 11.5px;"></span>                    
                    <i class="fa fa-close mr-5"></i> No
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Fade In Modal -->
</div>
<!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_after'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.case-manage', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>