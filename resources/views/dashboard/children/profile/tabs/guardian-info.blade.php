<div class="row">

    <!-- begin: first -->
    <div class="col-md-4  mt-1">
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="card">
                    <div class="card-head">
                        <div class="card-body">
                            <ul class="list-group">


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.guardian_full_name') !!}:</strong>
                                    &nbsp;{!! $child->childGuardian->guardian_full_name ?? '' !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.guardian_personal_id') !!}:</strong>
                                    &nbsp;{!! $child->childGuardian->guardian_personal_id ?? '' !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.guardian_birthday') !!}:</strong>
                                    &nbsp;{!! $child->childGuardian->guardian_birthday ?? '' !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.guardian_work') !!}:</strong>
                                    &nbsp;{!! $child->childGuardian->guardian_work ?? '' !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.guardian_address') !!}:</strong>
                                    &nbsp;{!! $child->childGuardian->guardian_address ?? '' !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.why_not_the_mother_is_guardian') !!}:</strong>
                                    @if ($child->childGuardian)
                                        &nbsp;{!! $child->childGuardian->childWhyNotTheMotherIsGuardian() !!}
                                    @endif
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.guardian_relationship_with_the_child') !!}:</strong>
                                    @if ($child->childGuardian)
                                        &nbsp;{!! $child->childGuardian->childGuardianRelationshipWithTheChild() !!}
                                    @endif
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </section><!-- end: sections  -->
        </div>
    </div>
    <!-- end: first -->


</div>
