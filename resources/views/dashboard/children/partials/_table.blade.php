<div class="card">
    <!-- begin: card header -->
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">
            {!! __('children.show_all_children') !!}
        </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end: card header -->

    <!-- begin: card content -->
    <div class="card-content collapse show">
        <div class="card-body">
            <div class="table-responsive ">
                <table id="yajra-datatable" class="table table-striped table-bordered ">
                    <thead>

                        <tr>
                            <th>#</th>
                            {{-- <th>{!! __('children.photo') !!}</th> --}}
                            <th>{!! __('children.full_name') !!}</th>
                            <th>{!! __('children.personal_id') !!}</th>
                            <th>{!! __('children.birthday') !!}</th>
                            <th>{!! __('children.gender') !!}</th>
                            {{-- <th>{!! __('children.classification') !!}</th>
                             <th>{!! __('children.health_status') !!}</th> --}}
                            <th>{!! __('children.governoate_id') !!}</th>
                            <th>{!! __('children.city_id') !!}</th>
                            <th>{!! __('children.authorized_contact_number') !!}</th>
                            {{-- <th>{!! __('children.sponsership_status_id') !!}</th>
                             <th>{!! __('children.sponsership_type_id') !!}</th> --}}
                            <th>{!! __('children.sponsership_organization_id') !!}</th>
                            {{-- <th>{!! __('children.backup_contact_number') !!}</th> --}}
                            {{-- <th>{!! __('children.status_manage') !!}</th> --}}
                            <th>{!! __('general.actions') !!}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($children as $child)
                            <tr>
                                <td>{!! $loop->iteration !!}</td>
                                {{-- <td style="width: 9%;">@include('dashboard.children.parts.photo')</td> --}}
                                <td>{!! $child->childFullName() !!}</td>
                                <td>{!! $child->personal_id !!}</td>
                                <td>{!! $child->birthday !!}</td>
                                <td>{!! $child->gender !!}</td>
                                {{-- <td>{!! !!}</td>
                             <td>{!! !!}</td> --}}
                                <td>{!! $child->governorate->name !!}</td>
                                <td>{!! $child->city->name !!}</td>
                                <td>{!! $child->authorized_contact_number !!}</td>
                                {{-- <td>{!! !!}</td>
                             <td>{!! !!}</td> --}}
                                <td>{!! $child->sponsership_organization_id ? $child->sponsershipOrganization->getTranslation('name', Lang()) : '' !!}</td>
                                {{-- <td>{!! !!}</td>
                             <td>{!! !!}</td> --}}
                                <td>@include('dashboard.children.parts.actions')</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    {!! __('world.no_cities_found') !!}
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                <div class="float-right">
                    {!! $children->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- end: card content -->
</div>
</div> <!-- end: card  -->
