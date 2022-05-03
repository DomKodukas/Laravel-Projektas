<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      <div class="container" align="center" style="padding-top: 100px;">
      <table class="table">
          <thead class="thead-dark">
          <tr>
           <th scope="col">Gydytojo Vardas</th>
           <th scope="col">Numeris</th>
           <th scope="col">Specializacija</th>
           <th scope="col">Kambario Numeris</th>
           <th scope="col">Veiksmai</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($data as $doctor)
          <tr>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->phone}}</td>
            <td>{{$doctor->speciality}}</td>
            <td>{{$doctor->room}}</td>
            <td>
            <a href="{{url('updatedoctor',$doctor->id)}}" class="btn btn-success btn-sm">Redaguoti</a>
            <a class="btn btn-danger btn-sm" href="{{url('deletedoctor',$doctor->id)}}" onclick="return confirm(&quot;Ar tikriai norite istrinti?&quot;)">Istrinti</a>
            </td>
          </tr>
          @endforeach
          </tbody>
         </table>
      </div>
      </div>
      @include('admin.script')
  </body>
</html>