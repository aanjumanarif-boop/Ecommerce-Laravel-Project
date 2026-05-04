@extends('admin.master')

@section('content')

     <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">SubCategory list</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">subCategory list</li>
                </ol>
              </div>
            </div>
          
          </div>
  
        </div>
        
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">SubCategory list</h3>
                  </div>
        
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                 
                          <th>SubCategory Name</th>
                          <th>Category Name</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($subCategories as $subcategory);
                        <tr class="align-middle">
                          <td>{{$loop->index+1}}</td>
                           <td>{{$subcategory->name}}</td>
                           <td>{{$subcategory->cat_id}}</td>
                  
                           
                          <td>
                            <div class="d-flex gap-2" >
                            <a href="{{url('/manage/subcategory-edit/'.$subcategory->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('/manage/subcategory-delete/'.$subcategory->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </div>

                          
                          </td>
                        </tr>
                      @endforeach
                      
                      </tbody>
                    </table>
                  </div>
             
                  
                </div>
           
              </div>
     
            </div>

          </div>
  
        </div>
       
      </main>

@endsection