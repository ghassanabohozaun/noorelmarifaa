<!-- begin: picture_of_the_orphan_child ,orphan_child_birth_certificate, father_death_certificate,guardian_personal_id_photo-->
<div class="row">


    <!-- begin: input -->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="picture_of_the_orphan_child">{!! __('children.picture_of_the_orphan_child') !!}
                {{-- @if ($orphan_child_birth_certificate)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif --}}
            </label>
            <input type="file" class="form-control" wire:model.live="new_picture_of_the_orphan_child">
            <div wire:loading wire:target="new_picture_of_the_orphan_child">{!! __('children.uploading') !!}</div>


            {{-- old --}}
            @if ($picture_of_the_orphan_child && !$new_picture_of_the_orphan_child)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! asset('uploads/children/' . $picture_of_the_orphan_child) !!}" alt="{!! __('children.picture_of_the_orphan_child') !!}"
                        class="img-fluid img-thumbnail round-md" />
                </div>
            @endif


            {{-- new --}}
            @if ($new_picture_of_the_orphan_child)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $new_picture_of_the_orphan_child->temporaryUrl() !!}" alt="{!! __('children.picture_of_the_orphan_child') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                </div>
            @endif

            @error('new_picture_of_the_orphan_child')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input  orphan_child_birth_certificate-->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="orphan_child_birth_certificate">{!! __('children.orphan_child_birth_certificate') !!}
                {{-- @if ($orphan_child_birth_certificate)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif --}}
            </label>
            <input type="file" class="form-control" wire:model.live="new_orphan_child_birth_certificate">
            <div wire:loading wire:target="new_orphan_child_birth_certificate">{!! __('children.uploading') !!}</div>

            {{-- old --}}
            @if ($orphan_child_birth_certificate && !$new_orphan_child_birth_certificate)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! asset('uploads/children/' . $orphan_child_birth_certificate) !!}" alt="{!! __('children.orphan_child_birth_certificate') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                </div>
            @endif
            {{-- new --}}
            @if ($new_orphan_child_birth_certificate)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $new_orphan_child_birth_certificate->temporaryUrl() !!}" alt="{!! __('children.orphan_child_birth_certificate') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                </div>
            @endif

            @error('new_orphan_child_birth_certificate')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input father_death_certificate-->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="father_death_certificate">{!! __('children.father_death_certificate') !!}
                {{-- @if ($father_death_certificate)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif --}}
            </label>
            <input type="file" class="form-control" wire:model.live="new_father_death_certificate">
            <div wire:loading wire:target="new_father_death_certificate">{!! __('children.uploading') !!}</div>

            {{-- old --}}
            @if ($father_death_certificate && !$new_father_death_certificate)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! asset('uploads/children/' . $father_death_certificate) !!}" alt="{!! __('children.father_death_certificate') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                </div>
            @endif
            {{-- new --}}
            @if ($new_father_death_certificate)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $new_father_death_certificate->temporaryUrl() !!}" alt="{!! __('children.father_death_certificate') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                </div>
            @endif

            @error('new_father_death_certificate')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input guardian_personal_id_photo-->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="guardian_personal_id_photo">{!! __('children.guardian_personal_id_photo') !!}
                {{-- @if ($guardian_personal_id_photo)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif --}}
            </label>
            <input type="file" class="form-control" wire:model.live="new_guardian_personal_id_photo">
            <div wire:loading wire:target="new_guardian_personal_id_photo">{!! __('children.uploading') !!}</div>

            {{-- old --}}
            @if ($guardian_personal_id_photo && !$new_guardian_personal_id_photo)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! asset('uploads/children/' . $guardian_personal_id_photo) !!}" alt="profile_image"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                </div>
            @endif
            {{-- new --}}
            @if ($new_guardian_personal_id_photo)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $new_guardian_personal_id_photo->temporaryUrl() !!}" alt="profile_image"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                </div>
            @endif

            @error('new_guardian_personal_id_photo')
                <span class="text text-danger">
                    <strong>{!! $message !!}</strong>
                </span>
            @enderror
        </fieldset>
    </div>
    <!-- end: input -->

</div>
<!-- end: picture_of_the_orphan_child ,orphan_child_birth_certificate, father_death_certificate,guardian_personal_id_photo -->



<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" wire:click ="backStep(3)" class="btn btn-info btn-glow">
            {!! __('children.back') !!}
        </button>
        <button type="button" wire:click="forthStep" class="btn btn-primary btn-glow">
            {!! __('children.next') !!}
        </button>
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
