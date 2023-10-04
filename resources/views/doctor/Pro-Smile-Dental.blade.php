@extends('layouts.content')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2><em>دكتور هوشنگ</em> دينتال كلينك</h2>
          <p>  بكالوريوس طب وجراحة الفم والاسنان </p>
        </div>
      </div>
    </div>
  </div>

  <div class="top-categories">
    <div class="container">
      <div class="row">
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>فحص مجاني</h4>
            <span>الخدمات المجانية</span>
            <span class="counter">نسبة الخصم 100</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>pa- X-ray صورة </h4>
            <span>الخدمات المجانية</span>
            <span class="counter">نسبة الخصم 100</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4> غسل و بولش أسنان </h4>
            <span>الخدمات المجانية</span>
            <span class="counter">لشخص واحد للعائلة</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="featured-contests" dir="rtl">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>قائمة الأسعار</h6>
            <h4>احصل على تخفيضات <em>و خدمات مجانية</em> احجز <em>الان</em></h4>
          </div>
          <div>
          <table class="table table-info text-center">
                <thead>
                  <tr>
                    <th scope="col">الخدمات</th>
                    <th scope="col">السعر</th>
                    <th scope="col">السعر بعد التخفيض</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>حشو مع عصب</td>
                    <td>120.000</td>
                    <td>70.000</td>
                  </tr>
                  <tr>
                    <td>كراس- تلبيس سيراميك</td>
                    <td>100,000</td>
                    <td>70,000</td>
                  </tr>
                  <tr>
                    <td>كراس- تلبيس زيركون</td>
                    <td>100$</td>
                    <td>70$</td>
                  </tr>
                  <tr>
                    <td>كراس- تلبيس ايماكس</td>
                    <td>130$</td>
                    <td>100$</td>
                  </tr>
                  <tr>
                    <td>زرع- جاندني ددان اسنان</td>
                    <td>350$</td>
                    <td>250$</td>
                  </tr>
                  <tr>
                    <td>قلع سن</td>
                    <td>10,000</td>
                    <td>25,000</td>
                  </tr>
                  <tr>
                    <td>قلع (جراحة)</td>
                    <td>100$</td>
                    <td>30$</td>
                  </tr>
                  <tr>
                    <td>تبييض بالليزر</td>
                    <td>120$</td>
                    <td>100,000</td>
                  </tr>
                  <tr>
                    <td>حشو</td>
                    <td>60.000</td>
                    <td>30.000</td>
                  </tr>
                </tbody>
              </table>
          </div>
          </div>
        </div>
      </div>
  </section>      
  
  <section class="featured-contests">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>معرض الصور</h6>
            <h4>سەنتەرێ جوانکاری و چاندن و راستکرنا ددانا </h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/img21.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>الأطباء المتخصصين</h6>
            <h4>أفضل <em>الأطباء</em>ذات الخبرات العلمية </h4>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2">
          <div class="owl-testimonials owl-carousel">
            <div class="item">
              <div class="content">
                <div class="left-content">
                  <p>
                  بكالوريوس طب وجراحة الفم والاسنان
                  </p>
                  <h4>هوشنكـ هشام دوسكى</h4>
                  <span> 07502101616</span>
                </div>
                <div class="image">
                  <img src="assets/images/img20.jpg" style="width:225px">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection