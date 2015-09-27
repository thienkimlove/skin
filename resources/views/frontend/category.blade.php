@extends('frontend')
@section('content')

    <section class="section">
        <div class="container">
            <div class="contentLeft">
                <div class="boxNews clearFix">
                    <h3 class="globalTitle">
                       {{$category->name}}
                    </h3>
                    <div class="listNews fullWidth">
                        @foreach ($posts as $post)
                        <div class="item clearFix">
                            <a href="{{url($post->slug.'.html')}}" class="thumb">
                                <img src="{{url('t/320x180', $post->image)}}" alt="List news">
                            </a>
                            <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, env('TRIM_TITLE'))}}</a></h3>
                            <span class="date">{{ \Carbon\Carbon::parse($post->updated_at)->format('D/m/Y')}}</span>
                            <p>{{str_limit($post->desc, env('TRIM_DESC'))}}</p>
                            <a href="{{url($post->slug.'.html')}}" class="readMore">Chi tiết</a>
                        </div>
                        @endforeach
                        <!-- /paging -->
                        <div class="boxPaging">
                            {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!-- /endboxNews -->
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection