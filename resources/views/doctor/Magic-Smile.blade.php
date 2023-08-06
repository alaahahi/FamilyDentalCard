@extends('layouts.content')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2><em>Magic Smile</em> Dental</h2>
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
              <img src="assets/images/icon-05.png" alt="">
            </div>
            <h4>فحص مجاني</h4>
            <span>الخدمات المجانية</span>
            <span class="counter">نسبة الخصم 100</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-05.png" alt="">
            </div>
            <h4>pa-x ray صورة </h4>
            <span>الخدمات المجانية</span>
            <span class="counter">نسبة الخصم 100</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-05.png" alt="">
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
                    <td>حشوة تجميلية</td>
                    <td>60,000</td>
                    <td>40,000</td>
                  </tr>

                  <tr>
                    <td>علاج جذري مع حشو نهائي</td>
                    <td>120,000 (قناة واحدة) / 180,000 (عدة قنوات)</td>
                    <td>100,000 (قناة واحدة) / 120,000 (عدة قنوات)</td>
                  </tr>
                  <tr>
                    <td>تاج للسن (PFM)</td>
                    <td>200,000</td>
                    <td>135,000</td>
                  </tr>
                  <tr>
                    <td>أشعة بانورامية (Periapical X-ray Film)</td>
                    <td></td>
                    <td>مجانًا</td>
                  </tr>
                  <tr>
                    <td>تقويم الأسنان (تقويم فكين نظام الثابت 3D)</td>
                    <td>2000%</td>
                    <td>بالاقساظ كل شهر 100 الف دينار 1600$</td>
                  </tr>
                  <tr>
                    <td>كراس- تلبيسات الأسنان (ابتسامة هوليوود)</td>
                    <td>250$ للسن (سعر ثابت لسن واحد) / 300$ للسن (يختلف حسب نوع المواد)</td>
                    <td>150$ للسن (سعر ثابت لسن واحد) / 200$ للسن (يختلف حسب نوع المواد)</td>
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
              <img src="assets/images/img35.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/img36.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/img37.jpg" alt="">
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
                  </p>د.أنيس 
                  <h4></h4>
                  <span>07503043030</span>
                </div>
                <div class="image">
                  <img src="assets/images/author4.jpg" style="width:225px">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection