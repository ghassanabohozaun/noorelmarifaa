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
    <div class="card-content collapse  show">
        <div class="card-body">
            <form class="form">
                <div class="form-body">

                    <div class="row">

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="gender">{!! __('children.gender') !!}</label>
                            <select name="gender" class="form-control">
                                <option value="" selected>{!! __('children.select_gender') !!}</option>
                                <option value="male">{!! __('children.male') !!}</option>
                                <option value="female">{!! __('children.female') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="classification">{!! __('children.classification') !!}</label>
                            <select name="classification" class="form-control">
                                <option value="" selected>{!! __('children.select_classfication') !!}</option>
                                <option value="fatherless">{!! __('children.fatherless') !!}</option>
                                <option value="parentless">{!! __('children.parentless') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="health_status">{!! __('children.health_status') !!}</label>
                            <select name="health_status" class="form-control">
                                <option value="" selected>{!! __('children.select_health_status') !!}</option>
                                <option value="good">{!! __('children.good') !!}</option>
                                <option value="sick">{!! __('children.sick') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-3">
                            <label class="sr-only" for="governorate_id">{!! __('users.governorate_id') !!}</label>
                            <select type="text" name="governoate_id" id="governoate_id" class="form-control">
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
                            <select type="text" name="city_id" id="city_id" class="form-control" disabled>
                                <option value="">
                                    {!! __('users.select') !!} {!! __('users.city_id') !!}
                                </option>
                            </select>
                        </div>
                        <!-- end: input -->


                    </div>

                </div>

            </form>
        </div>
    </div>
    <!-- end: card content -->

</div> <!-- end: card  -->
