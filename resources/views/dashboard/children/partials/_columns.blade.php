<!-- begin: child ------------------------------------------------------------------------------------------------------------------------------->
<div class="card">
    <!-- begin: card header -->
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">
            {!! __('children.child_info') !!}
        </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end: card header -->

    <!-- begin: card content -->
    <div class="card-content collapse show">
        <div class="card-body">
            <!--begin::form-->

            <!--begin: form-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-body">
                        <div class="row mt-2">
                            @foreach ($childColumnNames as $key => $value)
                                <div class="col-md-3 mt-1">
                                    <fieldset class="checkboxsas">
                                        <label>
                                            <input type="checkbox" value="{!! $value !!}" name="columns[]"
                                                class="checkbox pt-2">
                                            {!! __('children.' . $value) !!}
                                        </label>
                                    </fieldset>

                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <!--end: form-->
        </div>
        <!--end::table-->
    </div>
    <!-- end: card content -->
</div>
<!-- end: child --------------------------------------------------------------------------------------------------------------------------------->


<!-- begin: family ------------------------------------------------------------------------------------------------------------------------------>
<div class="card">
    <!-- begin: card header -->
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">
            {!! __('children.family_info') !!}
        </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end: card header -->

    <!-- begin: card content -->
    <div class="card-content collapse">
        <div class="card-body">
            <!--begin::form-->

            <!--begin: form-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-body">

                        <div class="row">
                            @foreach ($familyCloumnNames as $key => $value)
                                <div class="col-md-3">
                                    <fieldset class="checkboxsas">
                                        <label>
                                            <input type="checkbox" value="{!! $value !!}" name="columns[]"
                                                class="checkbox pt-2">
                                            {!! __('children.' . $value) !!}
                                        </label>
                                    </fieldset>

                                </div>
                            @endforeach
                        </div>
                        <!--end: family info-->

                    </div>
                </div>
            </div>
            <!--end: form-->


            <!--end: form-->
        </div>
        <!--end::table-->
    </div>
    <!-- end: card content -->
</div>
<!-- end: family -------------------------------------------------------------------------------------------------------------------------------->


<!-- begin: father ------------------------------------------------------------------------------------------------------------------------------>
<div class="card">
    <!-- begin: card header -->
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">
            {!! __('children.father_info') !!}
        </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end: card header -->

    <!-- begin: card content -->
    <div class="card-content collapse">
        <div class="card-body">
            <!--begin::form-->

            <!--begin: form-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-body">

                        <!--begin: father info-->
                        <div class="row">
                            @foreach ($fatherCloumnNames as $key => $value)
                                <div class="col-md-3">
                                    <fieldset class="checkboxsas">
                                        <label>
                                            <input type="checkbox" value="{!! $value !!}" name="columns[]"
                                                class="checkbox pt-2">
                                            {!! __('children.' . $value) !!}
                                        </label>
                                    </fieldset>
                                </div>
                            @endforeach
                        </div>
                        <!--end: father info-->

                    </div>
                </div>
            </div>
            <!--end: form-->


            <!--end: form-->
        </div>
        <!--end::table-->
    </div>
    <!-- end: card content -->
</div>
<!-- end: father -------------------------------------------------------------------------------------------------------------------------------->



<!-- begin: mother ------------------------------------------------------------------------------------------------------------------------------>
<div class="card">
    <!-- begin: card header -->
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">
            {!! __('children.mother_info') !!}
        </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end: card header -->

    <!-- begin: card content -->
    <div class="card-content collapse">
        <div class="card-body">

            <!--begin: form-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-body">

                        <div class="row">
                            @foreach ($motherCloumnNames as $key => $value)
                                <div class="col-md-3">
                                    <fieldset class="checkboxsas">
                                        <label>
                                            <input type="checkbox" value="{!! $value !!}" name="columns[]"
                                                class="checkbox pt-2">
                                            {!! __('children.' . $value) !!}
                                        </label>
                                    </fieldset>

                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <!--end: form-->

        </div>
        <!--end::table-->
    </div>
    <!-- end: card content -->
</div>
<!-- end: mother -------------------------------------------------------------------------------------------------------------------------------->



<!-- begin: guardian ---------------------------------------------------------------------------------------------------------------------------->
<div class="card">
    <!-- begin: card header -->
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">
            {!! __('children.guardian_info') !!}
        </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end: card header -->

    <!-- begin: card content -->
    <div class="card-content collapse">
        <div class="card-body">

            <!--begin: form-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-body">
                        <div class="row">
                            @foreach ($guardianCloumnNames as $key => $value)
                                <div class="col-md-3">
                                    <fieldset class="checkboxsas">
                                        <label>
                                            <input type="checkbox" value="{!! $value !!}" name="columns[]"
                                                class="checkbox pt-2">
                                            {!! __('children.' . $value) !!}
                                        </label>
                                    </fieldset>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--end: form-->
        </div>
        <!--end::table-->
    </div>
    <!-- end: card content -->
</div>
<!-- end: guardian ------------------------------------------------------------------------------------------------------------------------------>
