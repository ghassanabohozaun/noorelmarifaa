 <ul class="list-group">

     <div class="row">


         <div class="col-lg-3">

             <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                     <p> {!! __('children.picture_of_the_orphan_child') !!}:
                 </strong>&nbsp;
                 </p>
                 <div class="position-relative d-inline-block mr-2 mb-2">
                     <img src="{!! $picture_of_the_orphan_child->temporaryUrl() !!}" alt="profile_image"
                         class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                 </div>
             </li>

         </div>


         <div class="col-lg-3">

             <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                     <p> {!! __('children.orphan_child_birth_certificate') !!}:
                 </strong>&nbsp;
                 </p>
                 <div class="position-relative d-inline-block mr-2 mb-2">
                     <img src="{!! $orphan_child_birth_certificate->temporaryUrl() !!}" alt="profile_image"
                         class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                 </div>
             </li>

         </div>

         <div class="col-lg-3">

             <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                     <p> {!! __('children.father_death_certificate') !!}:
                 </strong>&nbsp;
                 </p>
                 <div class="position-relative d-inline-block mr-2 mb-2">
                     <img src="{!! $father_death_certificate->temporaryUrl() !!}" alt="profile_image"
                         class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                 </div>
             </li>

         </div>

         <div class="col-lg-3">

             <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                     <p> {!! __('children.guardian_personal_id_photo') !!}:
                 </strong>&nbsp;
                 </p>
                 <div class="position-relative d-inline-block mr-2 mb-2">
                     <img src="{!! $guardian_personal_id_photo->temporaryUrl() !!}" alt="profile_image"
                         class="w-100 shadow-sm img-fluid img-thumbnail round-md" />
                 </div>
             </li>

         </div>


     </div>

 </ul>
