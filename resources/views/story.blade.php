@extends('layout.master')
@section('content')

<body>
    
    
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
        </div>
    </div>
    <!-- End All Title Box -->
    
    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                @foreach ($artikel as $key => $item)
                <div class="col-lg-10 mt-3">
                    <h2 class="noo-sh-title-top">{{$item->judul}}</span></h2>
                    <p>Author : {{$item->author}}</p>
                    <p>{{str_limit(strip_tags(html_entity_decode($item->keterangan)), 300, '...')}}</p>
                        <a class="btn hvr-hover" href="{{url('hapus-artikel', $key)}}">Delete</a>
                        <a class="btn hvr-hover" href="{{url('edit-artikel', $key)}}">Edit</a>
                    </div>
                    @endforeach
                </div>
                
                
            </div>
        </div>
        <!-- End About Page -->
        
        
        @endsection
        