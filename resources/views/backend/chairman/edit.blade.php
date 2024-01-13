<x-my-admin-app>
    <div class="container" style="margin-top: -20px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Update Chairman Details.</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin_chairman_update', [$chairman->id])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="status">Status *</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                </select>
                                <span class="text-danger">@error('status'){{$message}}@enderror</span>
                            </div>
                        </div>  
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="activity">Activity *</label>
                                <select name="activity" id="activity" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <span class="text-danger">@error('activity'){{$message}}@enderror</span>
                            </div>
                        </div>  
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="appointment_date">appointment_date *</label>
                                <input type="date" name="appointment_date" class="form-control"  id="appointment_date"  value="{{$chairman->appointment_date}}">
                                <span class="text-danger">@error('appointment_date'){{$message}}@enderror</span>
                            </div>
                        </div>  
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="retirement_date">retirement_date *</label>
                                <input type="date" name="retirement_date" class="form-control"  id="retirement_date"  value="{{$chairman->retirement_date}}">
                                <span class="text-danger">@error('retirement_date'){{$message}}@enderror</span>
                            </div>
                        </div>  
                    </div>
                    <div class="com-md-12 mt-2">
                        <button type="submit" class="btn btn-primary">Change Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-my-admin-app>
