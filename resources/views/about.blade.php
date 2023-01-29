@extends('layouts.indexLayout')
@section('otherLinks')
<link rel="stylesheet" href="{{asset('css/about.css')}}"/>
@endsection
@section('content')
<div class="mainContent">
    <div class="about-card us">
      <h2>Qui sommes nous?</h2>
      <div class="us-body">
        <img src="{{asset('img/team.jpeg')}}" alt="Team image" width="300" height="300">
        <div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum asperiores iusto, voluptas explicabo sit.</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis perferendis, nesciunt neque rem, hic sapiente explicabo molestias, temporibus est nulla voluptatem iusto numquam velit sint mollitia libero tenetur officiis adipisci!</p>
        </div>
      </div>
    </div>

    <div class="about-card ia">
      <h2>Les IAs dans notre quotidient</h2>
      <div class="ia-body">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque dolores suscipit maxime nemo. Voluptatum, veritatis! Corrupti totam cumque nulla asperiores sit esse ea voluptate, officia dolor eos veritatis aliquid. Obcaecati modi suscipit eos, sunt officiis rerum delectus hic nostrum tempore!
      </div>
    </div>

    <div class="about-card chatGPT">
      <h2>ChatGPT</h2>
      <div class="chatGPT-body">
        <img src="{{asset('img/chatgpt.jpeg')}}" alt="chatGPT image" width="300" height="300">
        <div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, velit. Voluptate atque cum recusandae expedita est accusantium itaque harum possimus?</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium voluptatem dolore numquam cum ea animi inventore itaque placeat provident vitae culpa perspiciatis quisquam eius quam, obcaecati repudiandae dolorem quae eveniet ducimus ut? Eius suscipit in iusto quod optio.</p>
        </div>
      </div>
    </div>

  </div>
@endsection