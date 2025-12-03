<div class="tab-pane fade  show active" id="post_settings" role="tabpanel" aria-labelledby="post_settings_tab">

    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
        <div class="col-xl-12 col-xxl-10">

            <div class="row justify-content-center">
                <div class="col-xl-9">

                    <!--begin::body-->
                    <div class="my-5">

                        <!-- begin: row id -->
                        <div class="row d-none">
                            <!-- begin: input -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="postID" name="id" value="{!! $post->id !!}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- end: input -->


                        <!--begin::Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">
                                {{ trans('posts.post_added_date') }}
                            </label>
                            <div class="col-lg-9 col-xl-9">
                                <div class="input-group date">
                                    <input type="date" class="form-control" id="post_added_date"
                                        name="post_added_date" value="{!! $post->post_added_date !!}"
                                        placeholder="{{ trans('posts.enter_post_added_date') }}" />
                                </div>
                                <span class="form-text text-danger" id="post_added_date_error"></span>
                            </div>
                            <!--end::Group-->
                        </div>
                        <!--end::Group-->

                        <!--begin::Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">
                                {{ trans('posts.department_id') }}
                            </label>
                            <div class="col-lg-9 col-xl-9">
                                <div class="input-group date">
                                    <select id="department_id" name="department_id" class="form-control">
                                        <option value="" selected='selected'>
                                            {!! __('general.select_from_list') !!}
                                        </option>
                                        @foreach ($departments as $key => $department)
                                            <option value="{!! $department->id !!}"
                                                {{ old('department_id', $post->department_id) == $department->id ? 'selected' : '' }}>
                                                {!! $department->name !!}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <span class="form-text text-danger" id="department_id_error"></span>
                            </div>
                            <!--end::Group-->
                        </div>
                        <!--end::Group-->

                        <!--begin::Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">
                                {{ trans('posts.post_language') }}
                            </label>
                            <div class="col-lg-9 col-xl-9">

                                <select class="form-control form-control-solid form-control-lg" name="post_language"
                                    id="post_language" type="text">
                                    <option value="">{{ trans('general.select_from_list') }}</option>

                                    <option value="ar"
                                        {{ $post->post_language == trans('general.ar') ? 'selected' : '' }}>
                                        {{ trans('general.ar') }}
                                    </option>

                                    <option value="en"
                                        {{ $post->post_language == trans('general.en') ? 'selected' : '' }}>
                                        {{ trans('general.en') }}
                                    </option>
                                    <option value="ar_en"
                                        {{ $post->post_language == trans('general.ar_en') ? 'selected' : '' }}>
                                        {{ trans('general.ar_en') }}
                                    </option>
                                </select>
                                <span class="form-text text-danger" id="post_language_error"></span>
                            </div>
                        </div>
                        <!--end::Group-->


                        <!--begin::Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">
                                {{ trans('posts.post_status') }}
                            </label>
                            <div class="col-lg-9 col-xl-9">
                                <select class="form-control form-control-solid form-control-lg" name="post_status"
                                    id="post_status" type="text">
                                    <option value="">{{ trans('general.select_from_list') }}</option>
                                    <option value="enable"
                                        {{ $post->post_status == trans('general.enable') ? 'selected' : '' }}>
                                        {{ trans('general.enable') }}
                                    </option>
                                    <option value="disable"
                                        {{ $post->post_status == trans('general.disabled') ? 'selected' : '' }}>
                                        {{ trans('general.disabled') }}
                                    </option>
                                    <option value="pending"
                                        {{ $post->post_status == trans('general.pending') ? 'selected' : '' }}>
                                        {{ trans('general.pending') }}
                                    </option>
                                </select>
                                <span class="form-text text-danger" id="post_status_error"></span>
                            </div>
                        </div>
                        <!--end::Group-->

                        <!--begin::Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">
                                {{ trans('posts.photo') }}
                            </label>
                            <div class="col-lg-9 col-xl-9">
                                <div class="input-group">
                                    <input type="file" class="form-control create_post_photo" id="photo"
                                        accept="image/*" name="photo" />
                                </div>
                                @if ($post->photo)
                                    <img id="imagePreview2" src="{!! asset('uploads/posts/' . $post->photo) !!}" alt="Image Preview"
                                        class="mt-1" style=" max-width: 200px; height: auto;">
                                @endif

                                <img id="imagePreview" src="{!! asset('uploads/posts/' . $post->photo) !!}" alt="Image Preview" class="mt-1"
                                    style="display: none; max-width: 200px; height: auto;">

                                <span class="form-text text-danger" id="photo_error"></span>
                            </div>
                            <!--end::Group-->
                        </div>
                        <!--end::Group-->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {


            $('.create_post_photo').change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').attr('src', e.target.result).show();
                        $('#imagePreview2').attr('src', e.target.result).hide();
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
