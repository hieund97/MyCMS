@extends('admin.layout.main')
@section('title', 'Edit Email')
@section('content')
<div class="content">
<form action="/admin/email-template/{{ $list_template->id }}/update" method="POST" enctype="multipart/form-data">
    @method('PUT')
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">book</i>
                            </div>
                            <h4 class="card-title">Thêm Email</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" style="font-size: 15px;" value="{{ $list_template->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Category</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" name="category" class="form-control" style="font-size: 15px;" value="{{ $list_template->category }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Subject</h4>
                                    </label>
                                    <div class="form-group">
                                    <input type="text" name="subject" class="form-control" style="font-size: 15px;" value="{{ $list_template->subject }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Nội dung</h4>
                                    </label>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <textarea class="form-control" name="template" id="editor1"
                                        rows="40">{{ $list_template->template }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Sửa Email</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>

@endsection
@push('js')
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            toastr.error('{{$error}}')
            @endforeach
        @endif
    </script>
@endpush