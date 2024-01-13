<x-my-admin-app>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <div class="container" style="margin-top: -20px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Give Proper Reasons</h3>
            </div>
            <div class="card-body">
                <h6>Rejection of {{$media->domain}}</h6>
                <form action="{{route('admin_rejection_store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="reason">Relatable Reasons *</span></label>
                                <select name="reason[]" id="reason" class="form-control select2" value="{{old('reason')}}" multiple required>
                                    <option value="Unknown director photo">Unknown director photo</option>
                                    <option value="Unknown director photo">Unknown director photo</option>
                                    <option value="Missing nepali domain name">Missing nepali domain name</option>
                                    <option value="Editor gmail problem">Editor gmail problem</option>
                                    <option value="Unknown director citizen">Unknown director citizen</option>
                                    <option value="contact mismatch">contact mismatch</option>
                                    <option value="other reason 1">other reason 1</option>
                                    <option value="other reason 2">other reason 2</option>
                                    <option value="other reason 3">other reason 3</option>
                                </select>
                                <span class="text-danger">@error('reason'){{$message}}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="media_id" value="{{$media->id}}">
                    <div class="com-md-12 mt-3">
                        <button type="submit" class="btn btn-primary my-3">Save Record</button>
                    </div>
                </form>
            </div>
        </div>


      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>$(document).ready(function() {$('.select2').select2();});</script>
   
</x-my-admin-app>
