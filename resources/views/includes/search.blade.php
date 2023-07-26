@if((bool)$siteSetting->is_slider_active)
<!-- Revolution slider start -->
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
        @if(isset($sliders) && count($sliders))
            @foreach($sliders as $slide)
            <!--Slide-->
            <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="{{$slide->slider_heading}}" src="{{asset('/')}}images/slider/dummy.png" data-lazyload="{{ ImgUploader::print_image_src('/slider_images/'.$slide->slider_image) }}">
                <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="90" data-speed="600" data-start="1600">{{$slide->slider_heading}}</div>
                <div class="caption lfb large-title tp-resizeme sliderpara" data-x="left" data-y="200" data-speed="600" data-start="2800">{!!$slide->slider_description!!}</div>
                <div class="caption lfb large-title tp-resizeme slidertext5" data-x="left" data-y="300" data-speed="600" data-start="3500"><a href="{{$slide->slider_link}}">{{$slide->slider_link_text}}</a></div>
            </li>
            <!--Slide end--> 
            @endforeach
            @endif
        </ul>
    </div>
</div>
<!-- Revolution slider end --> 
<div class="slidersearch">
    <div class="container">
@include('includes.search_form')
</div>
</div>

@else
<div class="searchwrap">
    <div class="container">

        <div class="row">
            <div class="col-lg-7">

            @if(Auth::guard('company')->check())
    <h3 class="seekertxt">{{__('One million success stories')}}. <span>{{__('Search Jobseekers Today')}}.</span></h3>
    @else
    <h3>{{__('One million success job stories')}}. <span>{{__('Start yours today')}}.</span></h3>
    @endif


    @include('includes.search_form')






	
<div class="statsbox">
        <div class="row">
            <div class="col">
                <div class="statint d-flex">
                    <div class="statico"><i class="fas fa-briefcase"></i></div>
                    <div class="statinfo">
                    <h4>{{$jobsCount}}</h4>
                    <p>{{__('Active Jobs')}}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="statint d-flex">
                <div class="statico"><i class="fas fa-building"></i></div>
                <div class="statinfo">
                    <h4>{{$companyCount}} </h4>
                    <p>{{__('Active Companies')}} </p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="statint d-flex">
                <div class="statico"><i class="fas fa-users"></i></div>
                <div class="statinfo">
                    <h4>{{$seekerCount}}</h4>
                    <p>{{__('Candidates')}}</p>
                </div>
                </div>
            </div>
        </div>
</div>


            </div>
            <div class="col-lg-5">
            <div class="searchtpimg"><img src="{{asset('/')}}images/recruiting.png" alt=""></div>
            </div>
        </div>

    

</div>
</div>
@endif






