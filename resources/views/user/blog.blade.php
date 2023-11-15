@include('user.header')
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div class="row">
              @php
              $perPage = 6;
              $page = request()->get('page', 1);
              $blogsChunked = $blog->chunk($perPage);
              @endphp

              @if($blogsChunked->count() > 0)
                @foreach($blogsChunked[$page - 1] as $blogs)
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <a href="{{ url('blogdetails', ['id' => $blogs->id]) }}" class="post-thumb">
                        <img src="blogimage/{{$blogs->image}}" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="{{ url('blogdetails', ['id' => $blogs->id]) }}">{{$blogs->title}}</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <span>{{$blogs->user}}</span>
                        </div>
                        <span class="mai-time">{{$blogs->date}}</span>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              @else
                <p>No blog posts available.</p>
              @endif

              <div class="col-12 my-5">
                <nav aria-label="Page Navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item {{ $page == 1 ? 'disabled' : '' }}">
                      <a class="page-link" href="{{ $page > 1 ? '?page='.($page - 1) : '#' }}" tabindex="-1" aria-disabled="{{ $page == 1 ? 'true' : 'false' }}">Previous</a>
                    </li>

                    @for ($i = 1; $i <= $blogsChunked->count(); $i++)
                      <li class="page-item {{ $i == $page ? 'active' : '' }}">
                        <a class="page-link" href="?page={{ $i }}">{{ $i }} <span class="sr-only">(current)</span></a>
                      </li>
                    @endfor

                    <li class="page-item {{ $page == $blogsChunked->count() ? 'disabled' : '' }}">
                      <a class="page-link" href="{{ $page < $blogsChunked->count() ? '?page='.($page + 1) : '#' }}">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div> <!-- .row -->
          </div>

        <div class="col-lg-4">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              @foreach($blog as $key => $blogs)
                @if ($key < 4)
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img style="width: 100px; height:80px !important" src="blogimage/{{$blogs->image}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">{{$blogs->title}}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span>{{$blogs->date}}</a>
                    <a href="#"><span class="mai-person"></span>{{$blogs->user}}</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->



 @include('user.footer')
