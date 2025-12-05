<div class="tab-pane fade" id="post_details_ar" role="tabpanel" aria-labelledby="post_details_ar_tab">



    <div class="row">
        <div class="col-xl-12">

            <!-- begin: row  -->
            <div class="row">
                <!-- begin: input -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="post_title_ar">{!! __('posts.post_title_ar') !!}</label>
                        <input type="text" id="post_title_ar" name="post_title_ar" class="form-control"
                            value="{!! $post->post_title_ar !!}" autocomplete="off" placeholder="{!! __('posts.enter_post_title_ar') !!}">
                        <span class="text text-danger" id="post_title_ar_error">
                        </span>
                    </div>
                </div>
                <!-- end: input -->

            </div>
            <!-- end: row  -->

            <!-- begin: row  -->
            <div class="row">
                <!-- begin: input -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="post_summary_ar">{!! __('posts.post_summary_ar') !!}</label>
                        <textarea type="text" class="form-control form-control-solid form-control-lg" name="post_summary_ar"
                            id="post_summary_ar" rows="3" placeholder="{{ trans('posts.enter_post_summary_ar') }}" autocomplete="off">{!! $post->post_summary_ar !!}</textarea>
                        <span class="text text-danger" id="post_summary_ar_error"></span>
                        </span>
                    </div>
                </div>
                <!-- end: input -->

            </div>
            <!-- end: row  -->


            <!-- begin: row  -->
            <div class="row">
                <!-- begin: input -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="post_details_ar">{!! __('posts.post_details_ar') !!}</label>
                        <textarea type="text" class="form-control post_details_ar" name="post_details_ar" id="post_details_ar" rows="3"
                            placeholder="{{ trans('posts.enter_post_details_ar') }}" autocomplete="off">{!! $post->post_details_ar !!}</textarea>
                        <span class="text text-danger" id="post_details_ar_error"></span>
                        </span>
                    </div>
                </div>
                <!-- end: input -->

            </div>
            <!-- end: row  -->

        </div>
    </div>



</div>
