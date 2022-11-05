<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('blog.create') }}">Create Blog</a></li>
        <li><a href="{{ route('blog.index') }}">All Blog</a></li>
    </ul>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>All Blogs</h3>

                    <table class="table table-bordered">
                        <tr>
                            <td>Id</td>
                            <td>:</td>
                            <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>:</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <td>Body</td>
                            <td>:</td>
                            <td>{{ $post->body }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
