<div class="boxNews clearFix">
    <h3 class="globalTitle">
        Tin tức
    </h3>
    @if ($first = $news->shift())
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
        @foreach ($news as $post)
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