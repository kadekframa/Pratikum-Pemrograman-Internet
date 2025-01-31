@extends('layouts.master')

@section('content')

<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">Product Details</li>
    </ul>   
    <div class="row">     
            <div id="gallery" class="span3">
                <?php
                    $gambar = \DB::table('base64')->where('product_id', $product->id)->value('nama');
                    $photo = base64_decode($gambar);
                    $foto = \DB::table('product_images')->where('id', $product->product_images_id)->value('image_name');
                ?>
            <a href="themes/images/products/large/f1.jpg" title="{{ $product->product_name }}">
                <img src="{{ asset('image/bridge bg.jpg') }}" style="width:100%" alt="{{ $product->product_name }}"/>
            </a>
            <div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                  </div>
                </div>
              <!--  
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
              -->
              </div>
              
             <div class="btn-toolbar">
              <div class="btn-group">
                <span class="btn"><i class="icon-envelope"></i></span>
                <span class="btn" ><i class="icon-print"></i></span>
                <span class="btn" ><i class="icon-zoom-in"></i></span>
                <span class="btn" ><i class="icon-star"></i></span>
                <span class="btn" ><i class=" icon-thumbs-up"></i></span>
                <span class="btn" ><i class="icon-thumbs-down"></i></span>
              </div>
            </div>
            </div>
            <div class="span6">
                <h3>{{ $product->product_name }}  </h3>
                <hr class="soft"/>
                <form class="form-horizontal qtyFrm">
                  <div class="control-group">
                    <label class="control-label"><span>Rp. {{ number_format($product->price, 0) }}</span></label>
                    <div class="controls">
                      <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></a>
                    </div>
                  </div>
                </form>
                {!! $product->description !!}
                <br class="clr"/>
            <a href="#" name="detail"></a>
            <hr class="soft"/>
            </div>
            
            
            <hr class="soft"/>
            </div>
        </div>
                <br class="clr">
                     </div>
        </div>
          </div>

    </div>
</div>

@endsection

@section('scripts')
    
    <script>
        $(document).ready(function(){
            var flash = "{{ Session::has('pesan') }}";
            if(flash){
                var pesan = "{{ Session::get('pesan') }}";
                swal('success', pesan, 'success');
            }
        });
    </script>

@endsection