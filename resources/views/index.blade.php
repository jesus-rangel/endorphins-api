@extends('layouts.app')
@section('content')
<!-- **** HEADER **** -->
<section class="site-title">
  <div class="site-background" data-aos="fade-up" data-aos-delay="100">
    <h3>Tours & Travels</h3>
    <h1>Most Amazing Place on Earth</h1>
    <!-- <button class="btn">Explore</button> -->
  </div>
</section>
<!-- **** END OF HEADER **** -->

<!-- **** OWL CAROUSEL **** -->

<section class="owl-carousel-section">
  <div class="blog">
    <div class="custom-container">
      <div class="owl-nav">
        <span class="owl-nav-previous">
          <i class="fas fa-chevron-left fa-2x"></i>&emsp;
        </span>
        <span class="owl-nav-next">
          &emsp;<i class="fas fa-chevron-right fa-2x"></i>
        </span>
      </div>
      <div class="owl-carousel owl-theme blog-post">
        <div class="blog-content" data-aos="fade-right" data-aos-delay="100">
          <img src="../assets/Blog-post/post-1.jpg" alt="post-1" />
          <div class="blog-title">
            <h3>London Fashion week</h3>
            <button class="btn btn-blog">Fashion</button>
            <span>2 minutes</span>
          </div>
        </div>
        <div class="blog-content" data-aos="fade-in" data-aos-delay="100">
          <img src="../assets/Blog-post/post-3.jpg" alt="post-1" />
          <div class="blog-title">
            <h3>London Fashion week</h3>
            <button class="btn btn-blog">Fashion</button>
            <span>2 minutes</span>
          </div>
        </div>
        <div class="blog-content" data-aos="fade-left" data-aos-delay="100">
          <img src="../assets/Blog-post/post-2.jpg" alt="post-1" />
          <div class="blog-title">
            <h3>London Fashion week</h3>
            <button class="btn btn-blog">Fashion</button>
            <span>2 minutes</span>
          </div>
        </div>
        <div class="blog-content" data-aos="fade-right" data-aos-delay="100">
          <img src="../assets/Blog-post/post-5.png" alt="post-1" />
          <div class="blog-title">
            <h3>London Fashion week</h3>
            <button class="btn btn-blog">Fashion</button>
            <span>2 minutes</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- **** END OF OWL CAROUSEL **** -->

<!-- **** MAIN CONTENT -->

<section class="custom-container">
  <div class="site-content">
    <div class="posts">
      <div class="post-content" data-aos="zoom-in" data-aos-delay="100">
        <div class="post-image">
          <div>
            <img src="../assets/Blog-post/blog1.png" alt="Blog1">
          </div>
          <div class="post-info flex-row">
            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14th, 2019</span>
            <span>2 Comments</span>
          </div>
        </div>
        <div class="post-title">
          <a href="#">Dogs are cuter than cats</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At provident eligendi alias culpa, ipsam cupiditate, necessitatibus facilis fugit vitae obcaecati harum. Consectetur fugit reprehenderit quidem quaerat tempora quam quisquam laboriosam.</p>
          <button class="btn post-btn">Read More&nbsp; <i class="fas fa-arrow-right"></i></button>
        </div>
      </div>
      <hr>
      <div class="post-content" data-aos="zoom-in" data-aos-delay="100">
        <div class="post-image">
          <div>
            <img src="../assets/Blog-post/blog2.png" alt="Blog1">
          </div>
          <div class="post-info flex-row">
            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16th, 2019</span>
            <span>2 Comments</span>
          </div>
        </div>
        <div class="post-title">
          <a href="#">Dogs are cuter than cats</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At provident eligendi alias culpa, ipsam cupiditate, necessitatibus facilis fugit vitae obcaecati harum. Consectetur fugit reprehenderit quidem quaerat tempora quam quisquam laboriosam.</p>
          <button class="btn post-btn">Read More&nbsp; <i class="fas fa-arrow-right"></i></button>
        </div>
      </div>
      <hr>
      <div class="post-content" data-aos="zoom-in" data-aos-delay="100">
        <div class="post-image">
          <div>
            <img src="../assets/Blog-post/blog3.png" alt="Blog1">
          </div>
          <div class="post-info flex-row">
            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 19th, 2019</span>
            <span>7 Comments</span>
          </div>
        </div>
        <div class="post-title">
          <a href="#">The way Melania looks at Trump says everything</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At provident eligendi alias culpa, ipsam cupiditate, necessitatibus facilis fugit vitae obcaecati harum. Consectetur fugit reprehenderit quidem quaerat tempora quam quisquam laboriosam.</p>
          <button class="btn post-btn">Read More&nbsp; <i class="fas fa-arrow-right"></i></button>
        </div>
      </div>
      <hr>
      <div class="post-content" data-aos="zoom-in" data-aos-delay="100">
        <div class="post-image">
          <div>
            <img src="../assets/Blog-post/blog4.png" alt="Blog4">
          </div>
          <div class="post-info flex-row">
            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 21st, 2019</span>
            <span>13 Comments</span>
          </div>
        </div>
        <div class="post-title">
          <a href="#">More and more people are escaping from work to the sea</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At provident eligendi alias culpa, ipsam cupiditate, necessitatibus facilis fugit vitae obcaecati harum. Consectetur fugit reprehenderit quidem quaerat tempora quam quisquam laboriosam.</p>
          <button class="btn post-btn">Read More&nbsp; <i class="fas fa-arrow-right"></i></button>
        </div>
      </div>
      <div class="pagination flex-row">
        <a href="#"><i class="fas fa-chevron-left"></i></a>
        <a href="#" class="pages">1</a>
        <a href="#" class="pages">2</a>
        <a href="#" class="pages">3</a>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <aside class="sidebar">
      <div class="category">
        <h2>Categories</h2>
        <ul class="category-list">
          <li class="list-item" data-aos="fade-left" data-aos-delay="100">
            <a href="#">Software</a>
            <span>(05)</span>
          </li>
          <li class="list-item" data-aos="fade-left" data-aos-delay="200">
            <a href="#">Technology</a>
            <span>(02)</span>
          </li>
          <li class="list-item" data-aos="fade-left" data-aos-delay="300">
            <a href="#">Lifestyle</a>
            <span>(07)</span>
          </li>
          <li class="list-item" data-aos="fade-left" data-aos-delay="400">
            <a href="#">Shopping</a>
            <span>(01)</span>
          </li>
          <li class="list-item" data-aos="fade-left" data-aos-delay="500">
            <a href="#">Food</a>
            <span>(08)</span>
          </li>
        </ul>
      </div>
      <div class="popular">
        <h2>Trending</h2>
        <div class="trending-post" data-aos="flip-up" data-aos-delay="100">
          <div class="post-image">
            <div>
              <img src="../assets/popular-post/m-blog-1.jpg" alt="Blog1">
            </div>
            <div class="post-info flex-row">
              <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16th, 2019</span>
              <span>2 Comments</span>
            </div>
          </div>
          <div class="post-title">
            <a href="#">Cat people say cats are cuter than dogs</a>
          </div>
        </div>
        <div class="trending-post" data-aos="flip-up" data-aos-delay="100">
          <div class="post-image">
            <div>
              <img src="../assets/popular-post/m-blog-2.jpg" alt="Blog1">
            </div>
            <div class="post-info flex-row">
              <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16th, 2019</span>
              <span>2 Comments</span>
            </div>
          </div>
          <div class="post-title">
            <a href="#">Cat people say cats are cuter than dogs</a>
          </div>
        </div>
        <div class="trending-post" data-aos="flip-up" data-aos-delay="100">
          <div class="post-image">
            <div>
              <img src="../assets/popular-post/m-blog-3.jpg" alt="Blog1">
            </div>
            <div class="post-info flex-row">
              <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16th, 2019</span>
              <span>2 Comments</span>
            </div>
          </div>
          <div class="post-title">
            <a href="#">Cat people say cats are cuter than dogs</a>
          </div>
        </div>
        <div class="trending-post" data-aos="flip-up" data-aos-delay="100">
          <div class="post-image">
            <div>
              <img src="../assets/popular-post/m-blog-4.jpg" alt="Blog1">
            </div>
            <div class="post-info flex-row">
              <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16th, 2019</span>
              <span>2 Comments</span>
            </div>
          </div>
          <div class="post-title">
            <a href="#">Cat people say cats are cuter than dogs</a>
          </div>
        </div>
        <div class="trending-post" data-aos="flip-up" data-aos-delay="100">
          <div class="post-image">
            <div>
              <img src="../assets/popular-post/m-blog-5.jpg" alt="Blog1">
            </div>
            <div class="post-info flex-row">
              <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16th, 2019</span>
              <span>2 Comments</span>
            </div>
          </div>
          <div class="post-title">
            <a href="#">Cat people say cats are cuter than dogs</a>
          </div>
        </div>
        <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
          <h2>Newsletter</h2>
          <div class="form-element">
            <input type="text" name="" id="" class="input-element" placeholder="Email">
            <button class="btn form-btn">Subscribe</button>
          </div>    
        </div>
        <div class="popular-tags">
          <h2>Popular Tags</h2>
          <div class="tags flex-row">
            <span class="tag" data-aos="flip-up" data-aos-delay="100">Software</span>
            <span class="tag" data-aos="flip-up" data-aos-delay="200">Technology</span>
            <span class="tag" data-aos="flip-up" data-aos-delay="300">Travel</span>
            <span class="tag" data-aos="flip-up" data-aos-delay="400">Illustration</span>
            <span class="tag" data-aos="flip-up" data-aos-delay="500">Design</span>
            <span class="tag" data-aos="flip-up" data-aos-delay="600">Love</span>
            <span class="tag" data-aos="flip-up" data-aos-delay="700">Projects</span>
          </div>
        </div>
      </div>
    </aside>
  </div>
</section>
@endsection