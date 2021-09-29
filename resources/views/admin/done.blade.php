
<body style="background-color: red">
  
<div class="container custom-product">
  <!-- <div class="carousel slide" data-ride="carousel" id="sliders">
  <ol class="carousel-indicators">
    <li class="active" data-slide-to="0" data-target="#sliders"></li>
    <li class="active" data-slide-to="1" data-target="#sliders"></li>
    <li class="active" data-slide-to="2" data-target="#sliders"></li>

  </ol>
  <div class="carousel-inner" style="background-color: red">


    @foreach($product as $item)
    <div class="carousel-item{{$item['id'] ==1?'active':''}}">
      <img src="{{$item['gellary']}}" class="d-block w-100" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
    </div>
    @endforeach
  
    
  </div>

<a href="#sliders" class="carousel-control-prev" data-slide="prev" role="button">
  <span aria-hideen="true" class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
  <a href="#sliders" class="carousel-control-next" data-slide="next" role="button">
  <span aria-hideen="true" class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
</div> -->
     
<div class="carousel slide" data-ride="carousel" id="sliders">
  <ol class="carousel-indicators">
    <li class="active" data-slide-to="0" data-target="#sliders"></li>
    <li class="active" data-slide-to="1" data-target="#sliders"></li>
    <li class="active" data-slide-to="2" data-target="#sliders"></li>

  </ol>
  <div class="carousel-inner ">
    @foreach($product as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
     <a href="/details/{{$item['id']}}">
        <img class="treading-img" src="{{$item['gellary']}}" class="d-block w-100" alt="First slide">
    <div class="carousel-caption d-none d-md-block right">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
     </a>
    </div>
    @endforeach
    
  
    
  </div>

<a href="#sliders" class="carousel-control-prev" data-slide="prev" role="button">
  <span aria-hideen="true" class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
  <a href="#sliders" class="carousel-control-next" data-slide="next" role="button">
  <span aria-hideen="true" class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
</div>
<div class="treading-wrapper">
  <h2>Trending Image</h2>
  @foreach($product as $item)
  <div class="treading-item"> 
     <a href="/details/{{$item['id']}}">
<img class=" image" src="{{$item['gellary']}}">
<div  class="">
  <h3 style="color: red;">{{$item['name']}}</h3>
  <p>{{$item['price']}}</p>
   <p style="color: red;">{{$item['description']}}</p>
</div>
</a>
  </div>
   @endforeach
  </div>
  
 







