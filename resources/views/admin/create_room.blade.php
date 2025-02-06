<!DOCTYPE html>
<html lang="vi">
<head>
    @include('admin.css')
    <!-- Thêm Bootstrap nếu chưa có -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Thêm Phòng Mới</h4>
            </div>
            <div class="card-body">
                <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Tên phòng</label>
                        <input type="text" name="title" class="form-control" placeholder="Nhập tên phòng">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Nhập mô tả"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input type="number" name="price" class="form-control" placeholder="Nhập giá">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Loại phòng</label>
                        <select name="type" class="form-select">
                            <option value="regular">Phòng thường</option>
                            <option value="premium">Phòng VIP</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ảnh</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-4">Hoàn tất</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   

    <!-- Thêm Bootstrap JS nếu cần -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
