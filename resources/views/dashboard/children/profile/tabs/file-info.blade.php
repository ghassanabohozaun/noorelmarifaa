<hr class="horizontal gray-light my-2">
<ul class="list-group">

    <div class="row">

        {{-- picture_of_the_orphan_child --}}
        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.picture_of_the_orphan_child') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" target="_blank"
                        class="badge badge-sm badge-primary position-absolute" style="top: 3px; left: 3px;">
                        <i class="la la-download"></i>
                        {!! __('general.download') !!}
                    </a>

                    <a href="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" target="_blank"
                        class="badge badge-sm badge-warning position-absolute" style="top: 3px; right: 3px;"
                        id="show_child_photo_modal">
                        {!! __('general.view') !!}
                    </a>
                </div>
            </li>
        </div>


        {{-- orphan_child_birth_certificate --}}
        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.orphan_child_birth_certificate') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->orphan_child_birth_certificate) !!}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->orphan_child_birth_certificate) !!}" target="_blank"
                        class="badge badge-sm badge-primary position-absolute" style="top: 3px; left: 3px;">
                        {!! __('general.download') !!}
                    </a>

                    <a href="{!! asset('uploads/children/' . $child->childFile->orphan_child_birth_certificate) !!}" target="_blank"
                        class="badge badge-sm badge-warning position-absolute"
                        id="show_child_birthday_certification_modal" style="top: 3px; right: 3px;">
                        {!! __('general.view') !!}
                    </a>

                </div>
            </li>

        </div>

        {{-- father_death_certificate --}}
        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.father_death_certificate') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->father_death_certificate) !!}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->father_death_certificate) !!}" target="_blank"
                        class="badge badge-sm badge-primary position-absolute" style="top: 3px; left: 3px;">
                        {!! __('general.download') !!}
                    </a>

                    <a href="{!! asset('uploads/children/' . $child->childFile->father_death_certificate) !!}" target="_blank"
                        class="badge badge-sm badge-warning position-absolute" id="show_death_certification_modal"
                        style="top: 3px; right: 3px;">
                        {!! __('general.view') !!}
                    </a>

                </div>
            </li>
        </div>

        {{-- guardian_personal_id_photo --}}
        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.guardian_personal_id_photo') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->guardian_personal_id_photo) !!}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->guardian_personal_id_photo) !!}" target="_blank"
                        class="badge badge-sm badge-primary position-absolute" style="top: 3px; left: 3px;">
                        {!! __('general.download') !!}
                    </a>

                    <a href="{!! asset('uploads/children/' . $child->childFile->guardian_personal_id_photo) !!}" target="_blank"
                        class="badge badge-sm badge-warning position-absolute"
                        id="show_guardian_personal_id_certification_modal" style="top: 3px; right: 3px;">
                        {!! __('general.view') !!}
                    </a>
                </div>
            </li>
        </div>



        {{-- child_activity_photo --}}
        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.child_activity_photo') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->child_activity_photo) !!}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->child_activity_photo) !!}" target="_blank"
                        class="badge badge-sm badge-primary position-absolute" style="top: 3px; left: 3px;">
                        {!! __('general.download') !!}
                    </a>

                    <a href="{!! asset('uploads/children/' . $child->childFile->child_activity_photo) !!}" target="_blank"
                        class="badge badge-sm badge-warning position-absolute" id="show_child_activity_photo_modal"
                        style="top: 3px; right: 3px;">
                        {!! __('general.view') !!}
                    </a>
                </div>
            </li>
        </div>


        {{-- child_longitudinal_photo --}}
        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.child_longitudinal_photo') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->child_longitudinal_photo) !!}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->child_longitudinal_photo) !!}" target="_blank"
                        class="badge badge-sm badge-primary position-absolute" style="top: 3px; left: 3px;">
                        {!! __('general.download') !!}
                    </a>

                    <a href="{!! asset('uploads/children/' . $child->childFile->child_longitudinal_photo) !!}" target="_blank"
                        class="badge badge-sm badge-warning position-absolute" id="show_child_longitudinal_photo_modal"
                        style="top: 3px; right: 3px;">
                        {!! __('general.view') !!}
                    </a>
                </div>
            </li>
        </div>

        {{-- child_with_family_photo --}}
        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.child_with_family_photo') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->child_with_family_photo) !!}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->child_with_family_photo) !!}" target="_blank"
                        class="badge badge-sm badge-primary position-absolute" style="top: 3px; left: 3px;">
                        {!! __('general.download') !!}
                    </a>

                    <a href="{!! asset('uploads/children/' . $child->childFile->child_with_family_photo) !!}" target="_blank"
                        class="badge badge-sm badge-warning position-absolute" id="show_child_with_family_photo_modal"
                        style="top: 3px; right: 3px;">
                        {!! __('general.view') !!}
                    </a>
                </div>
            </li>
        </div>


    </div>
</ul>



{{-- begin modal --}}
<div class="modal fade" id="showChildPhoto" tabindex="-1" role="dialog" aria-labelledby="showChildPhotoLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <form class="form" action="" method="POST" enctype="multipart/form-data" id='update_admin_form'>
            @csrf
            @method('PUT')
            <div class="modal-content">

                <!--begin::modal header-->
                <div class="modal-header">
                    <h5 class="modal-title" id="showChildPhotoLabel">{!! $child->childFullName() !!}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--end::modal header-->

                <!--begin::modal body-->
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-12">


                            <!-- begin: row -->
                            <div class="row">


                                <img src="{!! asset('uploads/children/' . $child->childFile->guardian_personal_id_photo) !!}" class="w-100 border-radius-lg shadow-sm"
                                    id="myChildImage" />


                            </div>
                            <!-- end: row -->

                        </div>
                    </div>
                    <!--end: form-->
                </div>
                <!--end::modal body-->

            </div>
        </form>
    </div>
</div>
{{-- end  modal --}}

@push('scripts')
    <script type="text/javascript">
        // show edit modal
        let path = '';


        $('body').on('click', '#show_child_photo_modal', function(e) {
            e.preventDefault();

            path = document.getElementById("show_child_photo_modal").href;

            let imgElement = document.getElementById("myChildImage");
            imgElement.src = path;

            $('#showChildPhoto').modal('show');
        })


        $('body').on('click', '#show_child_birthday_certification_modal', function(e) {
            e.preventDefault();

            path = document.getElementById("show_child_birthday_certification_modal").href;

            let imgElement = document.getElementById("myChildImage");
            imgElement.src = path;

            $('#showChildPhoto').modal('show');
        })


        $('body').on('click', '#show_death_certification_modal', function(e) {
            e.preventDefault();

            path = document.getElementById("show_death_certification_modal").href;

            let imgElement = document.getElementById("myChildImage");
            imgElement.src = path;

            $('#showChildPhoto').modal('show');
        })


        $('body').on('click', '#show_guardian_personal_id_certification_modal', function(e) {
            e.preventDefault();

            path = document.getElementById("show_guardian_personal_id_certification_modal").href;

            let imgElement = document.getElementById("myChildImage");
            imgElement.src = path;

            $('#showChildPhoto').modal('show');
        })


        $('body').on('click', '#show_child_activity_photo_modal', function(e) {
            e.preventDefault();

            path = document.getElementById("show_child_activity_photo_modal").href;

            let imgElement = document.getElementById("myChildImage");
            imgElement.src = path;

            $('#showChildPhoto').modal('show');
        })

        $('body').on('click', '#show_child_longitudinal_photo_modal', function(e) {
            e.preventDefault();

            path = document.getElementById("show_child_longitudinal_photo_modal").href;

            let imgElement = document.getElementById("myChildImage");
            imgElement.src = path;

            $('#showChildPhoto').modal('show');
        })

        $('body').on('click', '#show_child_with_family_photo_modal', function(e) {
            e.preventDefault();

            path = document.getElementById("show_child_with_family_photo_modal").href;

            let imgElement = document.getElementById("myChildImage");
            imgElement.src = path;

            $('#showChildPhoto').modal('show');
        })
    </script>
@endpush
