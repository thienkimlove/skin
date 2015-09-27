@extends('frontend')
@section('content')
    <section class="section">
        <div class="container">
            <div class="contentLeft">
                <div class="boxDist">
                    <h3 class="globalTitle">
                        Hệ thống phân phối
                    </h3>
                    @foreach ($category->subCategories as $cate)
                    <div class="data clearFix">
                        <h3>{{$cate->name}}</h3>
                        @foreach ($cate->cities->chunk(6)  as $gPost)
                            <article class="item">
                                @foreach ($gPost  as $post)
                                    <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{$post->city}}</a>
                                @endforeach
                            </article>
                        @endforeach
                    </div>
                    @endforeach

                </div>
                <!-- /endboxDist -->
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection