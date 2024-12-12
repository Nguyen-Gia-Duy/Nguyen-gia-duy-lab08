<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NGD-Danh sach khoa can chinh sua</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<section class="container my-3">
    <form action="{{route('ngdkhoa.ngdEditSubmit')}}" method="post">
        @csrf
    <div class="card">
    <div class="card-header">
    <h3>Thong ti chi tiet khoa can chinh sua </h3>
    </div>
    <div class="card-body">
        <div class="mb-3 row">
            <label for="ngdmak" class="col-sm-2 col-form-label">Ma khoa</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"
               id="ngdmak"name="ngdmak" 
               value=" {{$khoa->ngdmak}}">
            </div>
            <div class="mb-3 row">
                <label for="ngdtenk" class="col-sm-2 col-form-label">Ten khoa</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control"
                   id="ngdtenk"name="ngdmak" 
                   value=" {{$khoa->ngdtenk}}">
                </div>
          </div>
    </div>
<div class="card-footer">
    <button class="btn btn-primary mx-2">Submit</button>
    <a href="/khoas" class="btn-btn-primary">Back</a>
</div>
    </div>
</form>
</section>
</body>
</html>