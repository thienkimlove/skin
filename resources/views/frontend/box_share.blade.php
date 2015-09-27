<section class="boxShare">
    <div class="container">
        <h3 class="globalTitle">Chia sẻ ngay câu chuyện của bạn</h3>
        <div class="listShare">
            <div class="owl-carousel" id="slideShare">
                @foreach ($shares as $post)
                    <div class="item">
                        <a href="{{url($post->slug.'.html')}}" title="">
                            <img src="{{url('t/274x174', $post->image)}}"/>
                        </a>
                        <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, env('TRIM_TITLE'))}}</a></h3>
                        <span class="date">{{url($post->updated_at->format('D/m/Y'))}}</span>
                        <p>{{str_limit($post->desc, env('TRIM_DESC'))}}</p>
                        <a href="{{url($post->slug.'.html')}}" class="readMore" title="Đọc thêm">Đọc thêm</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>