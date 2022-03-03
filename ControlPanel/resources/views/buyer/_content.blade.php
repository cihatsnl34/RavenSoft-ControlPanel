<div class="">
    <div class="page-header-title">
        <h4 class="page-title text-center">PACKAGE LIST</h4>
    </div>
</div>
@foreach ($packetList as $rs)

<div class="col-lg-4">
    <div class="card m-b-30 card-body text-center">
        <h4 class="card-title text-dark mt-0">{{$rs->title}}</h4><hr>
        <p class="card-text">{{$rs->property}}</p><hr>
        <p class="card-text">{{$rs->packetDuration}} Month</p><hr>
        <p class="card-text">Price : {{$rs->price}}</p><hr>
        
        <a href="{{route('buyer.buyer_package_buy',['id' =>$rs->id])}}" class="btn btn-primary waves-effect waves-light">BUY</a>
    </div>
</div>
@endforeach