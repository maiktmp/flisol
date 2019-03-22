<div class="col-4 mx-2">
    <div class="box">
        <div class="card bg-dark text-white text-left card-shadow" style="width:250px">
            <img class="card-img-top img-card-center" src="{{asset ($img_url)}}" alt="Responsive">
            <div class="card-body">
                <h5 class="card-title">{{$name}}</h5>
                <p class="card-text">{{$sponsor}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button class="btn btn-block btn-primary" onclick="clickButtonProfile({{$id}})">Detalles</button>
                </small>
            </div>
        </div>
    </div>
</div>
