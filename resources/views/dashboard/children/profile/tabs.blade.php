<ul class="nav nav-tabs nav-linetriangle  mt-2 ">
    <li class="nav-item">
        <a class="nav-link active" id="baseVerticalLeft1-tab1" data-toggle="tab" aria-controls="tabVerticalLeft11"
            href="#tabVerticalLeft11" aria-expanded="true">{!! __('children.child_info') !!}</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" id="baseVerticalLeft1-tab2" data-toggle="tab" aria-controls="tabVerticalLeft12"
            href="#tabVerticalLeft12" aria-expanded="false">{!! __('children.parents_info') !!}</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" id="baseVerticalLeft1-tab3" data-toggle="tab" aria-controls="tabVerticalLeft13"
            href="#tabVerticalLeft13" aria-expanded="false">{!! __('children.family_info') !!}</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" id="baseVerticalLeft1-tab4" data-toggle="tab" aria-controls="tabVerticalLeft14"
            href="#tabVerticalLeft14" aria-expanded="false">{!! __('children.guardian_info') !!}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="baseVerticalLeft1-tab5" data-toggle="tab" aria-controls="tabVerticalLeft15"
            href="#tabVerticalLeft15" aria-expanded="false">{!! __('children.files') !!}</a>
    </li>


    <li class="nav-item">
        <a class="nav-link" id="baseVerticalLeft1-tab6" data-toggle="tab" aria-controls="tabVerticalLeft16"
            href="#tabVerticalLeft16" aria-expanded="false">{!! __('children.details') !!}</a>
    </li>
</ul>

<div class="tab-content px-1 pt-1 ">
    <!--------------------------------------- child info ------------------------>
    <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft11" aria-expanded="true"
        aria-labelledby="baseVerticalLeft1-tab1">
        @include('dashboard.children.profile.tabs.child-info')
    </div>

    <!--------------------------------------- parent info ------------------------>
    <div role="tabpanel" class="tab-pane" id="tabVerticalLeft12" aria-expanded="true"
        aria-labelledby="baseVerticalLeft1-tab2">
        @include('dashboard.children.profile.tabs.parent-info')
    </div>

    <!--------------------------------------- parent info ------------------------>
    <div role="tabpanel" class="tab-pane" id="tabVerticalLeft13" aria-expanded="true"
        aria-labelledby="baseVerticalLeft1-tab3">
        @include('dashboard.children.profile.tabs.family-info')
    </div>

    <!--------------------------------------- guardian info ------------------------>
    <div class="tab-pane" id="tabVerticalLeft14" aria-labelledby="baseVerticalLeft1-tab4">
        @include('dashboard.children.profile.tabs.guardian-info')
    </div>

    <!---------------------------------------  file info ------------------------>
    <div class="tab-pane" id="tabVerticalLeft15" aria-labelledby="baseVerticalLeft1-tab5">
        @include('dashboard.children.profile.tabs.file-info')
    </div>

    <!--------------------------------------- details ------------------------>
    <div class="tab-pane" id="tabVerticalLeft16" aria-labelledby="baseVerticalLeft1-tab6">
        @include('dashboard.children.profile.tabs.child-details')
    </div>
</div>
