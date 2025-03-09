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


            <div class="card shadow bmessage-0 mb-7">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">All message</h5>
                        </div>
                    </div> 
                     
                </div>
                
                <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Add Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if(count($messages) == 0)
                                    <tr>
                                        <td colspan="6" class="text-center">No messages found</td>
                                    </tr>
                                    @endif

                                    @foreach($messages as $message)
                                    <tr>
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->phone}}</td>
                                        <td>{{$message->email}}</td>
                                        <td>{{date('d M Y',strtotime($message->created_at))}}
                                        </td>

                                        <td>
                                            {{-- view --}}
                                            <a href="{{route('admin.message.view',['id'=>$message->id])}}" class="btn btn-sm btn-neutral"> <i class="bi bi-eye"></i></a>
                                            {{-- delete --}}
                                            <a href="{{route('admin.message.delete',['id'=>$message->id])}}" onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-sm btn-neutral"> <i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                </div>

                <div class="card-footer border-0 py-5">
                    {{-- pagination --}}


                    
                    <span class="text-muted text-sm">
                        {{ $messages->firstItem()}}-{{ $messages->lastItem() }} of {{ $messages->total() }} results
                     </span>
                     @if($messages->total()>0)
                        <span class="text-muted text-sm">page {{$messages->currentPage()}} of {{$messages->lastPage()}}</span>
                     @endif
                     @if ($messages->total() > 0)
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item {{ $messages->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $messages->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $messages->lastPage(); $i++)
                                    <li class="page-item {{ $messages->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $messages->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $messages->currentPage() == $messages->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $messages->nextPageUrl() }}">Next</a>
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