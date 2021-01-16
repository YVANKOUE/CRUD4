@extends('admin.app')

@section('title') | Utilisateurs @endsection

@section('content')
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="row">
        <div class="col-md-2">
        </div>
        <div class="card shadow mb-4 col-md-10">
            <div class="row card-header py-3">
                <h3 class="text-center ml-4 font-weight-bold text-primary">Liste du Personnel</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rôles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rôles</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                    <td class="text-center">
                                        <a href=""><button class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        <!-- @can('edit-users') -->
                                            <a href="{{ route('admin.users.edit', $user->id)}}"><button class="btn btn-danger"><i class="fa fa-pen" aria-hidden="true"></i></button></a>
                                        <!-- @endcan
                                        @can('delete-users') -->
                                        <form action="{{route('admin.users.destroy',$user->id)}}" method="post" class="d-inline">
                                            @csrf 
                                            @method('DELETE')
                                            <button class="btn btn-warning"><i class="fas fa-user-slash" aria-hidden="true"></i></button>
                                        </form>
                                        <!-- @endcan -->
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
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->    

@endsection