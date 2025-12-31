<h4>{!! __('children.files') !!}</h4>
<hr>
<div class="row mt-3">


    <!-- begin: input -->
    <div class="col-md-2">
        <fieldset class="form-group">
            <label for="picture_of_the_orphan_child">{!! __('children.picture_of_the_orphan_child') !!}
                @if ($picture_of_the_orphan_child)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="picture_of_the_orphan_child" accept="image/*"
                @error('picture_of_the_orphan_child')  style="border-color: rgb(246, 78, 96)"  @enderror>

            <div wire:loading wire:target="picture_of_the_orphan_child">{!! __('children.uploading') !!}</div>

            @if ($picture_of_the_orphan_child)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $picture_of_the_orphan_child->temporaryUrl() !!}" alt="{!! __('children.picture_of_the_orphan_child') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                </div>
            @endif
            @error('picture_of_the_orphan_child')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-2">
        <fieldset class="form-group">
            <label for="orphan_child_birth_certificate">{!! __('children.orphan_child_birth_certificate') !!}
                @if ($orphan_child_birth_certificate)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="orphan_child_birth_certificate" accept="image/*"
                @error('orphan_child_birth_certificate')  style="border-color: rgb(246, 78, 96)"  @enderror>

            <div wire:loading wire:target="orphan_child_birth_certificate">{!! __('children.uploading') !!}</div>


            @if ($orphan_child_birth_certificate)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $orphan_child_birth_certificate->temporaryUrl() !!}" alt="{!! __('children.orphan_child_birth_certificate') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                </div>
            @endif
            @error('orphan_child_birth_certificate')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-2">
        <fieldset class="form-group">
            <label for="father_death_certificate">{!! __('children.father_death_certificate') !!}
                @if ($father_death_certificate)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="father_death_certificate" accept="image/*"
                @error('father_death_certificate')  style="border-color: rgb(246, 78, 96)"  @enderror>

            <div wire:loading wire:target="father_death_certificate">{!! __('children.uploading') !!}</div>


            @if ($father_death_certificate)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $father_death_certificate->temporaryUrl() !!}" alt="{!! __('children.father_death_certificate') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                </div>
            @endif
            @error('father_death_certificate')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-2">
        <fieldset class="form-group">
            <label for="guardian_personal_id_photo">{!! __('children.guardian_personal_id_photo') !!}
                @if ($guardian_personal_id_photo)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="guardian_personal_id_photo" accept="image/*"
                @error('guardian_personal_id_photo')  style="border-color: rgb(246, 78, 96)"  @enderror>

            <div wire:loading wire:target="guardian_personal_id_photo">{!! __('children.uploading') !!}</div>

            @if ($guardian_personal_id_photo)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $guardian_personal_id_photo->temporaryUrl() !!}" alt="{!! __('children.guardian_personal_id_photo') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                </div>
            @endif
            @error('guardian_personal_id_photo')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->



    <!-- begin: input -->
    <div class="col-md-2">
        <fieldset class="form-group">
            <label for="child_activity_photo">{!! __('children.child_activity_photo') !!}
                @if ($child_activity_photo)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="child_activity_photo" accept="image/*"
                @error('child_activity_photo')  style="border-color: rgb(246, 78, 96)"  @enderror>

            <div wire:loading wire:target="child_activity_photo">{!! __('children.uploading') !!}</div>

            @if ($child_activity_photo)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $child_activity_photo->temporaryUrl() !!}" alt="{!! __('children.child_activity_photo') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                </div>
            @endif
            @error('child_activity_photo')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-2">
        <fieldset class="form-group">
            <label for="child_longitudinal_photo">{!! __('children.child_longitudinal_photo') !!}
                @if ($child_longitudinal_photo)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="child_longitudinal_photo" accept="image/*"
                @error('child_longitudinal_photo')  style="border-color: rgb(246, 78, 96)"  @enderror>

            <div wire:loading wire:target="child_longitudinal_photo">{!! __('children.uploading') !!}</div>

            @if ($child_longitudinal_photo)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $child_longitudinal_photo->temporaryUrl() !!}" alt="{!! __('children.child_longitudinal_photo') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                </div>
            @endif
            @error('child_longitudinal_photo')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-2 mt-3">
        <fieldset class="form-group">
            <label for="child_with_family_photo">{!! __('children.child_with_family_photo') !!}
                @if ($child_with_family_photo)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="child_with_family_photo" accept="image/*"
                @error('child_with_family_photo')  style="border-color: rgb(246, 78, 96)"  @enderror>

            <div wire:loading wire:target="child_with_family_photo">{!! __('children.uploading') !!}</div>

            @if ($child_with_family_photo)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $child_with_family_photo->temporaryUrl() !!}" alt="{!! __('children.child_with_family_photo') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                </div>
            @endif
            @error('child_with_family_photo')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

</div>



<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" wire:click ="backStep(4)" class="btn btn-info btn-glow">
            {!! __('children.back') !!}
            <span wire:loading wire:target="backStep(4)">
                <i class="la la-refresh spinner"></i>
            </span>
        </button>
        <button type="button" wire:click="fifthStepSubmit" class="btn btn-primary btn-glow">
            {!! __('children.next') !!}
            <span wire:loading wire:target="fifthStepSubmit">
                <i class="la la-refresh spinner">
                </i>
            </span>
        </button>
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
