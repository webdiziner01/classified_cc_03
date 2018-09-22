@extends('layouts.app')

@section('content')
<div class="container">

       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-body">

                           <div class="row">
                               @foreach($categories as $category)
                                   <div class="col-md-4 py-4">
                                   <h2>{{$category->name}}</h2>

                                   <hr>

                               @foreach($category->children as $sub)

                               <h5><a href="">{{$sub->name}}</a></h5>

                                @endforeach

                                   </div>
                               @endforeach

                       </div>

                   </div>
               </div>

           </div>

   </div>
</div>
@endsection
