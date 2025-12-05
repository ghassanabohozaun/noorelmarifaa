<div class="tab-pane fade  show active" id="post_settings" role="tabpanel" aria-labelledby="post_settings_tab">

    <div class="row">
        <div class="col-xl-12">

            <!-- begin: row  -->
            <div class="row">

                <!-- begin: input -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="post_language">{!! __('posts.post_language') !!}</label>

                        <select class="form-control" name="post_language" id="post_language" type="text">
                            <option value="">{{ trans('general.select_from_list') }}</option>

                            <option value="ar">
                                {{ trans('general.ar') }}
                            </option>

                            <option value="en">
                                {{ trans('general.en') }}
                            </option>
                            <option value="ar_en">
                                {{ trans('general.ar_en') }}
                            </option>
                        </select>
                        <span class="text text-danger" id="post_language_error">
                        </span>
                    </div>
                </div>
                <!-- end: input -->

                <!-- begin: input -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="post_added_date">{!! __('posts.post_added_date') !!}</label>
                        <input type="date" id="post_added_date" name="post_added_date" class="form-control"
                            autocomplete="off" placeholder="{!! __('posts.enter_post_added_date') !!}">
                        <span class="text text-danger" id="post_added_date_error">
                        </span>
                    </div>
                </div>
                <!-- end: input -->


                <!-- begin: input -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="department_id">{!! __('posts.department_id') !!}</label>

                        <select id="department_id" name="department_id" class="form-control">
                            <option value="" selected='selected'>
                                {!! __('general.select_from_list') !!}
                            </option>
                            @foreach ($departments as $key => $department)
                                <option value="{!! $department->id !!}">
                                    {!! $department->name !!}</option>
                            @endforeach
                        </select>
                        <span class="text text-danger" id="department_id_error">
                        </span>
                    </div>
                </div>
                <!-- end: input -->



                <!-- begin: input -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="post_status">{!! __('posts.post_status') !!}</label>
                        <select class="form-control" name="post_status" id="post_status" type="text">
                            <option value="">{{ trans('general.select_from_list') }}</option>
                            <option value="enable">
                                {{ trans('general.enable') }}
                            </option>
                            <option value="disable">
                                {{ trans('general.disabled') }}
                            </option>
                        </select>
                        <span class="text text-danger" id="post_status_error">
                        </span>
                    </div>
                </div>
                <!-- end: input -->


            </div>
            <!-- end: row  -->


            <!-- begin: row  photo-->
            <div class="row">
                <!-- begin: input -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="photo">{!! __('posts.photo') !!}</label>
                        <input type="file" id="post_create_photo" accept="image/*" name="photo"
                            class="form-control ">
                        <span class="text text-danger" id="photo_error">
                        </span>
                    </div>
                </div>
                <!-- end: input -->
            </div>
            <!-- end: row  photo -->

        </div>

    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        var lang = "{!! Lang() !!}";
        $("#post_create_photo").fileinput({
            theme: 'fa5',
            language: lang,
            allowedFileTypes: ['image'],
            maxFileCount: 1,
            enableResumableUpload: true,
            initialPreviewAsData: true,
            allowedFileTypes: ['image'],
            showCancel: false,
            showUpload: false,
        });
    </script>
@endpush
