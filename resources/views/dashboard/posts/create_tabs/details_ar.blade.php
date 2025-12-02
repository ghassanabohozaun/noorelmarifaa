<div class="tab-pane fade" id="post_details_ar" role="tabpanel" aria-labelledby="post_details_ar_tab">
    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
        <div class="col-xl-12 col-xxl-10">

            <div class="row justify-content-center">
                <div class="col-xl-9">

                    <!--begin::body-->
                    <div class="my-5">


                        <!--begin::Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">
                                {{ trans('posts.post_title_ar') }}
                            </label>
                            <div class="col-lg-9 col-xl-9">

                                <input type="text" class="form-control form-control-solid form-control-lg"
                                    name="post_title_ar" id="post_title_ar"
                                    placeholder="{{ trans('posts.enter_post_title_ar') }}" autocomplete="off">
                                <span class="form-text text-danger" id="post_title_ar_error"></span>
                            </div>
                        </div>
                        <!--end::Group-->


                        <!--begin::Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">
                                {{ trans('posts.post_summary_ar') }}
                            </label>
                            <div class="col-lg-9 col-xl-9">
                                <textarea type="text" class="form-control form-control-solid form-control-lg" name="post_summary_ar"
                                    id="post_summary_ar" rows="3" placeholder="{{ trans('posts.enter_post_summary_ar') }}" autocomplete="off"></textarea>
                                <span class="form-text text-danger" id="post_summary_ar_error"></span>
                            </div>
                        </div>
                        <!--end::Group-->


                        <!--begin::Group-->
                        <div class="form-group">
                            <label> {{ trans('posts.post_details_ar') }}</label>
                            <textarea type="email" class="form-control post_details_ar" placeholder="{{ trans('posts.enter_post_details_ar') }}"
                                name="post_details_ar" id="post_details_ar"></textarea>
                            <span class="form-text text-danger" id="post_details_ar_error"></span>
                        </div>
                        <!--end::Group-->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
