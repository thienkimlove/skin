@extends('frontend')
@section('content')

    <section class="section">
        <div class="container">
            <div class="contentLeft">
                <div class="boxNews clearFix">
                    <h3 class="globalTitle">
                        Hỏi đáp Chuyên gia
                    </h3>
                    <div class="listNews fullWidth">
                        @foreach ($questions as $question)
                            <div class="item clearFix">
                                <a href="#" class="thumb">
                                    <img src="{{url('t/320x180', $question->image)}}" alt="List news">
                                </a>
                                <h3><a href="#">{{str_limit($question->question, env('TRIM_TITLE'))}}</a></h3>
                                <span class="date">{{$question->updated_at->format('D/m/Y')}}</span>
                                <p>{{str_limit($question->answer, env('TRIM_DESC'))}}</p>
                                <a href="#" class="readMore">Chi tiết</a>
                            </div>
                            @endforeach
                                    <!-- /paging -->
                            <div class="boxPaging">
                                {!! with(new \App\Pagination\AcmesPresenter($questions))->render() !!}
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