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
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      <div class="container" align="center" style="padding-top: 100px;">
      @if(session()->has('message'))
        <div class="alert alert-success">
        <button type="button" type="close" data-dismiss="alert">x</button>  
        {{session()->get('message')}}
        </div>
        @endif
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/from-data">
        @csrf
        <div style="padding: 15px;">
        <label>Gydytojo vardas</label>
        <input type="text" style="color:black" name="name">
        </div>
        <div style="padding: 15px;">
        <label>Telefono numeris</label>
        <input type="number" style="color:black" name="number">
        </div>
        <div style="padding: 15px;">
        <label>Specializacija</label>
        <select name="speciality" style="color:black; width: 210px;">
            <option>--Pasirinkti--</option>
            <option value="Seimos gydytojas">Seimos gydytojas</option>
            <option value="Odos gydytojas">Odos gydytojas</option>
            <option value="Kardiologas">Kardiologas</option>
            <option value="Vaiku gydytojas">Vaiku gydytojas</option>
        </select>
        </div>
        <div style="padding: 15px;">
        <label>Gydytojo Kabinetas</label>
        <input type="text" style="color:black" name="room">
        </div>
        <div style="padding: 15px;">
        <button type="submit" class="btn btn-success">Prideti</button>
        </div>
        </form>
      </div>
      </div>
      @include('admin.script')
  </body>
</html>