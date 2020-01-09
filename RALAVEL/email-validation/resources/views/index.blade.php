<div>
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="get">
        <label for="email-input"> Email:</label>
        <input value="{{ request('email') }}" id="email-input" type = "text" placeholder = "nhập email cần kiểm tra" name = "email" >
        <input type="submit" name="" id="" value = "Check">
    </form>

    @if (!empty(request('email')))

    Kết quả : {{$check? 'Đúng định dạng email' : 'Sai định dạng email'}}

    @endif
</div>
