<x-my-user-dashboard>

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>Request Renew for <b>{{$media->domain}}</b></h3>
                </div>
                <div class="card-body">
                    <form action="{{route('renew_store', [$media->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="media_id" value="{{$media->id}}">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="fiscal_year">Fiscal Year</span></label>
                                    <select name="fiscal_year" id="fiscal_year" class="form-control" value="{{old('fiscal_year')}}">
                                        <option value="">Choose Year</option>
                                        @foreach ($fiscal_year as $fiscal_year)
                                        <option value="{{$fiscal_year->fiscal_year}}">{{$fiscal_year->fiscal_year}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('fiscal_year'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>                 
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="application">Application *</label>
                                    <input type="file" id="application" name="application" class="form-control">
                                    <span class="text-danger">@error('application'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="audit_report">Audit Report *</label>
                                    <input type="file" id="audit_report" name="audit_report" class="form-control">
                                    <span class="text-danger">@error('audit_report'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_renewal">company_renewal *</label>
                                    <input type="file" id="company_renewal" name="company_renewal" class="form-control" value="{{old('company_renewal')}}">
                                    <span class="text-danger">@error('company_renewal'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="minute">minute *</label>
                                    <input type="file" id="minute" name="minute" class="form-control" value="{{old('minute')}}">
                                    <span class="text-danger">@error('minute'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="payment_voucher">payment_voucher *</label>
                                    <input type="file" id="payment_voucher" name="payment_voucher" class="form-control" value="{{old('payment_voucher')}}">
                                    <span class="text-danger">@error('payment_voucher'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="tax_clearance">Tax Clearance *</label>
                                    <input type="file" id="tax_clearance" name="tax_clearance" class="form-control" value="{{old('tax_clearance')}}">
                                    <span class="text-danger">@error('tax_clearance'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="bfg">
                                    <label for="remark">Remark (if any)</label>
                                    <input type="text" id="remark" name="remark" class="form-control" value="{{old('remark')}}">
                                    <span class="text-danger">@error('remark'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary my-3">Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-my-user-dashboard>


