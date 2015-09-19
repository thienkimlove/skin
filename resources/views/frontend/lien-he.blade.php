@extends('frontend')
@section('content')

    <section class="section">
        <div class="container">
            <div class="contentLeft">
                <div class="boxContact">
                    <div class="item">
                        <h3 class="globalTitle">
                            Liên hệ
                        </h3>
                        <p>
                            Địa chỉ liên hệ <br>
                            Tại Hà Nội <br>
                            Địa chỉ: Tầng 5 tòa nhà 29T1, <br>
                            phố Hoàng Đạo Thúy, Trung Hòa, <br>
                            Cầu Giấy, Hà Nội <br>
                            ĐT: 04.62824344 <br>
                            Fax: 04.62824263 <br>
                        </p>
                        <p>
                            Chi nhánh TP. HCM <br>
                            Địa chỉ:156/17 Tô Hiến Thành. P15 Q10. <br>
                            TP.HCM <br>
                            ĐT: 083.9797779 <br>
                            Fax: 086.2646832 <br>
                            Đường dây nóng: 0912571190. <br>
                        </p>
                    </div>
                    <div class="item">
                        <h3>Gửi thư liên hệ</h3>
                        <div class="boxConsult clearFix">
                            <form action="consult.php" method="post" class="formConsult">
                                <input type="text" placeholder="Họ và tên" class="txt txtName">
                                <input type="text" placeholder="Mobile" class="txt txtMob">
                                <textarea name="comments" class="txt txtArea" placeholder="Câu hỏi"></textarea>
                                <input type="reset" value="Hủy" class="btnReset">
                                <input type="submit" value="Gửi đi" class="btnSubmit">
                            </form>
                        </div>
                    </div>
                    <div class="boxMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14898.483493048278!2d105.8014624!3d21.007829299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5a02fbb0f5%3A0x75b5e966c9fb8bc0!2zQ8O0bmcgdHkgVE5ISCBUdeG7hyBMaW5o!5e0!3m2!1svi!2s!4v1441615369587" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="contentRight">
                <!-- /endAdv -->
                <div class="boxHot clearFix">
                    <ul class="tabs clearFix">
                        <li class="tabLink active" data-tab="tab01">Bài viết đọc nhiều</li>
                        <li class="tabLink" data-tab="tab02">Bài viết mới</li>
                    </ul>
                    <div id="tab01" class="tabContent active">
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/hot01.jpg" alt="hot" width="60" height="60">
                            </a>
                            <h4>
                                <a href="#">Cách làm đẹp với mật ong giúp da đẹp và sáng hơn...</a>
                            </h4>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/hot01.jpg" alt="hot" width="60" height="60">
                            </a>
                            <h4>
                                <a href="#">Cách làm đẹp với mật ong giúp da đẹp và sáng hơn...</a>
                            </h4>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/hot01.jpg" alt="hot" width="60" height="60">
                            </a>
                            <h4>
                                <a href="#">Cách làm đẹp với mật ong giúp da đẹp và sáng hơn...</a>
                            </h4>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/hot01.jpg" alt="hot" width="60" height="60">
                            </a>
                            <h4>
                                <a href="#">Cách làm đẹp với mật ong giúp da đẹp và sáng hơn...</a>
                            </h4>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/hot01.jpg" alt="hot" width="60" height="60">
                            </a>
                            <h4>
                                <a href="#">Cách làm đẹp với mật ong giúp da đẹp và sáng hơn...</a>
                            </h4>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/hot01.jpg" alt="hot" width="60" height="60">
                            </a>
                            <h4>
                                <a href="#">Cách làm đẹp với mật ong giúp da đẹp và sáng hơn...</a>
                            </h4>
                        </div>
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/hot01.jpg" alt="hot" width="60" height="60">
                            </a>
                            <h4>
                                <a href="#">Cách làm đẹp với mật ong giúp da đẹp và sáng hơn...</a>
                            </h4>
                        </div>
                    </div>
                    <div id="tab02" class="tabContent">
                        <div class="item clearFix">
                            <a href="#" class="thumb">
                                <img src="imgs/temp/hot02.jpg" alt="hot" width="60" height="60">
                            </a>
                            <h4>
                                <a href="#">Cách làm đẹp với mật ong giúp da đẹp và sáng hơn...</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- /endQuestion -->
                <div class="boxVideo">
                    <h3 class="globalTitle">
                        Video
                    </h3>
                    <div class="content">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/4QEmJ3sPHIg" frameborder="0" allowfullscreen></iframe>
                        <ul class="listVideo">
                            <li><a href="#">&raquo; Chuyên gia thảo mộc Joe Hollis chia sẻ</a></li>
                            <li><a href="#">&raquo; Chuyên gia thảo mộc Joe Hollis chia sẻ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /endVideo -->
                <div class="boxSale">
                    <h3 class="globalTitle">
                        Điểm bán
                    </h3>
                    <a href="#"><img src="imgs/temp/sale.jpg" alt="Sale" width="300" height="131"></a>
                </div>
                <!-- /endSale -->
                <div class="boxConsult clearFix">
                    <h3 class="globalTitle">
                        Chuyên gia tư vấn
                    </h3>
                    <a href="#" title="Tư vấn">
                        <img src="imgs/temp/consult.jpg" alt="Tư vấn" width="300" height="165">
                    </a>
                    <form action="consult.php" method="post" class="formConsult">
                        <input type="text" placeholder="Họ và tên" class="txt txtName">
                        <input type="text" placeholder="Mobile" class="txt txtMob">
                        <textarea name="comments" class="txt txtArea" placeholder="Câu hỏi"></textarea>
                        <input type="reset" value="Hủy" class="btnReset">
                        <input type="submit" value="Gửi đi" class="btnSubmit">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection