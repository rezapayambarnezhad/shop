@extends('back.index')
@section('title')

    ویرایش نظرات
    @endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title"> ویرایش نظرات </h4>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{route('admin.comments.update',$comment->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$comment->name}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" name="email" value="{{$comment->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">محتوا</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail3" name="body" >{{$comment->body}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">status</label>
                                    <br>
                                    <select name="status" class="form-control" >
                                        <option value="0">منتشر نشده</option>
                                        <option value="1" <?php if ($comment->status==1) echo 'selected'?>>منتشر شده</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success mr-2">edit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    @include('back.footer')
</div>
@endsection
