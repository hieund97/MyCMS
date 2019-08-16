<!--     *********    SIMPLE SUBSCRIBE LINE     *********      -->
<link rel="stylesheet" href=" {{ asset ('node_modules/dist/sweetalert2.css') }}">
<div class="subscribe-line subscribe-line-white">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3 style="margin-top:50px;" class="title">Đăng ký nhận thông tin khuyến mại</h3>
            </div>
            <div class="col-md-7">
                <div class="card card-plain card-form-horizontal">
                    <div class="card-content">
                        <form method="POST" action="/dang-ky">
                            @csrf
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">mail</i>
                                        </span>
                                        <input type="email" id="email" name="email" value=""
                                            placeholder="Email của bạn..." class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-rose btn-round btn-block btnsub">Đăng
                                        ký</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<!--     *********   SIMPLE SUBSCRIBE LINE     *********      -->

<script src="{{ asset('client/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{asset ('manage/js/plugins/sweetalert2.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.btnsub').click(function(e){
            e.preventDefault();
            console.log('im in');
            $.ajax({
                url: '/dang-ky',
                method: 'POST',
                data: {
                    _token: "{{csrf_token()}}",
                    email: $('#email').val()
                },

                success:function(){
                    Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Cám ơn bạn đã tham gia đăng ký nhận tin khuyến mãi của chúng tôi',
                    showConfirmButton: true,
                    timer: 3000
                    }).then((result) => {
                        if(result.value){
						    window.location.reload();
						}
                    })
                },
                
                error: function(){
                    Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Email này bạn đã đăng ký rồi!', 
                    timer: 3000                  
                    })
                }
            })
            
        });
    });
</script>