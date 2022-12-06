@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <h5>Create Data</h5>
                <div class="card-body">
                    <form action="{{ url('/article/store') }}" id="formAdd" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Title" aria-label="default input example"
                                name="title">
                        </div>
                        <div class="col-md-12">
                            <label for="formFileMultiple" class="form-label">Choose File</label>
                            <input class="form-control" type="file" id="formFileMultiple" name="image">
                        </div>

                        <div class="col-md-12">
                            <textarea id="" cols="30" rows="10" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn_add mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
