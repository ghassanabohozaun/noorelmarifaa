<div class="inputs_div mt-1">

    <!-- begin: guardian_full_name_ar -->
    <div class="row">
        <!-- begin: input -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="guardian_full_name_ar">{!! __('children.guardian_full_name_ar') !!}</label>
                <input type="text" wire:model="guardian_full_name_ar" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_full_name_ar') !!}"
                    @error('guardian_full_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_full_name_ar')
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
                <label for="guardian_first_name_ar">{!! __('children.guardian_first_name_ar') !!}</label>
                <input type="text" wire:model="guardian_first_name_ar" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_first_name_ar') !!}"
                    @error('guardian_first_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_first_name_ar')
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
                <label for="guardian_middle_name_ar">{!! __('children.guardian_middle_name_ar') !!}</label>
                <input type="text" wire:model="guardian_middle_name_ar" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_middle_name_ar') !!}"
                    @error('guardian_middle_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_middle_name_ar')
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
                <label for="guardian_surname_name_ar">{!! __('children.guardian_surname_name_ar') !!}</label>
                <input type="text" wire:model="guardian_surname_name_ar" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_surname_name_ar') !!}"
                    @error('guardian_surname_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_surname_name_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

    </div>
    <!-- end: guardian_full_name_ar -->


    <!-- begin:guardian_full_name_en -->
    <div class="row">
        <!-- begin: input -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="guardian_full_name_en">{!! __('children.guardian_full_name_en') !!}</label>
                <input type="text" wire:model.live="guardian_full_name_en" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_full_name_en') !!}"
                    @error('guardian_full_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_full_name_en')
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
                <label for="guardian_first_name_en">{!! __('children.guardian_first_name_en') !!}</label>
                <input type="text" wire:model.live="guardian_first_name_en" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_first_name_en') !!}"
                    @error('guardian_first_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_first_name_en')
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
                <label for="guardian_middle_name_en">{!! __('children.guardian_middle_name_en') !!}</label>
                <input type="text" wire:model.live="guardian_middle_name_en" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_middle_name_en') !!}"
                    @error('guardian_middle_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_middle_name_en')
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
                <label for="guardian_surname_name_en">{!! __('children.guardian_surname_name_en') !!}</label>
                <input type="text" wire:model.live="guardian_surname_name_en" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_surname_name_en') !!}"
                    @error('guardian_surname_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_surname_name_en')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

    </div>
    <!-- end: guardian_full_name_en  -->




    <!-- begin:guardian_personal_id, guardian_birthday , why_not_the_mother_is_guardian  ,guardian_relationship_with_the_child -->
    <div class="row">

        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="guardian_personal_id">{!! __('children.guardian_personal_id') !!}</label>
                <input type="text" wire:model.live="guardian_personal_id" class="form-control" maxlength="9"
                    autocomplete="off" {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_personal_id') !!}"
                    @error('guardian_personal_id')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_personal_id')
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
                <label for="guardian_birthday">{!! __('children.guardian_birthday') !!}</label>
                <input type="date" wire:model.live="guardian_birthday" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_guardian_birthday') !!}"
                    @error('guardian_birthday')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_birthday')
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
                <label for="guardian_relationship_with_the_child">{!! __('children.guardian_relationship_with_the_child') !!}</label>
                <select wire:model="guardian_relationship_with_the_child" class="form-control" {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!}
                    @error('guardian_relationship_with_the_child')  style="border-color: rgb(246, 78, 96)"  @enderror>
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

        <!-- begin: input -->
        @if ($is_mother_the_guardian == 0)
            <div class="col-md-3">
                <div class="form-group">
                    <label for="why_not_the_mother_is_guardian">{!! __('children.why_not_the_mother_is_guardian') !!}</label>
                    <select wire:model="why_not_the_mother_is_guardian" class="form-control"
                        @error('why_not_the_mother_is_guardian')  style="border-color: rgb(246, 78, 96)"  @enderror>
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
        @endif
        <!-- end: input -->




    </div>
    <!-- end: guardian_personal_id, father_date_of_death , why_not_the_mother_is_guardian ,guardian_relationship_with_the_child -->

    <!-- begin:guardian_work_ar ,guardian_work_en ,guardian_address_ar , guardian_address_en-->
    <div class="row">
        <!-- begin: input -->
        <div class="col-md-2">
            <div class="form-group">
                <label for="guardian_work_ar">{!! __('children.guardian_work_ar') !!}</label>
                <input type="text" wire:model.live="guardian_work_ar" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_work_ar') !!}"
                    @error('guardian_work_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_work_ar')
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
                <label for="guardian_work_en">{!! __('children.guardian_work_en') !!}</label>
                <input type="text" wire:model.live="guardian_work_en" class="form-control" autocomplete="off"
                    {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!} placeholder="{!! __('children.enter_guardian_work_en') !!}"
                    @error('guardian_work_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_work_en')
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
                <label for="guardian_address_ar">{!! __('children.guardian_address_ar') !!}</label>
                <input type="text" wire:model.live="guardian_address_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_guardian_address_ar') !!}"
                    @error('guardian_address_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_address_ar')
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
                <label for="guardian_address_en">{!! __('children.guardian_address_en') !!}</label>
                <input type="text" wire:model.live="guardian_address_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_guardian_address_en') !!}"
                    @error('guardian_address_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('guardian_address_en')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

    </div>
    <!-- end: guardian_work_ar ,guardian_work_en ,guardian_address_ar , guardian_address_en  -->



</div>
<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" wire:click="guardianInfoSubmit" class="btn btn-primary btn-glow">
            {!! __('children.save') !!}
            <span wire:loading wire:target="guardianInfoSubmit">
                <i class="la la-refresh spinner">
                </i>
            </span>
        </button>

    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
