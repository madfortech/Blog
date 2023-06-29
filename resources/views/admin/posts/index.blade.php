@extends('layouts.Admin')
@section('title', 'View all posts')
@section('content') 
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">{{ __(' View all posts') }}</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <table class="table my-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Author</th>
                                                    <th>Created at</th>
                                                    <th>Updated at</th>
                                                </tr>
                                            </thead>
                                            @foreach($posts as $post)
                                            <tbody>
                                                <tr>
                                                    <td>  {{ $post->id }}</td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->description }}</td>
                                                    <td>{{ $post->user->name }}</td>
                                                    <td>{{ $post->created_at }}</td>
                                                    <td>{{ $post->updated_at }}</td>
                                                    <td>
                                                        <a 
                                                            class="text-white btn btn-sm btn-success rounded-pill text-decoration-none" 
                                                            href="{{ route('admin.posts.edit', $post->id) }}">
                                                            <i class="fas fa-edit"></i>&nbsp;
                                                            {{ __(' Edit') }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form 
                                                            action="{{ route('admin.posts.destroy', $post->id) }}" 
                                                            method="POST">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <div>
                                                                <button 
                                                                    class="btn btn-sm btn btn-danger rounded-pill" 
                                                                    type="submit">
                                                                    <i class="fas fa-trash"></i>&nbsp;
                                                                    {{ __('Trash') }}
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
