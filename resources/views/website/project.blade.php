@extends('layout.master')
@section('content')
    <!--================= Start Page Header Section ==================-->
    <section class="page_section nopadding">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url(images/portfolio/portfolio_single_bg.jpg)">
            </div>
        </div>
        <div class="page-header text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">Single work Details</h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s">AN EYE FOR DETAIL MAKES OUR
                            WORKS EXCELLENT</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}">Home</a></li>
                <li><a href="{{url('projects')}}">Products</a></li>
                <li class="active">{{$project->title}}</li>
            </ol>
        </div>
    </section>
    <!--================= End Page Header Section ==================-->


    <!--================= Start Portfolio Single Section ==================-->
    <section class="portfolio-single portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $images = explode(PHP_EOL, $project->images);
                        ?>
                        @foreach($images as $image)
                            @if($image !="")
                                <div class="item"><img src="{{url('public/images/projects/' . $image)}}" alt="#"></div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="portfolio-single-wrapper">
                        <h2>Description</h2>
                        <div class="description">
                            <p>{{$project->description}}</p>


                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--================= End Portfolio Single Section ==================-->
@endsection