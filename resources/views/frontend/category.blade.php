@extends('frontend')
@section('content')

    <section class="section">
        <div class="container">
            <div class="contentLeft">
                <div class="boxNews clearFix">
                    <h3 class="globalTitle">
                        Tin tức
                    </h3>
                    <div class="listNews fullWidth">
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/new01.jpg" alt="List news" width="320" height="180">
                            </a>
                            <h3>Bí quyết sáng da hiệu quả</h3>
                            <span class="date">07/09/2015</span> | <span class="tag">Bí quyết làm đẹp</span>
                            <p>
                                Những tổn hại về da xuất hiện từ sớm nhưng thường ẩn sâu bên trong các lớp cấu  trúc da. Nếu đợi đến khi...
                            </p>
                            <a href="#" class="readMore">Chi tiết</a>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/new02.jpg" alt="List news" width="320" height="180">
                            </a>
                            <h3>Bí quyết sáng da hiệu quả</h3>
                            <span class="date">07/09/2015</span> | <span class="tag">Bí quyết làm đẹp</span>
                            <p>
                                Những tổn hại về da xuất hiện từ sớm nhưng thường ẩn sâu bên trong các lớp cấu  trúc da. Nếu đợi đến khi...
                            </p>
                            <a href="#" class="readMore">Chi tiết</a>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/new03.jpg" alt="List news" width="320" height="180">
                            </a>
                            <h3>Bí quyết sáng da hiệu quả</h3>
                            <span class="date">07/09/2015</span> | <span class="tag">Bí quyết làm đẹp</span>
                            <p>
                                Những tổn hại về da xuất hiện từ sớm nhưng thường ẩn sâu bên trong các lớp cấu  trúc da. Nếu đợi đến khi...
                            </p>
                            <a href="#" class="readMore">Chi tiết</a>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/new04.jpg" alt="List news" width="320" height="180">
                            </a>
                            <h3>Bí quyết sáng da hiệu quả</h3>
                            <span class="date">07/09/2015</span> | <span class="tag">Bí quyết làm đẹp</span>
                            <p>
                                Những tổn hại về da xuất hiện từ sớm nhưng thường ẩn sâu bên trong các lớp cấu  trúc da. Nếu đợi đến khi...
                            </p>
                            <a href="#" class="readMore">Chi tiết</a>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/new05.jpg" alt="List news" width="320" height="180">
                            </a>
                            <h3>Bí quyết sáng da hiệu quả</h3>
                            <span class="date">07/09/2015</span> | <span class="tag">Bí quyết làm đẹp</span>
                            <p>
                                Những tổn hại về da xuất hiện từ sớm nhưng thường ẩn sâu bên trong các lớp cấu  trúc da. Nếu đợi đến khi...
                            </p>
                            <a href="#" class="readMore">Chi tiết</a>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/new06.jpg" alt="List news" width="320" height="180">
                            </a>
                            <h3>Bí quyết sáng da hiệu quả</h3>
                            <span class="date">07/09/2015</span> | <span class="tag">Bí quyết làm đẹp</span>
                            <p>
                                Những tổn hại về da xuất hiện từ sớm nhưng thường ẩn sâu bên trong các lớp cấu  trúc da. Nếu đợi đến khi...
                            </p>
                            <a href="#" class="readMore">Chi tiết</a>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/new07.jpg" alt="List news" width="320" height="180">
                            </a>
                            <h3>Bí quyết sáng da hiệu quả</h3>
                            <span class="date">07/09/2015</span> | <span class="tag">Bí quyết làm đẹp</span>
                            <p>
                                Những tổn hại về da xuất hiện từ sớm nhưng thường ẩn sâu bên trong các lớp cấu  trúc da. Nếu đợi đến khi...
                            </p>
                            <a href="#" class="readMore">Chi tiết</a>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/new08.jpg" alt="List news" width="320" height="180">
                            </a>
                            <h3>Bí quyết sáng da hiệu quả</h3>
                            <span class="date">07/09/2015</span> | <span class="tag">Bí quyết làm đẹp</span>
                            <p>
                                Những tổn hại về da xuất hiện từ sớm nhưng thường ẩn sâu bên trong các lớp cấu  trúc da. Nếu đợi đến khi...
                            </p>
                            <a href="#" class="readMore">Chi tiết</a>
                        </div>
                        <!-- /paging -->
                        <div class="boxPaging">
                            {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!-- /endboxNews -->
            </div>
            @include('frontend.right_category')
        </div>
    </section>
@endsection