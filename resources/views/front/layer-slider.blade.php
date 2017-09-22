<!-- LAYER SLIDER -->
<section id="slider">

    <div class="slider">


        <div class="layerslider" style="height:500px; width:100%;">
        @if(count($slides) > 0)
            @foreach($slides as $slide)
                @if($slide->active)
                    <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:6000; transition2d: all;">

                            <img src="imgs/arms/{{ $slide->region->image_name.'.'.$slide->region->image_extension }}"
                                 data-src="imgs/slides/{{ $slide->image_name.'.'.$slide->image_extension }}"
                                 class="ls-bg" alt="Slide background"/>

                            <img class="ls-l" style="width: 420px;left: 70px;"
                                 data-ls="{{ config('defaults-finnice.slides.image-bg-caption-data-ls') }}"
                                 src="assets/images/_smarty/1x1.png"
                                 data-src="assets/images/_smarty/caption_bg.png" alt="">
                            {{--Arms image of region--}}
                            <img class="ls-l" data-ls="{{ config('defaults-finnice.slides.image-arms-data-ls') }}"
                                 style="
                                top:250px;
                                height: 200px;
                                left:22%;"
                                 src="imgs/arms/{{ $slide->region->image_name.'.'.$slide->region->image_extension }}"
                                 alt="">

                            <p class="ls-l"
                               style="top:48px;
                          left:70px;
                          color: #fff;
                          text-shadow: none;
                          text-align: center;
                          font-size: 22px;
                          line-height: 34px;
                          padding: 0;
                          margin: 0;
                          border: 0 none;
                          background-color:#000;
                          white-space: nowrap;
                          width: 420px;"

                               data-ls="{{ config('defaults-finnice.slides.p-first-text-data-ls') }}">

                                {{ $slide->title }}
                            </p>

                            <p class="ls-l"
                               style="top:92px;
                          left:70px;
                          width: 400px;
                          padding: 0 10px;
                          text-align: center;
                          font-size: 35px;
                          line-height: 35px;
                          color:#ffffff;
                          white-space: normal;"
                               data-ls="{{ config('defaults-finnice.slides.p-second-text-data-ls') }}">

                                {{ $slide->region->name }}
                            </p>

                            <p class="ls-l"
                               style="top:172px;
                          left:70px;
                          width: 380px;
                          text-align: center;
                          color: #fff;
                          font-size: 13px;
                          padding: 0 20px;
                          line-height: 20px;
                          text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
                          font-weight: 300;
                          white-space: normal;"
                               data-ls="{{ config('defaults-finnice.slides.p-third-text-data-ls') }}">
                                {{ $slide->text }}
                            </p>
                        </div>
                    @endif
                @endforeach
            @endif

        </div>

        <script type="text/javascript">
            var layer_options = {
                responsive: false,
                responsiveUnder: 1280,
                layersContainer: 1280,
                hoverPrevNext: true,
                skinsPath: 'assets/plugins/slider.layerslider/skins/'
            }
        </script>

    </div>

</section>
<!-- /LAYER SLIDER -->