@extends('admin.layout.main')
{{-- header --}}
@extends('admin.base.nav')
{{-- nav --}}
@section('title', 'Tạo người dùng')
@section('content')
    <form method="POST" action="{{ route('admin.userCreatePost') }}" enctype="multipart/form-data">
        @csrf
        <div class="mt-2">
            @include('admin.base.messages')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên người dùng</label>
                <input type="text" name="userName" class="form-control" id="exampleFormControlInput1"
                    value="{{ old('userName') }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" name="userEmail" class="form-control" id="exampleFormControlInput2"
                    value="{{ old('userEmail') }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="text" name="userPass" class="form-control" id="exampleFormControlInput3"
                    value="{{ old('userPass') }}">
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-outline-danger" style="align-items: center;">Thêm</button>
            </div>
        </div>
    </form>

@endsection
