<x-my-admin-app>
    <div class="container" style="margin-top: -30px; margin-left: -15px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Records of Staffs</h3>
            </div>
            <div class="card-body">
                @if ($staff->count() == 0)
                <h5 class="text-warning">No Records Available, Please add First</h5>
                @else
                <table class="table">
                    <tr>
                        <th>#SN</th>
                        <th>Name</th>
                        <th>Post</th>
                        <th>Salary</th>
                        {{-- <th>Status</th> --}}
                        <th>Press Pass No.</th>
                        <th>Related Media</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($staff as $staff)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->post}}</td>
                        <td>{{$staff->salary}}</td>
                        {{-- @if ($staff->status == "approved")
                        <td>{{$staff->status}}</td>                                
                        @else
                        <td class="text-danger">{{$staff->status}}</td>
                        @endif --}}
                        <td>{{$staff->press_pass_number}}</td>
                        <td>{{$staff->media->domain}}</td>
                        <td>
                            @if ($staff->status == "pending")
                            <form action="{{route('admin_staff_update', [$staff->id])}}" method="POST">
                                @csrf
                                {{-- <button type="submit" class="btn btn-outlined">Approve</button> --}}
                                <button type="submit" class="btn btn-icon btn-danger btn-sm">Approve</button>

                                {{-- <a href="#" class="btn btn-icon btn-danger btn-sm"><i class="fas fa-check"></i></a> --}}

                            </form>
                            @else
                            <span class="text-success">{{$staff->status}}</span>
                            @endif
                           
                        </td>
                    </tr>
                    @endforeach
                   
                </table>
                @endif

            </div>
        </div>
       
    </div>
</x-my-admin-app>

