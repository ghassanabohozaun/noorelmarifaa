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
                                        class="text-dark">{!! __('children.personal_id') !!}:</strong>
                                    &nbsp;{!! $child->personal_id !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.birthday') !!}:</strong>
                                    &nbsp;{!! $child->birthday !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.classification') !!}:</strong>
                                    &nbsp;{!! $child->childClassification() !!}
                                </li>


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.gender') !!}:</strong>
                                    &nbsp;{!! $child->childGender() !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.class') !!}:</strong>
                                    &nbsp;{!! $child->class !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.health_status') !!}:</strong>
                                    &nbsp;{!! $child->childHealthStatus() !!}
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

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.disease_clarification') !!}:</strong>
                                    &nbsp;{!! $child->disease_clarification !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.authorized_contact_number') !!}:</strong>
                                    &nbsp;
                                    {!! $child->authorized_contact_number !!}
                                </li>


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.backup_contact_number') !!}:
                                    </strong>
                                    &nbsp;{!! $child->backup_contact_number !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.whatsApp_number') !!}:
                                    </strong>
                                    &nbsp;{!! $child->whatsApp_number !!}
                                </li>


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.governoate_id') !!}:</strong>
                                    &nbsp;{!! $child->governorate->name !!}
                                </li>


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.city_id') !!}:
                                    </strong>
                                    &nbsp;{!! $child->city->name !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.address_details') !!}:
                                    </strong>
                                    &nbsp;{!! $child->address_details !!}
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

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.school_name') !!}:</strong>
                                    &nbsp;{!! $child->school_name !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.school_address') !!}:</strong>
                                    &nbsp;
                                    {!! $child->school_address !!}
                                </li>


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.school_tel') !!}:
                                    </strong>
                                    &nbsp;{!! $child->school_tel !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.school_type') !!}:
                                    </strong>
                                    &nbsp;{!! $child->school_type !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.pay_school_fees') !!}:</strong>
                                    &nbsp;{!! $child->pay_school_fees !!}
                                </li>


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.fees_per_month') !!}:
                                    </strong>
                                    &nbsp;{!! $child->fees_per_month !!}
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
