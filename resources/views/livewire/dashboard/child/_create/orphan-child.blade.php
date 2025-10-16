<!-- begin: full name  ar-->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="first_name_ar">{!! __('children.first_name_ar') !!}</label>
            <input type="text" wire:model.live="first_name_ar" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_first_name_ar') !!}">
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
                placeholder="{!! __('children.enter_father_name_ar') !!}">
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
                placeholder="{!! __('children.enter_grand_father_name_ar') !!}">
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
                placeholder="{!! __('children.enter_family_name_ar') !!}">
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
                placeholder="{!! __('children.enter_first_name_en') !!}">
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
                placeholder="{!! __('children.enter_father_name_en') !!}">
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
                placeholder="{!! __('children.enter_grand_father_name_en') !!}">
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
                placeholder="{!! __('children.enter_family_name_en') !!}">
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


<!-- end: personal_id , birthday , classification , gender ,password,password_confirm -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-2">
        <div class="form-group">
            <label for="personal_id">{!! __('children.personal_id') !!}</label>
            <input type="text" wire:model.live="personal_id" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_personal_id') !!}">
            @error('personal_id')
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
            <label for="birthday">{!! __('children.birthday') !!}</label>
            <input type="date" wire:model.live="birthday" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_birthday') !!}">
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
            <label for="classification">{!! __('children.classification') !!}</label>
            <select wire:model.live="classification" class="form-control">
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
            <label for="gender">{!! __('children.gender') !!}</label>
            <select wire:model.live="gender" class="form-control">
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
                placeholder="{!! __('children.enter_password') !!}">
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
                placeholder="{!! __('children.enter_password_confirm') !!}">
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


<!-- begin: class , health_status , disease_clarification-->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="class">{!! __('children.class') !!}</label>
            <select wire:model.live="class" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="1">{!! __('children.class_1') !!}</option>
                <option value="2">{!! __('children.class_2') !!}</option>
                <option value="3">{!! __('children.class_3') !!}</option>
                <option value="4">{!! __('children.class_4') !!}</option>
                <option value="5">{!! __('children.class_5') !!}</option>
                <option value="6">{!! __('children.class_6') !!}</option>
                <option value="7">{!! __('children.class_7') !!}</option>
                <option value="8">{!! __('children.class_8') !!}</option>
            </select>
            @error('class')
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
            <label for="gender">{!! __('children.health_status') !!}</label>
            <select wire:model.live="health_status" class="form-control">
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


    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="disease_clarification">{!! __('children.disease_clarification') !!}</label>
            <input type="text" wire:model.live="disease_clarification" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_disease_clarification') !!}">
            @error('disease_clarification')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->


</div>
<!-- end: class , health_status , disease_clarification -->


<!-- begin: governoate_id , city_id , address_details-->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="governoate_id">{!! __('children.governoate_id') !!}</label>
            <select type="text" wire:model="governoate_id" wire:change="changeGovernorate($event.target.value)"
                id="governoate_id" name="governoate_id" class="form-control">
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
            <select class="form-control custom_select" wire:model="city_id" id="city_id" name="city_id">
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
                placeholder="{!! __('children.enter_address_details') !!}">
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
<div class="row">

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="authorized_contact_number">{!! __('children.authorized_contact_number') !!}</label>
            <input type="text" wire:model.live="authorized_contact_number" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_authorized_contact_number') !!}">
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
            <input type="text" wire:model.live="backup_contact_number" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_backup_contact_number') !!}">
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
            <input type="text" wire:model.live="whatsApp_number" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_whatsApp_number') !!}">
            @error('whatsApp_number')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->


</div>
<!-- end: authorized_contact_number , backup_contact_number , whatsApp_number -->


<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">

        <button type="button" wire:click ="firstStepSubmit" class="btn btn-primary  btn-glow">
            {!! __('children.next') !!}
        </button>

        {{-- <button type="button" wire:click ="submitForm" class="btn btn-primary  btn-glow">
            {!! __('children.save') !!}
        </button> --}}
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
