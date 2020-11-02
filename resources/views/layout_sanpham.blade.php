<?php 
  use Carbon\Carbon;
?>
    @include('pages.block.menu');
    
    <!-- <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{url('public/frontend/image/girl1.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{url('public/frontend/image/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{url('public/frontend/image/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{url('public/frontend/image/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{url('public/frontend/image/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{url('public/frontend/image/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> --><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phâm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            
                           
                        @foreach($category as $value)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{!!url('danhmuc_sanpham/'.$value->id)!!}">{{$value->category_name}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                            
                            
                        </div><!--/category-products-->
                    
                        <div class="brands_products">
                            <h2>Thương hiệu</h2>
                                <div class="brands-name">
                                    @foreach($thuonghieu as $value1)
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="{{url('thuonghieu_sanpham/'.$value1->id)}}"> <span class="pull-right"></span>{{$value1->thuonghieu_name}}</a></li>
                                    </ul>
                                    @endforeach
                                </div>
                            
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Lọc Theo Giá</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{url('public/frontend/image/shipping.jpg')}}" alt="" />
                            {{-- <img style="width: 100%" src="{{url('public/upload/lef3.jpg')}}" alt=""/> --}}
                            {{-- <img style="width: 100%" src="{{url('public/upload/hehe.png')}}" alt=""/> --}}
                        </div><!--/shipping-->

                        {{-- <div class="shipping text-center">
                            <img src="{{url('public/frontend/image/shipping.jpg')}}" alt="" />
                        </div>
                        <div class="shipping text-center">
                            <img style="width: 100%" src="{{url('public/upload/h.jpg')}}" alt=""/>
                        </div> --}}
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    
                    
                   @yield('trangchu')
                    
                   
                    
                </div>
            </div>
        </div>
    </section>
    
      
    @include('pages.block.footer')

