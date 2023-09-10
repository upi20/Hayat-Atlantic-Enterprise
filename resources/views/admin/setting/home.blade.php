@extends('templates.admin.master')

@section('content')
    <div class="grid">
        <div class="grid-sizer col-md-6 col-lg-4"></div>

        {{-- hero --}}
        <div class="grid-item col-md-6 col-lg-4">
            @php
                $name = 'hero';
                $title = 'Hero';
            @endphp
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <h3 class="card-title">{{ $title }} Setting</h3>
                    <label class="custom-switch form-switch">
                        <input type="checkbox" name="visible" form="{{ $name }}-form" class="custom-switch-input"
                            {{ settings()->get($s("$name.visible")) ? 'checked' : '' }}>
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Tampilkan</span>
                    </label>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="{{ $name }}-form">
                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.title") }}">Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.title") }}" name="title" class="form-control"
                                placeholder="Judul" value="{{ settings()->get($s("$name.title")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.sub_title") }}">
                                Sub Judul <span class="text-danger">*</span>
                            </label>
                            <textarea id="{{ $s("$name.sub_title") }}" name="sub_title" class="form-control" required rows="3"
                                placeholder="Sub Judul">{!! settings()->get($s("$name.sub_title")) !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Image
                                <span class="badge bg-primary" id="preview_hero_image"
                                    onclick='viewImage(`{{ settings()->get($s("$name.image")) }}`, `{{ $title }} Image View`)'>
                                    view
                                </span>
                            </label>
                            <input type="file" accept="image/*" id="{{ $s('hero.image') }}" name="image"
                                class="form-control" />
                        </div>
                    </form>

                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary" form="{{ $name }}-form">
                        <li class="fas fa-save mr-1"></li> Simpan
                    </button>
                </div>
            </div>
        </div>

        {{-- galeri_kegiatan --}}
        <div class="grid-item col-md-6 col-lg-4">
            @php
                $name = 'galeri_kegiatan';
                $title = 'Galeri Kegiatan';
            @endphp
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <h3 class="card-title">{{ $title }} Setting</h3>
                    <label class="custom-switch form-switch">
                        <input type="checkbox" name="visible" form="{{ $name }}-form" class="custom-switch-input"
                            {{ settings()->get($s("$name.visible")) ? 'checked' : '' }}>
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Tampilkan</span>
                    </label>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="{{ $name }}-form">
                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.title") }}">Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.title") }}" name="title" class="form-control"
                                placeholder="Judul" value="{{ settings()->get($s("$name.title")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.sub_title") }}">Sub Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.sub_title") }}" name="sub_title" class="form-control"
                                placeholder="Sub Judul" value="{{ settings()->get($s("$name.sub_title")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.limit") }}">Jumlah Data Yang Ditampilkan
                                <span class="text-danger">*</span></label>
                            <input type="number" min="3" id="{{ $s("$name.limit") }}" name="limit"
                                class="form-control" placeholder="Jumlah Data Yang Ditampilkan"
                                value="{{ settings()->get($s("$name.limit")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.button_text") }}">Teks Tombol
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.button_text") }}" name="button_text"
                                class="form-control" placeholder="Teks Tombol"
                                value="{{ settings()->get($s("$name.button_text")) }}" required />
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary" form="{{ $name }}-form">
                        <li class="fas fa-save mr-1"></li> Simpan
                    </button>
                </div>
            </div>
        </div>


        {{-- artikel --}}
        <div class="grid-item col-md-6 col-lg-4">
            @php
                $name = 'artikel';
                $title = 'Artikel';
            @endphp
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <h3 class="card-title">{{ $title }} Setting</h3>
                    <label class="custom-switch form-switch">
                        <input type="checkbox" name="visible" form="{{ $name }}-form"
                            class="custom-switch-input" {{ settings()->get($s("$name.visible")) ? 'checked' : '' }}>
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Tampilkan</span>
                    </label>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="{{ $name }}-form">
                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.title") }}">Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.title") }}" name="title" class="form-control"
                                placeholder="Judul" value="{{ settings()->get($s("$name.title")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.sub_title") }}">Sub Judul
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.sub_title") }}" name="sub_title"
                                class="form-control" placeholder="Sub Judul"
                                value="{{ settings()->get($s("$name.sub_title")) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ $s("$name.button_text") }}">Teks Tombol
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ $s("$name.button_text") }}" name="button_text"
                                class="form-control" placeholder="Teks Tombol"
                                value="{{ settings()->get($s("$name.button_text")) }}" required />
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary" form="{{ $name }}-form">
                        <li class="fas fa-save mr-1"></li> Simpan
                    </button>
                </div>
            </div>
        </div>


    </div>

    {{-- modal --}}
    <div class="modal fade" id="modal-image">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-image-title">View Foto</h6><button aria-label="Close"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" id="modal-image-element" alt="Icon Pendaftaran">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    {{-- nestable --}}
    <script src="{{ asset('assets/templates/admin/plugins/nestable2v1.6.0/jquery.nestable.min.js') }}"></script>
    {{-- sweetalert --}}
    <script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    {{-- loading --}}
    <script src="{{ asset('assets/templates/admin/plugins/loading/loadingoverlay.min.js') }}"></script>
    {{-- select2 --}}
    <script src="{{ asset('assets/templates/admin/plugins/select2/js/select2.full.min.js') }}"></script>
    {{-- mansory --}}
    <script src="{{ asset('assets/templates/admin/plugins/mansory.min.js') }}"></script>

    <script>
        let meta_list_is_edit = true;
        const meta_list = new Map();
        $(document).ready(function() {
            var msnry = new Masonry(document.querySelector('.grid'), {
                itemSelector: '.grid-item',
                columnWidth: '.grid-sizer'
            });

            // Hero ===================================================================================================
            $('#hero-form').submit(function(e) {
                const load_el = $(this).parent().parent();
                e.preventDefault();
                var formData = new FormData(this);
                load_el.LoadingOverlay("show");
                $.ajax({
                    type: "POST",
                    url: `{{ route(h_prefix('hero')) }}`,
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        // set foto
                        $('#preview_hero_image').attr('onclick',
                            `viewImage('${data.foto}', 'Hero Image View')`);
                        $(this).find('input[name=image]').val('');
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        load_el.LoadingOverlay("hide");
                    }
                });
            });


            // Galeri Kegiatan ========================================================================================
            $('#galeri_kegiatan-form').submit(function(e) {
                const load_el = $(this).parent().parent();
                e.preventDefault();
                var formData = new FormData(this);
                load_el.LoadingOverlay("show");
                $.ajax({
                    type: "POST",
                    url: `{{ route(h_prefix('galeri_kegiatan')) }}`,
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        load_el.LoadingOverlay("hide");
                    }
                });
            });

            // Galeri Kegiatan ========================================================================================
            $('#artikel-form').submit(function(e) {
                const load_el = $(this).parent().parent();
                e.preventDefault();
                var formData = new FormData(this);
                load_el.LoadingOverlay("show");
                $.ajax({
                    type: "POST",
                    url: `{{ route(h_prefix('artikel')) }}`,
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        load_el.LoadingOverlay("hide");
                    }
                });
            });
        })

        function viewImage(image, title) {
            $('#modal-image').modal('show');
            $('#modal-image-title').html(title);
            const ele = $('#modal-image-element');
            ele.attr('src', `{{ url('') }}${image}`);
            ele.attr('alt', title);
        };
    </script>
@endsection
