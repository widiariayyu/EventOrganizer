@extends('layouts.main')

@section('content')

            
            <div class="md-content">
            
                <div class="slider">
                    
                    <div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 3000}'>
                        <div class="slider__item" style="background-image: url('https://picsum.photos/1080/1083');"> 
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>We are Making an Event</h2>
                                            <p>This Event Organizer will make your events like weddings, birthday parties and graduation to be perfect and unforgettable </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item" style="background-image: url('https://picsum.photos/1920/1080');">
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>We create the trend</h2>
                                            <p>This Event Organizer will not disappoint you with boring or used things, because KuyWaw Event Organizer will create something new and make your event a trend among the community</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <section class="md-section" style="background-color:#f7f7f7;padding:0;">
                    <div class="container">
                        <div class="textbox-group">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 ">
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="{{route('birthday.index')}}"><img src="{{ asset('theme/img/cupcakes.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="{{route('birthday.index')}}">Birthday Party</a></h2>
                                            <div class="textbox__description">Without us, your birthday would have been just another day in the calendar. Let's celebrate!</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="{{route('wedding.index')}}"><img src="{{ asset('theme/img/wedding.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="{{route('wedding.index')}}">Wedding Party</a></h2>
                                            <div class="textbox__description">Happy Event Organizer is the best choice for your perfect and exclusive wedding party. Lets Celebrate! </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="{{route('graduation.index')}}"><img src="{{ asset('theme/img/grad.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="{{route('graduation.index')}}">Graduation</a></h2>
                                            <div class="textbox__description">Happy Event Organizer will help you to make an unforgettable graduation party. Lets celebrate!</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
                <section class="md-section" style="background-color:#f7f7f7;padding-top:0;">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 ">
								
								<!-- iconbox -->
								<div class="iconbox">
									<div class="iconbox__icon"><i class="ti-headphone-alt"></i></div>
									<div>
										<h2 class="iconbox__title"><a href="#">Event</a></h2>
										<div class="iconbox__description">We help you to reach your moments dream and make it happen!</div>
									</div>
								</div><!-- End / iconbox -->
								
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3 ">
								
								<!-- iconbox -->
								<div class="iconbox iconbox__style-02">
									<div class="iconbox__icon"><i class="ti-crown"></i></div>
									<div>
										<h2 class="iconbox__title" style="color:black"><a href="#">Make Up Artist</a></h2>
										<div class="iconbox__description">We Provide make up dan hairdo artist</div>
									</div>
								</div><!-- End / iconbox -->
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3 ">
								
								<!-- iconbox -->
								<div class="iconbox iconbox__style-02">
									<div class="iconbox__icon"><i class="ti-gift"></i></div>
									<div>
										<h2 class="iconbox__title" style="color:black"><a href="#">Decorations</a></h2>
										<div class="iconbox__description">Decorations including baloons, flowers, and confetti</div>
									</div>
								</div><!-- End / iconbox -->
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3 ">
								
								<!-- iconbox -->
								<div class="iconbox iconbox__style-02">
									<div class="iconbox__icon"><i class="ti-location-pin"></i></div>
									<div>
										<h2 class="iconbox__title" style="color:black"><a href="#">Venue</a></h2>
										<div class="iconbox__description">Beautiful beach, fresh park, and unforgettable moments </div>
									</div>
								</div><!-- End / iconbox -->
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3 ">
								
								<!-- iconbox -->
								<div class="iconbox iconbox__style-02">
									<div class="iconbox__icon"><i class="ti-music-alt"></i></div>
									<div>
										<h2 class="iconbox__title" style="color:black"><a href="#">Entertainment</a></h2>
										<div class="iconbox__description">Including clown, singer, group band, and the other artist that you dream</div>
									</div>
								</div><!-- End / iconbox -->
								
							</div>
						</div>
					</div>
				</section>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
                                <div class="title-01">
                                    <h1 class="title-01__title">Gallery</h>
                                </div>
    
                            </div>
                        </div>
                        
                      
                        <div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>
                            @if(count($data) > 0)
                                @foreach($data->all() as $row)
                                <div>
                                    <div class="post-01__media"><a href="#"><img src="{{ asset('files/'.$row->nama_gambar) }}" alt=""/></a>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <h1>Data kosong</h1>
                            @endif
                        </div>
                    </div>

                
@endsection
