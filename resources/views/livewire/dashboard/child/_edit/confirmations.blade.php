<h4>{!! __('children.confirmations') !!}</h4>
<hr>

<div class="mt-3">

    <ul class="nav nav-tabs mt-3">
        <li class="nav-item">
            <a class="nav-link active" id="base-child-info" data-toggle="tab" aria-controls="child-info" href="#child-info"
                aria-expanded="true">{!! __('children.child_info') !!}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="base-parent-info" data-toggle="tab" aria-controls="parent-info" href="#parent-info"
                aria-expanded="false">{!! __('children.parents_info') !!}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="base-guardian-info" data-toggle="tab" aria-controls="guardian-info"
                href="#guardian-info" aria-expanded="false">{!! __('children.guardian_info') !!}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="base-file-info" data-toggle="tab" aria-controls="file-info" href="#file-info"
                aria-expanded="false">{!! __('children.files') !!}</a>
        </li>
    </ul>

    <div class="tab-content px-1 pt-1">
        <div role="tabpanel" class="tab-pane active" id="child-info" aria-expanded="true"
            aria-labelledby="base-child-info">
            @include('livewire.dashboard.child._edit._tabs.child-info-tab')
        </div>
        <div class="tab-pane" id="parent-info" aria-labelledby="base-parent-info">
            @include('livewire.dashboard.child._edit._tabs.parents-info-tab')
        </div>
        <div class="tab-pane" id="guardian-info" aria-labelledby="base-guardian-info">
            @include('livewire.dashboard.child._edit._tabs.guardian-info-tab')
        </div>
        <div class="tab-pane" id="file-info" aria-labelledby="base-file-info">
            @include('livewire.dashboard.child._edit._tabs.file-info-tab')
        </div>
    </div>

</div>

<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!} mt-3">
    <div class="col-md-12">
        <button type="button" wire:click ="backStep(4)" class="btn btn-info btn-glow">
            {!! __('children.back') !!}
        </button>
        <button type="button" wire:click ="submitForm" class="btn btn-primary btn-glow">
            {!! __('children.save') !!}
            <span wire:loading wire:target="submitForm">
                <i class="la la-refresh spinner">
                </i>
            </span>
        </button>
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
