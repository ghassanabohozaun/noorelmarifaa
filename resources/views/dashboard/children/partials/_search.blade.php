<div class="card">
    <!-- begin: card header -->
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">
            {!! __('general.filters') !!}
        </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a href="javascript:void(0)"><i class="ft-rotate-cw"></i></a></li>
                <li><a href="javascript:void(0)"><i class="ft-maximize"></i></a></li>
                {{-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
        <li><a data-action="expand"><i class="ft-maximize"></i></a></li> --}}
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end: card header -->

    <!-- begin: card content  show-->
    <div class="card-content collapse ">
        <div class="card-body">
            <form class="form">
                <div class="form-body">

                    <div class="row">
                        <!-- begin: input -->
                        <div class="form-group col-md-2">
                            <label class="sr-only" for="personal_id">{!! __('children.personal_id') !!}</label>
                            <input type="text" class="form-control" placeholder="{!! __('children.enter_personal_id') !!}"
                                id="personal_id">
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-2">
                            <label class="sr-only" for="gender">{!! __('children.gender') !!}</label>
                            <select id="gender" class="form-control">
                                <option value="" selected>{!! __('children.select_gender') !!}</option>
                                <option value="male">{!! __('children.male') !!}</option>
                                <option value="female">{!! __('children.female') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-2">
                            <label class="sr-only" for="classification">{!! __('children.classification') !!}</label>
                            <select id="classification" class="form-control">
                                <option value="" selected>{!! __('children.select_classfication') !!}</option>
                                <option value="fatherless">{!! __('children.fatherless') !!}</option>
                                <option value="parentless">{!! __('children.parentless') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                        <!-- begin: input -->
                        <div class="form-group col-md-2">
                            <label class="sr-only" for="health_status">{!! __('children.health_status') !!}</label>
                            <select id="health_status" class="form-control">
                                <option value="" selected>{!! __('children.select_health_status') !!}</option>
                                <option value="good">{!! __('children.good') !!}</option>
                                <option value="sick">{!! __('children.sick') !!}</option>
                            </select>
                        </div>
                        <!-- end: input -->

                    </div>


                    @livewire('general.address-drop-dwon-list', compact('governorates', 'cities'))

                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-sm btn-warning mr-1" id="children_search_btn">
                        <i class="la la-search"></i> {!! __('general.search') !!}
                    </button>
                    <button type="submit" class="btn btn-sm btn-primary" id="children_reset_btn">
                        <i class="la la-close"></i> {!! __('general.reset') !!}
                    </button>
                </div>
            </form>

        </div>
    </div>
    <!-- end: card content -->

</div> <!-- end: card  -->
