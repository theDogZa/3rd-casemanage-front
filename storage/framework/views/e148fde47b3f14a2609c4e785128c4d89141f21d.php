<button type="button" class="btn btn-circle btn-outline-info mr-5 mb-5" data-toggle="popover" data-html="true"  data-placement="right" 
    data-content='
            <div class="row mb-2">
                <div class="col-3 text-right">
                    Product
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="<?php echo e($data->product_name); ?>" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3 text-right">
                    Tag
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="<?php echo e($data->tag_name); ?>" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3 text-right">
                  Category
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="<?php echo e($data->category_name); ?>" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3 text-right">
                    Type
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="<?php if(!empty($data->type_name)): ?><?php echo e($data->type_name); ?><?php else: ?> - <?php endif; ?>" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3 text-right">
                    Sub Type
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="<?php if(!empty($data->sub_type_name)): ?><?php echo e($data->sub_type_name); ?><?php else: ?> - <?php endif; ?>" readonly>
                </div>
            </div>
    '>
    <i class="fa fa-search-plus"></i>
</button>