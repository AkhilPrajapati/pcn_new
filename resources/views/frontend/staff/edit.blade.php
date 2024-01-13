<x-my-user-dashboard>
    <div class="app-main" id="main">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Edit Staff Details
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('staff_update', [$staff->id])}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="media_id">Media</span></label>
                                    <select name="media_id" id="media_id" class="form-control">
                                        @foreach ($media as $media)
                                        <option value="{{$media->id}}" {{$staff->media_id == $media->id ? 'selected' : ''}}>{{$media->domain}}</option>
                                        @endforeach                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="name">Name *</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{$staff->name}}">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="male">Gender *</label><br>
                                    <input type="radio" name="gender" id="male" value="male">
                                    <label for="male">Male</label>&nbsp;
                                    <input type="radio" name="gender" id="female" value="female">
                                    <label for="female">Female</label>&nbsp;
                                    <input type="radio" name="gender" id="other" value="other">
                                    <label for="other">Other</label>&nbsp;
                                    <span class="text-danger">@error('gender')<br>{{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="post">Post *</label>
                                    <select name="post" id="post" class="form-control">
                                        <option value="Reporter" {{$staff->post == 'Reporter' ? 'selected' : ''}}>Reporter</option>
                                        <option value="Photo Journalist" {{$staff->post == 'Photo Journalist' ? 'selected' : ''}}>Photo Journalist</option>
                                        <option value="Stringer" {{$staff->post == 'Stringer' ? 'selected' : ''}}>Stringer</option>                                
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="salary">Salary</label>
                                    <input type="text" id="salary" name="salary" class="form-control" placeholder="" value="{{$staff->salary}}">
                                    <span class="text-danger">@error('salary'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="press_pass_number">press_pass_number</label>
                                    <input type="text" id="press_pass_number" name="press_pass_number" class="form-control" value="{{$staff->press_pass_number}}">
                                    <span class="text-danger">@error('press_pass_number'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="remark">Remarks (if any)</label>
                                    <input type="text" id="remark" name="remark" class="form-control" value="{{$staff->remark}}">
                                    <span class="text-danger">@error('remark'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="com-md-12 mt-3">
                            <button type="submit" class="btn btn-primary my-3">Update Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-my-user-dashboard>


