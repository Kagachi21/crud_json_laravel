@extends('layout.master')
@section('content')

<body>
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Buat Artikel</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-box-main">
        <div class="container">
            <form action="{{url('post-artikel')}}" class="form-contact contact_form" method="post" >
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input class="form-control" name="judul" id="judul" type="text" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Penulis</label>
                            <input class="form-control" name="author" id="author" type="text" placeholder="Nama Penulis">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea class="description" id="keterangan" name="keterangan"></textarea>
                        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                        <script>
                            tinymce.init({
                                selector:'textarea.description',
                                width: 900,
                                height: 300
                            });
                        </script>
                    </div>  
                </div>
                <br>
                <div class="form-group mt-3">
                    <button type="submit" class="btn hvr-hover">Publish</button>
                </div>
            </form>
            
        </div>
    </div>
</body>
@endsection

