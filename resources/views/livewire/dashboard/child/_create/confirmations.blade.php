<div class="row">

    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link {!! $activeTab === 'child_info_tab' ? 'active' : '' !!}"
                    wire:click="setActiveTab('child_info_tab')">{!! __('children.child_info') !!}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! $activeTab === 'parents_info_tab' ? 'active' : '' !!}"
                    wire:click="setActiveTab('parents_info_tab')">{!! __('children.parents_info') !!}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! $activeTab === 'guardian_info_tab' ? 'active' : '' !!}"
                    wire:click="setActiveTab('guardian_info_tab')">{!! __('children.guardian_info') !!}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! $activeTab === 'files_tab' ? 'active' : '' !!}" wire:click="setActiveTab('files_tab')">
                    {!! __('children.files') !!}
                </a>
            </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="tab-content mt-2">
            @if ($activeTab === 'child_info_tab')
                <div id="child_info_tab">
                    @include('livewire.dashboard.child._create._tabs.child-info-tab')
                </div>
            @elseif($activeTab === 'parents_info_tab')
                <div id="parents_info_tab">
                    @include('livewire.dashboard.child._create._tabs.parents-info-tab')
                </div>
            @elseif($activeTab === 'guardian_info_tab')
                <div id="guardian_info_tab">
                    @include('livewire.dashboard.child._create._tabs.guardian-info-tab')
                </div>
            @elseif($activeTab === 'files_tab')
                <div id="files_tab">
                    @include('livewire.dashboard.child._create._tabs.file-info-tab')
                </div>
            @endif
        </div>
    </div>


</div>

<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!} mt-3">
    <div class="col-md-12">
        <button type="button" wire:click ="backStep(4)" class="btn btn-info btn-glow">
            {!! __('children.back') !!}
        </button>
        <button type="button" wire:click ="submitForm" class="btn btn-primary  btn-glow">
            {!! __('children.save') !!}
        </button>
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
