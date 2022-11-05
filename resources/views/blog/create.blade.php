<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <ul>
      <li><a href="{{ url('/') }}">Home</a></li>
    </ul>

    
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h3>Create Blog</h3>

            <form action="{{ route('blog.insert') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
              </div>
              <div class="mb-3">
                <label class="form-label">Post Body</label>
                <textarea name="body" class="form-control" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Create</button>

            </form>

          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>