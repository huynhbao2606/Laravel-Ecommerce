@extends("layouts.master")
@section("MainView")
<header class="h2 d-flex justify-content-center">
    Thêm Loại Sản Phẩm
</header>
    <form action="add-cate-post" method="post">
        @csrf
        <div class="mb-3">
            <label  class="fw-bold" for="ten"> Tên Loại
                <input type="text" class="form-control" name="ten"/>
            </label>
        </div>
        <div class="mb-3">
            <label class="fw-bold" for="mota">
                Mô Tả:
                <textarea name="mota" cols="30" rows="5" class="form-control"></textarea>
            </label>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-primary">Thêm Loại Sản Phẩm</button>
        </div>
    </form>
@endsection
@section("footer")
    Bản Quyền @2023
@endsection
