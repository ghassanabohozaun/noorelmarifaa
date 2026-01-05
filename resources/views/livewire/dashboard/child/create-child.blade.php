<form class="form" method="POST">
    @csrf
    <div class="form-body">

        @if (!empty($wariningMessage))
            <div class="container-fluid mt-1 mb-1 ">
                <div class="alert alert-warning">
                    {!! $wariningMessage !!}
                </div>
            </div>
        @endif

        <div>
            <ul class="nav nav-tabs nav-underline no-hover-bg">
                <li class="nav-item" wire:click ="childInfoClick">
                    <a class="nav-link  {!! $currentStep == 1 ? 'active' : '' !!}">{!! __('children.child_info') !!}</a>
                </li>
                <li class="nav-item" wire:click ="parentsInfoClick">
                    <a class="nav-link {!! $currentStep == 2 ? 'active' : '' !!}">{!! __('children.parents_info') !!}</a>
                </li>
                <li class="nav-item" wire:click ="familyInfoClick">
                    <a class="nav-link {!! $currentStep == 3 ? 'active' : '' !!}">{!! __('children.family_info') !!}</a>
                </li>
                <li class="nav-item" wire:click ="guardianInfoClick">
                    <a class="nav-link {!! $currentStep == 4 ? 'active' : '' !!}">{!! __('children.guardian_info') !!}</a>
                </li>
                <li class="nav-item" wire:click ="detailsInfoClick">
                    <a class="nav-link {!! $currentStep == 5 ? 'active' : '' !!}">{!! __('children.details_info') !!}</a>
                </li>
                <li class="nav-item" wire:click ="filesClick">
                    <a class="nav-link {!! $currentStep == 6 ? 'active' : '' !!}">{!! __('children.files') !!}</a>
                </li>
            </ul>

            <div class="tab-content px-1 pt-1">
                <div role="tabpanel" class="tab-pane {!! $currentStep == 1 ? 'active' : '' !!}">
                    @include('livewire.dashboard.child._create.orphan-child')
                </div>
                <div class="tab-pane {!! $currentStep == 2 ? 'active' : '' !!}" aria-labelledby="base-education">
                    @include('livewire.dashboard.child._create.child-parents')
                </div>
                <div class="tab-pane {!! $currentStep == 3 ? 'active' : '' !!}" aria-labelledby="base-education">
                    @include('livewire.dashboard.child._create.child-family')
                </div>
                <div class="tab-pane {!! $currentStep == 4 ? 'active' : '' !!}" aria-labelledby="base-job-details">
                    @include('livewire.dashboard.child._create.child-guardian')
                </div>
                <div class="tab-pane {!! $currentStep == 5 ? 'active' : '' !!}" aria-labelledby="base-job-details">
                    @include('livewire.dashboard.child._create.child-details')
                </div>

                <div class="tab-pane {!! $currentStep == 6 ? 'active' : '' !!}" aria-labelledby="base-job-details">
                    @include('livewire.dashboard.child._create.child-file')
                </div>
            </div>

        </div>






    </div>
</form>
