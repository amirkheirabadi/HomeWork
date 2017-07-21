@extends('layouts.main')

@section('content')
<div class="pagebox">
<div id="login_tabber">
    <ul class="tabbs">
        <li><a href="#register">ثبت نام</a></li>
    </ul><!--tabs--> 
    <div class="clear"></div>
    <div class="tab_container">
        <div id="register" class="tab_content">
        <form action="" method="post" id="faq_form">
                <input type="text" name="name" placeholder="Name" value="{{$question->name}}">
                <input type="email" name="email" placeholder="Email" value="{{$question->email}}">
                <input type="text" name="mobile" placeholder="Mobile" value="{{$question->mobile}}">
                <textarea name="text" placeholder="Question" id="" cols="30" rows="10">{{$question->text}}</textarea>

                <input type="submit" value="Send Question">
                {{ csrf_field() }}
        </form>
        </div><!--register tab-->
    </div><!--tab_container-->
</div><!--login_tabber-->
<div id="loginhelp">
Show Gallery
 <div class="productinfo">
             <div class="buttons">
                	<div class="buy">
                    	<a href="/social/instagram">Instagram</a>
                    </div><!--buy-->
                </div><!--Buttons-->
        </div><!--product info-->
    <h4>چرا باید ثبت نام کنم؟</h4>
    <p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که</p>
    <h4>ورود هنگام خرید</h4>
    <p>اگر کاربر در هنگام خرید وارد نشده بود مرحله ای از خرید که می باشد در اینجا درج میشود</p>
</div><!--help about login-->
</div><!--pagebox-->
@endsection

@section('footer')
<script>
$( "#faq_form" ).validate({
  rules: {
    name: {
      required: true
    },
    email: {
        required:true,
        email: true
    },
    mobile:{
        required: true,
        digits: true
    },
    text: {
        required: true
    }
  }
});
 </script>
    
@endsection

