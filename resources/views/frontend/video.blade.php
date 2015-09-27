@extends('frontend')
@section('content')
    <!-- /endBanner -->
    <section class="section">
        <div class="container">
            <div class="contentLeft">
                <div class="boxMedia">
                    <h3 class="globalTitle">
                        Video
                    </h3>
                    <div class="hotVideo clearFix">
                        <div class="thumbVideo">
                            <iframe width="100%" height="315" src="{{ !empty($videoMain) ? $videoMain->url :  $hotVideos->first()->url}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <ul class="listVideo">
                            @foreach ($hotVideos as $k => $video)
                                <li><a class="{{((empty($videoMain) && $k == 0) || ($videoMain && $videoMain->id == $video->id)) ? 'active' : '' }}" href="{{url('video', $video->slug)}}">{{str_limit($video->title, env('TRIM_TITLE'))}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    @foreach ($videos as $video)
                        <article class="item">
                            <a class="thumb" href="{{url('video', $video->slug)}}" title="{{$video->title}}">
                                <img src="{{url('image-cached/303x130', $video->image)}}"  alt=""/>
                            </a>
                            <h3>
                                <a href="{{url('video', $video->slug)}}" title="{{$video->title}}">{{str_limit($video->title, 40)}}</a>
                                <span class="view">{{$video->views}} lượt xem</span>
                            </h3>
                        </article>
                    @endforeach
                    <div class="box-paging">
                        {!! with(new \App\Pagination\AcmesPresenter($videos))->render() !!}
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div><!--//box-media-->
                <!-- /endboxNews -->
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection