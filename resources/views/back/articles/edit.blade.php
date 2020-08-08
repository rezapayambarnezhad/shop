@extends('back.index')
@section('title')

    ویرایش مطلب
    @endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">ویرایش مطلب </h4>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{route('admin.articles.update',$article->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$article->name}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">قیمت</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="main_price" value="{{$article->main_price}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">تخفیف</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="suggest_price" value="{{$article->suggest_price}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">اف</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="off_price" value="{{$article->off_price}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">slug</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" name="slug" value="{{$article->slug}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">محتوا</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail3" name="desc" >{{$article->desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">نویسنده:{{Auth::user()->name}}</label>
                                    <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail3">status</label>
                                    <br>
                                    <select name="status" class="form-control" >
                                        <option value="0">منتشر نشده</option>
                                        <option value="1" <?php if ($article->status==1) echo 'selected'?>>منتشر شده</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">chosen</label><br>
                                    <div id="output"></div>
                                    <select class="test_mull form-control" name="categories[]" multiple >
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" <?php if (in_array($category->id,$article->categories->pluck('id')->toarray())) echo 'selected' ?> >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group">
                                  <span class="input-group-btn">
                                  <a href="#" id="lfm" data-input="image" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> انتخاب عکس
                                  </a>
                                  </span>
                                    <input id="image" class="form-control" type="text" name="image" value="{{$article->image}}">
                                </div>
                                <div class="input-group" style="margin-bottom: 3%">
                                <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$article->image}}">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Create</button>
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
