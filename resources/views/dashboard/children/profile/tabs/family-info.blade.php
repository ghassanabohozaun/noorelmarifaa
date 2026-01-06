<div class="row">
    <div class="col-md-12  mt-1">
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="card">
                    <div class="card-head">
                        <div class="card-body">
                            <ul class="list-group">

                                <h4 class="text-warning text-bolder px-1 mb-1"> {!! __('children.child_family') !!}</h4>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.number_of_people_including_mother') !!}:</strong>
                                    &nbsp;
                                    {!! $child->childFamily->number_of_people_including_mother ?? '' !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.male_number') !!}:</strong>
                                    &nbsp;{!! $child->childFamily->male_number ?? '' !!}
                                </li>

                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">{!! __('children.female_number') !!}:</strong>
                                    &nbsp;{!! $child->childFamily->female_number ?? '' !!}
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </section><!-- end: sections  -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="text-warning text-bolder  "> {!! __('children.family_members_info') !!}</h4>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{!! __('children.member_name') !!}</th>
                        <th>{!! __('children.member_age') !!}</th>
                        <th>{!! __('children.member_relation') !!}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($child->childFamilyMembers()->get() as $member)
                        <tr>
                            <th class="col-lg-1">{!! $loop->iteration !!} </th>
                            <td class="col-lg-3">{!! $member->member_name !!}</td>
                            <td class="col-lg-3">{!! $member->member_age !!}</td>
                            <td class="col-lg-3">
                                @if ($member->member_relation == 'brother')
                                    <span class="badge badge-sm badge-primary" style="font-size: 12px">
                                        {!! $member->childMemberRelation() !!}
                                    </span>
                                @else
                                    <span class="badge badge-sm badge-danger" style="font-size: 12px">
                                        {!! $member->childMemberRelation() !!}
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                {!! __('general.no_record_found') !!}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
