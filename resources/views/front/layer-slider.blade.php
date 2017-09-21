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
                                 data-ls="
                            offsetxin:0;
                            offsetyin:top;
                            delayin:350;
                            fadein:false;
                            offsetxout:right;
                            durationout:1000;
                            fadeout:false;"
                                 src="assets/images/_smarty/1x1.png"
                                 data-src="assets/images/_smarty/caption_bg.png" alt="">
                            {{--Arms image of region--}}
                            <img class="ls-l" data-ls="
								durationin:1500;
								scalexin:0.8;
								scaleyin:0.8;
								scalexout:0.8;
								scaleyout:0.8;"
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

                               data-ls="offsetxin:0;
                            durationin:1500;
                            delayin:500;
                            rotatein:30;
                            scalexin:0.2;
                            scaleyin:0.2;
                            offsetxout:0;
                            offsetyout:top;
                            durationout:1000;
                            fadeout:false;
                            rotateout:30;
                            scalexout:0.2;
                            scaleyout:0.2;">
                                Website about Finland
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
                               data-ls="offsetxin:0;
                            durationin:1500;
                            delayin:750;
                            rotatein:30;
                            scalexin:0.2;
                            scaleyin:0.2;
                            offsetxout:right;
                            durationout:1000;
                            fadeout:false;
                            rotateout:45;
                            scalexout:0.2;
                            scaleyout:0.2;">
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
                               data-ls="offsetxin:0;offsetyin:bottom;durationin:1500;delayin:1200;fadein:false;offsetxout:0;offsetyout:bottom;durationout:1000;fadeout:false;">
                                Awesome sliders give you the opportunity to showcase important content.
                                Smarty will constantly be updatedwith brand new features and additions
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