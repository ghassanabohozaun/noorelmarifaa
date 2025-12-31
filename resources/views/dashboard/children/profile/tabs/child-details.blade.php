<div class="row">

    <!-- begin: first -->
    <div class="col-md-12  mt-1">
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="card">
                    <div class="card-head">
                        <div class="card-body">
                            <ul class="list-group">


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.health_problem') !!}:</strong>
                                    &nbsp;{!! $child->childDetails->health_problem !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.economic_situation') !!}:</strong>
                                    &nbsp;{!! $child->childDetails->economic_situation !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.child_progress') !!}:</strong>
                                    &nbsp;{!! $child->childDetails->child_progress !!}
                                </li>


                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.expenses') !!}:</strong>
                                    &nbsp;{!! $child->childDetails->expenses !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">{!! __('children.sponsorship_funds_cover') !!}:</strong>
                                    &nbsp;{!! $child->childDetails->sponsorship_funds_cover !!}
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
