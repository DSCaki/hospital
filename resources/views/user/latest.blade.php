<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        @foreach($blog as $key => $blogs)
        @if ($key < 3)
        <div class="col-lg-4 py-2 wow zoomIn">
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
        @endif
        @endforeach


        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href={{url('blog')}} class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->
