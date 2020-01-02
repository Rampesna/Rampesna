@if(isset($postedContactForm))
    <div id="postedContactForm" class="alert alert-success page-alert text-center" style="border-radius: 0px;margin: 0">
        <strong>Teşekkür Ederim!</strong> Mesajınız Tarafıma Ulaşmıştır. En Kısa Zamanda Size Geri Dönüş Sağlayacağım.
    </div>
@endif
<section class="contact-map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 padding-0">
                <!-- map -->
                <div id="map" data-latitude="38.3540124" data-longitude="38.3191364"></div>
                <!-- Contact Information -->
                <div class="contact-info">
                    <div class="contact-img">
                        <img src="images/contact/contact-img1.png" alt="">
                    </div>
                    <div class="contact-content">
                        <div class="content-title-section text-center">
                            <h3 class="content-title">İLETİŞİM BİLGİLERİ</h3>
                        </div>
                        <div class="home-address">
                            <div class="flex">
                                <div class="contact-icon text-center">
                                    <i class="tf-ion-ios-home-outline"></i>
                                </div>
                                <p class="ct-info">{{$generalSettings->address}}</p>
                            </div>
                        </div>
                        <div class="web-address">
                            <div class="flex">
                                <div class="contact-icon text-center">
                                    <i class="tf-global"></i>
                                </div>
                                <a href="mailto:{{$generalSettings->contact_mail}}" class="ct-info">{{$generalSettings->contact_mail}}</a>
                            </div>
                        </div>
                        <div class="phone-address">
                            <div class="flex">
                                <div class="contact-icon text-center">
                                    <i class="tf-ion-android-phone-portrait"></i>
                                </div>
                                <a href="tel:+90{{$generalSettings->contact_phone}}" class="ct-info">
                                    +90 ({{substr($generalSettings->contact_phone,0,3)}})
                                    {{substr($generalSettings->contact_phone,3,3)}}
                                    {{substr($generalSettings->contact_phone,6,4)}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact From Study Sections
 =========================-->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="title text-center">
                <h2>İLETİŞİM FORMU</h2>
            </div>
            <form action="{{route('contact-post')}}" class="" method="post">
                {{csrf_field()}}
                <div class="col-md-6">
                    <div class="form-group">
                        <input required maxlength="10" name="phone" type="text" class="form-control onlyNumber" placeholder="Telefon">
                    </div>
                    <div class="form-group">
                        <input required name="email" type="email" class="form-control" placeholder="E-posta Adresi">
                    </div>
                    <div class="form-group margin-0">
                        <input required name="name_surname" type="text" class="form-control" placeholder="Ad Soyad">
                    </div>
                </div>
                <div class="col-md-6 margin-0">
                    <div class="form-group">
                        <textarea required name="message" class="form-control " rows="3" placeholder="Mesajınız"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-btn text-center">
                        <input class="btn btn-default btn-main btn-block" type="submit" value="MESAJ GÖNDER">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
