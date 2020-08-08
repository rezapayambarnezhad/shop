@extends('back.index')
@section('title')

    پنل مدیریت -مدیریت دسته بندی ها
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->

            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">پنل مدیریت-دسته بندی ها</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="template-demo">
                            <a href="{{route('admin.categories.create')}}" type="button" class="btn btn-primary btn-fw">دسته بندی جدید</a>
                            <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
                            <button type="button" class="btn btn-success btn-fw">Success</button>
                            <button type="button" class="btn btn-danger btn-fw">Danger</button>
                            <button type="button" class="btn btn-warning btn-fw">Warning</button>
                            <button type="button" class="btn btn-info btn-fw">Info</button>
                            <button type="button" class="btn btn-light btn-fw">Light</button>
                            <button type="button" class="btn btn-dark btn-fw">Dark</button>
                            <button type="button" class="btn btn-link btn-fw">Link</button>
                        </div>
                    </div>
                </div>
            </div>
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
                                <th>نام مستعار-slug</th>
                                <th>مدیریت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($categories as $category)

                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>

                                <td>
                                    <a href="{{route('admin.categories.edit',$category->id)}}"class="btn btn-success btn-md">edit <i class='far fa-edit'></i></a>
                                    <a href="{{route('admin.categories.destroy',$category->id)}}"onclick=" return confirm('Delete entry?')" class="btn btn-danger btn-md">del<i class='fas fa-trash-alt'></i></a>
                                </td>

                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                        {{$categories->links()}}
                </div>
            </div>

            </div>

        </div>
        @include('back.footer')
    </div>
@endsection

