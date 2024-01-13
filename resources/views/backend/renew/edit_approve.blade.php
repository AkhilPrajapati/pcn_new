<x-my-admin-app>
    <div class="container" style="margin-top: -20px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Renew of #{{$renew->media->domain}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin_renew_update_approve', [$renew->id])}}" method="POST">
                    @csrf
                    <input type="hidden" name="media_id" value="{{$renew->media_id}}">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="bfg">
                                <label for="from">Renew From *</label>
                                <input type="date" name="from" class="form-control"  id="from" value="{{old('from')}}">
                                <span class="text-danger">@error('from'){{$message}}@enderror</span>
                            </div>
                        </div>    
                        
                        <div class="col-md-6 mt-3">
                            <div class="bfg">
                                <label for="to">Renew To *</label>
                                <input type="date" name="to" class="form-control"  id="to" value="{{old('to')}}">
                                <span class="text-danger">@error('to'){{$message}}@enderror</span>
                            </div>
                        </div>    
                    </div>
                    <div class="com-md-12 mt-4">
                        <button type="submit" class="btn btn-primary">Renew</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-my-admin-app>
