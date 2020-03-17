<h2 class="what " id="contact_form">أطلب الخدمة الآن</h2>
<div class="head-line"></div>
<section class="customer-say">
    <div class="article-section wow bounceInUp">

        <form method="POST" action="{{ route('email') }}" accept-charset="UTF-8" id="addform" name="addform" class="form-horizontal" >
            {{ csrf_field() }}

            <div class="form-group">
                <label>الأسم<span class="danger"> * </span></label>

                <input class="form-control" id="input_name" name="name" type="text" required>

                <label id="contact_name" class="error_sms"></label>
            </div>

            <div class="form-group">
                <label>البريد الالكتروني<span class="danger"> * </span></label>

                <input class="form-control" id="input_email" name="email" type="email" required>

                <label id="contact_email" class="error_sms"></label>
            </div>

            <div class="form-group">
                <label>رقم الجوال<span class="danger"> * </span></label>

                <input class="form-control" id="input_mobile" name="phone" type="number" required>

                <label id="contact_mobile" class="error_sms"></label>
            </div>

            <div class="form-group">
                <label>ما هي الخدمة التي تحتاجها من وينجز<span class="danger"> * </span></label>
                <select class="service_selector form-control" id="input_service_id" style="padding-top: 1px;"
                    name="service_id">
                    <option selected="selected" value="">اختر الخدمة</option>
                    @foreach ($services as $service)
                      <option value="{{$service->id}}" required>{{$service->name}}</option>
                    @endforeach
                </select>
                <label id="contact_service_id" class="error_sms"></label>
            </div>
            <br>
            <div class="form-group">

                <label> هل لديك ملاحظات؟ <span style="color: green">قم بكتابتها بالاسفل</span></label>
                <br>
                <textarea rows="7" name="message" id="contact-texterea" required></textarea>

            </div>

            <div class="text-center">

                <button type="submit" class="btn btn-primary" id="contact_button">
                    ارسال
                </button>

            </div>

        </form>

    </div>
</section>