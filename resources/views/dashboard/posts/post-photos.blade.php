@extends('layouts.dashboard.app')
@section('title')
    {!! $title !!}
@endsection


@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" />
@endpush

@section('content')
    <div class="app-content content">

        <div class="content-wrapper">
            <!-- begin: content header -->
            <div class="content-header row">
                <!-- begin: content header left-->
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{!! __('posts.posts') !!}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{!! route('dashboard.index') !!}">
                                        {!! __('dashboard.home') !!}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{!! route('dashboard.posts.index') !!}">
                                        {!! __('posts.posts') !!}
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a href="#">
                                        {!! __('posts.post_photos') !!}
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end: content header left-->



            </div> <!-- end :content header -->

            <!-- begin: content body -->
            <div class="content-body">
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <!-- begin: card header -->
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-colored-form-control">
                                        {!! __('posts.post_photos') !!}
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload-form"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end: card header -->

                                <!-- begin: card content -->
                                <div class="card-content collapse show">
                                    <div class="card-body">


                                        <style type="text/css">
                                            .dropzone .dz-preview .dz-image img {
                                                width: 125px;
                                                height: 120px;
                                            }
                                        </style>

                                        <div class="dropzone dropzone-default dz-clickable" id="dropzoneFileUpload">
                                        </div>
                                    </div>
                                    <!-- end: card content -->
                                </div>
                            </div> <!-- end: card  -->
                        </div><!-- end: row  -->
                </section><!-- end: sections  -->
            </div><!-- end: content body  -->
        </div> <!-- end: content wrapper  -->
        </form>
    </div><!-- end: content app  -->
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        $(document).ready(function() {


            ///////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///  Upload post Photos


            $('#dropzoneFileUpload').dropzone({
                url: "{{ route('dashboard.posts.upload.other.photos', $post->id) }}",
                paramName: 'file',
                uploadMultiple: false,
                maxFiles: 15, // Max File  Count
                maximumFileSize: 2, // File Size
                acceptedFiles: 'image/*', // File Type
                resizeWidth: 500,
                //// Default Message
                dictDefaultMessage: "{{ trans('posts.other_photos_upload') }}",
                ///// Remove Image
                params: {
                    _token: "{{ csrf_token() }}"
                },
                ///////////////////////////////////////////////////
                ////////// Delete File
                dictRemoveFile: "{{ trans('general.delete') }}",
                addRemoveLinks: true,
                removedfile: function(file) {
                    $.post("{{ route('dashboard.posts.delete.other.photo') }}", {
                        id: file.fid
                    }, function(data) {
                        console.log(data);
                    });
                    var fmock;
                    return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file
                        .previewElement) : void 0;
                },


                ///////////////////////////////// Start Get Images
                ////// Get Images From Model --> tip: take care there is relation between post and file
                init: function() {
                    @foreach ($post->files()->get() as $file)
                        var mock = {
                            name: '{{ $file->file_name }}',
                            fid: '{{ $file->id }}',
                            size: '{{ $file->file_size }}',
                            type: '{{ $file->file_mimes_type }}'
                        };
                        this.emit('addedfile', mock);
                        this.options.thumbnail.call(this, mock,
                            '{{ asset('uploads/post-photos/' . $file->full_path_after_upload) }}');
                    @endforeach

                    this.on('sending', function(file, xhr, formData) {
                        formData.append('fid', '');
                        file.fid = '';
                    });

                    this.on('success', function(file, response) {
                        file.fid = response.id;
                    })
                }
                ///////////////////////////////// End Get Images
            }); //end dropzone

            $('.dz-preview').addClass('dz-complete');
        }); //end document
    </script>
@endpush
