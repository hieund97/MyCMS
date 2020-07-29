@extends('admin.layout.main')
@section('title', 'Edit sale')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <h4 class="card-title">Sửa khuyến mại</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/products/sale/{{$sale->id}}/edit" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên khuyến mại</h4>
                                    </label>
                                    <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="{{$sale->name}}">
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Mã code</h4>
                                    </label>
                                    <div class="form-group">
                                    <input type="text" name="code_sale" class="form-control" value="{{$sale->code_sale}}">
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Phần trăm khuyến mãi</h4>
                                    </label>
                                    <div class="form-group">
                                    <input type="number" min="0" name="percent_sale" class="form-control" value="{{$sale->percent_sale}}">
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Sửa khuyến mại</button>
                            <div class="clearfix"></div>
                        </form>
                        {{-- end form --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('js')
    <script>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        Command: toastr["error"]("{{$error}}")

                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        @endforeach
        @endif
    </script>
@endpush