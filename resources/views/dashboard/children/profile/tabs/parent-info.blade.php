<div class="row">

    <!-- begin: first -->
    <div class="col-md-4  mt-1">
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="card">
                    <div class="card-head">
                        <div class="card-body">
                            <ul class="list-group">

                                <h4 class="text-info px-1 mb-1"> {!! __('children.child_family') !!}</h4>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.number_of_people_including_mother') !!}:</strong>
                                    &nbsp;
                                    {!! $child->childFamily->number_of_people_including_mother !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.male_number') !!}:</strong>
                                    &nbsp;{!! $child->childFamily->male_number !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.female_number') !!}:</strong>
                                    &nbsp;{!! $child->childFamily->female_number !!}
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </section><!-- end: sections  -->
        </div>
    </div>
    <!-- end: first -->

    <!-- begin: secend -->
    <div class="col-md-4 mt-1">
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="card">
                    <div class="card-head">
                        <div class="card-body">

                            <ul class="list-group">

                                <h4 class="text-info px-1 mb-1"> {!! __('children.child_father') !!}</h4>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.father_full_name') !!}:</strong>
                                    &nbsp;{!! $child->childFather->father_full_name !!}
                                </li>


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.father_personal_id') !!}:</strong>
                                    &nbsp;{!! $child->childFather->father_personal_id !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.father_date_of_death') !!}:</strong>
                                    &nbsp;{!! $child->childFather->father_date_of_death !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.father_respon_of_death') !!}:</strong>
                                    &nbsp;{!! $child->childFather->childFatherResponOfDeath() !!}
                                </li>

                            </ul>


                        </div>
                    </div>

                </div>
            </section><!-- end: sections  -->
        </div>
    </div>
    <!-- end: secend -->

    <!-- begin: third -->
    <div class="col-md-4 mt-1">
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="card">
                    <div class="card-head">
                        <div class="card-body">

                            <ul class="list-group">

                                <h4 class="text-info px-1 mb-1">{!! __('children.child_mother') !!}</h4>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.mother_full_name') !!}:</strong>
                                    &nbsp;{!! $child->childMother->mother_full_name !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.mother_personal_id') !!}:</strong>
                                    &nbsp;{!! $child->childMother->mother_personal_id !!}
                                </li>
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.mother_date_of_death') !!}:</strong>
                                    &nbsp;{!! $child->childMother->mother_date_of_death !!}
                                </li>
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.is_mother_alive') !!}:</strong>
                                    &nbsp;{!! $child->childMother->is_mother_alive == 0 ? __('children.no') : __('children.yes') !!}
                                </li>
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.is_mother_the_guardian') !!}:</strong>
                                    &nbsp;{!! $child->childMother->is_mother_the_guardian == 0 ? __('children.no') : __('children.yes') !!}
                                </li>

                            </ul>


                        </div>
                    </div>

                </div>
            </section><!-- end: sections  -->
        </div>
    </div>
    <!-- end: third -->

</div>
