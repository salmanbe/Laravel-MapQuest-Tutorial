<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Map Quest</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  </head>
<body>
<div class="container">
  <br /><br />

    <table class="table table-bordered">
        <tr>
            <td><h4>Address</h4></td>
            <td>{{ $address }}</td>
        </tr>
        <tr>
            <td><h4>Latitude</h4></td>
            <td>{{ $map->latitude() }}</td>
        </tr>
        <tr>
            <td><h4>Longitude</h4></td>
            <td>{{ $map->longitude() }}</td>
        </tr>
        <tr>
            <td><h4>Coordinates</h4></td>
            <td>{{ $map->coordinates() }}</td>
        </tr>
        <tr>
            <td><h4>Status</h4></td>
            <td>{{ $map->status() }}</td>
        </tr>
        <tr>
            <td><h4>Verify</h4></td>
            <td><a target="_blank" href="https://www.google.com/search?q={{ $map->coordinates() }}">Goole Map</a></td>
        </tr>
    </table>
   
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>