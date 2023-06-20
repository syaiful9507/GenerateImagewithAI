<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Image with AI</title>
</head>

<body>

    <div class="container mt-2">
        <h3 class="text-center">Image With AI</h3>
        <form action="" method="GET">
            <div class="input-group">
                @if (isset($prompt))
                <input type="text" class="form-control" name="prompt" @if ($prompt !=null) value="{{$prompt}}" @endif>
                @else
                <input type="text" class="form-control" name="prompt">
                @endif

                <span class="input-group-text">
                    <button type="submit" class="btn btn-outline-dark">Generate</button>
                </span>
            </div>
        </form>

    </div>

    @if ($hide == 1)
    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($myImages as $item)
            <div class="col">
                <div class="card">
                    <img src="{{$item['url']}}" class="card-img-top" alt="...">
                </div>
            </div>
            @endforeach


        </div>
    </div>

    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
