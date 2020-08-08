@extends('back.index')
@section('title')

    پنل مدیریت -مدیریت کاربران
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">پنل مدیریت-کاربران</h4>
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
                                    <th>ایمیل</th>
                                    <th>تلفن</th>
                                    <th>نقش</th>
                                    <th>وضعیت</th>
                                    <th>مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    @if($user->role==1)
                                        @php $role='مدیر' @endphp
                                    @else
                                        @php $role='کاربر' @endphp
                                    @endif
                                    @if($user->status==1)

                                        @php
                                            $url= route('admin.profile-status',$user->id);
                                        $status='<a href="'.$url.'"class="btn btn-success btn-fw">فعال<i class="far fa-eye"></i></a>'@endphp
                                    @else

                                        @php
                                            $url= route('admin.profile-status',$user->id);
                                            $status='<a href="'.$url.'"class="btn btn-inverse-success btn-fw">غیر فعال<i class="far fa-eye-slash"></i></a>'  @endphp
                                    @endif
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$role}}</td>
                                        <td>{!! $status !!}</td>
                                        <td>
                                            <a href="{{route('admin.profile',$user->id)}}"
                                               class="btn btn-success btn-md">edit <i class='far fa-edit'></i></a>
                                            @if($user->role>1)
                                                <a href="{{route('admin.profile-delete',$user->id)}}"
                                                   onclick=" return confirm('Delete entry?')"
                                                   class="btn btn-danger btn-md">del<i class='fas fa-trash-alt'></i></a>
                                            @else
                                                <a href="#" onclick=" return confirm('یوز مدیر امکان پاک شدن ندارد')"
                                                   class="btn btn-inverse-danger">del<i
                                                        class='fas fa-trash-alt'></i></a>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                        {{$users->links()}}
                    </div>
                </div>

            </div>

        </div>
        @include('back.footer')
    </div>
@endsection

