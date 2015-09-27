<footer class="footer">
    <div class="container">
        <div class="boxFooter clearFix">
            <div class="item itemLeft">
                <h3>Danh mục</h3>
                <ul class="listCategory clearFix">
                    <li><a href="{{url('/')}}" class="{{(!empty($page) &&  $page == 'index') ? 'active' : ''}}">Trang chủ</a></li>
                    <li><a class="{{(!empty($page) &&  $page == 'trang-min-tu-nhien') ? 'active' : ''}}" href="{{url('trang-min-tu-nhien')}}">Trắng mịn tự nhiên</a></li>
                    <li><a class="{{(!empty($page) &&  $page == 'lyco-skin') ? 'active' : ''}}" href="{{url('lyco-skin')}}">Lycoskin</a></li>
                    <li><a class="{{(!empty($page) &&  $page == 'tin-tuc') ? 'active' : ''}}" href="{{url('tin-tuc')}}">Tin tức</a></li>
                    <li><a class="{{(!empty($page) &&  $page == 'chia-se') ? 'active' : ''}}" href="{{url('chia-se')}}">Chia sẻ</a></li>
                </ul>
            </div>
            <div class="item itemMid">
                <h3>Liên hệ</h3>
                <p>
                    Công ty TNHH Tuệ Linh <br>
                    Địa chỉ: Tòa nhà 29T1. Hoàng Đạo Thúy, Trung Hoà, Hà Nội <br>
                    Email: info@tuelinh.com <br>
                    Tel: 0123 456 789 <br>
                    Fax: 0123 456 789 <br>
                </p>
                <ul class="listSocial clearFix">
                    <li><a href="#" class="fb">facebook</a></li>
                    <li><a href="#" class="tw">twitter</a></li>
                    <li><a href="#" class="yu">youtube</a></li>
                </ul>
            </div>
            <div class="item itemRight">
                <div class="fb-page" data-href="https://www.facebook.com/tuelinh.vn" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/tuelinh.vn"><a href="https://www.facebook.com/tuelinh.vn">Tuệ Linh</a></blockquote></div></div>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <div class="container">
            <p>2015 TuelinhPharmacy, inc. All rights reserved</p>
        </div>
    </div>
</footer>