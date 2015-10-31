@extends('frontend')
@section('content')
    <section class="section">
        <div class="container">
            <div class="contentLeft">
                <div class="boxNews clearFix">
                    <h3 class="globalTitle">
                      <a href="{{url($mPost->category->slug)}}">{{$mPost->category->name}}</a>
                    </h3>
                    <div class="contentDetail">
                        <h1>{{$mPost->title}}</h1>
                        <span class="date">{{ \Carbon\Carbon::parse($mPost->updated_at)->format('D/m/Y')}}</span>
                        {!! $mPost->content !!}
                    </div>
                    <div class="boxLike">
                        <div class="fb-like"></div>
                    </div>
                    <div class="boxTags">
                        <span>TAG</span>
                        @foreach ($mPost->tags as $tag)
                            <a href="{{url('tu-khoa', $tag->slug)}}" title="">{{$tag->name}}</a>
                        @endforeach
                    </div>
                    <div class="boxComment">
                        <div class="fb-comments" data-href="https://www.facebook.com/tuelinh.vn" data-numposts="5"></div>
                    </div>
                </div>
                <!-- /endboxNews -->
                <div class="boxAdv">
                    {!! $settings['box_ad_chi_tiet'] !!}
                </div>
                <!-- /endAdv -->
                <div class="boxRelated">
                    <h3 class="globalTitle">
                        Bài liên quan
                    </h3>
                    <div class="owl-carousel" id="slideRelated">
                        @foreach ($mPost->related as $post)
                        <div class="item">
                            <a href="{{url($post->slug.'.html')}}" title="">
                                <img src="{{url('t/140x140', $post->image)}}" alt=""/>
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}" title="">{{$post->title}}</a>
                            </h3>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection