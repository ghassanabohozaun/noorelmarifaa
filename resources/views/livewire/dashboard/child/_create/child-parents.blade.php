<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Family ----------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->

<h4 class="text-info"> {!! __('children.child_family') !!}</h4>
<hr>
<!-- begin: number_of_people_including_mother , male_number , female_number -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="number_of_people_including_mother">{!! __('children.number_of_people_including_mother') !!}</label>
            <input type="number" wire:model.live="number_of_people_including_mother" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_number_of_people_including_mother') !!}">
            @error('number_of_people_including_mother')
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
            <label for="male_number">{!! __('children.male_number') !!}</label>
            <input type="number" wire:model.live="male_number" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_male_number') !!}">
            @error('male_number')
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
            <label for="female_number">{!! __('children.female_number') !!}</label>
            <input type="number" wire:model.live="female_number" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_female_number') !!}">
            @error('female_number')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->

</div>
<!-- end: number_of_people_including_mother , male_number , female_number -->




<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Father ----------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->

<h4 class="text-info"> {!! __('children.child_father') !!}</h4>
<hr>

<!-- begin: father_full_name_ar,,father_full_name_en  -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="father_full_name_ar">{!! __('children.father_full_name_ar') !!}</label>
            <input type="text" wire:model.live="father_full_name_ar" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_father_full_name_ar') !!}">
            @error('father_full_name_ar')
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
            <label for="father_full_name_en">{!! __('children.father_full_name_en') !!}</label>
            <input type="text" wire:model.live="father_full_name_en" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_father_full_name_en') !!}">
            @error('father_full_name_en')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->




</div>
<!-- end: father_full_name_ar,,father_full_name_en -->

<!-- begin: father_personal_id , father_date_of_death , father_respon_of_death -->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="father_personal_id">{!! __('children.father_personal_id') !!}</label>
            <input type="text" wire:model.live="father_personal_id" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_father_personal_id') !!}">
            @error('father_personal_id')
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
            <label for="father_date_of_death">{!! __('children.father_date_of_death') !!}</label>
            <input type="date" wire:model.live="father_date_of_death" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_father_date_of_death') !!}">
            @error('father_date_of_death')
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
            <label for="father_respon_of_death">{!! __('children.father_respon_of_death') !!}</label>
            <select wire:model.live="father_respon_of_death" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="illness">{!! __('children.illness') !!}</option>
                <option value="martyr">{!! __('children.martyr') !!}</option>
            </select>
            @error('father_respon_of_death')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end:  father_personal_id, father_date_of_death , father_respon_of_death -->

<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Mother ----------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->

<h4 class="text-info"> {!! __('children.child_mother') !!}</h4>
<hr>

<!-- begin: mother_full_name_ar,mother_full_name_en  -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="mother_full_name_ar">{!! __('children.mother_full_name_ar') !!}</label>
            <input type="text" wire:model.live="mother_full_name_ar" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_mother_full_name_ar') !!}">
            @error('mother_full_name_ar')
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
            <label for="mother_full_name_en">{!! __('children.mother_full_name_en') !!}</label>
            <input type="text" wire:model.live="mother_full_name_en" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_mother_full_name_en') !!}">
            @error('mother_full_name_en')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->




</div>
<!-- end: mother_full_name_ar,,mother_full_name_en,  -->



<!-- begin: mother_personal_id  , mother_date_of_death , is_mother_alive ,is_mother_the_guardian-->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="mother_personal_id">{!! __('children.mother_personal_id') !!}</label>
            <input type="text" wire:model.live="mother_personal_id" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_mother_personal_id') !!}">
            @error('mother_personal_id')
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
            <label for="mother_date_of_death">{!! __('children.mother_date_of_death') !!}</label>
            <input type="date" wire:model.live="mother_date_of_death" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_mother_date_of_death') !!}">
            @error('mother_date_of_death')
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
            <label for="is_mother_alive">{!! __('children.is_mother_alive') !!}</label>
            <select wire:model.live="is_mother_alive" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="0">{!! __('children.no') !!}</option>
                <option value="1">{!! __('children.yes') !!}</option>
            </select>
            @error('is_mother_alive')
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
            <label for="is_mother_the_guardian">{!! __('children.is_mother_the_guardian') !!}</label>
            <select wire:model.live="is_mother_the_guardian" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="0">{!! __('children.no') !!}</option>
                <option value="1">{!! __('children.yes') !!}</option>
            </select>
            @error('is_mother_the_guardian')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: mother_personal_id, mother_date_of_death , father_respon_of_death ,is_mother_the_guardian-->



<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12 ">
        <button type="button" wire:click ="backStep(1)" class="btn btn-info btn-glow">
            {!! __('children.back') !!}
        </button>
        <button type="button" wire:click="secondStepSubmit" class="btn btn-primary btn-glow">
            {!! __('children.next') !!}
        </button>
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
