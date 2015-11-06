<header class="header">
    <div class="container">
        <h3><a href="#" class="logo" title="Logo"><img src="{{url('imgs/logo.png')}}" alt="Lycoskin" width="295" height="60"></a></h3>
        <div class="search">
            {!! Form::open(['method' => 'GET', 'url' =>  url('tim-kiem') ]) !!}
                <input type="text" name="q" placeholder="Nhập nội dung cần tìm">
                <button class="btn" type="submit">Submit</button>
            {!! Form::close() !!}
        </div>
        <ul id="globalNav" class="pc">
            <li><a href="{{url('/')}}" class="{{(!empty($page) &&  $page == 'index') ? 'active' : ''}}">Trang chủ</a></li>
            <li><a class="{{(!empty($page) &&  $page == 'trang-min-tu-nhien') ? 'active' : ''}}" href="{{url('trang-min-tu-nhien')}}">Trắng mịn tự nhiên</a></li>
            <li><a class="{{(!empty($page) &&  $page == 'lyco-skin') ? 'active' : ''}}" href="{{url('lyco-skin')}}">Lycoskin</a></li>
            <li><a class="{{(!empty($page) &&  $page == 'tin-tuc') ? 'active' : ''}}" href="{{url('tin-tuc')}}">Tin tức</a></li>
            <li><a class="{{(!empty($page) &&  $page == 'chia-se') ? 'active' : ''}}" href="{{url('chia-se')}}">Chia sẻ</a></li>
            <li><a class="{{(!empty($page) &&  $page == 'phan-phoi') ? 'active' : ''}}" href="{{url('phan-phoi')}}">Điểm bán</a></li>
            <li><a class="{{(!empty($page) &&  $page == 'lien-he') ? 'active' : ''}}" href="{{url('lien-he')}}">Liên hệ</a></li>
        </ul>
        <a href="#" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
</header>