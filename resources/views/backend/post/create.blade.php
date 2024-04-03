@extends('backend.master')

@section('body')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">ADD POST</h4>

            <form class="form-horizontal p-t-20" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                {{-- <h2 class="text-center text-success fw-bold">{{ session('message') }}</h2> --}}
                @csrf
                
                <div class="form-group row">
                    <label for="exampleInputuname3" class="col-sm-3 control-label">Title : </label>
                    <div class="col-sm-9">
                        <div class="input-group">

                            <input type="text" class="form-control" name="title" id="exampleInputuname3" placeholder="T I T L E">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputEmail3" class="col-sm-3 control-label">Content</label>
                    <div class="col-sm-9">
                        <textarea type="text" class="form-control" name="upload" placeholder="Short description"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputEmail3" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="images[]" id="exampleInputuname3" multiple>
                    </div>
                </div>

                

                <div class="form-group row m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="mt-4 text-white btn btn-success waves-effect waves-light">Create New Post</button>
                    </div>
                </div>
                
            </form>




        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    CKEDITOR.replace('upload', {
        filebrowserUploadMethod: 'form'
    });
</script>
@endpush