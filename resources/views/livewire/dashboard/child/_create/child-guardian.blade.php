<!-- begin: guardian_full_name_ar,,guardian_full_name_en,guardian_personal_id  -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="guardian_full_name_ar">{!! __('children.guardian_full_name_ar') !!}</label>
            <input type="text" wire:model.live="guardian_full_name_ar" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_guardian_full_name_ar') !!}">
            @error('guardian_full_name_ar')
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
            <label for="guardian_full_name_en">{!! __('children.guardian_full_name_en') !!}</label>
            <input type="text" wire:model.live="guardian_full_name_en" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_guardian_full_name_en') !!}">
            @error('guardian_full_name_en')
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
            <label for="guardian_personal_id">{!! __('children.guardian_personal_id') !!}</label>
            <input type="text" wire:model.live="guardian_personal_id" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_guardian_personal_id') !!}">
            @error('guardian_personal_id')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->

</div>
<!-- end: guardian_full_name_ar,,guardian_full_name_en,,guardian_personal_id  -->

<!-- begin: guardian_birthday , why_not_the_mother_is_guardian  ,guardian_relationship_with_the_child -->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="guardian_birthday">{!! __('children.guardian_birthday') !!}</label>
            <input type="date" wire:model.live="guardian_birthday" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_guardian_birthday') !!}">
            @error('guardian_birthday')
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
            <label for="why_not_the_mother_is_guardian">{!! __('children.why_not_the_mother_is_guardian') !!}</label>
            <select wire:model.live="why_not_the_mother_is_guardian" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="divorced">{!! __('children.divorced') !!}</option>
                <option value="abandoned">{!! __('children.abandoned') !!}</option>
                <option value="sick">{!! __('children.sick') !!}</option>
                <option value="etc">{!! __('children.etc') !!}</option>
            </select>
            @error('why_not_the_mother_is_guardian')
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
            <label for="guardian_relationship_with_the_child">{!! __('children.guardian_relationship_with_the_child') !!}</label>
            <select wire:model.live="guardian_relationship_with_the_child" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="mother">{!! __('children.mother') !!}</option>
                <option value="uncle">{!! __('children.uncle') !!}</option>
                <option value="aunt">{!! __('children.aunt') !!}</option>
                <option value="grandfather">{!! __('children.grandfather') !!}</option>
                <option value="grandmother">{!! __('children.grandmother') !!}</option>
                <option value="brother">{!! __('children.brother') !!}</option>
                <option value="sister">{!! __('children.sister') !!}</option>
                <option value="uncle2">{!! __('children.uncle2') !!}</option>
                <option value="aunt2">{!! __('children.aunt2') !!}</option>
            </select>
            @error('guardian_relationship_with_the_child')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </div>
    </div>
    <!-- end: input -->


</div>
<!-- end:  father_date_of_death , why_not_the_mother_is_guardian ,guardian_relationship_with_the_child -->

<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" wire:click ="backStep(2)" class="btn btn-info btn-glow">
            {!! __('children.back') !!}
        </button>
        <button type="button" wire:click="thirdStepSubmit" class="btn btn-primary btn-glow">
            {!! __('children.next') !!}
        </button>

    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
