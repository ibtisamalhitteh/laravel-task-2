@extends('layout.main')
@section('title', 'Login')
@section('content')

<section class="css-19s00cp">
<div class="container p-4">
    <div class="row">
        <div class="col-lg-8 ">
            {{-- start item --}}

            @foreach($posts_left as $post)
            <div class="css-urdavj post">
                <div class="css-w41tyw">
                    <a href="#">
                        <div class="gatsby-image-wrapper gatsby-image-wrapper-constrained">
                            

                          <img width="360" height="270" data-main-image="" sizes="(min-width: 360px) 360px, 100vw" decoding="async" src="https://bunzo-react.pages.dev/static/3f2cc4611a3391c544d45cdab82093fc/3e4c0/02_featured-video.jpg" srcset="https://bunzo-react.pages.dev/static/3f2cc4611a3391c544d45cdab82093fc/5f3a6/02_featured-video.jpg 90w,
            }
https://bunzo-react.pages.dev/static/3f2cc4611a3391c544d45cdab82093fc/06f40/02_featured-video.jpg 180w,
https://bunzo-react.pages.dev/static/3f2cc4611a3391c544d45cdab82093fc/3e4c0/02_featured-video.jpg 360w,
https://bunzo-react.pages.dev/static/3f2cc4611a3391c544d45cdab82093fc/bc160/02_featured-video.jpg 720w" alt="Make your store stand out from the others by..." style="object-fit: cover; opacity: 1;">

                        </div>
                    </a>
                </div>
                
<div class="css-65wpl8">
    <h3 class="css-h980o4">
        <a href="#">Make your store stand out from the others by...</a>
    </h3>
    <p class="css-0">
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical literature from 459, making it…
    </p>

    <div class="css-t3j8zc">
        <span class="css-19zyvxr"><a href="">2021-06-15</a></span>
    </div>
</div>

            </div>
            @endforeach
            {{-- end item --}}
        </div>

        <div class="col-lg-4">
            {{-- item --}}
            @foreach($posts_right as $post)
            <div class="css-5hkbtq">
                <div class="css-z6nl">
                    <a href="#">
                        <div class="gatsby-image-wrapper gatsby-image-wrapper-constrained">
                            <img width="360" height="270" data-main-image="" sizes="(min-width: 360px) 360px, 100vw" decoding="async" src="https://bunzo-react.pages.dev/static/ea0dd0f29f3cb42ebb48e74b2da881db/3e4c0/03-special-banner.jpg"  alt="WooCommerce with intuitive drag-and-drop" style="object-fit: cover; opacity: 1;">

                        </div>
                    </a>
                </div>

                <div class="css-ssqfmv">
                    <h3 class="css-h980o4">
                        {{$post->title}}
                    </h3>
                    <p>
                        {{substr(strip_tags($post->content),0,200)}}...
                    </p>

                    <div class="css-t3j8zc">
                        <span class="css-19zyvxr">
                            <a href="#">{{$post->created_at}}</a>
                        </span>
                    </div>
                </div>
            </div>{{-- end item --}}
            @endforeach
        </div>
    </div>
</div>
</section>
@endsection