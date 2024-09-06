@extends('layout.main')
@section('title', 'Login')
@section('content')

<section class="css-19s00cp">
<div class="container">
    <div class="row">
        <div class="col-lg-8 ">
            {{-- start item --}}

            @foreach($posts_left as $post)
            <div class="css-urdavj post">
                <div class="css-w41tyw">
                    <a href="/post/view/{{$post->id}}">
                        <div class="gatsby-image-wrapper gatsby-image-wrapper-constrained">
                          <img width="360" height="270" data-main-image="" sizes="(min-width: 360px) 360px, 100vw" decoding="async" src="{{$post->thumb?url($post->thumb):''}}"  style="object-fit: cover; opacity: 1;">
                        </div>
                    </a>
                </div>
                
<div class="css-65wpl8">
    <h3 class="css-h980o4">
        <a href="/post/view/{{$post->id}}">{{$post->title}}</a>
    </h3>
    <p class="css-0">
       {{substr(strip_tags($post->content),0,100)}}...
    </p>

    <div class="css-t3j8zc">
        <span class="css-19zyvxr"><a href="">{{$post->created_at}}</a></span>
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
                    <a href="/post/view/{{$post->id}}">
                        <div class="gatsby-image-wrapper gatsby-image-wrapper-constrained">
                            <img width="360" height="270" data-main-image="" sizes="(min-width: 360px) 360px, 100vw"  src="{{$post->thumb?url($post->thumb):''}}"  alt="{{$post->title}}" style="object-fit: cover; opacity: 1;">

                        </div>
                    </a>
                </div>

                <div class="css-ssqfmv">
                    <h3 class="css-h980o4">
                        <a href="/post/view/{{$post->id}}">{{$post->title}}</a>
                    </h3>
                    <p>
                        {{substr(strip_tags($post->content),0,100)}}...
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

<br/><br/><br/><br/><br/>
@endsection