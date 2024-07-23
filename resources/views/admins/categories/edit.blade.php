@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('css')
@endsection

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Sửa danh mục sản phẩm</h4>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Form Sửa dữ liệu</h5>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admins.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Tên danh mục</label>
                                        <input type="text" id="name" name="name"
                                            class="form-control @error('name') is-invaild @enderror"
                                            value=" {{ $category->name }}" placeholder="Tên danh mục">
                                        @error('name')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="icon" class="form-label">Hình ảnh</label>
                                        <input type="file" id="icon" name="icon" placeholder="Hình ảnh danh mục"
                                            class="form-control" onchange="showIcon(event)">
                                        <img src="{{ Storage::url($category->icon) }}" id="img_icon"
                                            alt="Hình ảnh danh mục" style="width: 100px;">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Trạng thái</label>
                                    <div class="col-sm-10 d-flex gap-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status1"
                                                value="1" {{ $category->status == 1 ? 'checked' : ''}}>
                                            <label class="form-check-label text-primary" for="status1">
                                                Hiển thị
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2"
                                                value="2"  {{ $category->status == 2 ? 'checked' : ''}}>
                                            <label class="form-check-label text-danger" for="status2">
                                                Ẩn
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js')
    <script>
        function showIcon(event) {
            const img_icon = document.getElementById('img_icon');

            console.log(img_icon);

            const file = event.target.files[0];

            const reader = new FileReader();

            reader.onload = function() {
                img_icon.src = reader.result;
                img_icon.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
