<x-my-admin-app>
    <div class="container" style="margin-top: -20px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Generate Fiscal Year.</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin_fiscal_year_store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="fiscal_year">Fiscal Year *</label>
                                <input type="text" name="fiscal_year" class="form-control"  id="fiscal_year"  value="{{old('fiscal_year')}}">
                                <span class="text-danger">@error('fiscal_year'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="bfg">
                                <label for="from">From *</label>
                                <input type="text" name="from" class="form-control"  id="from"  value="{{old('from')}}">
                                <span class="text-danger">@error('from'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="bfg">
                                <label for="to">To *</label>
                                <input type="text" name="to" class="form-control"  id="to"  value="{{old('to')}}">
                                <span class="text-danger">@error('to'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="remark">Remark</label>
                                <input type="text" name="remark" class="form-control"  id="remark"  value="{{old('remark')}}">
                                <span class="text-danger">@error('remark'){{$message}}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="com-md-12 mt-3">
                        <button type="submit" class="btn btn-primary">Save Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-my-admin-app>
