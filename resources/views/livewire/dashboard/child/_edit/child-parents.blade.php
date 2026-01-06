<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Father ----------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->

<h4 class="text-info mb-2 mt-1"> {!! __('children.child_father') !!}</h4>

<div class="inputs_div">
    <!-- begin: father_full_name_ar  -->
    <div class="row">

        <!-- begin: input -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="father_full_name_ar">{!! __('children.father_full_name_ar') !!}</label>
                <input type="text" wire:model.live="father_full_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_full_name_ar') !!}"
                    @error('father_full_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_full_name_ar')
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
                <label for="father_first_name_ar">{!! __('children.father_first_name_ar') !!}</label>
                <input type="text" wire:model.live="father_first_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_first_name_ar') !!}"
                    @error('father_first_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_first_name_ar')
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
                <label for="father_middle_name_ar">{!! __('children.father_middle_name_ar') !!}</label>
                <input type="text" wire:model.live="father_middle_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_middle_name_ar') !!}"
                    @error('father_middle_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_middle_name_ar')
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
                <label for="father_surname_name_ar">{!! __('children.father_surname_name_ar') !!}</label>
                <input type="text" wire:model.live="father_surname_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_surname_name_ar') !!}"
                    @error('father_surname_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_surname_name_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->



    </div>
    <!-- end: father_full_name_ar -->


    <!-- begin: father_full_name_en  -->
    <div class="row">

        <!-- begin: input -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="father_full_name_en">{!! __('children.father_full_name_en') !!}</label>
                <input type="text" wire:model.live="father_full_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_full_name_en') !!}"
                    @error('father_full_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_full_name_en')
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
                <label for="father_first_name_en">{!! __('children.father_first_name_en') !!}</label>
                <input type="text" wire:model.live="father_first_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_first_name_en') !!}"
                    @error('father_first_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_first_name_en')
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
                <label for="father_middle_name_en">{!! __('children.father_middle_name_en') !!}</label>
                <input type="text" wire:model.live="father_middle_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_middle_name_en') !!}"
                    @error('father_middle_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_middle_name_en')
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
                <label for="father_surname_name_en">{!! __('children.father_surname_name_en') !!}</label>
                <input type="text" wire:model.live="father_surname_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_surname_name_en') !!}"
                    @error('father_surname_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_surname_name_en')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


    </div>
    <!-- end: father_full_name_en -->


    <!-- begin:father_work, father_personal_id , father_date_of_death , father_respon_of_death -->
    <div class="row">

        <!-- begin: input -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="father_work_ar">{!! __('children.father_work_ar') !!}</label>
                <input type="text" wire:model.live="father_work_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_work_ar') !!}"
                    @error('father_work_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_work_ar')
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
                <label for="father_work_en">{!! __('children.father_work_en') !!}</label>
                <input type="text" wire:model.live="father_work_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_work_en') !!}"
                    @error('father_work_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_work_en')
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
                <label for="father_personal_id">{!! __('children.father_personal_id') !!}</label>
                <input type="text" wire:model.live="father_personal_id" class="form-control" maxlength="9"
                    autocomplete="off" placeholder="{!! __('children.enter_father_personal_id') !!}"
                    @error('father_personal_id')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_personal_id')
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
                <label for="father_date_of_death">{!! __('children.father_date_of_death') !!}</label>
                <input type="date" wire:model.live="father_date_of_death" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_father_date_of_death') !!}"
                    @error('father_date_of_death')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('father_date_of_death')
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
                <label for="father_respon_of_death">{!! __('children.father_respon_of_death') !!}</label>
                <select wire:model.live="father_respon_of_death" class="form-control"
                    @error('father_respon_of_death')  style="border-color: rgb(246, 78, 96)"  @enderror>
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

</div>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Mother ----------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->

<h4 class="text-info mb-2"> {!! __('children.child_mother') !!}</h4>
<div class="inputs_div">
    <!-- begin: mother_full_name_ar  -->
    <div class="row">
        <!-- begin: input -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="mother_full_name_ar">{!! __('children.mother_full_name_ar') !!}</label>
                <input type="text" wire:model.live="mother_full_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_mother_full_name_ar') !!}"
                    @error('mother_full_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_full_name_ar')
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
                <label for="mother_first_name_ar">{!! __('children.mother_first_name_ar') !!}</label>
                <input type="text" wire:model.live="mother_first_name_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_mother_first_name_ar') !!}"
                    @error('mother_first_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_first_name_ar')
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
                <label for="mother_middle_name_ar">{!! __('children.mother_middle_name_ar') !!}</label>
                <input type="text" wire:model.live="mother_middle_name_ar" class="form-control"
                    autocomplete="off" placeholder="{!! __('children.enter_mother_middle_name_ar') !!}"
                    @error('mother_middle_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_middle_name_ar')
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
                <label for="mother_surname_name_ar">{!! __('children.mother_surname_name_ar') !!}</label>
                <input type="text" wire:model.live="mother_surname_name_ar" class="form-control"
                    autocomplete="off" placeholder="{!! __('children.enter_mother_surname_name_ar') !!}"
                    @error('mother_surname_name_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_surname_name_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->




    </div>
    <!-- end: mother_full_name_ar  -->

    <!-- begin: mother_full_name_en  -->
    <div class="row">

        <!-- begin: input -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="mother_full_name_en">{!! __('children.mother_full_name_en') !!}</label>
                <input type="text" wire:model.live="mother_full_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_mother_full_name_en') !!}"
                    @error('mother_full_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_full_name_en')
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
                <label for="mother_first_name_en">{!! __('children.mother_first_name_en') !!}</label>
                <input type="text" wire:model.live="mother_first_name_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_mother_first_name_en') !!}"
                    @error('mother_first_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_first_name_en')
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
                <label for="mother_middle_name_en">{!! __('children.mother_middle_name_en') !!}</label>
                <input type="text" wire:model.live="mother_middle_name_en" class="form-control"
                    autocomplete="off" placeholder="{!! __('children.enter_mother_middle_name_en') !!}"
                    @error('mother_middle_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_middle_name_en')
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
                <label for="mother_surname_name_en">{!! __('children.mother_surname_name_en') !!}</label>
                <input type="text" wire:model.live="mother_surname_name_en" class="form-control"
                    autocomplete="off" placeholder="{!! __('children.enter_mother_surname_name_en') !!}"
                    @error('mother_surname_name_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_surname_name_en')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->




    </div>
    <!-- end: mother_full_name_en  -->

    <!-- begin:mother_work_ar,mother_work_en, mother_personal_id  , mother_date_of_death , is_mother_alive ,is_mother_the_guardian-->
    <div class="row">

        <!-- begin: input -->
        <div class="col-md-2">
            <div class="form-group">
                <label for="mother_work_ar">{!! __('children.mother_work_ar') !!}</label>
                <input type="text" wire:model.live="mother_work_ar" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_mother_work_ar') !!}"
                    @error('mother_work_ar')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_work_ar')
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
                <label for="mother_work_en">{!! __('children.mother_work_en') !!}</label>
                <input type="text" wire:model.live="mother_work_en" class="form-control" autocomplete="off"
                    placeholder="{!! __('children.enter_mother_work_en') !!}"
                    @error('mother_work_en')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_work_en')
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
                <label for="mother_personal_id">{!! __('children.mother_personal_id') !!}</label>
                <input type="text" wire:model.live="mother_personal_id" class="form-control" maxlength="9"
                    autocomplete="off" placeholder="{!! __('children.enter_mother_personal_id') !!}"
                    @error('mother_personal_id')  style="border-color: rgb(246, 78, 96)"  @enderror>
                @error('mother_personal_id')
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
                <label for="is_mother_the_guardian">{!! __('children.is_mother_the_guardian') !!}</label>
                <select wire:model="is_mother_the_guardian"
                    wire:change="changeIsMotherTheGuardain($event.target.value)" class="form-control"
                    @error('is_mother_the_guardian')  style="border-color: rgb(246, 78, 96)"  @enderror>
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



        <!-- begin: input -->

        <div class="col-md-2">
            <div class="form-group">
                <label for="is_mother_alive">{!! __('children.is_mother_alive') !!}</label>
                <select wire:model.live="is_mother_alive" class="form-control" {!! $is_mother_the_guardian == 1 ? 'disabled' : '' !!}
                    wire:change="changeIsMotherAlive($event.target.value)"
                    @error('is_mother_alive')  style="border-color: rgb(246, 78, 96)"  @enderror>
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
        @if ($is_mother_alive == '0')
            <div class="col-md-2">
                <div class="form-group">
                    <label for="mother_date_of_death">{!! __('children.mother_date_of_death') !!}</label>
                    <input type="date" wire:model.live="mother_date_of_death" class="form-control"
                        autocomplete="off" placeholder="{!! __('children.enter_mother_date_of_death') !!}"
                        @error('mother_date_of_death')  style="border-color: rgb(246, 78, 96)"  @enderror>
                    @error('mother_date_of_death')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        @endif
        <!-- end: input -->

    </div>
    <!-- end: mother_work_ar,mother_work_en,mother_personal_id, mother_date_of_death , father_respon_of_death ,is_mother_the_guardian-->
</div>



<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12 ">
        <button type="button" wire:click="parentsInfoSubmit" class="btn btn-primary btn-glow">
            {!! __('children.save') !!}
            <span wire:loading wire:target="parentsInfoSubmit">
                <i class="la la-refresh spinner">
                </i>
            </span>
        </button>
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
