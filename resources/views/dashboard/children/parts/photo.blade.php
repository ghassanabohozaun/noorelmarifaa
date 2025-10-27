   @if ($child->childFile->picture_of_the_orphan_child)
       <img src="{{ asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) }}"
           class="img-fluid img-thumbnail table-image" width="120" />
   @else
       <img src="{{ asset('adminBoard/images/images-empty.png/') }}" class="img-fluid img-thumbnail table-image " />
   @endif
