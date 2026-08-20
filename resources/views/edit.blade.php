<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Edit Data Siswa</h4>
        </div>

        <div class="card-body">

            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text"
                           class="form-control"
                           name="name"
                           value="{{ old('name', $student->name) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text"
                           class="form-control"
                           name="class"
                           value="{{ old('class', $student->class) }}"
                           required>
                </div>

                <div class="d-flex justify-content-between">

                    <a href="{{ route('students.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>