@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">About</div>

                    <div class="m-5">
                                <div class="container py-2">
                                <h1>  Cloud MR</h1>
                                    @yield('description')
                                </div>
                                <div class="container">
                                <h1>Documentation</h1>
                                    @yield('doc')
                                </div>
                                <div class="container py-2">
                                    <h1>Collaborate with us</h1>
                                    @yield('collaborate')
                                </div>

                                <div class="container py-2">
                                    <h1>Acknowledgement</h1>
                                    @yield('ack')
                                </div>

                                <div class="container py-2">
                                    <h1>Funding</h1>
                                    @yield('doc')
                                </div>
                                <div class="container py-5">
                                <img src="http://cloudmrhub.com/img/NIH.png" style="width:30%"/>
                                </div>
                            </div>






            </div>

        </div>

        </div>
@endsection



