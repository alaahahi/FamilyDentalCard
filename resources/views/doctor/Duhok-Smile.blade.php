@extends('layouts.content')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2><em>Duhok Smile</em> Dental</h2>
          <p>  بكالوريوس جراحة الأسنان (BDS) - ماستر في معالجة وتجميل الأسنان -  دكتورا معالجة وتجميل الأسنان</p>
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
              <img src="assets/images/icon-01.png" alt="">
            </div>
            <h4>فحص مجاني</h4>
            <span>الخدمات المجانية</span>
            <span class="counter">نسبة الخصم 100</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-01.png" alt="">
            </div>
            <h4> x ray  صورة</h4>
            <span>الخدمات المجانية</span>
            <span class="counter">نسبة الخصم 100</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-01.png" alt="">
            </div>
            <h4>pa صورة </h4>
            <span>الخدمات المجانية</span>
            <span class="counter">نسبة الخصم 100</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-01.png" alt="">
            </div>
            <h4> غسل أسنان </h4>
            <span>الخدمات المجانية</span>
            <span class="counter">لشخص واحد للعائلة</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-01.png" alt="">
            </div>
            <h4> بولش أسنان </h4>
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
                    <td>حشو</td>
                    <td>80,000 IQD</td>
                    <td>40,000 IQD</td>
                  </tr>
                  <tr>
                    <td>حشو عصب</td>
                    <td>180,000 IQD</td>
                    <td>125,000 IQD</td>
                  </tr>
                  <tr>
                    <td>غسل الأسنان</td>
                    <td>60,000 IQD</td>
                    <td>40,000 IQD</td>
                  </tr>
                  {{-- <tr>
                    <td>تقويم (شفاف)</td>
                    <td>2500$</td>
                    <td>2000$</td>
                  </tr> --}}
                  <tr>
                    <td>زرع- جاندني ددان أسنان</td>
                    <td>500$</td>
                    <td>375$</td>
                  </tr>
                  <tr>
                    <td>تركيب الأسنان سيراميك</td>
                    <td>150,000 IQD</td>
                    <td>90,000 IQD</td>
                  </tr>
                  <tr>
                    <td>تركيب الأسنان زركون</td>
                    <td>250,000 IQD</td>
                    <td>150,000 IQD</td>
                  </tr>
                  <tr>
                    <td>تركيب الأسنان ايماكس</td>
                    <td>300,000 IQD</td>
                    <td>175,000 IQD</td>
                  </tr>
                  <tr>
                    <td>تركيب الأسنان ايماكس دبي</td>
                    <td>450,000 IQD</td>
                    <td>320,000 IQD</td>
                  </tr>
                  <tr>

                    <td>جلسة غاز الضحك – أطفال</td>
                    <td>75,000 IQD</td>
                    <td>50,000 IQD</td>
                  </tr>
                  <tr>

                    <td>تقويم</td>
                    <td>السعر حسب الحالة</td>
                    <td>تخفيض 25%</td>
                  </tr>
                  <tr>

                    <td>قلع السن</td>
                    <td>25,000 IQD</td>
                    <td>15,000 IQD</td>
                  </tr>
                  <tr>

                    <td>تبيض بالليزر</td>
                    <td>300,000 IQD</td>
                    <td>200,000 IQD</td>
                  </tr>
                  <tr>

                    <td>قلع سن العقل بدون عمليات</td>
                    <td>35,000 IQD</td>
                    <td>20,000 IQD</td>
                  </tr>
                  <tr>

                    <td>أشعة بانوراما</td>
                    <td>25,000 IQD</td>
                    <td>20,000 IQD</td>
                  </tr>
                  <tr>

                    <td>أشعة ثلاثية الأبعاد</td>
                    <td>75,000 IQD</td>
                    <td>50,000 IQD</td>
                  </tr>
                  <tr>

                    <td>أشعة فموية</td>
                    <td>15,000 IQD</td>
                    <td>free</td>
                  </tr>
                  <tr>

                    <td>فحص وتشخيص</td>
                    <td>free</td>
                    <td>free</td>
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
              <img src="assets/images/img01.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/img02.jpg" alt="">
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
                  بكالوريوس جراحة الأسنان (BDS)
                  ماستر في معالجة وتجميل الأسنان
                  دكتورا معالجة وتجميل الأسنان
                  </p>
                  <h4>د . إحسان منصور</h4>
                  <span>07503259900</span>
                </div>
                <div class="image">
                  <img src="assets/images/author1.jpg" style="width:225px">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection