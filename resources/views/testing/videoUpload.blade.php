<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload Video</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Upload Your Video</h1>


            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
                @csrf
                <div class="mb-3">
                    <label for="videos" class="form-label">Choose a video file:</label>
                    <input type="file" class="form-control" id="video" name="videos[]" accept="video/*" required multiple style="margin:10px;">
                    <label for="author">Author</label>
                    <input type="text" name="author">
                    <label for="description">Description</label>
                    <input type="text" name="description">
                </div>
                <button type="submit" class="btn btn-primary w-100">Upload Video</button>
            </form>
        </div>
    </body>
</html>
