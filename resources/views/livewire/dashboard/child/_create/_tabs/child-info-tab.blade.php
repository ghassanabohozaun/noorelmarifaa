<div class="row">
    <div class="col-lg-6">

        <ul class="list-group">

            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                    class="text-dark">{!! __('children.full_name_ar') !!}:</strong>
                &nbsp;
                {!! $first_name_ar . ' ' . $father_name_ar . ' ' . $grand_father_name_ar . ' ' . $family_name_ar !!}
            </li>

            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                    class="text-dark">{!! __('children.full_name_en') !!}:</strong>
                &nbsp;
                {!! $first_name_en . ' ' . $father_name_en . ' ' . $grand_father_name_en . ' ' . $family_name_en !!}
            </li>


            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.personal_id') !!}:</strong>
                &nbsp;{!! $personal_id !!}
            </li>

            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.birthday') !!}:</strong>
                &nbsp;{!! $birthday !!}
            </li>


            <li class="list-group-item border-0 ps-0 text-sm"><strong
                    class="text-dark">{!! __('children.classification') !!}:</strong>
                &nbsp;{!! $classification !!}
            </li>


            <li class="list-group-item border-0 ps-0 text-sm"><strong
                    class="text-dark">{!! __('children.gender') !!}:</strong>
                &nbsp;{!! $gender !!}
            </li>

            <li class="list-group-item border-0 ps-0 text-sm"><strong
                    class="text-dark">{!! __('children.class') !!}:</strong>
                &nbsp;{!! $class !!}
            </li>

            <li class="list-group-item border-0 ps-0 text-sm"><strong
                    class="text-dark">{!! __('children.health_status') !!}:</strong>
                &nbsp;{!! $health_status !!}
            </li>

            <li class="list-group-item border-0 ps-0 text-sm"><strong
                    class="text-dark">{!! __('children.disease_clarification') !!}:</strong>
                &nbsp;{!! $disease_clarification !!}
            </li>

        </ul>

    </div>

    <div class="col-lg-6">

        <ul class="list-group">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                <strong class="text-dark">{!! __('children.authorized_contact_number') !!}:</strong>
                &nbsp;
                {!! $authorized_contact_number !!}
            </li>


            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.backup_contact_number') !!}:
                </strong>
                &nbsp;{!! $backup_contact_number !!}
            </li>

            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.whatsApp_number') !!}:
                </strong>
                &nbsp;{!! $whatsApp_number !!}
            </li>

            <li class="list-group-item border-0 ps-0 text-sm">
                <strong class="text-dark">{!! __('children.governoate_id') !!}:</strong>
                {!! $governoate_id ? $governorates->where('id', $governoate_id)->first()->getTranslation('name', Lang()) : '' !!}
            </li>


            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.city_id') !!}:
                </strong>
                &nbsp;{!! $city_id ? $cities->where('id', $city_id)->first()->getTranslation('name', Lang()) : '' !!}
            </li>

            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.address_details') !!}:
                </strong>
                &nbsp;{!! $address_details !!}
            </li>

        </ul>

    </div>

</div>
