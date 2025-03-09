@extends('layouts.admin')
@section('content')


<div class="h-screen flex-grow-1 overflow-y-lg-auto">
        
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">


            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="bi bi-check-circle"></i></span>
                <span class="alert-text
                ">{{Session::get('success')}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="bi bi-x-circle"></i></span>
                <span class="alert-text
                ">{{$error}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
            @endif


            <div class="card shadow border-0 mb-7">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">All Order</h5>
                        </div>
                    </div> 
                     
                </div>
                
                <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Add Date</th>
                                        <th scope="col">Add time</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if(count($orders) == 0)
                                    <tr>
                                        <td colspan="6" class="text-center">No order found</td>
                                    </tr>
                                    @endif

                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->phone}}</td>
                                          <td>{{$order->total}}</td>
                                        <td>{{$order->city}}</td>
                                      
                                        <td>{{date('d M Y',strtotime($order->created_at))}}
                                        </td>
                                        <td>{{$order->created_at->diffForHumans()}}</td>
                                        <td>
                                            {{-- view --}}
                                            <a href="{{route('admin.order.view',['id'=>$order->id])}}" class="btn btn-sm btn-neutral"> <i class="bi bi-eye"></i></a>
                                            {{-- delete --}}
                                            <a href="{{route('admin.order.delete',['id'=>$order->id])}}" onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-sm btn-neutral"> <i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                </div>

                <div class="card-footer border-0 py-5">
                    {{-- pagination --}}


                    
                    <span class="text-muted text-sm">
                        {{ $orders->firstItem()}}-{{ $orders->lastItem() }} of {{ $orders->total() }} results
                     </span>
                     @if($orders->total()>0)
                        <span class="text-muted text-sm">page {{$orders->currentPage()}} of {{$orders->lastPage()}}</span>
                     @endif
                     @if ($orders->total() > 0)
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item {{ $orders->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $orders->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $orders->lastPage(); $i++)
                                    <li class="page-item {{ $orders->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $orders->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $orders->currentPage() == $orders->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $orders->nextPageUrl() }}">Next</a>
                                </li>
                            </ul>
                        </nav>
                    @endif 
                     
                </div>

               
            </div>
        </div>
    </main>
</div>
 
@stop
@push('js')
 <style>
    /* hello */
 </style>
@endpush