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
        <center>
        
            
            <div class="">
                <p>Domain Select </p>
                <div class="radio radio-info form-check-inline">
                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" onClick="txtreadonly()" >
                    <label for="inlineRadio1"> I have domain </label>
                </div>
                <div class="radio form-check-inline">
                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline"checked="checked" onClick="txtreadonly()">
                    <label for="inlineRadio2"> I need domain </label>
                </div>
                <div class="form-group row">
                   
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" id="text" name="text"required>
                    </div>
                </div> 
            </div>
        
        </center>
       <hr> <a href="{{route('partner.partner_package_buy',['id' =>$rs->id])}}" class="btn btn-primary waves-effect waves-light">BUY</a>
    </div>
        
    </div>
    <script type="text/javascript">
        function txtreadonly(){
            var radio=document.getElementById("inlineRadio2");
            
            if(document.getElementById("inlineRadio2").checked){
                
               var domain= document.getElementByName("text");
               domain.setAttribute('readonly', true);
            }
            
        }
      

    </script>

@endforeach</div>