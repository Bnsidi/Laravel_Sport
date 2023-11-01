@extends('layouts.main')

@section('content')


    <div class="home">
        <h1 class="title">Welcome to the world of sports</h1>
        <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        <a class="button" href="">RESERVER</a>
        </div>


        <div class="ML">
            <div class="feature">
                <div>
                    <h3>Features</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
    
                </div>
                <div id ="line"></div>

                <div class="reight">
                    <div class="parag1">
                        <img src="{{URL('images/IMG1.jpg')}}" alt="">
                         <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
    
                    <div class="parag2">
                        <img src="{{URL('images/IMG2.jpg')}}" alt="">
                         <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    
                </div>
            </div>
    </div>
    
     
    
    <div class="ML2">
        <div class="image">
            <img src="{{URL('images/IMG1.jpg')}}" alt="">
            <img src="{{URL('images/IMG1.jpg')}}" alt="">
            <img src="{{URL('images/IMG1.jpg')}}" alt="">
            <img src="{{URL('images/IMG1.jpg')}}" alt="">

        </div>
    </div>


    <div class="advantage">
        <div class="advantageText">
            <h3>Value ...</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
            <div class="titree">
                <h3>titre</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <h3>titre</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            </div>
        <img src="{{URL('images/IMG1.jpg')}}" alt="">
    </div>

@endsection