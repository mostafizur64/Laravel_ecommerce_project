       <section id="slider"><!--slider-->
    <div class="container">
      <div class="row"> 

         <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                      $data=DB::table('sliders')
                               ->where('publication_status',1)
                               ->get();
                    ?>
                    @foreach( $data as $v_slider )
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
               

                <!-- Wrapper for slides -->
                <div></div>
                <div class="carousel-inner" role="listbox">

                    @foreach( $data as $v_slider )

                        <div class="item {{ $loop->first ? ' active' : '' }}" >
                            <img src="{{asset('SliderImage/'.$v_slider->slider_image)}}"  style="width: 500px; height: 500px;" >
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

         </div>
     </div>
 </section>
    