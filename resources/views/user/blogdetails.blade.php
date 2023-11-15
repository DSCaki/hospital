@include('user.header')

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            @foreach($blog as $key => $blogs)
            @if ($key < 1)
          <article class="blog-details">
            <div class="post-thumb">
              <img style="width: 800px; height:500px !important" src="../blogimage/{{$blogs->image}}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By: {{$blogs->user}}</span>
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">{{$blogs->date}}</a>
              </div>
            </div>
            <h2 class="post-title h1">{{$blogs->title}}</h2>
            <div class="post-content">
              <p>{{$blogs->news}}</p>
            </div>
          </article>
          @endif
          @endforeach
        </div>

            <div class="col-lg-4">
                <div class="sidebar-block">
                <h3 class="sidebar-title">Recent Blog</h3>
                @foreach($data as $key => $blogs)
                    @if ($key < 4)
                <div class="blog-item">
                    <a class="post-thumb" href="{{ url('blogdetails', ['id' => $blogs->id]) }}">
                    <img style="width: 100px; height:80px !important" src="../blogimage/{{$blogs->image}}" alt="">
                    </a>
                    <div class="content">
                    <h5 class="post-title"><a href="{{ url('blogdetails', ['id' => $blogs->id]) }}">{{$blogs->title}}</a></h5>
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
