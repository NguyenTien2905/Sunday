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
                    <h4 class="fs-18 fw-semibold m-0">Quản lý danh mục sản phẩm</h4>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title align-content-center mb-0">{{ $title }}</h5>
                        <a href="{{ route('admins.categories.create') }}" class="btn btn-success">
                            <i data-feather="plus-square"></i>Thêm danh mục</a>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Tên danh mục</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listCategory as $index => $item)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>
                                                <img src="{{ Storage::url($item->icon) }}" alt="" width="100px">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td class="{{ $item->status == true ? 'text-primary' : 'text-danger' }}">
                                                {{ $item->status == true ? 'Hiển thị' : 'Ẩn' }}</td>
                                            <td>
                                                <a href="{{ route('admins.categories.edit', $item->id) }}"><i
                                                        class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                                                <form action="{{ route('admins.categories.delete', $item->id)}}" method="POST"
                                                    class="d-inline" onclick="if(!confirm('Bạn chắc chắn muốn xóa không?')){event.preventDefault()}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-white">
                                                        <i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js')
@endsection
