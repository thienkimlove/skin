<div class="contentRight">
    <div class="boxAdv">
        {!! $settings['box_adv_right_up'] !!}
    </div>
            <!-- /endAdv -->
    <div class="boxHot clearFix">
        <ul class="tabs clearFix">
            <li class="tabLink active" data-tab="tab01">Bài viết đọc nhiều</li>
            <li class="tabLink" data-tab="tab02">Bài viết mới</li>
        </ul>
        <div id="tab01" class="tabContent active">
            @foreach ($mostReads as $post)
                <div class="item clearFix">
                    <a href="{{url($post->slug.'.html')}}" class="thumb">
                        <img src="{{url('t/60x60', $post->image)}}" alt="hot">
                    </a>
                    <h4>
                        <a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, env('TITLE_TRIM'))}}</a>
                    </h4>
                </div>
            @endforeach
        </div>
        <div id="tab02" class="tabContent">
            @foreach ($newPosts as $post)
                <div class="item clearFix">
                    <a href="{{url($post->slug.'.html')}}" class="thumb">
                        <img src="{{url('t/60x60', $post->image)}}" alt="hot">
                    </a>
                    <h4>
                        <a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, env('TITLE_TRIM'))}}</a>
                    </h4>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /endHot -->
    <div class="boxAdv">
        {!! $settings['box_adv_right_down'] !!}
    </div>
</div>