<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title text-center">
                    <h2>HİZMETLER</h2>
                </div>
            </div>
            @foreach($services as $service)
                <div class="col-md-4 my-services">
                    <div class="service-item text-center">
                        <div class="services-icon">
                            <i class="fa fa-{{$service->icon}} fa-2x"></i>
                        </div>
                        <h4 class="service-title">
                            {{$service->title}}
                        </h4>
                        <p class="service-description">
                            {{$service->content}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
