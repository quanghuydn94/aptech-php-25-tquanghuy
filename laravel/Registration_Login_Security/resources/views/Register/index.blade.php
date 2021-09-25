 @extends('Register.master')
 @section('content')
     <div class="container">
         <div class="row">
             <div class="col-8">
                 <a href="{{route('member.logout')}}" class="badge badge-primary ">Logout</a>
                 <table class="table table-hover table-bordered ">
                    <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        @forelse ($members as $mem )
                            <tr>
                                <td>{{$mem->FullName}}</td>
                                <td>{{$mem->Email}}</td>
                                <td>{{$mem->Address}}</td>
                                <td>
                                    <a href="{{route('member.edit',$mem->Id)}}" class="badge badge-warning">Edit</a>
                                    <a href="{{route('member.delete',$mem->Id)}} " class="badge badge-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No data!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
             </div>
         </div>
     </div>
 @endsection
