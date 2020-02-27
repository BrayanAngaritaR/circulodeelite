@extends('app')

@section('content')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/post_nosidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/post_nosidebar_responsive.css')}}">
@endpush

<!-- Home -->

<div class="home">
   <div class="home_background parallax-window" data-parallax="scroll" style="background-image: url({{ asset('assets/images/post_nosidebar.jpg')}});" data-speed="0.8"></div>

   <div class="home_content">
      <div class="post_category trans_200">
         <a href="category.html" class="trans_200">sport</a>
      </div>

      <div class="post_title">{{$post->title}}</div>

         <div class="post_author d-flex flex-row align-items-center justify-content-center">
            <div class="author_image"><div>
               <img src="{{ asset('assets/images/author.jpg')}}" alt=""></div>
            </div>

            <div class="post_meta">
               <a href="#">{{$post->author->name}}</a>
               <span>{{ $post->publish_date->diffForHumans() }}</span>
            </div>
      </div>
   </div>
</div>

<!-- Page Content -->

<div class="page_content">
   <div class="container">
      <div class="row">

      <!-- Post Content -->

      <div class="col-lg-10 offset-lg-1">
      <div class="post_content">

         <!-- Post Body -->

         <div class="post_body">
         <p class="post_p">{{$post->excerpt}}</p>

         <p class="post_p">{!!$post->body!!}</p>

         <!-- Post Tags and Share-->
         <div class="tags_share d-flex flex-row align-items-center justify-content-start">
            <div class="post_tags">
               <ul>
               @foreach($post->tags as $tag)
                  <li class="post_tag"><a href="#">{{$tag->name}}</a></li>
               @endforeach
               </ul>
            </div>

            <div class="post_share ml-sm-auto">
               <span>Compartir</span>

               <ul class="post_share_list">
                  <li class="post_share_item">
                     <a href="https://www.facebook.com/sharer/sharer.php?u={{route('index')}}/{{$post->slug}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>

                  <li class="post_share_item">
                     <a href="https://twitter.com/home?status={{route('index')}}/{{$post->slug}} Quiero compartir esto contigo para que lo veas en: " target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>

                  <li class="post_share_item">
                     <a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('index')}}/{{$post->slug}}&title=&summary=Quiero compartir esto contigo para que lo veas en: &source=" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li>
                  
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

</div>

<div class="row">
<div class="col">
<!-- Similar Posts -->
<div class="similar_posts">
<div class="grid clearfix">

<!-- Small Card With Image -->
<div class="card card_small_with_image grid-item">
<img class="card-img-top" src="{{ asset('assets/images/post_2.jpg')}}" alt="https://unsplash.com/@jakobowens1">
<div class="card-body">
<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
</div>
</div>

<!-- Small Card With Image -->
<div class="card card_small_with_image grid-item">
<img class="card-img-top" src="{{ asset('assets/images/post_13.jpg')}}" alt="https://unsplash.com/@jakobowens1">
<div class="card-body">
<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
</div>
</div>

<!-- Small Card With Image -->
<div class="card card_small_with_image grid-item">
<img class="card-img-top" src="{{ asset('assets/images/post_26.jpg')}}" alt="https://unsplash.com/@jakobowens1">
<div class="card-body">
<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
</div>
</div>

<!-- Small Card With Image -->
<div class="card card_small_with_image grid-item">
<img class="card-img-top" src="{{ asset('assets/images/post_27.jpg')}}" alt="https://unsplash.com/@jakobowens1">
<div class="card-body">
<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
</div>
</div>

</div>
</div>

</div>
</div>

<div class="row">
<div class="col-lg-6 offset-lg-3">

<!-- Post Comment -->
<div class="post_comment">
<div class="post_comment_title">Post Comment</div>
<div class="post_comment_form_container">
<form action="#">
<input type="text" class="comment_input comment_input_name" placeholder="Your Name" required="required">
<input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required">
<textarea class="comment_text" placeholder="Your Comment" required="required"></textarea>
<button type="submit" class="comment_button">Post Comment</button>
</form>
</div>
</div>

<!-- Comments -->
<div class="comments">
<div class="comments_title">Comments <span>(12)</span></div>
<div class="comments_container">
<ul class="comment_list">
<li class="comment">
<div class="comment_body">
<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
       <div class="comment_author_image"><div><img src="assets/images/comment_author_1.jpg" alt=""></div></div>
       <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
       <button type="button" class="reply_button ml-auto">Reply</button>
</div>
<div class="comment_content">
       <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
</div>
</div>

<!-- Reply -->
<ul class="comment_list">
<li class="comment">
       <div class="comment_body">
               <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                       <div class="comment_author_image"><div><img src="assets/images/comment_author_2.jpg" alt=""></div></div>
                       <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                       <button type="button" class="reply_button ml-auto">Reply</button>
               </div>
               <div class="comment_content">
                       <p>Nulla facilisi. Aenean porttitor quis tortor id tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus molestie varius tincidunt. Vestibulum congue sed libero ac sodales.</p>
               </div>
       </div>

       <!-- Reply -->
       <ul class="comment_list">
               
       </ul>
</li>
</ul>
</li>
<li class="comment">
<div class="comment_body">
<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
       <div class="comment_author_image"><div><img src="{{ asset('assets/images/comment_author_1.jpg')}}" alt=""></div></div>
       <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
       <button type="button" class="reply_button ml-auto">Reply</button>
</div>
<div class="comment_content">
       <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="load_more">
<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
</div>
</div>
</div>
</div>

</div>

@endsection

