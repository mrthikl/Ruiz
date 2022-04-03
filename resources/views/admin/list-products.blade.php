@extends('admin-layout')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid product-list" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Product</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{URL::to('/dashboard')}}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Product</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter
                    </a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6168393d79e01">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6168393d79e01" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <!--begin::Tables Widget 9-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Product</span>
                    </h3>
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add category ">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->New Product
                        </a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted">
                                    <th class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
                                        </div>
                                    </th>
                                    <th class="min-w-150px">Name</th>
                                    <th class="min-w-150px">Price</th>
                                    <th class="min-w-150px">Brand</th>
                                    <th class="min-w-150px">Category</th>
                                    <th class="min-w-100px text-center">Image</th>
                                    <th class="min-w-140px text-center">Status</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->

                            @foreach($list_products as $pro)
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">
                                                    {{$pro -> product_name}}
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$pro -> product_price}}$</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$pro -> brand_name}}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$pro -> category_name}} </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">

                                            <div class="d-flex justify-content-center flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">
                                                    <img width="100" height="100" src="{{url('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if($pro->product_status == 0)
                                        <a href="{{URL::to('/active-product',[$pro->product_id])}}" class="text-dark text-center fw-bolder text-hover-primary d-block fs-6"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #16A2F9;transform: msFilter;">
                                                    <path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path>
                                                </svg></span></a>
                                        @else
                                        <a href="{{URL::to('/unactive-product',[$pro->product_id])}}" class="text-dark text-center fw-bolder text-hover-primary d-block fs-6"><span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #F91616;transform: msFilter;">
                                                    <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path>
                                                </svg></span></a>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="" id="update-btn" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_card">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <input id="id_product" type="hidden" value="{{$pro->product_id}}">
                                                <input id="name_product" type="hidden" value="{{$pro->product_name}}">
                                                <input id="desc_product" type="hidden" value="{{$pro->product_desc}}">
                                                <input id="price_product" type="hidden" value="{{$pro->product_price}}">
                                                <input id="content_product" type="hidden" value="{{$pro->product_content}}">
                                                <input id="category_product" type="hidden" value="{{$pro->category_name}}">
                                                <input id="brand_product" type="hidden" value="{{$pro->brand_name}}">
                                                <input id="image_product" type="hidden" value="{{$pro->product_image}}">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="{{URL::to('/delete-product',[$pro->product_id])}}" onclick="return confirm('Are you sure delete this product?')" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                            @endforeach
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 9-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
    <!--begin::Modal - New Category-->
    <?php
    $title = 'product';
    ?>
    <x-admin.add-modal title={{$title}}>
        <x-slot name="add_product">
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                    <span class="required">Price Product</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                </label>
                <!--end::Label-->
                <input  type="text" class="form-control form-control-solid" placeholder="price" name="product_price" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                    <span class="required">Content Product</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                </label>
                <!--end::Label-->
                <input  type="text" class="form-control form-control-solid" placeholder="Content" name="product_content" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                    <span class="required">Image Product</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                </label>
                <!--end::Label-->
                <input type="file" class="form-control form-control-solid" name="product_image" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class=" mb-10">
                <!--begin::Col-->
                <div class="">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-bold form-label mb-2">Category</label>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="">
                        <!--begin::Col-->
                        <div class="w-100">
                            <select name="product_cate" id="update-form-category" class="form-select form-select-solid">
                                @foreach($list_categories as $cate_pro)
                                <option value="{{$cate_pro->category_id}}">{{$cate_pro->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->

            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class=" mb-10">
                <!--begin::Col-->
                <div class="">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-bold form-label mb-2">Brand</label>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="">
                        <!--begin::Col-->
                        <div class="w-100">
                            <select name="product_brand" id="update-form-brand" class="form-select form-select-solid">
                                @foreach($list_brands as $brand_pro)
                                <option value="{{$brand_pro->brand_id}}">{{$brand_pro->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->

            </div>
            <!--end::Input group-->
        </x-slot>
    </x-admin.add-modal>

    <!--end::Modal - New Category-->
    <!--begin::Modal - New Category-->
    <x-admin.update-modal title={{$title}}>
        <x-slot name="update_product">
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                    <span class="required">Price Product</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                </label>
                <!--end::Label-->
                <input id="update-form-price" type="text" class="form-control form-control-solid" placeholder="price" name="product_price" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                    <span class="required">Content Product</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                </label>
                <!--end::Label-->
                <input id="update-form-content" type="text" class="form-control form-control-solid" placeholder="Content" name="product_content" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                    <span class="required">Image Product</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                </label>
                <!--end::Label-->
                <input type="file" class="form-control form-control-solid" name="product_image" />
                <img id="update-form-image" width="80" height="80" src="" alt="">
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class=" mb-10">
                <!--begin::Col-->
                <div class="">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-bold form-label mb-2">Category</label>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="">
                        <!--begin::Col-->
                        <div class="w-100">
                            <select name="product_cate" id="update-form-category" class="form-select form-select-solid">
                                @foreach($list_categories as $cate_pro)
                                <option value="{{$cate_pro->category_id}}">{{$cate_pro->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->

            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class=" mb-10">
                <!--begin::Col-->
                <div class="">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-bold form-label mb-2">Brand</label>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="">
                        <!--begin::Col-->
                        <div class="w-100">
                            <select name="product_brand" id="update-form-brand" class="form-select form-select-solid">
                                @foreach($list_brands as $brand_pro)
                                <option value="{{$brand_pro->brand_id}}">{{$brand_pro->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->

            </div>
            <!--end::Input group-->
        </x-slot>
    </x-admin.update-modal>
    <!--end::Modal - New Category-->
</div>
<!--end::Content-->
@endsection