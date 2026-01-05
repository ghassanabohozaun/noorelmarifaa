<div class="inputs_div mt-1">
    <!-- end: personal_id , birthday , classification , gender ,password,password_confirm -->
    <div class="row mt-1">
        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="personal_id">{!! __('children.personal_id') !!}</label>
                <input type="text" wire:model.live="personal_id" class="form-control" autocomplete="off" maxlength="9"
                    placeholder="{!! __('children.enter_personal_id') !!}"
                    @error('personal_id')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('personal_id')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="birthday">{!! __('children.birthday') !!}</label>
                <input type="date" wire:model.live="birthday" class="form-control" id="birthday" autocomplete="off"
                    placeholder="{!! __('children.enter_birthday') !!}"
                    @error('birthday')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('birthday')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->



        <!-- begin: input -->
        <div class="col-md-2">
            <div class="form-group">
                <label for="gender">{!! __('children.gender') !!}</label>
                <select wire:model.live="gender" class="form-control"
                    @error('gender')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    <option value="" selected>{!! __('children.select_from_list') !!}</option>
                    <option value="male">{!! __('children.male') !!}</option>
                    <option value="female">{!! __('children.female') !!}</option>
                </select>
                @error('gender')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

        <!-- begin: input -->
        <div class="col-md-2">
            <div class="form-group">
                <label for="password">{!! __('children.password') !!}</label>
                <input type="password" wire:model.live="password" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_password') !!}"
                    @error('password')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('password')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input --> <!-- begin: input -->
        <div class="col-md-2">
            <div class="form-group">
                <label for="password_confirm">{!! __('children.password_confirm') !!}</label>
                <input type="password" wire:model.live="password_confirm" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_password_confirm') !!}"
                    @error('password_confirm')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('password_confirm')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->




    </div>
    <!-- end: personal_id , birthday , classification , gender ,password,password_confirm -->
</div>

<div class="inputs_div">
    <!-- begin: full name  ar-->
    <div class="row ">
        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="first_name_ar">{!! __('children.first_name_ar') !!}</label>
                <input type="text" wire:model.live="first_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_first_name_ar') !!}"
                    @error('first_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('first_name_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="father_name_ar">{!! __('children.father_name_ar') !!}</label>
                <input type="text" wire:model.live="father_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_name_ar') !!}"
                    @error('father_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_name_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->



        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="grand_father_name_ar">{!! __('children.grand_father_name_ar') !!}</label>
                <input type="text" wire:model.live="grand_father_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_grand_father_name_ar') !!}"
                    @error('grand_father_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('grand_father_name_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="family_name_ar">{!! __('children.family_name_ar') !!}</label>
                <input type="text" wire:model.live='family_name_ar' class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_family_name_ar') !!}"
                    @error('family_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('family_name_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->
    </div>
    <!-- end: full name ar -->


    <!-- begin: full name en-->
    <div class="row">
        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="first_name_en">{!! __('children.first_name_en') !!}</label>
                <input type="text" wire:model.live="first_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_first_name_en') !!}"
                    @error('first_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('first_name_en')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="father_name_en">{!! __('children.father_name_en') !!}</label>
                <input type="text" wire:model.live="father_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_name_en') !!}"
                    @error('father_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_name_en')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="grand_father_name_en">{!! __('children.grand_father_name_en') !!}</label>
                <input type="text" wire:model.live="grand_father_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_grand_father_name_en') !!}"
                    @error('grand_father_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('grand_father_name_en')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="family_name_en">{!! __('children.family_name_en') !!}</label>
                <input type="text" wire:model.live='family_name_en' class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_family_name_en') !!}"
                    @error('family_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('family_name_en')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->
    </div>
    <!-- end: full name en -->
</div>


<div class="inputs_div">
    <!-- begin:  school -->
    <div class="row">
        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="class">{!! __('children.class') !!}</label>
                <select wire:model.live="class" class="form-control" wire:change="changeClass($event.target.value)"
                    @error('class')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    <option value="" selected>{!! __('children.select_from_list') !!}</option>
                    <option value="under_school_age">{!! __('children.under_school_age') !!}</option>
                    <option value="kindergarten">{!! __('children.kindergarten') !!}</option>
                    <option value="1">{!! __('children.class_1') !!}</option>
                    <option value="2">{!! __('children.class_2') !!}</option>
                    <option value="3">{!! __('children.class_3') !!}</option>
                    <option value="4">{!! __('children.class_4') !!}</option>
                    <option value="5">{!! __('children.class_5') !!}</option>
                    <option value="6">{!! __('children.class_6') !!}</option>
                    <option value="7">{!! __('children.class_7') !!}</option>
                    <option value="8">{!! __('children.class_8') !!}</option>
                    <option value="9">{!! __('children.class_9') !!}</option>
                    <option value="10">{!! __('children.class_10') !!}</option>
                    <option value="11">{!! __('children.class_11') !!}</option>
                    <option value="12">{!! __('children.class_12') !!}</option>
                </select>
                @error('class')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

        @if ($class != 'under_school_age')
            <!-- begin: input -->
            <div class="col-md-3">
                <div class="form-group">
                    <label for="school_name">{!! __('children.school_name') !!}</label>
                    <div class="input-group">
                        <input type="text" wire:model.live="school_name" class="form-control" autocomplete="off"
                            placeholder="{!! __('children.enter_school_name') !!}" aria-describedby="basic-addon3"
                            @error('school_name')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    </div>
                    @error('school_name')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->

            <!-- begin: input -->
            <div class="col-md-2">
                <div class="form-group">
                    <label for="school_tel">{!! __('children.school_tel') !!}</label>
                    <div class="input-group">
                        <input type="text" wire:model.live="school_tel" class="form-control" autocomplete="off"
                            placeholder="{!! __('children.enter_school_tel') !!}" aria-describedby="basic-addon3"
                            @error('school_tel')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    </div>
                    @error('school_tel')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->

            <!-- begin: input -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="school_address">{!! __('children.school_address') !!}</label>
                    <div class="input-group">
                        <input type="text" wire:model.live="school_address" class="form-control"
                            autocomplete="off" placeholder="{!! __('children.enter_school_address') !!}" aria-describedby="basic-addon3"
                            @error('school_address')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    </div>
                    @error('school_address')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->


            <!-- begin: input -->
            <div class="col-md-3">
                <div class="form-group">
                    <label for="school_type">{!! __('children.school_type') !!}</label>
                    <select wire:model.live="school_type" class="form-control"
                        @error('school_type')  style="border-color: rgb(246, 78, 96)"  @enderror>
                        <option value="" selected>{!! __('children.select_from_list') !!}</option>
                        <option value="unrwa">{!! __('children.unrwa') !!}</option>
                        <option value="goverment">{!! __('children.goverment') !!}</option>
                        <option value="private">{!! __('children.private') !!}</option>
                    </select>
                    @error('school_type')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->


            <!-- begin: input -->
            <div class="col-md-3">
                <div class="form-group">
                    <label for="pay_school_fees">{!! __('children.pay_school_fees') !!}</label>
                    <select wire:model="pay_school_fees" class="form-control"
                        wire:change="doesFamilyPayFees($event.target.value)"
                        @error('pay_school_fees')  style="border-color: rgb(246, 78, 96)"  @enderror>
                        <option value="" selected>{!! __('children.select_from_list') !!}</option>
                        <option value="0">{!! __('children.no') !!}</option>
                        <option value="1">{!! __('children.yes') !!}</option>
                    </select>
                    @error('pay_school_fees')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->

            @if ($pay_school_fees == 1)
                <!-- begin: input -->
                <div class="col-md-2">
                    <label for="fees_per_month">{!! __('children.fees_per_month') !!}</label>
                    <div class="input-group">
                        <input type="number" wire:model.live="fees_per_month" class="form-control"
                            autocomplete="off" placeholder="{!! __('children.enter_fees_per_month') !!}" aria-describedby="basic-addon3"
                            @error('fees_per_month')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    </div>
                    @error('fees_per_month')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
                <!-- end: input -->
            @endif
        @endif

    </div>
    <!-- end:  school -->
</div>

<div class="inputs_div">
    <!-- begin:  health_status , disease_clarification-->
    <div class="row">

        <!-- begin: input -->
        <div class="col-md-2">
            <div class="form-group">
                <label for="classification">{!! __('children.classification') !!}</label>
                <select wire:model.live="classification" class="form-control"
                    @error('classification')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    <option value="" selected>{!! __('children.select_from_list') !!}</option>
                    <option value="fatherless">{!! __('children.fatherless') !!}</option>
                    <option value="parentless">{!! __('children.parentless') !!}</option>
                </select>
                @error('classification')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->



        <!-- begin: input -->
        <div class="col-md-2">
            <div class="form-group">
                <label for="health_status">{!! __('children.health_status') !!}</label>
                <select wire:model.live="health_status" class="form-control"
                    wire:change="changeHealthStatus($event.target.value)"
                    @error('health_status')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    <option value="" selected>{!! __('children.select_from_list') !!}</option>
                    <option value="good">{!! __('children.good') !!}</option>
                    <option value="sick">{!! __('children.sick') !!}</option>
                </select>
                @error('health_status')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


        @if ($this->health_status == 'sick')
            <!-- begin: input -->
            <div class="col-md-3">
                <div class="form-group">
                    <label for="disease_clarification">{!! __('children.disease_clarification') !!}</label>
                    <input type="text" wire:model.live="disease_clarification" class="form-control"
                        autocomplete="off" placeholder="{!! __('children.enter_disease_clarification') !!}"
                        @error('disease_clarification')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    @error('disease_clarification')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- end: input -->


            <!-- begin: input -->
            <div class="col-md-2">
                <div class="form-group">
                    <label for="with_disability">{!! __('children.with_disability') !!}</label>
                    <select wire:model.live="with_disability" class="form-control"
                        wire:change="changeWithDisability($event.target.value)"
                        @error('with_disability')  style="border-color: rgb(246, 78, 96)"  @enderror>
                        <option value="" selected>{!! __('children.select_from_list') !!}</option>
                        <option value="0">{!! __('children.no') !!}</option>
                        <option value="1">{!! __('children.yes') !!}</option>
                    </select>
                    @error('with_disability')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- end: input -->

            @if ($this->with_disability)
                <!-- begin: input -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="kind_of_disability">{!! __('children.kind_of_disability') !!}</label>
                        <input type="text" wire:model.live="kind_of_disability" class="form-control"
                            autocomplete="off" placeholder="{!! __('children.enter_kind_of_disability') !!}"
                            @error('kind_of_disability')  style="border-color: rgb(246, 78, 96)"  @enderror>
                        @error('kind_of_disability')
                            <span class="text text-danger">
                                <strong>{!! $message !!}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <!-- end: input -->
            @endif

        @endif



    </div>
    <!-- end:  health_status , disease_clarification -->



    <!-- begin: governoate_id , city_id , address_details-->
    <div class="row">

        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="governoate_id">{!! __('children.governoate_id') !!}</label>
                <select type="text" wire:model="governoate_id"
                    wire:change="changeGovernorate($event.target.value)" id="governoate_id" name="governoate_id"
                    class="form-control" @error('governoate_id')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    <option value="0" selected='selected'>
                        {!! __('children.select') !!} {!! __('children.governoate_id') !!}
                    </option>
                    @foreach ($governorates as $key => $governorate)
                        <option value="{!! $governorate->id !!}">{!! $governorate->name !!}</option>
                    @endforeach
                </select>
                @error('governoate_id')
                    <span class="text text-danger">
                        <strong class="strong-weight">{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="city_id">{!! __('children.city_id') !!}</label>
                <select class="form-control custom_select" wire:model="city_id" id="city_id" name="city_id"
                    @error('city_id')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    <option value="0" selected='selected'>
                        {!! __('general.select_from_list') !!}
                    </option>
                    @foreach ($cities as $city)
                        <option value="{!! $city->id !!}">
                            {!! $city->name !!}
                        </option>
                    @endforeach
                </select>
                @error('city_id')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->



        <!-- begin: input -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="address_details">{!! __('children.address_details') !!}</label>
                <input type="text" wire:model.live="address_details" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_address_details') !!}"
                    @error('address_details')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('address_details')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


    </div>
    <!-- end: governoate_id , city_id , address_details -->


    <!-- begin: authorized_contact_number , backup_contact_number , whatsApp_number-->
    <div class="row mb-2">

        <!-- begin: input -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="authorized_contact_number">{!! __('children.authorized_contact_number') !!}</label>
                <div class="input-group">
                    <input type="text" wire:model.live="authorized_contact_number" class="form-control"
                        maxlength="10" autocomplete="off" placeholder="{!! __('children.enter_authorized_contact_number') !!}"
                        aria-describedby="basic-addon3"
                        @error('authorized_contact_number')  style="border-color: rgb(246, 78, 96)"  @enderror>
                </div>
                @error('authorized_contact_number')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

        <!-- begin: input -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="backup_contact_number">{!! __('children.backup_contact_number') !!}</label>
                <div class="input-group">
                    <input type="text" wire:model.live="backup_contact_number" class="form-control"
                        maxlength="10" autocomplete="off" placeholder="{!! __('children.enter_backup_contact_number') !!}"
                        aria-describedby="basic-addon3"
                        @error('backup_contact_number')  style="border-color: rgb(246, 78, 96)"  @enderror>
                </div>
                @error('backup_contact_number')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <!-- end: input -->


        <!-- begin: input -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="whatsApp_number">{!! __('children.whatsApp_number') !!}</label>
                <div class="input-group">
                    <input type="text" wire:model.live="whatsApp_number" class="form-control" maxlength="13"
                        autocomplete="off" placeholder="{!! __('children.enter_whatsApp_number') !!}" aria-describedby="basic-addon3"
                        @error('whatsApp_number')  style="border-color: rgb(246, 78, 96)"  @enderror>
                </div>
                @error('whatsApp_number')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


    </div>
    <div class="clearfix"></div>
    <!-- end: authorized_contact_number , backup_contact_number , whatsApp_number -->
</div>


<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!} mt-2">
    <div class="col-md-12">

        <button type="button" wire:click ="childInfoSubmit" class="btn btn-primary  btn-glow">
            {!! __('children.save') !!}
            <span wire:loading wire:target="childInfoSubmit">
                <i class="la la-refresh spinner">
                </i>
            </span>
        </button>

        {{-- x-on:click="window.scrollTo({top: 0, behavior: 'smooth'})" --}}

    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
