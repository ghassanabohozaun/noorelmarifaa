<div class="inputs_div">
    <!-- begin: number_of_people_including_mother , male_number , female_number -->
    <div class="row">
        <!-- begin: input -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="number_of_people_including_mother">{!! __('children.number_of_people_including_mother') !!}</label>
                <input type="number" wire:model.live="number_of_people_including_mother" class="form-control"
                    autocomplete="off" placeholder="{!! __('children.enter_number_of_people_including_mother') !!}"
                    @error('number_of_people_including_mother')  style="border-color: rgb(246, 78, 96)"  @enderror>
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
                    placeholder="{!! __('children.enter_male_number') !!}"
                    @error('male_number')  style="border-color: rgb(246, 78, 96)"  @enderror>
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
                    placeholder="{!! __('children.enter_female_number') !!}"
                    @error('female_number')  style="border-color: rgb(246, 78, 96)"  @enderror>
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

</div>

<h5 class="text-info mb-2">{!! __('children.brothers_info') !!}</h5>
<!-- begin: brothers-->
<div class="inputs_div">

    @foreach ($bortherMembersItems as $index => $row)
        <div class="row" wire:key="row-{{ $index }}">

            <div class="col-md-5 col-12">
                <div class="form-group">
                    <input type="text" wire:model="bortherMembersItems.{!! $index !!}.member_name_ar"
                        class="form-control" placeholder="{!! __('children.enter_member_name_ar') !!}">
                </div>

            </div>

            <div class="col-md-5 col-sm-12">
                <div class="form-group">
                    <input type="text" wire:model="bortherMembersItems.{!! $index !!}.member_name_en"
                        class="form-control" placeholder="{!! __('children.enter_member_name_en') !!}" />
                </div>
            </div>

            <div class="col-md-1 col-sm-12">
                <div class="form-group">
                    <input type="number" wire:model="bortherMembersItems.{!! $index !!}.member_age"
                        class="form-control" placeholder="{!! __('children.enter_member_age') !!}" />
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 " style="margin-top: 5px">
                <div class="form-group">
                    <a href="#" wire:click.prevent ="removeBrotherMember({{ $index }})"
                        class="text-white  badge badge-danger">
                        <li class="la la-trash"></li>
                    </a>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-lg-12">
            <a href="#" wire:click.prevent="addNewBrotherMember" class="text-white badge badge-info">
                <li class="la la-plus"></li>
            </a>
        </div>
    </div>




</div>
<!-- end: brothers-->

<!-- begin: sisters-->
<h5 class="text-info mt-3 mb-2">{!! __('children.sisters_info') !!}</h5>
<div class="inputs_div">

    @foreach ($sisterMembersItems as $index => $row)
        <div class="row" wire:key="row-{{ $index }}">

            <div class="col-md-5 col-12">
                <div class="form-group">
                    <input type="text" wire:model="sisterMembersItems.{!! $index !!}.member_name_ar"
                        class="form-control" placeholder="{!! __('children.enter_member_name_ar') !!}">
                </div>

            </div>

            <div class="col-md-5 col-sm-12">
                <div class="form-group">
                    <input type="text" wire:model="sisterMembersItems.{!! $index !!}.member_name_en"
                        class="form-control" placeholder="{!! __('children.enter_member_name_en') !!}" />
                </div>
            </div>

            <div class="col-md-1 col-sm-12">
                <div class="form-group">
                    <input type="number" wire:model="sisterMembersItems.{!! $index !!}.member_age"
                        class="form-control" placeholder="{!! __('children.enter_member_age') !!}" />
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 " style="margin-top: 5px">
                <div class="form-group">
                    <a href="#" wire:click.prevent ="removeSisterMember({{ $index }})"
                        class="text-white  badge badge-danger">
                        <li class="la la-trash"></li>
                    </a>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-lg-12">
            <a href="#" wire:click.prevent="addNewSisterMember" class="text-white badge badge-info">
                <li class="la la-plus"></li>
            </a>
        </div>
    </div>
</div>
<!-- end: sisters-->

<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12 ">
        <button type="button" wire:click="familyInfoSubmit" class="btn btn-primary btn-glow">
            {!! __('children.save') !!}
            <span wire:loading wire:target="familyInfoSubmit">
                <i class="la la-refresh spinner">
                </i>
            </span>
        </button>
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
