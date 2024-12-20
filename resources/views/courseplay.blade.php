@extends("layouts.master")
@section('title', "Course Play")
@section('styles')
    <link rel="stylesheet" href="{{asset("css/courseplay.css")}}"
@endsection
@section('content')
    <section class="main">
        <div class="main-video">
            <video controls>
                <source src="{{$videos[0]->path}}" type="video/mp4">
            </video>
            <div class="title">Episode Title</div>
        </div>
        <div class="playlist">
            @foreach($videos as $video)
                <div class="playlist-item">
                    <a href="#">
                    <video muted>
                        <source src="{{$video->path}}" type="video/mp4">
                    </video>
                    <div class="title">{{$video->title}}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <script>
            function changeVideo(videoPath, videoTitle) {
            var mainVideo = document.getElementById('main-video');
            var mainTitle = document.getElementById('main-title');
            mainVideo.src = videoPath;
            mainTitle.textContent = videoTitle;
            mainVideo.play();       
          }
    </script>

@endsection
