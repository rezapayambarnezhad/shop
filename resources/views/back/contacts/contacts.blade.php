@extends('back.index')
@section('title')

    پنل مدیریت -مدیریت پیام ها
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->

            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">  پنل مدیریت -مدیریت پیام ها</h4>
                    </div>
                </div>

            </div>
{{--            <div class="row">--}}
{{--                <div class="col-md-12 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <form class="forms-sample" action="{{route('admin.sliders.store')}}" method="post">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputName1">Name</label>--}}
{{--                                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{old('name')}}" >--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail3">text</label>--}}
{{--                                    <input type="text" class="form-control" id="exampleInputEmail3" name="text" value="{{old('text')}}">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail3">محتوا</label>--}}
{{--                                    <textarea  id="editor" name="desc" ></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail3">نویسنده:{{Auth::user()->name}}</label>--}}
{{--                                    <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail3">status</label>--}}
{{--                                    <br>--}}
{{--                                    <select name="status" class="form-control" >--}}
{{--                                        <option value="0">منتشر نشده</option>--}}
{{--                                        <option value="1">منتشر شده</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail3">chosen</label><br>--}}
{{--                                    <div id="output"></div>--}}
{{--                                    <select class="test_mull form-control" name="categories[]" multiple >--}}
{{--                                        @foreach($categories as $category)--}}
{{--                                            <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                                <div class="input-group" style="margin-bottom: 3%">--}}
{{--                                  <span class="input-group-btn">--}}
{{--                                  <a href="#" id="lfm" data-input="image" data-preview="holder" class="btn btn-primary">--}}
{{--                                       <i class="fa fa-picture-o"></i> انتخاب عکس--}}
{{--                                  </a>--}}
{{--                                  </span>--}}
{{--                                    <input id="image" class="form-control" type="text" name="image">--}}
{{--                                </div>--}}
{{--                                <img id="holder" style="margin-top:15px;max-height:100px;">--}}

{{--                                <button type="submit" class="btn btn-success mr-2" >Add</button>--}}
{{--                                <button class="btn btn-danger">Cancel</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @include('back.massage')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام</th>
                                <th>ایمل</th>
                                <th>متن</th>
                                <th>وضعیت</th>
                                <th>مدیریت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($contacts as $contact)
                                @if($contact->status==1)

                                    @php
                                    $url=route('admin.contacts-status',$contact->id);
                                    $status='<a href="'.$url.'"class="btn btn-inverse-info btn-fw">خوانده شده<i class="far fa-eye"></i></a>'
                                    @endphp
                                    @else
                                    @php
                                        $url=route('admin.contacts-status',$contact->id);
                                    $status='<a href="'.$url.'"class="btn btn-info btn-fw">خوانده نشده<i class="far fa-eye-slash"></i></a>'
                                    @endphp
                                    @endif

                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->body}}</td>
                                <td>{!! $status !!}</td>

                                <td>
                                    <a href="{{route('admin.sliders.destroy',$contact->id)}}"onclick=" return confirm('Delete entry?')" class="btn btn-danger btn-md">del<i class='fas fa-trash-alt'></i></a>
                                </td>

                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                        {{$contacts->links()}}
                </div>
            </div>

            </div>

        </div>
        @include('back.footer')
    </div>
@endsection

