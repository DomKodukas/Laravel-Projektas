<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label
        {
            display: inline-block;
            width:200px;
        }
    </style>
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      <div class="container" align="center" style="padding-top: 100px;">
      <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/from-data">
        @csrf
        <div style="padding: 15px;">
        <label>Gydytojo vardas</label>
        <input value="{{$data->name}}" type="text" style="color:black" name="name">
        </div>
        <div style="padding: 15px;">
        <label>Telefono numeris</label>
        <input value="{{$data->number}}" type="number" style="color:black" name="number">
        </div>
        <div style="padding: 15px;">
        <label>Specializacija</label>
        <select value="{{$data->speciality}}" name="speciality" style="color:black; width: 210px;">
            <option>--Pasirinkti--</option>
            <option value="Seimos gydytojas">Seimos gydytojas</option>
            <option value="Odos gydytojas">Odos gydytojas</option>
            <option value="Kardiologas">Kardiologas</option>
            <option value="Vaiku gydytojas">Vaiku gydytojas</option>
        </select>
        </div>
        <div style="padding: 15px;">
        <label>Gydytojo Kabinetas</label>
        <input value="{{$data->room}}" type="text" style="color:black" name="room">
        </div>
        <div style="padding: 15px;">
        <button type="submit" class="btn btn-success">Atnaujinti</button>
        </div>
        </form>
      </div>
      </div>
      @include('admin.script')
  </body>
</html>