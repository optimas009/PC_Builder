<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
       <base href="\public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>PC Builder</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->

         <!-- end slider section -->
  
      <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto;width:50%">
               
                     <div class="img-box" style="padding:20px">
                        <img src="product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                     {{$product->title}}
                        </h5>
                   @if($product->discount_price!=null)

                        <h6 style="color:red">
                           Discount price<br>
                           {{$product->discount_price}}tk
                        </h6>

                        <h6 style="text-decoration:line-through; color:blue">
                           Price<br>{{$product->price}}tk
                        </h6>

                        @else
                        <h6 style="color:blue">
                           Price<br>{{$product->price}}tk
                        </h6>

                     @endif
                     <h6>Product Ctegory : {{$product->category}}</h6>
                     <h6>Product Details :{{$product->description}}</h6>
                     <h6>Available Quantity :{{$product->quantity}}</h6>
                <a href="" class="btn btn-primary">Add to Cart</a>

                      
                     </div>
                  </div>
               </div>
 
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
     
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>