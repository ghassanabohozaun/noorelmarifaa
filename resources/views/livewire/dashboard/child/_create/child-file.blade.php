<!-- begin: picture_of_the_orphan_child ,orphan_child_birth_certificate, father_death_certificate,guardian_personal_id_photo-->
<div class="row">


    <!-- begin: input -->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="picture_of_the_orphan_child">{!! __('children.picture_of_the_orphan_child') !!}
                @if ($picture_of_the_orphan_child)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="picture_of_the_orphan_child">
            <div wire:loading wire:target="picture_of_the_orphan_child">{!! __('children.uploading') !!}</div>

            @if ($picture_of_the_orphan_child)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $picture_of_the_orphan_child->temporaryUrl() !!}" alt="{!! __('children.picture_of_the_orphan_child') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
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
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="orphan_child_birth_certificate">{!! __('children.orphan_child_birth_certificate') !!}
                @if ($orphan_child_birth_certificate)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="orphan_child_birth_certificate">
            <div wire:loading wire:target="orphan_child_birth_certificate">{!! __('children.uploading') !!}</div>


            @if ($orphan_child_birth_certificate)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $orphan_child_birth_certificate->temporaryUrl() !!}" alt="{!! __('children.orphan_child_birth_certificate') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
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
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="father_death_certificate">{!! __('children.father_death_certificate') !!}
                @if ($father_death_certificate)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="father_death_certificate">
            <div wire:loading wire:target="father_death_certificate">{!! __('children.uploading') !!}</div>


            @if ($father_death_certificate)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $father_death_certificate->temporaryUrl() !!}" alt="{!! __('children.father_death_certificate') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
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
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="guardian_personal_id_photo">{!! __('children.guardian_personal_id_photo') !!}
                @if ($guardian_personal_id_photo)
                    <i class="la la-check" style="color: #3d9464 ;font-weight:bolder"></i>
                @endif
            </label>
            <input type="file" class="form-control" wire:model.live="guardian_personal_id_photo">
            <div wire:loading wire:target="guardian_personal_id_photo">{!! __('children.uploading') !!}</div>



            @if ($guardian_personal_id_photo)
                <div class="position-relative d-inline-block mt-1 mb-2">
                    <img src="{!! $guardian_personal_id_photo->temporaryUrl() !!}" alt="{!! __('children.guardian_personal_id_photo') !!}"
                        class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
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
