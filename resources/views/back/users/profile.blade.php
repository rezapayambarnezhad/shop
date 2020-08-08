@extends('back.index')
@section('title')

    آموزش لاراول - بخش مدیریت
    @endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">پنل مدیریت-ویرایش</h4>
                </div>
            </div>

        </div>
       <div class="row">
           <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                   <div class="card-body">
                       <form class="forms-sample" action="{{route('admin.profile-update',$user->id)}}" method="post">
                           @csrf
                           <div class="form-group">
                               <label for="exampleInputName1">Name</label>
                               <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$user->name}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail3">Email address</label>
                               <input type="email" class="form-control" id="exampleInputEmail3" name="email" value="{{$user->email}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputPassword4">Password</label>
                               <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputPassword4">password_confirmation</label>
                               <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password_confirmation">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputPassword4">phone</label>
                               <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Password" name="phone" value="{{$user->phone}}">
                           </div>

                           <button type="submit" class="btn btn-success mr-2">Edit</button>
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
