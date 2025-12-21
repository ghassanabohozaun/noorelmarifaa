<div class="row mt-2">
    <ul class="list-group">
        <div class="row">

            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                        <p> {!! __('children.picture_of_the_orphan_child') !!}:
                    </strong>
                    </p>
                    @if ($picture_of_the_orphan_child)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $picture_of_the_orphan_child->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>



            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                        <p> {!! __('children.orphan_child_birth_certificate') !!}:
                    </strong>
                    </p>
                    @if ($orphan_child_birth_certificate)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $orphan_child_birth_certificate->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>


            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                        <p> {!! __('children.father_death_certificate') !!}:
                    </strong>
                    </p>
                    @if ($father_death_certificate)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $father_death_certificate->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>

            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                        <p> {!! __('children.guardian_personal_id_photo') !!}:
                    </strong>
                    </p>
                    @if ($guardian_personal_id_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $guardian_personal_id_photo->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>


            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                        <p> {!! __('children.child_activity_photo') !!}:
                    </strong>
                    </p>
                    @if ($child_activity_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $child_activity_photo->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>


            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                        <p> {!! __('children.child_longitudinal_photo') !!}:
                    </strong>
                    </p>
                    @if ($child_longitudinal_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $child_longitudinal_photo->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>

            <div class="col-lg-2">
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                        <p> {!! __('children.child_with_family_photo') !!}:
                    </strong>
                    </p>
                    @if ($child_with_family_photo)
                        <div class="position-relative d-inline-block mr-2 mb-2">
                            <img src="{!! $child_with_family_photo->temporaryUrl() !!}" alt="profile_image"
                                class="w-100 shadow-sm img-fluid img-thumbnail round-md" style="height: 180px" />
                        </div>
                    @endif
                </li>
            </div>

        </div>

    </ul>
</div>
