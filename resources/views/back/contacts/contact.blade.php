@extends('back.index')
@section('title')

     نظرات
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">  نظرات </h4>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample">
{{--                                @csrf--}}
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$contact->name}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" name="email" value="{{$contact->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">محتوا</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail3" name="body" >{{$contact->body}}</textarea>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail3">status</label>--}}
{{--                                    <br>--}}
{{--                                    <select name="status" class="form-control" >--}}
{{--                                        <option value="0">منتشر نشده</option>--}}
{{--                                        <option value="1" <?php if ($comment->status==1) echo 'selected'?>>منتشر شده</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <button type="button" class="btn btn-success mr-2" onclick=" return confirm('Delete entry?')">delete</button>--}}
                                <a href="{{route('admin.contacts.destroy',$contact->id)}}"onclick=" return confirm('Delete entry?')" class="btn btn-danger btn-fw">delete</a>
                                <a href="{{route('admin.contacts')}}" class="btn btn-success mr-2">Cancel</a>
{{--                                <button class="btn btn-success mr-2">Cancel</button>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        @include('back.footer')
    </div>
@endsection
