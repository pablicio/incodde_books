@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <span class="box">content</span>
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                         src="https://dummyimage.com/400x200/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">.card-title</h4>
                                        <p class="card-text">.card-text</p>
                                        <a href="#" class="btn btn-primary">.btn-primary</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <span class="box">content</span>
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                         src="https://dummyimage.com/400x200/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">.card-title</h4>
                                        <p class="card-text">.card-text</p>
                                        <a href="#" class="btn btn-primary">.btn-primary</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <span class="box">content</span>
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                         src="https://dummyimage.com/400x200/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">.card-title</h4>
                                        <p class="card-text">.card-text</p>
                                        <a href="#" class="btn btn-primary">.btn-primary</a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <span class="box">content</span>
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                         src="https://dummyimage.com/400x200/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">.card-title</h4>
                                        <p class="card-text">.card-text</p>
                                        <a href="#" class="btn btn-primary">.btn-primary</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <span class="box">content</span>
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                         src="https://dummyimage.com/400x200/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">.card-title</h4>
                                        <p class="card-text">.card-text</p>
                                        <a href="#" class="btn btn-primary">.btn-primary</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <span class="box">content</span>
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                         src="https://dummyimage.com/400x200/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">.card-title</h4>
                                        <p class="card-text">.card-text</p>
                                        <a href="#" class="btn btn-primary">.btn-primary</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
