@extends('layouts.app')
@section('blog')
    <!-- Template Main CSS File buat blog -->
    <link href="{{ asset('assets/css/style-blog.css') }}" rel="stylesheet">


     <main id="main">
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry">
              <div class="entry-content">
                {{-- <h2 class="text-info">Press Assets</h2>
                <h4 class="text-info">All of our assets are provided as press-ready files.</h4>
                <img src="{{ asset('assets/img/new-logo.png') }}" alt="" class="img-fluid">
                <h4 class="text-info">Bagaimana cara menggunakan logo kami?</h4>
                <p class="fs-5 lh-base">Kami menyediakan logo ini untuk mempromosikan penggunaan Anda atas produk kami dan mewakili Integrasia Utama dalam artikel berita dan posting blog.</p>
                <p class="fs-5 lh-base">Logo Integrasia Utama harus digunakan, tidak diubah, berwarna putih dengan latar belakang gelap atau dengan latar belakang putih.</p>
                <p class="fs-5 lh-base">Jangan gunakan merek Integrasia Utama untuk merujuk ke layanan apa pun selain Integrasia Utama.</p> --}}
              </div>
            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="{{ asset('assets/img/blog/blog-recent-1.jpg') }}" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('assets/img/blog/blog-recent-2.jpg') }}" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('assets/img/blog/blog-recent-3.jpg') }}" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('assets/img/blog/blog-recent-4.jpg') }}" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('assets/img/blog/blog-recent-5.jpg') }}" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


@endsection


