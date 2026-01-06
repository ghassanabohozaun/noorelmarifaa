<div class="inputs_div mt-1">
    <div class="row mt-1">
        <!-- begin: input -->
        <div class="col-md-12">
            <div class="form-group">
                <label for="health_problem_ar">{!! __('children.health_problem') !!}</label>
                <textarea rows="2" type="date" wire:model.live="health_problem_ar" class="form-control" id="health_problem_ar"
                    autocomplete="off" placeholder="{!! __('children.health_problem_ar') !!}"
                    @error('health_problem_ar')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                @error('health_problem_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

        <!-- begin: input -->
        <div class="col-md-12">
            <div class="form-group">
                <label for="economic_situation_ar">{!! __('children.economic_situation') !!}</label>
                <textarea rows="2" type="date" wire:model.live="economic_situation_ar" class="form-control"
                    id="economic_situation_ar" autocomplete="off" placeholder="{!! __('children.economic_situation_ar') !!}"
                    @error('economic_situation_ar')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                @error('economic_situation_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->


        <!-- begin: input -->
        <div class="col-md-12">
            <div class="form-group">
                <label for="child_progress_ar">{!! __('children.child_progress') !!}</label>
                <textarea rows="2" type="date" wire:model.live="child_progress_ar" class="form-control" id="child_progress_ar"
                    autocomplete="off" placeholder="{!! __('children.child_progress_ar') !!}"
                    @error('child_progress_ar')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                @error('child_progress_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

        <!-- begin: input -->
        <div class="col-md-12">
            <div class="form-group">
                <label for="expenses_ar">{!! __('children.expenses') !!}</label>
                <textarea rows="2" type="date" wire:model.live="expenses_ar" class="form-control" id="expenses_ar"
                    autocomplete="off" placeholder="{!! __('children.expenses_ar') !!}"
                    @error('expenses_ar')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                @error('expenses_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

        <!-- begin: input -->
        <div class="col-md-12">
            <div class="form-group">
                <label for="sponsorship_funds_cover_ar">{!! __('children.sponsorship_funds_cover') !!} </label>
                <textarea rows="2" type="date" wire:model.live="sponsorship_funds_cover_ar" class="form-control"
                    id="sponsorship_funds_cover_ar" autocomplete="off" placeholder="{!! __('children.sponsorship_funds_cover_ar') !!}"
                    @error('sponsorship_funds_cover_ar')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                @error('sponsorship_funds_cover_ar')
                    <span class="text text-danger">
                        <strong>{!! $message !!}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- end: input -->

    </div>
</div>


@if (admin()->check())
    <div class="inputs_div">

        <div class="row mt-1">
            <!-- begin: input -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="health_problem_en">{!! __('children.health_problem_en') !!}</label>
                    <textarea rows="2" type="date" wire:model.live="health_problem_en" class="form-control" id="health_problem_en"
                        autocomplete="off" placeholder="{!! __('children.health_problem_en') !!}"
                        @error('health_problem_en')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                    @error('health_problem_en')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->

            <!-- begin: input -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="economic_situation_en">{!! __('children.economic_situation_en') !!}</label>
                    <textarea rows="2" type="date" wire:model.live="economic_situation_en" class="form-control"
                        id="economic_situation_en" autocomplete="off" placeholder="{!! __('children.economic_situation_en') !!}"
                        @error('economic_situation_en')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                    @error('economic_situation_en')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->


            <!-- begin: input -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="child_progress_en">{!! __('children.child_progress_en') !!}</label>
                    <textarea rows="2" type="date" wire:model.live="child_progress_en" class="form-control" id="child_progress_en"
                        autocomplete="off" placeholder="{!! __('children.child_progress_en') !!}"
                        @error('child_progress_en')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                    @error('child_progress_en')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->

            <!-- begin: input -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="expenses_en">{!! __('children.expenses_en') !!}</label>
                    <textarea rows="2" type="date" wire:model.live="expenses_en" class="form-control" id="expenses_en"
                        autocomplete="off" placeholder="{!! __('children.expenses_en') !!}"
                        @error('expenses_en')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                    @error('expenses_en')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->

            <!-- begin: input -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="sponsorship_funds_cover_en">{!! __('children.sponsorship_funds_cover_en') !!} </label>
                    <textarea rows="2" type="date" wire:model.live="sponsorship_funds_cover_en" class="form-control"
                        id="sponsorship_funds_cover_en" autocomplete="off" placeholder="{!! __('children.sponsorship_funds_cover_en') !!}"
                        @error('sponsorship_funds_cover_en')  style="border-color: rgb(246, 78, 96)"  @enderror></textarea>
                    @error('sponsorship_funds_cover_en')
                        <span class="text text-danger">
                            <strong>{!! $message !!}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- end: input -->
        </div>


    </div>
@endif

<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" wire:click="detailsInfoSubmit" class="btn btn-primary btn-glow">
            {!! __('children.save') !!}
            <span wire:loading wire:target="detailsInfoSubmit">
                <i class="la la-refresh spinner">
                </i>
            </span>
        </button>

    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
