@php
    $aboutslide=App\models\About::find(1);
    $allMultiImage=App\models\MultiImage::all();
@endphp
<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach($allMultiImage as $item)
                    <li>
                        <img class="light" src="{{asset($item->multi_image)}}" alt="XD">
                        <img class="dark" src="{{asset('')}}frontend/assets/img/icons/xd.png" alt="XD">
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About me</span>
                        <h2 class="title">{{$aboutslide->title}}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{$aboutslide->about_image}}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{$aboutslide->short_title}}</p>
                        </div>
                    </div>
                    <p class="desc">{{$aboutslide->short_description}}</p>
                    <a href="about.html" class="btn">Download my resume</a>
                </div>
            </div>
        </div>
    </div>
</section>