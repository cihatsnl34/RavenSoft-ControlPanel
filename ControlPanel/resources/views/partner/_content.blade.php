<div class="">
    <div class="page-header-title">
        <h4 class="page-title text-center">PACKAGE LIST</h4>
    </div>
</div>
<div class = "row">
@foreach ($packetList as $rs)

<div class="col-lg-4">
    <div class="card m-b-30 card-body text-center">
        <h4 class="card-title text-dark mt-0">{{$rs->title}}</h4><hr>
        <p class="card-text">{{$rs->property}}</p><hr>
        <p class="card-text">{{$rs->packetDuration}} Month</p><hr>
        <p class="card-text">Price : {{$rs->price}}</p><hr>
        <form action = '{{route('partner.partner_package_buy',['id' =>$rs->id])}}' method=POST>
            @csrf
        <center>
        
            
            <div class="">
                <p>Domain Select </p>
                <div class="radio radio-info form-check-inline">
                    <input type="radio" id="inlineRadio1" value="0" name="radioInline" checked="checked" onclick="txtreadonly()">
                    <label for="inlineRadio1"> I have domain </label>
                </div>
                <div class="radio form-check-inline">
                    <input type="radio" id="inlineRadio2" value="1" name="radioInline" onclick="txtreadonly()">
                    <label for="inlineRadio2"> I need domain </label>
                </div>
                <div class="form-group row" id="myText">
                   
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value=""  name="text" required>
                    </div>
                </div> 
            </div>
        
        </center>
       <hr><button type="submit" class="btn btn-primary waves-effect waves-light"> BUY</button>
        </form>
    </div>
        
    </div>
   

@endforeach</div>