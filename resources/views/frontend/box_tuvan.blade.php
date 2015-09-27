<div class="contentRight">
    <div class="boxConsult clearFix">
        <h3 class="globalTitle">
            Chuyên gia tư vấn
        </h3>
        <a href="{{url('hoi-dap-chuyen-gia')}}" title="Tư vấn">
            <img src="{{url('imgs/temp/consult.jpg')}}" alt="Tư vấn" width="300" height="165">
        </a>
        {!! Form::open(['method' => 'POST', 'route' => ['createQuestion'], 'name' => 'questionForm', 'class' => 'formConsult']) !!}
        <input type="text" name="ask_person" placeholder="Họ và tên" class="txt txtName">
        <input type="text" name="ask_phone" placeholder="Mobile" class="txt txtMob">
        <textarea name="question" class="txt txtArea" placeholder="Câu hỏi"></textarea>
        <input type="submit" value="Gửi đi" class="btnSubmit">
        {!!Form::close()!!}
    </div>
</div>