<ul class="list-group">

    <hr class="horizontal gray-light my-1" />
    <h5 class=" text-info"><i class="fa fa-dot"></i>{!! __('children.family_info') !!}</h5>

    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{!! __('children.number_of_people_including_mother') !!}:</strong>
        &nbsp;
        {!! $number_of_people_including_mother !!}
    </li>


    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.male_number') !!}:</strong>
        &nbsp;{!! $male_number !!}
    </li>

    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.female_number') !!}:</strong>
        &nbsp;{!! $female_number !!}
    </li>

    <!------------------------------------------------------------------------------------------------------------------------------------------>

    <hr class="horizontal gray-light my-1" />
    <h5 class=" text-info"><i class="fa fa-dot"></i>{!! __('children.father_info') !!}</h5>

    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.father_full_name_ar') !!}:</strong>
        &nbsp;{!! $father_full_name_ar !!}
    </li>

    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.father_full_name_en') !!}:</strong>
        &nbsp;{!! $father_full_name_en !!}
    </li>


    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.father_personal_id') !!}:</strong>
        &nbsp;{!! $father_personal_id !!}
    </li>

    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.father_date_of_death') !!}:</strong>
        &nbsp;{!! $father_date_of_death !!}
    </li>

    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.father_respon_of_death') !!}:</strong>
        &nbsp;{!! $father_respon_of_death !!}
    </li>


    <!------------------------------------------------------------------------------------------------------------------------------------------>

    <hr class="horizontal gray-light my-1" />
    <h5 class=" text-info"><i class="fa fa-dot"></i>{!! __('children.mother_info') !!}</h5>


    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.mother_full_name_ar') !!}:</strong>
        &nbsp;{!! $mother_full_name_ar !!}
    </li>

    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.mother_full_name_en') !!}:</strong>
        &nbsp;{!! $mother_full_name_en !!}
    </li>

    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.mother_personal_id') !!}:</strong>
        &nbsp;{!! $mother_personal_id !!}
    </li>
    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.mother_date_of_death') !!}:</strong>
        &nbsp;{!! $mother_date_of_death !!}
    </li>
    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.is_mother_alive') !!}:</strong>
        &nbsp;{!! $is_mother_alive == 0 ? __('children.no') : __('children.yes') !!}
    </li>
    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{!! __('children.is_mother_the_guardian') !!}:</strong>
        &nbsp;{!! $is_mother_the_guardian == 0 ? __('children.no') : __('children.yes') !!}
    </li>

</ul>
