@extends('layouts.admin')
@section('content')
  <!-- show success message -->
  @if (session('successMsg'))
      <div class="alert alert-success" role="alert">
          {{ session('successMsg') }}
      </div>
        @endif
<!-- show error messages -->
  @if ($errors->any())
      @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
         @endforeach
  @endif
<div class="container" style="padding-left: 20px;padding-right: 20px;background-color: rgba(0,0,0, 0.6); border-radius:8px; padding-top: 10px; padding-bottom: 0px; color: #fff; ">

<div class="col-md-12" style="padding-left : 20px; padding-right : 20px;">
  <!-- show success message -->
  @if (session('successMsg'))
      <div class="alert alert-success" role="alert">
          {{ session('successMsg') }}
      </div>
        @endif
<!-- show error messages -->
  @if ($errors->any())
      @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
         @endforeach
  @endif
<!--upload form here -->
<form action="{{ route('addBid', [$admin->id]) }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<h3 class="form-title">Enter Vehicle Information » </h3>
<label class="gt-title" for="gt-title">Your listing title</label>
<input class="form-control" type="text" id="gt-title" tabindex="2" name="title" placeholder="Enter listing title" required style="text-transform:uppercase">
<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
  <div class="col-6">
    <select name="country" id="country" class="gt-select" tabindex="3" required 
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
    <option value="-1" selected="selected">Select Your Country</option>
    <option class="level-0" value="Kenya" data-value="41">Kenya</option>
    <option class="level-0" value="Tanzania" data-value="48">Tanzania</option>
    <option class="level-0" value="Uganda" data-value="48">Uganda</option>
    <option class="level-0" value="Rwanda" data-value="48">Rwanda</option>
    <option class="level-0" value="Burundi" data-value="48">Burundi</option>
    <option class="level-0" value="Other" data-value="48">Other</option></select>
  </div>
  <div class="col-6">
    <select name="county" id="county" tabindex="4" data-value="" required
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
        <option value="" data-value="-1" selected="selected">Select Your County</option>
        <option class="level-0" value="Other" data-value="48">Other</option>
        <option class="level-0" value="Nairobi" data-value="48">Nairobi</option>
        <option class="level-0" value="Mombasa" data-value="48">Mombasa</option>
        <option class="level-0" value="Kwale" data-value="48">Kwale</option>
        <option class="level-0" value="Kilifi" data-value="48">Kilifi</option>
        <option class="level-0" value="Tana River" data-value="48">Tana River</option>
        <option class="level-0" value="Lamu" data-value="48">Lamu</option>
        <option class="level-0" value="Taita–Taveta " data-value="48">Taita–Taveta </option>
        <option class="level-0" value="Garissa" data-value="48">Garissa </option>
        <option class="level-0" value="Wajir" data-value="48">Wajir </option>
        <option class="level-0" value="Mandera" data-value="48">Mandera </option>
        <option class="level-0" value="Marsabit" data-value="48">Marsabit</option>
        <option class="level-0" value="Isiolo" data-value="48">Isiolo</option>
        <option class="level-0" value="Meru" data-value="48">Meru</option>
        <option class="level-0" value="Tharaka-Nithi" data-value="48">Tharaka-Nithi</option>
        <option class="level-0" value="Embu" data-value="48">Embu</option>
        <option class="level-0" value="Kitui" data-value="48">Kitui</option>
        <option class="level-0" value="Machakos" data-value="48">Machakos </option>
        <option class="level-0" value="Makueni" data-value="48">Makueni</option>
        <option class="level-0" value="Nyandarua" data-value="48">Nyandarua</option>
        <option class="level-0" value="Nyeri" data-value="48">Nyeri</option>
        <option class="level-0" value="Kirinyaga" data-value="48">Kirinyaga</option>
        <option class="level-0" value="Murang'a" data-value="48">Murang’a </option>
        <option class="level-0" value="Kiambu" data-value="48">Kiambu</option>
        <option class="level-0" value="Turkana " data-value="48">Turkana </option>
        <option class="level-0" value="West Pokot" data-value="48">West Pokot</option>
        <option class="level-0" value="Samburu" data-value="48">Samburu</option>
        <option class="level-0" value="Trans-Nzoia" data-value="48">Trans-Nzoia </option>
        <option class="level-0" value="Uasin Gishu" data-value="48">Uasin Gishu</option>
        <option class="level-0" value="Elgeyo-Marakwet" data-value="48">Elgeyo-Marakwet</option>
        <option class="level-0" value="Nandi" data-value="48">Nandi</option>
        <option class="level-0" value="Baringo" data-value="48">Baringo </option>
        <option class="level-0" value="Laikipia" data-value="48">Laikipia </option>
        <option class="level-0" value="Nakuru" data-value="48">Nakuru </option>
        <option class="level-0" value="Narok" data-value="48">Narok </option>
        <option class="level-0" value="Kajiado" data-value="48">Kajiado </option>
        <option class="level-0" value="Kericho" data-value="48">Kericho</option>
        <option class="level-0" value="Bomet" data-value="48">Bomet</option>
        <option class="level-0" value="Kakamega" data-value="48">Kakamega </option>
        <option class="level-0" value="Vihiga" data-value="48">Vihiga </option>
        <option class="level-0" value="Bungoma" data-value="48">Bungoma</option>
        <option class="level-0" value="Busia " data-value="48">Busia</option>
        <option class="level-0" value="Siaya " data-value="48">Siaya</option>
        <option class="level-0" value="Kisumu" data-value="48">Kisumu</option>
        <option class="level-0" value="Homa Bay" data-value="48">Homa Bay</option>
        <option class="level-0" value="Migori" data-value="48">Migori</option>
        <option class="level-0" value="Kisii" data-value="48">Kisii</option>
        <option class="level-0" value="Nyamira" data-value="48">Nyamira</option>
    </select>
  </div>
</div>
<div class="row" style="padding-bottom: 10px;">
  <div class="col-6">
    <label>Make</label>
    <!-- <input class="form-control" type="text" name="make" placeholder="Enter Vehicle Make" style="text-transform:uppercase" required> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css" />
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.js"></script>
	<script type="text/javascript">
		$(function() {
  $("select").select2();
  $("#make").change(function() {
    //get rel value
    var rel_ = $(this).find("option:selected").data("rel")
    $("#model").select2("val", ""); //remove any selected value
    //intialze
    $("#model").select2({
      matcher: function(term, text, option) {
        //only show options where rel = value ..
        return $(option[0].outerHTML).attr("id") == rel_
      }
    })
  });
})
</script>
<select class="" name="make" id="make" aria-hidden="true" style="background-color: rgba(0,0,0, 0.6) !important; color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px; width: 400px !important;" required>
      <option value="01" data-rel="other" selected="selected">Select Make</option>
      <option value="Toyota" data-rel="toyota">TOYOTA</option>
      <option value="Nissan" data-rel="nissan">NISSAN</option>
      <option value="Honda" data-rel="honda">HONDA</option>
      <option value="Mitsubishi" data-rel="mitsubishi">MITSUBISHI</option>
      <option value="Mercedes Benz" data-rel="benz">MERCEDES BENZ</option>
      <option value="Bmw" data-rel="bmw">BMW</option>
      <option value="Mazda" data-rel="mazda">MAZDA</option>
      <option value="Subaru" data-rel="subaru">SUBARU</option>
      <option value="Volkswagen" data-rel="volkswagen">VOLKSWAGEN</option>
      <option value="Suzuki" data-rel="suzuki">SUZUKI</option>
      <option value="Land Rover" data-rel="rover">LAND ROVER</option>
      <option value="Audi" data-rel="audi">AUDI</option>
      <option value="Lexus" data-rel="lexus">LEXUS</option>
      <option value="Chevrolet" data-rel="chev">CHEVROLET</option>
      <option value="Ford" data-rel="ford">FORD</option>
      <option value="Hino" data-rel="hino">HINO</option>
      <option value="Hyundai" data-rel="hyundai">HYUNDAI</option>
      <option value="Isuzu" data-rel="isuzu">ISUZU</option>
      <option value="Jeep" data-rel="jeep">JEEP</option>
      <option value="Peugeot" data-rel="peugeot">PEUGEOT</option>
      <option value="porsche" data-rel="porsche">PORSCHE</option>
      <option value="Renault" data-rel="rena">RENAULT</option>
    </select>
  </div>
  <div class="col-6">
    <label>Model</label>
    <select name="model" id="model" aria-hidden="true" style="background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px; width: 400px !important;" required>
      <option disabled="disabled" selected="selected" id="other">Choose Model</option>
      	<option value="110" id="toyota">110</option>
      	<option value="4Runner" id="toyota">4Runner</option>
		<option value="86" id="toyota">86</option>	
		<option value="Allion" id="toyota">Allion</option>	
		<option value="Alphard" id="toyota">Alphard</option>	
		<option value="Auris" id="toyota">Auris</option>
		<option value="Avalon" id="toyota">Avalon</option>	
		<option value="Avensis" id="toyota">Avensis</option>	
		<option value="Axio" id="toyota">Axio</option>	
		<option value="bB" id="toyota">bB</option>	
		<option value="Belta" id="toyota">Belta</option>	
		<option value="Blade" id="toyota">Blade</option>	
		<option value="C-HR" id="toyota">C-HR</option>	
		<option value="Camry" id="toyota">Camry</option>	
		<option value="Coaster" id="toyota">Coaster</option>	
		<option value="Corolla Cross" id="toyota">Corolla Cross</option>
		<option value="Corolla" id="toyota">Corolla</option>
		<option value="Crown" id="toyota">Crown</option>	
		<option value="Dyna" id="toyota">Dyna</option>	
		<option value="Estima" id="toyota">Estima</option>	
		<option value="Fielder" id="toyota">Fielder</option>	
		<option value="FJ Cruiser" id="toyota">FJ Cruiser</option>	
		<option value="Fortuner" id="toyota">Fortuner</option>	
		<option value="Harrier" id="toyota">Harrier</option>	
		<option value="HiAce" id="toyota">HiAce</option>	
		<option value="Highlander" id="toyota">Highlander</option>	
		<option value="Hilux" id="toyota">Hilux</option>	
		<option value="Isis" id="toyota">Isis</option>	
		<option value="Ist" id="toyota">Ist</option>	
		<option value="Kluger" id="toyota">Kluger</option>	
		<option value="Land Cruiser" id="toyota">Land Cruiser</option>
		<option value="Land Cruiser V8" id="toyota">Land Cruiser V8</option>
		<option value="Mark X" id="toyota">Mark X</option>
		<option value="Mark X" id="toyota">Mark ii</option>
		<option value="Noah" id="toyota">Noah</option>
		<option value="Nze" id="toyota">Nze</option>
		<option value="Passo" id="toyota">Passo</option>
		<option value="Premio" id="toyota">Premio</option>
		<option value="Prius" id="toyota">Prius</option>
		<option value="Probox" id="toyota">Probox</option>
		<option value="Ractis" id="toyota">Ractis</option>
		<option value="RAV 4" id="toyota">RAV 4</option>
		<option value="Rush" id="toyota">Rush</option>
		<option value="Sequoia" id="toyota">Sequoia</option>
		<option value="Sienta" id="toyota">Sienta</option>
		<option value="Starlet" id="toyota">Starlet</option>
		<option value="Succeed" id="toyota">Succeed</option>
		<option value="Supra" id="toyota">Supra</option>
		<option value="Tacoma" id="toyota">Tacoma</option>
		<option value="TownAce" id="toyota">TownAce</option>
		<option value="LiteAce Truck" id="toyota">TownAce or LiteAce Truck</option>
		<option value="Toyoace" id="toyota">Toyoace</option>
		<option value="Tundra" id="toyota">Tundra</option>
		<option value="Vanguard" id="toyota">Vanguard</option>
		<option value="Vellfire" id="toyota">Vellfire</option>
		<option value="Venza" id="toyota">Venza</option>
		<option value="Vios" id="toyota">Vios</option>
		<option value="Vitz" id="toyota">Vitz</option>
		<option value="Yaris" id="toyota">Yaris</option>	
		<option value="Wish" id="toyota">Wish</option>

		<option value="Ad Van" id="nissan">Ad Van</option>	
		<option value="Bluebird Saphyl" id="nissan">Bluebird Saphyl</option>	
		<option value="Caravan" id="nissan">Caravan</option>	
		<option value="Civilian" id="nissan">Civilian</option>	
		<option value="Cube" id="nissan">Cube</option>	
		<option value="Dualis" id="nissan">Dualis or Qashqai</option>	
		<option value="Elgrand" id="nissan">Elgrand</option>
		<option value="Fuga" id="nissan">Fuga</option>	
		<option value="Hardbody Pickup" id="nissan">Hardbody Pickup</option>	
		<option value="Juke" id="nissan">Juke</option>	
		<option value="Lafesta" id="nissan">Lafesta</option>	
		<option value="March" id="nissan">March</option>	
		<option value="Murano" id="nissan">Murano</option>	
		<option value="Navara" id="nissan">Navara</option>	
		<option value="Note" id="nissan">Note</option>	
		<option value="NV200" id="nissan">NV200/Vanette</option>	
		<option value="Patrol" id="nissan">Patrol/Safari</option>	
		<option value="Serena" id="nissan">Serena</option>	
		<option value="Skyline" id="nissan">Skyline/Skyline Crossover</option>
		<option value="sylphy" id="nissan">Sylphy</option>
		<option value="Teana" id="nissan">Teana</option>	
		<option value="Tiida" id="nissan">Tiida</option>	
		<option value="Titan" id="nissan">Titan</option>	
		<option value="Wingroad" id="nissan">Wingroad</option>	
		<option value="Xtrail" id="nissan">Xtrail</option>

		<option value="Civic" id="honda">Civic</option>	
		<option value="CRV" id="honda">CRV</option>	
		<option value="Fit" id="honda">Fit</option>	
		<option value="Freed" id="honda">Freed</option>	
		<option value="Insight" id="honda">Insight</option>	
		<option value="Jade" id="honda">Jade</option>	
		<option value="Jazz" id="honda">Jazz</option>	
		<option value="Stepwagon" id="honda">Stepwagon</option>	
		<option value="Vezel" id="honda">Vezel</option> 
		<option value="HRV" id="honda">HRV</option>
		<option value="XRV" id="honda">XRV</option>	

		<option value="Canter" id="mitsubishi">Canter</option>	
		<option value="Colt Plus" id="mitsubishi">Colt Plus</option>	
		<option value="Delica" id="mitsubishi">Delica</option>	
		<option value="Eclipse" id="mitsubishi">Eclipse</option>	
		<option value="Galant" id="mitsubishi">Galant</option>	
		<option value="L200" id="mitsubishi">L200 or Triton</option>	
		<option value="Lancer" id="mitsubishi">Lancer or Evo</option>	
		<option value="Mirage" id="mitsubishi">Mirage</option>	
		<option value="Outlander" id="mitsubishi">Outlander</option>	
		<option value="Pajero" id="mitsubishi">Pajero</option>
		<option value="Mini" id="mitsubishi">Mini</option>
		<option value="Shogun" id="mitsubishi">Shogun</option>
		<option value="Io" id="mitsubishi">Io</option>	
		<option value="RVR" id="mitsubishi">RVR</option>

		<option value="A-Class" id="benz">A-Class</option>	
		<option value="AMG GT" id="benz">AMG GT</option>	
		<option value="B-Class" id="benz">B-Class</option>	
		<option value="C Class" id="benz">C Class</option>	
		<option value="CLA" id="benz">CLA</option>	
		<option value="CLS" id="benz">CLS</option>	
		<option value="E Class" id="benz">E Class</option>	
		<option value="EQC" id="benz">EQC</option>	
		<option value="G-Class" id="benz">G-Class</option>	
		<option value="GLA" id="benz">GLA</option>	
		<option value="GLB" id="benz">GLB</option>	
		<option value="GLC" id="benz">GLC</option>	
		<option value="GLE" id="benz">GLE</option>	
		<option value="GLS" id="benz">GLS</option>	
		<option value="S Class" id="benz">S Class</option>	
		<option value="SL" id="benz">SL</option>	
		<option value="V-Class" id="benz">V-Class</option>	
		<option value="X-Class" id="benz">X-Class</option>

		<option value="1 Series" id="bmw">1 Series</option>
		<option value="2 Series" id="bmw">2 Series</option>
		<option value="3 Series" id="bmw">3 Series</option>
		<option value="4 Series" id="bmw">4 Series</option>
		<option value="5 Series" id="bmw">5 Series</option>
		<option value="6 Series" id="bmw">6 Series</option>
		<option value="7 Series" id="bmw">7 Series</option>
		<option value="8 Series" id="bmw">8 Series</option>
		<option value="i3" id="bmw">i3</option>
		<option value="i8" id="bmw">i8</option>
		<option value="M2" id="bmw">M2</option>
		<option value="M3" id="bmw">M3</option>
		<option value="M4" id="bmw">M4</option>
		<option value="M5" id="bmw">M5</option>
		<option value="M6" id="bmw">M6</option>
		<option value="X1" id="bmw">X1</option>
		<option value="X2" id="bmw">X2</option>
		<option value="X3" id="bmw">X3</option>
		<option value="X4" id="bmw">X4</option>
		<option value="X5" id="bmw">X5</option>
		<option value="X6" id="bmw">X6</option>
		<option value="X7" id="bmw">X7</option>
		<option value="Z4" id="bmw">Z4</option>
      
      	<option value="Atenza" id="mazda">Atenza or Mazda6</option>
		<option value="Alexa" id="mazda">Alexa or Mazda3</option>
		<option value="Bongo" id="mazda">Bongo</option>
		<option value="BT-50" id="mazda">BT-50</option>
		<option value="CX3" id="mazda">CX3</option>
		<option value="CX-30" id="mazda">CX-30</option>
		<option value="CX5" id="mazda">CX5</option>
		<option value="CX-8" id="mazda">CX-8</option>
		<option value="CX9" id="mazda">CX9</option>
		<option value="Demio" id="mazda">Demio</option>
		<option value="MPV" id="mazda">MPV</option>
		<option value="Premacy" id="mazda">Premacy or Mazda5</option>
		<option value="Verisa" id="mazda">Verisa</option>

		<option value="BRZ" id="subaru">BRZ</option>
		<option value="Exiga" id="subaru">Exiga</option>
		<option value="Forester" id="subaru">Forester</option>
		<option value="Impreza" id="subaru">Impreza</option>
		<option value="Legacy" id="subaru">Legacy</option>
		<option value="Levorg" id="subaru">Levorg</option>
		<option value="Outback" id="subaru">Outback</option>
		<option value="XV" id="subaru">XV</option>

		<option value="Amarok" id="volkswagen">Amarok</option>
		<option value="Golf" id="volkswagen">Golf</option>
		<option value="Jetta" id="volkswagen">Jetta</option>
		<option value="Passat" id="volkswagen">Passat</option>
		<option value="Polo" id="volkswagen">Polo</option>
		<option value="Scirocco" id="volkswagen">Scirocco</option>
		<option value="Tiguan" id="volkswagen">Tiguan</option>
		<option value="Touareg" id="volkswagen">Touareg</option>
		<option value="Transporter" id="volkswagen">Transporter</option>

		<option value="Alto" id="suzuki">Alto</option>
		<option value="Baleno Hatchback" id="suzuki">Baleno Hatchback</option>
		<option value="Ciaz" id="suzuki">Ciaz</option>
		<option value="Ertiga" id="suzuki">Ertiga</option>
		<option value="Escudo" id="suzuki">Escudo or Suzuki Vitara</option>
		<option value="Jimny" id="suzuki">Jimny</option>
		<option value="Swift" id="suzuki">Swift</option>
		<option value="Wagon R" id="suzuki">Wagon R</option>
		<option value="XS 4" id="suzuki">XS 4</option>

		<option value="Defender" id="rover">Defender</option>
		<option value="Discovery" id="rover">Discovery</option>
		<option value="Discovery sport" id="rover">Discovery Sport</option>
		<option value="Range Rover" id="rover">Range Rover</option>
		<option value="Range Rover Evoque" id="rover">Range Rover Evoque</option>
		<option value="Range Rover Sport" id="rover">Range Rover Sport</option>
		<option value="Range Rover Velar" id="rover">Range Rover Velar</option>

		<option value="A3" id="audi">A3</option>
		<option value="A4" id="audi">A4</option>
		<option value="A5" id="audi">A5</option>
		<option value="A6" id="audi">A6</option>
		<option value="A7" id="audi">A7</option>
		<option value="A8" id="audi">A8</option>
		<option value="Q3" id="audi">Q3</option>
		<option value="Q5" id="audi">Q5</option>
		<option value="Q7" id="audi">Q7</option>
		<option value="Q8" id="audi">Q8</option>
		<option value="R8" id="audi">R8</option>
		<option value="TT" id="audi">TT</option>

		<option value="CT" id="lexus">CT</option>
		<option value="ES" id="lexus">ES</option>
		<option value="GS" id="lexus">GS</option>
		<option value="GX" id="lexus">GX</option>
		<option value="IS" id="lexus">IS</option>
		<option value="LC" id="lexus">LC</option>
		<option value="LS" id="lexus">LS</option>
		<option value="LX" id="lexus">LX</option>
		<option value="NX" id="lexus">NX</option>
		<option value="RC" id="lexus">RC</option>
		<option value="RX" id="lexus">RX</option>
		<option value="UX" id="lexus">UX</option>

		<option value="Captiva" id="chev">Captiva</option>	
		<option value="Cavalier" id="chev">Cavalier</option>	
		<option value="Colorado" id="chev">Colorado or S-10</option>	
		<option value="Corvette" id="chev">Corvette</option>	
		<option value="D-Max" id="chev">D-Max</option>	
		<option value="Equinox" id="chev">Equinox</option>	
		<option value="Orlando" id="chev">Orlando</option>	
		<option value="Sonic" id="chev">Sonic /Aveo</option>	
		<option value="Tracker" id="chev">Tracker</option>	
		<option value="Beat Hatchback" id="chev">Beat Hatchback</option>	
		<option value="Blazer" id="chev">Blazer</option>	
		<option value="Cruze" id="chev">Cruze</option>	
		<option value="Joy Plus" id="chev">Joy Plus</option>	
		<option value="Malibu" id="chev">Malibu</option>	
		<option value="Montana" id="chev">Montana</option>	
		<option value="Optra" id="chev">Optra</option>	
		<option value="Prisma" id="chev">Prisma</option>	
		<option value="Sail" id="chev">Sail</option>	
		<option value="Silverado" id="chev">Silverado</option>	
		<option value="Sparks" id="chev">Sparks</option>	
		<option value="Suburban" id="chev">Suburban</option>	
		<option value="Tahoe" id="chev">Tahoe</option>	
		<option value="Trailblazer" id="chev">Trailblazer</option>	
		<option value="Traverse" id="chev">Traverse</option>	
		<option value="Trax" id="chev">Trax</option>

		<option value="Bronco" id="ford">Bronco</option>
		<option value="EcoSport" id="ford">EcoSport</option>
		<option value="Endeavor" id="ford">Endeavor</option>
		<option value="Endura" id="ford">Endura</option>
		<option value="Escape" id="ford">Escape or Kuga</option>
		<option value="Everest" id="ford">Everest</option>
		<option value="F150" id="ford">F150</option>
		<option value="Falcon" id="ford">Falcon</option>
		<option value="Fiesta" id="ford">Fiesta</option>
		<option value="Figo" id="ford">Figo</option>
		<option value="Focus" id="ford">Focus</option>
		<option value="Ka" id="ford">Ka</option>
		<option value="Mondeo" id="ford">Mondeo</option>
		<option value="Mustang" id="ford">Mustang</option>
		<option value="Ranger" id="ford">Ranger</option>
		<option value="S-Max" id="ford">S-Max</option>
		<option value="Transit" id="ford">Transit</option>
		<option value="Troller T4" id="ford">Troller T4</option>

		<option value="Dutro" id="hino">Dutro or Hino300 Series</option>
		<option value="Profia" id="hino">Profia</option>
		<option value="Ranger" id="hino">Ranger</option>

		<option value="Accent" id="hyundai">Accent</option>
		<option value="Azera" id="hyundai">Azera</option>
		<option value="Elantra" id="hyundai">Elantra</option>
		<option value="Equus" id="hyundai">Equus</option>
		<option value="Genesis" id="hyundai">Genesis</option>
		<option value="Ioniq" id="hyundai">Ioniq</option>
		<option value="Kona" id="hyundai">Kona</option>
		<option value="Palisade" id="hyundai">Palisade</option>
		<option value="Santa Fe" id="hyundai">Santa Fe</option>
		<option value="Sonata" id="hyundai">Sonata</option>
		<option value="Tucson" id="hyundai">Tucson</option>
		<option value="Veloster" id="hyundai">Veloster</option>
		<option value="Venue" id="hyundai">Venue</option>

		<option value="Buses" id="isuzu">Buses</option>
		<option value="D-Max" id="isuzu">D-Max</option>
		<option value="F-Series" id="isuzu">F-Series</option>
		<option value="FVZ-Series" id="isuzu">FVZ-Series</option>
		<option value="mu-X" id="isuzu">mu-X</option>
		<option value="N-Series" id="isuzu">N-Series Truck</option>
		<option value="Prime Mover" id="isuzu">Prime Mover</option>

		<option value="Compass" id="jeep">Compass</option>
		<option value="Gladiator" id="jeep">Gladiator</option>
		<option value="Grand Cherokee" id="jeep">Grand Cherokee</option>
		<option value="Patriot" id="jeep">Patriot</option>
		<option value="Renegate" id="jeep">Renegade</option>
		<option value="Grand Wagoneer" id="jeep">Grand Wagoneer</option>
		<option value="Wrangler" id="jeep">Wrangler</option>

		<option value="208" id="peugeot">208</option>
		<option value="3008" id="peugeot">3008</option>
		<option value="308" id="peugeot">308</option>
		<option value="508" id="peugeot">508</option>
		<option value="RCZ" id="peugeot">RCZ</option>

		<option value="718" id="porsche">718</option>
		<option value="911" id="porsche">911</option>
		<option value="Cayenne" id="porsche">Cayenne</option>
		<option value="Macan" id="porsche">Macan</option>
		<option value="Panamera" id="porsche">Panamera</option>
		<option value="Taycan" id="porsche">Taycan</option>

		<option value="Kwid" id="rena">Kwid</option>
		<option value="Duster" id="rena">Duster</option>
		<option value="Koleos" id="rena">Koleos</option>
		<option value="Kiger" id="rena">Kiger</option>
		<option value="Triber" id="rena">Triber</option>
    </select>
    <!-- <input class="form-control" type="text" name="model" placeholder="Enter Vehicle Model" style="text-transform:uppercase" required> -->
  </div>
</div>
<label>Year of Manufacture</label>
<select name="year" id="year" tabindex="4" data-value="" required
style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
<option value="-1" selected="selected">Select Year of Manufacture</option>
<option value="2021">2021</option><option value="2020">2020</option>
<option value="2019">2019</option><option value="2018">2018</option>
<option value="2017">2017</option><option value="2016">2016</option>
<option value="2015">2015</option><option value="2014">2014</option>
<option value="2013">2013</option><option value="2012">2012</option>
<option value="2011">2011</option><option value="2010">2010</option>
<option value="2009">2009</option><option value="2008">2008</option>
<option value="2007">2007</option><option value="2006">2006</option>
<option value="2005">2005</option><option value="2004">2004</option>
<option value="2003">2003</option><option value="2002">2002</option>
<option value="2001">2001</option><option value="2000">2000</option>
</select>
<div class="row"  style="padding-top:10px;">
  <div class="col-6 col-md-4">
    <input class="form-control" type="number" id="price" name="price" placeholder="Enter vehicle selling Price (Ksh)" required>
  </div>
  <div class="col-6 col-md-4">
    <input class="form-control" type="number" id="miles" name="miles" placeholder="Enter mileage (Kms)" required>
  </div>
  <div class="col-6 col-md-4">
    <input class="form-control" type="text" id="gt-vin" tabindex="11" name="vin" placeholder="Enter Plate number" required style="text-transform:uppercase">
  </div>
</div>

<div class="row" style="padding-top:10px; padding-bottom:10px;">
  <div class="col-6 col-md-4">
    <select id="exterior" tabindex="8" name="exterior" required
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
        <option value="-1" selected="selected">Select Color</option>
        <option value="White">White</option><option value="Black">Black</option>
        <option value="Silver">Silver</option><option value="Green">Green</option>
        <option value="Dark Green">Dark Green</option><option value="Blue">Blue</option>
        <option value="Dark Blue">Dark Blue</option><option value="Brown">Brown</option>
        <option value="Yellow">Yellow</option><option value="Other">Other</option>
    </select>
  </div>
  <div class="col-6 col-md-4">
    <select id="interior" value="" tabindex="4" name="interior" required
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
        <option value="-1" selected="selected">Select Interior Type</option>
        <option value="Brown">Leather</option>
        <option value="Yellow">Cloth</option>
        <option value="Other">Other</option>
    </select>
  </div>
  <div class="col-6 col-md-4">
    <select id="fuel_type" tabindex="5" name="fuel_type" required
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
        <option value="-1" selected="selected">Select Fuel Type</option>
        <option value="Petrol">Petrol</option>
        <option value="Diesel">Diesel</option>
        <option value="Hybrid">Hybrid</option>
        <option value="Diesel-Hybrid">Diesel-Hybrid</option>
        <option value="Electic">Electic</option>
        <option value="Other">Other</option>
    </select>
  </div>
</div>
<h3 class="form-title">Select Vehicle Features » </h3>
<div class="row">
  <div class="col-md-3">
    <input type="checkbox" value="4WD/AWD" id="4WD/AWD" name="features[]">&nbsp;&nbsp;&nbsp;4WD/AWD
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="ABS Brakes" id="ABS Brakes" name="features[]">&nbsp;&nbsp;&nbsp;ABS Brakes
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Air Conditioning" id="Air Conditioning" name="features[]">&nbsp;&nbsp;&nbsp;Air Conditioning
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Alloy Wheels" id="Alloy Wheels" name="features[]">&nbsp;&nbsp;&nbsp;Alloy Wheels
  </div>
</div>
<div class="row">
  <div class="col-md-3">
  <input type="checkbox" value="AM/FM Stereo" id="AM/FM Stereo" name="features[]">&nbsp;&nbsp;&nbsp;AM/FM Stereo
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Automatic Transmission" id="Automatic Transmission" name="features[]">&nbsp;&nbsp;&nbsp;Auto Transmission
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Auxiliary Audio Input" id="Auxiliary Audio Input" name="features[]">&nbsp;&nbsp;&nbsp;Auxiliary Audio Input
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="CD Audio" id="CD Audio" name="features[]">&nbsp;&nbsp;&nbsp;CD Audio
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <input type="checkbox" value="Cruise Control" id="Cruise Control" name="features[]">&nbsp;&nbsp;&nbsp;Cruise Control
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Front Seat Heaters" id="Front Seat Heaters" name="features[]">&nbsp;&nbsp;&nbsp;Front Seat Heaters
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Leather Seats" id="Leather Seats" name="features[]">&nbsp;&nbsp;&nbsp;Leather Seats
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Memory Seat(s)" id="Memory Seat(s)" name="features[]">&nbsp;&nbsp;&nbsp;Memory Seat(s)
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <input type="checkbox" value=" Navigation System" id=" Navigation System" name="features[]">&nbsp;&nbsp;&nbsp;Navigation System
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Overhead Airbags" id="Overhead Airbags" name="features[]">&nbsp;&nbsp;&nbsp;Overhead Airbags
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Panoramic Sunroof" id="Panoramic Sunroof" name="features[]">&nbsp;&nbsp;&nbsp;Panoramic Sunroof
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Parking Sensors" id="Parking Sensors" name="features[]">&nbsp;&nbsp;&nbsp;Parking Sensors
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <input type="checkbox" value="Power Locks" id="Power Locks" name="features[]">&nbsp;&nbsp;&nbsp;Power Locks
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Power Mirrors" id="Power Mirrors" name="features[]">&nbsp;&nbsp;&nbsp;Power Mirrors
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Power Seat(s)" id="Power Seat(s)" name="features[]">&nbsp;&nbsp;&nbsp;Power Seat(s)
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Power Windows" id="Power Windows" name="features[]">&nbsp;&nbsp;&nbsp;Power Windows
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <input type="checkbox" value="Premium Package" id="Premium Package" name="features[]">&nbsp;&nbsp;&nbsp;Premium Package
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Rear Defroster" id="Rear Defroster" name="features[]">&nbsp;&nbsp;&nbsp;Rear Defroster
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Rear View Camera" id="Rear View Camera" name="features[]">&nbsp;&nbsp;&nbsp;Rear View Camera
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Satellite Radio Ready" id="Satellite Radio Ready" name="features[]">&nbsp;&nbsp;&nbsp;Satellite Radio Ready
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <input type="checkbox" value="Side Airbags" id="Side Airbags" name="features[]">&nbsp;&nbsp;&nbsp;Side Airbags
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="SiriusXM Trial Avail" id="SiriusXM Trial Avail" name="features[]">&nbsp;&nbsp;&nbsp;SiriusXM Trial Avail
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Technology Package" id="Technology Package" name="features[]">&nbsp;&nbsp;&nbsp;Technology Package
  </div>
  <div class="col-md-3">
    <input type="checkbox" value="Traction Control" id="Traction Control" name="features[]">&nbsp;&nbsp;&nbsp;Traction Control
  </div>
</div>
<div class="row" style="padding-top:10px; padding-bottom:15px;">
  <div class="col-6">
        <label>Transmission</label>
        <select id="transmission" name="transmission" tabindex="13" required
        style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
            <option value="-1" selected="selected">Select Transmission Type</option>
            <option value="Automatic">Automatic</option>
            <option value="Manual">Manual</option>
            <option value="Semi-Auto">Semi-Auto</option>
            <option value="None">None</option>
        </select>
    </div>
  <div class="col-6">
    <label>Vehicle Type</label>
    <select id="vehicle_type" name="vehicle_type" tabindex="14" required
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
        <option value="-1" selected="selected">Vehicle Type</option>
        <option value="Convertibles">Convertibles</option>
        <option value="Hatchbacks">Hatchbacks</option>
        <option value="SUVs">SUVs</option>
        <option value="Saloon Car">Saloon Car</option>
        <option value="Station Wagons">Station Wagons</option>
        <option value="Pickup Trucks">Pickup Trucks</option>
        <option value="Buses, Taxis and Vans">Buses, Taxis and Vans</option>
        <option value="Motorbikes">Motorbikes</option>
        <option value="Trucks">Trucks</option>
        <option value="Machinery and Tractors">Machinery and Tractors</option>
        <option value="Trailers">Trailers</option>
        <option value="Minis">Minis</option>
        <option value="Coupes">Coupes</option>
        <option value="Quad Bikes">Quad Bikes</option>
        <option value="Other">Other</option>
    </select>
  </div>
</div>
<div class="form-outline" style="padding-top:10px; padding-bottom:15px;">
  <textarea class="form-control" required placeholder="Enter vehicle listing description." id="description" name="description" rows="4"  style="background: #fff;" required></textarea>
  <label class="form-label" for="description">Vehicle Description</label>
</div>
<div class="row">
<div class="col-6 col-lg-4">
    <label class="btn btn-success btn-file"><br>
    Upload Photos<input class="form-control" id="fileupload" type="file" name="images[]" tabindex="21" style="display:none" value="Upload Photos" multiple=""><br>
    </label></p>
</div>
  <div class="col-sm-6 col-lg-8">
  <span class="instructions">Images will be automatically resized to fit 
        the listing layout. We recommend that you upload photos in full 
        resolution for better results.</span>
        <span class="instructions-cont">You may upload up to 12 images and each image may be no larger than 5MB</span>
  </div>

</div>
<h3 class="form-title">Personal Information</h3>
<div class="row">
  <div class="col-6">
    <input class="form-control" type="text" id="firstname" tabindex="22" name="firstname" placeholder="Enter first name" value="{{ $admin->name }}" required style="text-transform:uppercase">
  </div>
  <div class="col-6">
    <input class="form-control" type="text" id="gt-lastname" tabindex="23" name="lastname" placeholder="Enter last name"  value="{{ $admin->name }}"  required style="text-transform:uppercase">
  </div>
</div>
<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
  <div class="col-6">
    <input class="form-control" type="email" id="email" tabindex="24" name="email"  value="{{ $admin->email }}"  placeholder="Enter your e-mail address " required>
  </div>
  <div class="col-6">
    <input class="form-control" type="number" id="phone" tabindex="25" name="phone"  value="{{ $admin->number }}"  placeholder="Enter phone number" required>
  </div>
</div>
<button type="submit" class="btn btn-primary btn-block mb-4">Submit &amp; pay for your listing</button>
</form>
</div> 
</div>
</div>
  
  <footer class="">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0,0,0, 0.5); border-radius: 10px;">
  © 2022 Copyright:
    <a class="text-center p-3" href="{{ route('logout')}}">Automart East Africa</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
<!-- end dash -->
 
  @endsection