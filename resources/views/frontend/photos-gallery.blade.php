@extends('layouts.frontend')
@section('title')
    {!! $title !!}
@endsection
@section('metaTags')
    <meta name="description" content="{!! Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords" content="{!! Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/13.jpg') !!});">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <h1>{!! $title !!}</h1>
                </div>

            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Gallery Section -->
    <section class="gallery-section gallery-page-section">
        <div class="auto-container" id="photos_gallery_list">
            @include('frontend.photos-gallery-paging')
        </div>

    </section>
    <!-- End Gallery Section -->

    <!-- Modal -->
    <div class="container-fluid modal fade photos_gallery_modal" style=" max-width: 100vw;" id="myModal" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{!! trans('frontend.album_photos') !!}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding:2px;">
                    <section class="events-section">
                        <div class="auto-container" id="demo">

                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!--Modal-->
@endsection
@push('js')
    <script type="text/javascript">
        /////////////////////////////////////////////////////////////////
        ///  show photo gallery modal
        $('body').on('click', '.show_photo_gallery_modal', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            $('#demo').empty();

            $.ajax({
                url: "{{ route('get.photos.gallery.photos') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data.data)
                    //$('#photo_list').append(data);

                    if (!$.trim(data)) {

                        $('#demo').html('<h3 class="text-warning">{!! trans('frontend.no_photos_exist_in_this_album') !!}</h3>')
                    } else {
                        $('#demo').html(
                            '<div id="testing"  class="events-carousel owl-carousel owl-theme ">');
                        for (var i = 0; i < data.length; i++) {
                            $(".owl-carousel").append('<div class="event-block-two">' +
                                '<div class="inner-box" style="">' +
                                '<div class="image">' +
                                '<a href="#">' +
                                ' <img class="photos_gallery_img" src="http://noorelmarifaa.org/storage/' +
                                data[i].full_path_after_upload + '" alt=""/>' +
                                '</a>' +
                                ' </div>' +
                                '<div class="lower-content">' +
                                '</div>' +
                                '</div>' +
                                '</div>');
                        }

                        var owl = $("#testing");
                        owl.owlCarousel({
                            rtl: true,
                            loop: true,
                            margin: 65,
                            nav: true,
                            autoHeight: true,
                            smartSpeed: 500,
                            autoplay: false,
                            navText: ['<span class="fas fa-long-arrow-alt-left"></span>',
                                '<span class="fas fa-long-arrow-alt-right"></span>'
                            ],
                            responsive: {
                                0: {
                                    items: 1,
                                    margin: 30
                                },
                                600: {
                                    items: 1,
                                    margin: 30
                                },
                                800: {
                                    items: 2,
                                    margin: 30
                                },
                                1024: {
                                    items: 2,
                                    margin: 30
                                },
                                1200: {
                                    items: 2
                                }
                            }

                        });
                    }
                }

            }); //end ajax

            $('.photos_gallery_modal').modal('show');
        });
        /////////////////////////////////////////////////////////////////
        ///  posts Paging
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            readPage(page);
        }); // End Document On
        /////////////////////////////////////////////////////////////////
        ///  read Page
        function readPage(page) {
            $.ajax({
                url: '/photos-gallery-paging/' + '?page=' + page
            }).done(function(data) {
                $('#photos_gallery_list').html(data);
                $('html, body').animate({
                    scrollTop: "520px"
                }, 100);
            });

        } // end readPage
    </script>
@endpush
