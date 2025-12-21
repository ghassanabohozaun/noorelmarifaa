<div class="row mt-2">
    <ul class="list-group">

        <div class="row">


            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">
                        <p> {!! __('children.picture_of_the_orphan_child') !!}:
                    </strong>

                    {{-- old --}}
                    @if ($picture_of_the_orphan_child && !$new_picture_of_the_orphan_child)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! asset('uploads/children/' . $picture_of_the_orphan_child) !!}" alt="{!! __('children.picture_of_the_orphan_child') !!}"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />

                            <a href="{!! asset('uploads/children/' . $picture_of_the_orphan_child) !!}" target="_blank"
                                class="badge badge-sm badge-primary position-absolute" style="top: 8px; left: 8px;">
                                {!! __('general.download') !!}
                            </a>
                        </div>
                    @endif


                    {{-- new --}}
                    @if ($new_picture_of_the_orphan_child)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $new_picture_of_the_orphan_child->temporaryUrl() !!}" alt="{!! __('children.picture_of_the_orphan_child') !!}"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>


            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">
                        <p> {!! __('children.orphan_child_birth_certificate') !!}:
                    </strong>
                    </p>
                    {{-- old --}}
                    @if ($orphan_child_birth_certificate && !$new_orphan_child_birth_certificate)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! asset('uploads/children/' . $orphan_child_birth_certificate) !!}" alt="{!! __('children.orphan_child_birth_certificate') !!}"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />

                            <a href="{!! asset('uploads/children/' . $orphan_child_birth_certificate) !!}" target="_blank"
                                class="badge badge-sm badge-primary position-absolute" style="top: 8px; left: 8px;">
                                {!! __('general.download') !!}
                            </a>
                        </div>
                    @endif
                    {{-- new --}}
                    @if ($new_orphan_child_birth_certificate)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $new_orphan_child_birth_certificate->temporaryUrl() !!}" alt="{!! __('children.orphan_child_birth_certificate') !!}"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>

            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">
                        <p> {!! __('children.father_death_certificate') !!}:
                    </strong>
                    </p>
                    {{-- old --}}
                    @if ($father_death_certificate && !$new_father_death_certificate)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! asset('uploads/children/' . $father_death_certificate) !!}" alt="{!! __('children.father_death_certificate') !!}"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                            <a href="{!! asset('uploads/children/' . $father_death_certificate) !!}" target="_blank"
                                class="badge badge-sm badge-primary position-absolute" style="top: 8px; left: 8px;">
                                {!! __('general.download') !!}
                            </a>
                        </div>
                    @endif
                    {{-- new --}}
                    @if ($new_father_death_certificate)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $new_father_death_certificate->temporaryUrl() !!}" alt="{!! __('children.father_death_certificate') !!}"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>


            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">
                        <p> {!! __('children.guardian_personal_id_photo') !!}:
                    </strong>
                    </p>
                    {{-- old --}}
                    @if ($guardian_personal_id_photo && !$new_guardian_personal_id_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! asset('uploads/children/' . $guardian_personal_id_photo) !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />

                            <a href="{!! asset('uploads/children/' . $guardian_personal_id_photo) !!}" target="_blank"
                                class="badge badge-sm badge-primary position-absolute" style="top: 8px; left: 8px;">
                                {!! __('general.download') !!}
                            </a>
                        </div>
                    @endif
                    {{-- new --}}
                    @if ($new_guardian_personal_id_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $new_guardian_personal_id_photo->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>


            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">
                        <p> {!! __('children.child_activity_photo') !!}:
                    </strong>
                    </p>
                    {{-- old --}}
                    @if ($child_activity_photo && !$new_child_activity_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! asset('uploads/children/' . $child_activity_photo) !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />

                            <a href="{!! asset('uploads/children/' . $child_activity_photo) !!}" target="_blank"
                                class="badge badge-sm badge-primary position-absolute" style="top: 8px; left: 8px;">
                                {!! __('general.download') !!}
                            </a>
                        </div>
                    @endif
                    {{-- new --}}
                    @if ($new_child_activity_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $new_child_activity_photo->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>

            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">
                        <p> {!! __('children.child_longitudinal_photo') !!}:
                    </strong>
                    </p>
                    {{-- old --}}
                    @if ($child_longitudinal_photo && !$new_child_longitudinal_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! asset('uploads/children/' . $child_longitudinal_photo) !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />

                            <a href="{!! asset('uploads/children/' . $child_longitudinal_photo) !!}" target="_blank"
                                class="badge badge-sm badge-primary position-absolute" style="top: 8px; left: 8px;">
                                {!! __('general.download') !!}
                            </a>
                        </div>
                    @endif
                    {{-- new --}}
                    @if ($new_child_longitudinal_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $new_child_longitudinal_photo->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>



            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">
                        <p> {!! __('children.child_with_family_photo') !!}:
                    </strong>
                    </p>
                    {{-- old --}}
                    @if ($child_with_family_photo && !$new_child_with_family_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! asset('uploads/children/' . $child_with_family_photo) !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />

                            <a href="{!! asset('uploads/children/' . $child_with_family_photo) !!}" target="_blank"
                                class="badge badge-sm badge-primary position-absolute" style="top: 8px; left: 8px;">
                                {!! __('general.download') !!}
                            </a>
                        </div>
                    @endif
                    {{-- new --}}
                    @if ($new_child_with_family_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $new_child_with_family_photo->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>

        </div>

    </ul>
</div>
