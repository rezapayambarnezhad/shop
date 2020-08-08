@extends('back.index')
@section('title')

    دسته بندی جدید
    @endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title"> دسته بندی جدید</h4>
                </div>
            </div>

        </div>
       <div class="row">
           <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                   <div class="card-body">
                       <form class="forms-sample" action="{{route('admin.categories.store')}}" method="post">
                           @csrf
                           <div class="form-group">
                               <label for="exampleInputName1">Name</label>
                               <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{old('name')}}" >
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail3">slug</label>
                               <input type="text" class="form-control" id="exampleInputEmail3" name="slug" value="{{old('slug')}}">
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
