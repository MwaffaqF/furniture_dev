@extends('layout.app')
@section('content')

    <div class="site-bd">
        <!-- CONTENT -->
        <div class="tier tier_clean mix-tier_offsetBottom">

            <div class="hero">
                <div class="hero-media js-roomInspiration-launcher"
                     data-room-inspiration-model='{"Id":"22348","Title":"Living","Description":null,"Url":"https://www.bakerfurniture.com/design-story/design-inspiration/room-gallery#!detail=22348","ImageUrl":"/remote.axd?https://bakerinteriors.blob.core.windows.net/prod-media/421546/baa3805_ba3353_baa3760_rstif.jpg","HeroImageUrl":"/remote.axd?https://bakerinteriors.blob.core.windows.net/prod-media/421574/baa3805_ba3353_baa3760_rstif.jpg","FullViewImageUrl":"https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3805_BA3353_BAA3760_RS","Products":[{"Name":"Oasis Sectional Armless Chair","Brand":"Baker","Number":"BAA3805CA","Url":"https://www.bakerfurniture.com/living/seating/sectionals/oasis-sectional-armless-chair-baa3805ca","ImageUrl":"https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3805CSA_Front_3Qrt"},{"Name":"Oasis Sectional Corner Chair","Brand":"Baker","Number":"BAA3805CC","Url":"https://www.bakerfurniture.com/living/seating/sectionals/oasis-sectional-corner-chair-baa3805cc","ImageUrl":"https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3805CC_Front_3Qrt"},{"Name":"Oasis Sectional Chaise - Left Arm","Brand":"Baker","Number":"BAA3805CSL","Url":"https://www.bakerfurniture.com/living/seating/sectionals/oasis-sectional-chaise-left-arm-baa3805csl","ImageUrl":"https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3805CSL_Front_3Qrt"},{"Name":"Oasis Sectional Chaise - Right Arm","Brand":"Baker","Number":"BAA3805CSR","Url":"https://www.bakerfurniture.com/living/seating/sectionals/oasis-sectional-chaise-right-arm-baa3805csr","ImageUrl":"https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3805CSR_Front_3Qrt"},{"Name":"Oasis Sectional Armless Loveseat","Brand":"Baker","Number":"BAA3805LA","Url":"https://www.bakerfurniture.com/living/seating/sofas/oasis-sectional-armless-loveseat-baa3805la","ImageUrl":"https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3805LA_Front_3Qrt"},{"Name":"Marin Cocktail Table","Brand":"Baker","Number":"BA3353","Url":"https://www.bakerfurniture.com/living/tables/tables/marin-cocktail-table-ba3353","ImageUrl":"https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BA3353_Front_3Qrt"},{"Name":"Gemstone Table","Brand":"Baker","Number":"BAA3760","Url":"https://www.bakerfurniture.com/living/tables/tables/gemstone-table-baa3760","ImageUrl":"https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3760_Front"}],"Metadata":[{"Name":"ROOM_TYPE","Value":"Living"},{"Name":"BRAND","Value":""},{"Name":"COLLECTION","Value":"Barbara Barry"}],"ShowCTA":true,"RoomType":"Living"}'>
                    <img src="{{asset('/images/furniture/phillip-goldsberry-fZuleEfeA1Q-unsplash.jpg')}}"
                         {{--                         srcset="/remote.axd?https://bakerinteriors.blob.core.windows.net/prod-media/421574/baa3805_ba3353_baa3760_rstif.jpg?width=640&amp;heightratio=0.44375&amp;mode=crop&amp;anchor=center 640w, /remote.axd?https://bakerinteriors.blob.core.windows.net/prod-media/421574/baa3805_ba3353_baa3760_rstif.jpg?width=768&amp;heightratio=0.4440104167&amp;mode=crop&amp;anchor=center 768w, /remote.axd?https://bakerinteriors.blob.core.windows.net/prod-media/421574/baa3805_ba3353_baa3760_rstif.jpg?width=1280&amp;heightratio=0.44453125&amp;mode=crop&amp;anchor=center 1280w, https://bakerinteriors.blob.core.windows.net/prod-media/421574/baa3805_ba3353_baa3760_rstif.jpg 2000w"--}}
                         {{--                         srcset="{{asset('/furniture/phillip-goldsberry-fZuleEfeA1Q-unsplash.jpg')}}"--}}
                         sizes="(max-width: 1400px) 100vw, 1400px"
                         alt="Living"/>
                    <div class="hero-media-actions mix-hero-media-actions_passthrough hideAboveSmall">
                        <button class="icon icon_expand-reversed mix-icon_lg">
                            Go to the room inspiration gallery
                        </button>
                    </div>
                </div>
                <div class="hero-bd">
                    <div class="hero-bd-inner">
                        <div class="herald mix-herald_visibility">
                            <div class="herald-hd">
                                <h1 class="hdg hdg_2">@if(!empty($data['categories'])) {{$data['categories']['name']}} @endif</h1>
                            </div>
                            <div class="herald-cta herald-cta_decorative">
                                <ul class="vList">
                                    @if($data['categories']['level'] == 2)
                                        @foreach($data['categories']['items'] as $item)
                                            <li>
                                                <a href="{{url('/item/'.$item['id'])}}"
                                                   class="btn btn_simple  mix-btn_persistLeft">{{$item['name']}}</a>
                                            </li>
                                        @endforeach
                                    @else
                                        @foreach($data['categories']['allChildren'] as $category)
                                            <li>
                                                <a href="{{url('/get_all_cat/'.$category['name'])}}"
                                                   class="btn btn_simple  mix-btn_persistLeft">{{$category['name']}}</a>
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hero-bd-actions mix-hero-bd-actions_passthrough showAboveSmall">
                        <button class="icon icon_expand-reversed">
                            Go to the room inspiration gallery
                        </button>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="signal signal_center">
                    <i class="icon icon_arrowDown">Scroll down for more content.</i>
                </div>
            </div>


        </div>
        <div class="tier tier_clean mix-tier_offsetMinor">
            <div class="wrapper">
                <ol class="wayfinding">
                    <li>
                        <a href="../index.html">Double A</a>
                    </li>
                    <li>
                        <a href="index.html">{{$data['categories']['name']}}</a>
                    </li>
                </ol>
            </div>
        </div>
        @foreach($data['categories']['allChildren'] as $category)
            <div class="tier tier_clean mix-tier_offsetBottom">
                <div class="wrapper">
                    <div class="vr vr_7x">
                        <div class="titleBar">
                            <div
                                class="titleBar-hd titleBar-hd_constrained titleBar-hd_constrained_extreme titleBar-hd_narrowed">
                                <h2 class="hdg hdg_6 mix-hdg_thinned">{{$category['name']}}</h2>
                            </div>
                            {{--                            <div class="titleBar-actions">--}}
                            {{--                                <a href="seating/index.html" class="btn btn_simple">View All</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <ul class="dropBlocks dropBlocks_2to4 mix-dropBlocks_expanded">
                        @foreach($category['items'] as $item)
                            <li>
                                <div class="feature">
                                    <div class="feature-media">
                                        <a href="seating/chairs/bubble-chair-baa3800c.html">
                                            <img
                                                src="{{asset('/storage/'.$item['image'][0])}}"
                                                sizes="
                            (max-width: 667px) calc((100vw - (20px * 2) - (56px * 1)) / 2),
                            (max-width: 1048px) calc((100vw - (20px * 2) - (56px * 3)) / 4),
                            222px
                        "
                                                {{--                                                srcset="https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3800C_Front_3Qrt?qlt=85,1&amp;op_sharpen=1&amp;wid=248&amp;hei=248&fit 248w, https://s7d2.scene7.com/is/image/bakerinteriorsgroup/BAA3800C_Front_3Qrt?qlt=85,1&amp;wid=476&hei=476&fit 476w"--}}
                                                alt="{{$item['name']}}" title="{{$item['name']}}">
                                        </a>

                                    </div>
                                    {{--                                <div--}}
                                    {{--                                    class="feature-meta feature-meta_brand feature-meta_centered mix-feature-label_spaced">--}}
                                    {{--                                    BAKER--}}
                                    {{--                                </div>--}}
                                    <div class="feature-label feature-label_centered mix-feature-label_spaced">
                                        <a href="seating/chairs/bubble-chair-baa3800c.html">{{$item['name']}}</a>
                                    </div>
                                    <div class="feature-meta feature-meta_centered mix-feature-label_spaced">

                                        <a href="seating/chairs/bubble-chair-baa3800c.html"> {{$item['code']}}</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <!-- end .dropBlocks -->
                </div>
                <!-- end .wrapper -->
            </div>
    @endforeach
    <!-- end .tier -->

    </div>

@endsection
