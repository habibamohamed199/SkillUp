<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload Video</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
              integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset("css/navbar.css")}}">
        <link rel="stylesheet" href="{{asset('css/videoUpload.css')}}">
    </head>
    <body>
        @include("layouts.components._navbar_admin")
        <section class="course-upload">
            <form action="{{route("upload")}}" class="upload-form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-left">
                        <label for="author">Course Author</label>
                        <input type="text" name="author" id="author" class="text" placeholder="author@mail.com">
                        <label for="category">Course Category</label>
                        <input type="text" class="text" name="category" id="category">
                        <label for="title">Course Title</label>
                        <input type="text" class="text" name="title" id="title">
                        <label for="price">Course Price</label>
                        <input type="text" class="text" name="price" placeholder id="price">
                    </div>
                    <div class="form-right">
                        <label for="time">Course Time</label>
                        <input type="text" class="text" name="time" placeholder="Time in hours" id="time">
                        <div class="descriptions">
                            <div class="description">
                                <label for="description">Description</label>
                                <textarea name="description"
                                          placeholder="A detailed description about the course" id="description"></textarea>
                            </div>
                            <div class="description">
                                <label for="brief">Brief</label>
                                <textarea name="brief" id="brief" placeholder="A brief description about the course"></textarea>
                            </div>
                        </div>
                        <div class="buttons">
                            <label class="form-label">Choose Videos:</label>
                            <input type="file" class="uploader" id="video" name="videos[]" accept="video/*"   multiple>
                            <label class="form-label">Choose a Thumbnail</label>
                            <input type="file" class="uploader" id="thumb" name="thumb" accept="image/*" >
                        </div>
                    </div>

                </div>

            </form>

        </section>
    </body>
</html>
