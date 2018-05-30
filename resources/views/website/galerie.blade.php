@extends('layout.layout')   

    @section('content')
</br></br></br></br>
</br></br></br></br>
<div class="container" style="background: #80808033;">
	
  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
      <img src="img/slide-1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
      <img src="img/slide-2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
      <img src="img/slide-3.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/slide-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/slide-2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/slide-3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Snowy Mountains">
    </div>
  </div>
</div>
		    




@endsection