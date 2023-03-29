@extends('layouts.main')
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
<div class="col-6 col-md-4"  style="background-color: rgba(0,0,0, 0.2); padding-top:10px;">
<!-- Pills content -->
<div class="tab-content">
<div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
<span class="badge bg-info" style="width: 100%; padding-top:10px;padding-bottom:10px; background-color: #151E27 !Important;">SEARCH VEHICLES</span>
<form action="{{ route('search') }}" method="POST">
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
{{ csrf_field() }}
<div class="col-md-12" style="padding-bottom:5px; padding-top:5px;">
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
<div class="row">
  <div class="col-6">
  <label>Year of Manufacture From:</label>
<select class="" name="from_year" aria-hidden="true" 
style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
<option data-select2-id="7" selected>From Year</option>
<option value="2006">2000</option>
<option value="2006">2001</option>
<option value="2006">2002</option>
<option value="2006">2003</option>
<option value="2006">2004</option>
<option value="2006">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2020">2021</option>
</select><span class="select2-selection select2-selection--single" 
role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-from_year-87-container"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
  </div>
  <div class="col-6">
  <label>Year of Manufacture To:</label>
<select class="" name="to_year" data-select2-id="8" tabindex="-1" aria-hidden="true" 
style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
<option data-select2-id="10" selected="selected" >To Year</option>
<option value="2006">2000</option>
<option value="2006">2001</option>
<option value="2006">2002</option>
<option value="2006">2003</option>
<option value="2006">2004</option>
<option value="2006">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2020">2021</option>
</select>
  </div>
</div>
<div class="row">
  <div class="col-6">
  <label>Min Mileage</label>
<select class="" name="min_mileage" data-select2-id="11" tabindex="-1" aria-hidden="true"
style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
<option disabled="disabled">Mileage (km)</option>
<option value="0" selected="selected" data-select2-id="13">0</option>
<option value="10000">10,000</option>
<option value="30000">30,000</option>
<option value="50000">50,000</option>
<option value="100000">100,000</option>
<option value="150000">150,000</option>
<option value="250000">250,000</option>
<option value="350000">350,000</option>
<option value="450000">450,000</option>
<option value="500000">500,000</option>
</select>
  </div>
  <div class="col-6">
  <label>Max Mileage</label>
 <select class="" name="max_mileage" data-select2-id="14" tabindex="-1" aria-hidden="true" 
 style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
<option disabled="disabled">Mileage (km)</option>
<option value="0" selected="selected" data-select2-id="16">0</option>
<option value="10000">10,000</option>
<option value="30000">30,000</option>
<option value="50000">50,000</option>
<option value="100000">100,000</option>
<option value="150000">150,000</option>
<option value="250000">250,000</option>
<option value="350,000">350,000</option>
<option value="450,000">450,000</option>
</select>
  </div>
</div>
<div class="row">
  <div class="col-6">
    <label>Min Engine CC</label>
<input class="form-control" type="number" name="min_engine" placeholder="Min Engine (cc)"></div>
  <div class="col-6">
  <label>Max Engine CC</label>
<input class="form-control" type="number" name="max_engine" placeholder="Max Engine (cc)">
  </div>
</div>
<div class="row" style="padding-bottom: 10px;">
  <div class="col-6">
    <label>Min Price</label>
<input class="form-control" type="number" name="min_price" placeholder="Min Price"></div>
  <div class="col-6">
<label>Max Price</label>
<input class="form-control" type="number" name="max_price" placeholder="Max Price"></div>
</div>
<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4" 
style="background-color : rgba(0, 101, 68, 0.9) !Important;"><i class="fa fa-search" aria-hidden=""></i>&nbsp;SEARCH</button>
</form>
</div>
</div>
<!-- <div class="row" style="padding-left: 20px; padding-top: 10px; padding-bottom: 20px; color: #fff;">
<div class="col-6 col-md-4" style="background-color : rgba(0,0,0, 0.3) !Important;"> -->



<!-- Pills content --> 
</div>
<div class="col-md-8" style="padding-left : 20px; padding-right : 20px;">

<div class="row">
    <!-- image card 1 line 1 start -->
    @if(!empty($vehicles) && $vehicles->count())
    @foreach($vehicles->all() as $vehicle)
    <!-- use this for slideshow -->
    <!-- @foreach (json_decode($vehicle->images, true) as $image) -->
    <!-- <a href="{{ url('public/images/' . json_decode($vehicle->images, true)[2]) }}" class="portfolio-box">
        <img src="{{ url('public/images/' . json_decode($vehicle->images, true)[2]) }}" class="img-responsive" alt="--">
    </a> -->
<!-- @endforeach -->
  <div class="col-6 col-md-4" style="padding-bottom: 15px;">
  <div class="card" style="color: #000">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="{{ url('/images/' . json_decode($vehicle->images, true)[1]) }}" class="img-fluid" style="height:200px !Important; width:395px !Important;"/>
    <a href="{{ route('details', $vehicle->id) }}">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h6 class="card-title">Year of Manufacture: <b>{{ $vehicle->year }}</b></h6>
    <h6 class="card-title">Price: <b>Ksh. {{ number_format("$vehicle->price",2) }}</b></h6>
    <h6 class="card-title">Make&Model: <b>{{ ucwords($vehicle->make); }} / {{ ucwords($vehicle->model); }}</b></h6>
    <h6 class="card-title">Mileage: <b>{{ number_format("$vehicle->miles",1); }} Kms</b></h6>
    <h6 class="card-title">Dealer/Yard: <b>{{ $vehicle->firstname }}</b></h6>
    <i class="fas fa-phone fa-1x"></i>&nbsp;{{ $vehicle->phone }}
    <i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;{{ $vehicle->county }}
    <a href="{{ route('details', $vehicle->id) }}" class="btn btn-primary">More Details</a>
  </div>
</div>
  </div>
  @endforeach
  @else
  <div class="alert alert-success" role="alert">
         Sorry. No Records Found. Try a Different Search.
  </div>
@endif
</div>
<div class="pagination" style="color:#fff;">
{{ $vehicles->links() }}
</div>
</div>
@endsection