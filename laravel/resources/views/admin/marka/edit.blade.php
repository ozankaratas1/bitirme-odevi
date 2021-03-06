@extends("layouts.admin")
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session("status"))
                        <div class="alert alert-primary" role="alert">
                            {{session("status")}}
                        </div>
                    @endif


                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Marka Düzenle</h4>
                            <p class="category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{route("admin.marka.edit.post",['id'=>$data[0]['id']])}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" name="name" class="form-control" value="{{$data[0]['name']}}">
                                            <span class="material-input"></span></div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <input type="text" name="model" class="form-control" value="{{$data[0]['model']}}">
                                            <span class="material-input"></span></div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Marka Düzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
