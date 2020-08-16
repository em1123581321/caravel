<div class="card-body m-5">

    <div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$cloudapps->links()}}
            </div>
        </div>
        <div class="d-flex justify-content-center align-content-center flex-md-wrap">

            @foreach($cloudapps as $c)

                <div class="card m-2" style="width: 233px" >

                    <img src="{{$c->image ??"http://cloudmrhub.com/img/cloud.png"}}"
                         class="card-img-bottom" alt="..." >


                    <div class="card-body">
                        <div class="text-md-center">
                        <h5 class="card-title">
                            {{$c->name}}
                        </h5>
                        </div>


                        <p class="card-text">{{$c->description ?? 'no description provided'}}</p>
                    </div>


                    <div class="card-body">
                        @guest
                            <a href="{{$c->activate}} ?? '#'}}" class="btn btn-info">Contact us</a>
                        @else

                            @if(auth()->user()->hasVerifiedEmail())
                                <utilize-button cloudapp-id="{{$c->id}}" utilizes="{{$c->utilizers()->get()->contains(Auth::user())}}"></utilize-button>
                            @endguest
                        @endif
                    </div>



                </div>

            @endforeach()

        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$cloudapps->links()}}
            </div>
        </div>

    </div>
</div>
