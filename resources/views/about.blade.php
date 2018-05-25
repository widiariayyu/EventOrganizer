@extends('layouts.main')

@section('content')

<style>
.owl-carousel .owl-item img{
	height:250px;

}
</style>
		<div class="container">
			<div class="md-content">
								
				<div class="title-01 title-01__style-04">
					<h5 class="title-01__subTitle">ABOUT</h5>
					<h2 class="title-01__title">We Are From Group 14</h2>
						<div>HappyEvent is the name of the event organizer project in the form of an application. The event organizers application is designed by 6 programmers Ary, Widiary, Febby, Angga, Adi, and Visvani who are six programmer professionals with over a million experience in industry, tourism and hospitality. 
							The purpose of the creation of this application is to simplify the user in finding the desired event of the user, in this organaizer event event we as admin only handle some events consisting of birthday events, weddings, and parties. And hopefully the future of this application that we make this can really help the users looking for the desired event and can be a useful application for the wider community..</div>
						</div>	
				</div>
				<div class="carousel__element owl-carousel" data-options='{"loop":true,"dots":true,"nav":false,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>
					<div class="textbox textbox__style-02">
						<div class="textbox__image"><img src="{{asset ('theme/img/avatars/widia.jpg')}}" alt=""/></div>
							<div class="textbox__body">
						<h2 class="textbox__title">Widiari</h2>		
						</div>
					</div>
						<div class="textbox textbox__style-02">
							<div class="textbox__image"><img src="{{ asset('theme/img/avatars/arysuta.jpg')}}" alt=""/></div>
								<div class="textbox__body">
								<h2 class="textbox__title">ArySuta</h2>		
							</div>
						</div>
						<div class="textbox textbox__style-02">
							<div class="textbox__image"><img src="{{ asset('theme/img/avatars/febbyy.jpg')}}" alt=""/></div>
								<div class="textbox__body">
									<h2 class="textbox__title">Febby</h2>	
								</div>
							</div>
							<div class="textbox textbox__style-02">
								<div class="textbox__image"><img src="{{ asset('theme/img/avatars/angga.jpg')}}" alt=""/></div>
									<div class="textbox__body">
									<h2 class="textbox__title">AnggaZena</h2>		
								</div>
							</div>
								<div class="textbox textbox__style-02">
									<div class="textbox__image"><img src="{{ asset('theme/img/avatars/visvani.jpg')}}" alt=""/></div>
									  <div class="textbox__body">
									    <h2 class="textbox__title">Visvani</h2>		
									</div>
								</div>
								<div class="textbox textbox__style-02">
									<div class="textbox__image"><img src="{{ asset('theme/img/avatars/adi.jpg')}}" alt=""/></div>
									<div class="textbox__body">
										<h2 class="textbox__title">AdiFahmi</h2>	
									</div>
								</div>
							</div>
					</div>
			</div>
		
@endsection