@if(Auth::id())
<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Suplanuoti susitikima</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">

      @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Pilnas Vardas..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="El.pastas..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" class="custom-select">
          
            <option>--Pasirinkite Gydytoja--</option>
            
            @foreach($doctor as $doctors)
            
            <option value="{{$doctors->name}}">{{$doctors->name}} {{$doctors->speciality}}</option>

            @endforeach
            
          </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Telefono numeris..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Iveskite pranesima.."></textarea>
          </div>
        </div>
        <button style="background-color:#08dca4; color:white;" class="btn btn-outline-primary mt-3 wow zoomIn">Pateikti uzklausa</button>
      </form>
    </div>
  </div>
@endif