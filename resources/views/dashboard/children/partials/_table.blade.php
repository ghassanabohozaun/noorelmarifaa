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
                             <th>{!! __('children.full_name') !!}</th>
                             <th>{!! __('children.personal_id') !!}</th>
                             <th>{!! __('children.birthday') !!}</th>
                             <th>{!! __('children.gender') !!}</th>
                             <th>{!! __('children.classification') !!}</th>
                             <th>{!! __('children.health_status') !!}</th>
                             <th>{!! __('children.governoate_id') !!}</th>
                             <th>{!! __('children.city_id') !!}</th>
                             <th>{!! __('children.authorized_contact_number') !!}</th>
                             {{-- <th>{!! __('children.backup_contact_number') !!}</th> --}}
                             <th>{!! __('children.status_manage') !!}</th>
                             <th>{!! __('general.actions') !!}</th>
                         </tr>
                     </thead>
                     <tbody>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     <!-- end: card content -->
 </div>
 </div> <!-- end: card  -->
