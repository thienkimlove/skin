@extends('frontend')
@section('content')
    <section class="section">
        <div class="container">
            <div class="contentLeft">
                <div class="boxProducts">
                    <ul class="proTabs clearFix">
                        <li class="tabLink active" data-tab="tabInfo">Thông tin sản phẩm</li>
                        <li class="tabLink" data-tab="tabChoose">Vì sao nên chọn Lycoskin</li>
                        <li class="tabLink" data-tab="tabRate">Thông tin khoa học</li>
                    </ul>
                    <div id="tabInfo" class="tabProduct active">
                        {!! $settings['tab_product_content'] !!}
                    </div>
                    <!-- endTab01 -->
                    <div id="tabChoose" class="tabProduct">
                        <div class="item clearFix">
                           {!! $settings['tab_choose_content'] !!}
                        </div>
                    </div>
                    <!-- /endTab02 -->
                    <div id="tabRate" class="tabProduct">
                        <div class="item clearFix">
                          {!! $settings['tab_rate_content'] !!}
                        </div>
                    </div>
                    <!-- /endTab03 -->
                </div>
            </div>
            @include('frontend.right')
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