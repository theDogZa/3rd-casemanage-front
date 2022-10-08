<button type="button" class="btn btn-circle btn-outline-info mr-5 mb-5" data-toggle="popover" data-html="true"  data-placement="right" 
    data-content='
            <div class="row mb-2">
                <div class="col-3 text-right">
                    Product
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="{{ $data->product_name }}" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3 text-right">
                    Tag
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="{{ $data->tag_name }}" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3 text-right">
                  Category
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="{{ $data->category_name }}" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3 text-right">
                    Type
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="@if(!empty($data->type_name)){{$data->type_name}}@else - @endif" readonly>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3 text-right">
                    Sub Type
                </div>
                <div class="col-9">
                    <input class="form-control w-100" type="text" value="@if(!empty($data->sub_type_name)){{$data->sub_type_name}}@else - @endif" readonly>
                </div>
            </div>
    '>
    <i class="fa fa-search-plus"></i>
</button>