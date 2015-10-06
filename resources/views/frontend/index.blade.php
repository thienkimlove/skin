@extends('frontend')
@section('content')

<section class="section">
    <div class="container">
        <div class="contentLeft">
            <div class="boxRecommended">
                <h3 class="globalTitle">
                    Lý do nên chọn Lycoskin
                </h3>
                <a href="{{url('lyco-skin')}}"><img src="{{url('imgs/temp/img01.jpg')}}" alt="Lý do chọn Lycoskin" width="640" height="325"></a>
            </div>
            <!-- /endboxRecommended -->
            <div class="boxNews clearFix">
                <h3 class="globalTitle">
                    Trắng mịn tự nhiên
                </h3>
                @if ($first = $trangmintunhien->shift())
                <div class="thumb">
                    <a href="{{url($first->slug.'.html')}}">
                        <img src="{{url('t/320x220', $first->image)}}" alt="Bí quyết sáng da hiệu quả">
                    </a>
                    <h3><a href="{{url($first->slug.'.html')}}">{{str_limit($first->title, env('TRIM_TITLE'))}}</a></h3>
                    <p>{{str_limit($first->desc, env('TRIM_DESC'))}}</p>
                    <a href="{{url($first->slug.'.html')}}" class="readMore">Đọc thêm</a>
                </div>
                @endif
                <div class="listNews">
                    @foreach ($trangmintunhien as $post)
                    <div class="item clearFix">
                        <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, env('TRIM_TITLE'))}}</a></h3>
                        <a href="{{url($post->slug.'.html')}}" class="thumb">
                            <img src="{{url('t/130x80', $post->image)}}" alt="List news">
                        </a>
                        <p>{{str_limit($post->desc, env('TRIM_DESC'))}}</p>
                        <a href="{{url($post->slug.'.html')}}" class="readMore">Chi tiết</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /endboxNews -->
        </div>
        <div class="contentRight">
            <div class="boxQuestion">
                <h3 class="globalTitle"> Câu hỏi thường gặp</h3>
                <ul class="listQuestion" id="listQuestions">
                    @foreach ($questions as $question)
                    <li>
                        <a href="#"><span>{{str_limit($question->question, env('TRIM_TITLE'))}}</span></a>
                        <div class="contentQuestion">
                            <p>{{$question->answer}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- /endQuestion -->
            <div class="boxVideo">
                <h3 class="globalTitle">
                    Video
                </h3>
                <div class="content">
                    @if ($video = $videos->shift())
                    <iframe width="100%" height="250" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
                    @endif
                    <ul class="listVideo">
                        @foreach ($videos as $video)
                        <li><a href="{{url('video', $video->slug)}}">{{str_limit($video->title, env('TRIM_TITLE'))}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /endVideo -->
            <div class="boxSale">
                <h3 class="globalTitle">
                    Điểm bán
                </h3>
                <a href="{{url('phan-phoi')}}"><img src="{{url('imgs/temp/sale.jpg')}}" alt="Sale" width="300" height="131"></a>
            </div>
            <!-- /endSale -->
        </div>
    </div>
</section>
<!-- /endSection -->
@include('frontend.box_share')
<!-- /endboxShare -->
<section class="section">
    <div class="container">
        <div class="contentLeft">
            <!-- /endboxRecommended -->
            @include('frontend.box_news')
            <!-- /endboxNews -->
        </div>
        @include('frontend.box_tuvan')
    </div>
</section>
@endsection