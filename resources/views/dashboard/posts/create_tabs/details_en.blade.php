<div class="tab-pane fade" id="post_details_en" role="tabpanel" aria-labelledby="post_details_en_tab">
    <div class="row">
        <div class="col-xl-12">


            <!-- begin: row  -->
            <div class="row">
                <!-- begin: input -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="post_title_en">{!! __('posts.post_title_en') !!}</label>
                        <input type="text" id="post_title_en" name="post_title_en" class="form-control"
                            autocomplete="off" placeholder="{!! __('posts.enter_post_title_en') !!}">
                        <span class="text text-danger" id="post_title_en_error">
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
                        <label for="post_summary_en">{!! __('posts.post_summary_en') !!}</label>
                        <textarea type="text" class="form-control" name="post_summary_en" id="post_summary_en" rows="3"
                            placeholder="{{ trans('posts.enter_post_summary_en') }}" autocomplete="off"></textarea>
                        <span class="text text-danger" id="post_summary_en_error"></span>
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
                        <label for="post_details_en">{!! __('posts.post_details_en') !!}</label>
                        <textarea type="text" class="form-control post_details_en" name="post_details_en" id="post_details_en" rows="3"
                            placeholder="{{ trans('posts.enter_post_details_en') }}" autocomplete="off"></textarea>
                        <span class="text text-danger" id="post_details_en_error"></span>
                        </span>
                    </div>
                </div>
                <!-- end: input -->

            </div>
            <!-- end: row  -->



        </div>
    </div>
</div>
