<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="footer-top">
                    <div class="col-md-4">
                        <!-- footer About section
                        ========================== -->
                        <div class="footer-about">
                            <h3 class="footer-title">Hakkımda</h3>
                            <p>{{$generalSettings->about}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- footer Address section
                        ========================== -->
                        <div class="footer-address">
                            <h3 class="footer-title">İLETİŞİM</h3>
                            <p>{{$generalSettings->address}}</p>
                            <p class="contact-address">
                                Telefon :
                                <a href="tel:{{$generalSettings->contact_phone}}">+90
                                    ({{substr($generalSettings->contact_phone,0,3)}})
                                    {{substr($generalSettings->contact_phone,3,3)}}
                                    {{substr($generalSettings->contact_phone,6,4)}}
                                </a> <br>
                                E-posta : <a href="mailto:{{$generalSettings->contact_mail}}">{{$generalSettings->contact_mail}}</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- footer Media link section
                        ========================== -->
                        <div class="footer-social-media">
                            <h3 class="footer-title">Sosyal Medya</h3>
                            <ul class="footer-media-link">
                                <li><a target="_blank" href="{{$generalSettings->facebook}}"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="{{$generalSettings->twitter}}"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="{{$generalSettings->linkedin}}"><i class="tf-ion-social-linkedin-outline" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="{{$generalSettings->instagram}}"><i class="tf-ion-social-instagram-outline" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-nav text-center">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="{{route('blog.index')}}">Anasayfa</a></li>
                            <li><a href="{{route('hakkimda')}}">Hakkımda</a></li>
                            <li><a href="{{route('contact')}}">İletişim</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>{{$generalSettings->copyright}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
