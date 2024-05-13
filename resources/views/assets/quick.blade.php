<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{$asset->desc}}</title>
</head>
<body>

  <div class="container">
    <br><br>
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card mb-3">
          <img src="{{ asset('img/asset/'.$asset->no.'.jpg') }}" class="card-img-top img-max rounded mx-auto" alt="...">
          <div class="card-header">
            <h5 class="card-title">{{$asset->desc}}</h5>
          </div>
          <div class="card-body">
            
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Company Code</th>
                  <td>{{strtoupper($asset->company_code)}}</td>
                </tr>
                <tr>
                  <th scope="row">Asset No</th>
                  <td>{{$asset->no}}</td>
                </tr>
                <tr>
                  <th scope="row">Nama</th>
                  <td>{{$asset->desc}}</td>
                </tr>
                <tr>
                  <th scope="row">Tanggal Akuisisi</th>
                  <td>{{date('D, d F Y', strtotime($asset->acquisition_date))}}</td>
                </tr>
                <tr>
                  <th scope="row">Vendor</th>
                  <td></td>
                </tr>
              </tbody>
          </table>

          </div>
        </div>
      </div>
    </div>

    
    <hr>
    <h4>History</h4>
    <table class="table">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Given Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($histories as $hist)
            <tr>
                <td>{{$hist->user_id}}</td>
                <td>{{$hist->given_date}}</td>
                <td>{{$hist->status}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

  </div>
</body>
</html>