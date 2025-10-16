<form class="form" method="POST">
    @csrf
    <div class="form-body">

        @if (!empty($successMessage))
            <div class="container-fluid">
                <div class="alert alert-success">
                    {!! $successMessage !!}
                </div>
            </div>
        @endif

        <!-- begin: steps row -->
        <div class="container-fluid">
            <div class="col-md-12 col-sm-12">
                <div class="step-wizard ">
                    <ul class="step-wizard-list">
                        <li class="step-wizard-item  {!! $currentStep == 1 ? 'current-item' : '' !!}">
                            <span class="progress-count">1</span>
                            <span class="progress-label">{!! __('children.child_info') !!}</span>
                        </li>
                        <li class="step-wizard-item {!! $currentStep == 2 ? 'current-item' : '' !!}">
                            <span class="progress-count">2</span>
                            <span class="progress-label">{!! __('children.parents_info') !!}</span>
                        </li>
                        <li class="step-wizard-item {!! $currentStep == 3 ? 'current-item' : '' !!}">
                            <span class="progress-count">3</span>
                            <span class="progress-label">{!! __('children.guardian_info') !!}</span>
                        </li>
                        <li class="step-wizard-item {!! $currentStep == 4 ? 'current-item' : '' !!}">
                            <span class="progress-count">4</span>
                            <span class="progress-label">{!! __('children.files') !!}</span>
                        </li>
                        <li class="step-wizard-item {!! $currentStep == 5 ? 'current-item' : '' !!}">
                            <span class="progress-count">5</span>
                            <span class="progress-label">{!! __('children.confirmations') !!}</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- end: steps row -->


        <!-- begin: first orphan child -->
        <div class="container-fluid {!! $currentStep != 1 ? 'displayNone' : '' !!}">
            @include('livewire.dashboard.child._edit.orphan-child')
        </div>
        <!-- end: first orphan child  -->


        <!-- begin: second child parents -->
        <div class="container-fluid {!! $currentStep != 2 ? 'displayNone' : '' !!}">
            @include('livewire.dashboard.child._edit.child-parents')

        </div>
        <!-- end: second child parents -->


        <!-- begin: third child guardian -->
        <div class="container-fluid {!! $currentStep != 3 ? 'displayNone' : '' !!}">
            @include('livewire.dashboard.child._edit.child-guardian')
        </div>
        <!-- end: third child guardian -->


        <!-- begin: third child file -->
        <div class="container-fluid {!! $currentStep != 4 ? 'displayNone' : '' !!}">
            @include('livewire.dashboard.child._edit.child-file')

        </div>
        <!-- end: third child file -->

        <!-- begin: fourth confirmations -->
        <div class="container-fluid {!! $currentStep != 5 ? 'displayNone' : '' !!}">
            @include('livewire.dashboard.child._edit.confirmations')
        </div>
        <!-- end: fourth confirmations -->

    </div>
</form>
