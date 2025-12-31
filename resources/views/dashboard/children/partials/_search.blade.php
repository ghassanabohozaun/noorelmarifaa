<div class="card">
    <!-- begin: card header -->
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">
            {!! __('general.filters') !!}
        </h4>
        <a class="heading-elements" data-action="collapse"><i class="ft-minus"></i></a>
    </div>
    <!-- end: card header -->

    <!-- begin: card content  show-->
    <div class="card-content collapse ">
        <div class="card-body">
            <form class="form">
                <div class="form-body">

                    <div class="row">

                        <!-- begin: full name arabic -->
                        @if (Lang() == 'ar')
                            <!-- begin: input -->
                            <div class="form-group col-md-3">
                                <label class="sr-only" for="first_name_ar">{!! __('children.first_name_ar') !!}</label>
                                <input type="text" class="form-control" placeholder="{!! __('children.enter_first_name_ar') !!}"
                                    id="first_name_ar">
                            </div>
                            <!-- end: input -->

                            <!-- begin: input -->
                            <div class="form-group col-md-3">
                                <label class="sr-only" for="father_name_ar">{!! __('children.father_name_ar') !!}</label>
                                <input type="text" class="form-control" placeholder="{!! __('children.enter_father_name_ar') !!}"
                                    id="father_name_ar">
                            </div>
                            <!-- end: input -->


                            <!-- begin: input -->
                            <div class="form-group col-md-3">
                                <label class="sr-only" for="grand_father_name_ar">{!! __('children.grand_father_name_ar') !!}</label>
                                <input type="text" class="form-control" placeholder="{!! __('children.enter_grand_father_name_ar') !!}"
                                    id="grand_father_name_ar">
                            </div>
                            <!-- end: input -->


                            <!-- begin: input -->
                            <div class="form-group col-md-3">
                                <label class="sr-only" for="family_name_ar">{!! __('children.family_name_ar') !!}</label>
                                <input type="text" class="form-control" placeholder="{!! __('children.enter_family_name_ar') !!}"
                                    id="family_name_ar">
                            </div>
                            <!-- end: input -->

                            <!-- end: full name arabic -->
                        @else
                            <!-- begin: full name english -->

                            <!-- begin: input -->
                            <div class="form-group col-md-3">
                                <label class="sr-only" for="first_name_en">{!! __('children.first_name_en') !!}</label>
                                <input type="text" class="form-control" placeholder="{!! __('children.enter_first_name_en') !!}"
                                    id="first_name_en">
                            </div>
                            <!-- end: input -->

                            <!-- begin: input -->
                            <div class="form-group col-md-3">
                                <label class="sr-only" for="father_name_en">{!! __('children.father_name_en') !!}</label>
                                <input type="text" class="form-control" placeholder="{!! __('children.enter_father_name_en') !!}"
                                    id="father_name_en">
                            </div>
                            <!-- end: input -->


                            <!-- begin: input -->
                            <div class="form-group col-md-3">
                                <label class="sr-only" for="grand_father_name_en">{!! __('children.grand_father_name_en') !!}</label>
                                <input type="text" class="form-control" placeholder="{!! __('children.enter_grand_father_name_en') !!}"
                                    id="grand_father_name_en">
                            </div>
                            <!-- end: input -->

                            <!-- begin: input -->
                            <div class="form-group col-md-3">
                                <label class="sr-only" for="family_name_en">{!! __('children.family_name_en') !!}</label>
                                <input type="text" class="form-control" placeholder="{!! __('children.enter_family_name_en') !!}"
                                    id="family_name_en">
                            </div>
                            <!-- end: input -->

                            <!-- end: full name english -->
                        @endif



                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="personal_id">{!! __('children.personal_id') !!}</label>
                            <input type="text" class="form-control" placeholder="{!! __('children.enter_personal_id') !!}"
                                id="personal_id">
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="guardian_personal_id">{!! __('children.guardian_personal_id') !!}</label>
                            <input type="text" class="form-control" placeholder="{!! __('children.enter_guardian_personal_id') !!}"
                                id="guardian_personal_id">
                        </div>
                        <!-- end: input -->


                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="gender">{!! __('children.gender') !!}</label>
                            <select id="gender" class="form-control">
                                <option value="" selected>{!! __('children.select_gender') !!}</option>
                                <option value="male">{!! __('children.male') !!}</option>
                                <option value="female">{!! __('children.female') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="classification">{!! __('children.classification') !!}</label>
                            <select id="classification" class="form-control">
                                <option value="" selected>{!! __('children.select_classfication') !!}</option>
                                <option value="fatherless">{!! __('children.fatherless') !!}</option>
                                <option value="parentless">{!! __('children.parentless') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="health_status">{!! __('children.health_status') !!}</label>
                            <select id="health_status" class="form-control">
                                <option value="" selected>{!! __('children.select_health_status') !!}</option>
                                <option value="good">{!! __('children.good') !!}</option>
                                <option value="sick">{!! __('children.sick') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="governorate_id">{!! __('users.governorate_id') !!}</label>
                            <select type="text" id="governoate_id" class="form-control">
                                <option value="" selected>
                                    {!! __('users.select') !!} {!! __('users.governorate_id') !!}
                                </option>
                                @foreach ($governorates as $key => $governorate)
                                    <option value="{!! $governorate->id !!}">{!! $governorate->name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="governorate_id">{!! __('users.governorate_id') !!}</label>
                            <select type="text" id="city_id" class="form-control" disabled>
                                <option value="">
                                    {!! __('users.select') !!} {!! __('users.city_id') !!}
                                </option>
                            </select>
                        </div>
                        <!-- end: input -->

                    </div>

                </div>

                <div class="form-actions" style="margin-top: -8px">
                    <button type="button" class="btn btn-sm btn-secondary mr-1" id="children_search_btn">
                        <i class="la la-search"></i> {!! __('general.search') !!}
                    </button>
                    <button type="submit" class="btn btn-sm btn-light-dark mr-1" id="children_reset_btn">
                        <i class="la la-close"></i> {!! __('general.reset') !!}
                    </button>
                </div>

            </form>

        </div>
    </div>
    <!-- end: card content -->

</div> <!-- end: card  -->
