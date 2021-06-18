@extends('admin.layout.master')
@section('import-css')
@stop
@section('content')

    <div class="page-header">
        <h3 class="page-title">
              <span class="page-title-icon bg-gradient-success text-white mr-2">
                  <i class="mdi  mdi-wallet  "></i>
              </span> {{$page_title}} </h3>


    </div>

    <div class="row">

        <div class="col-md-12">
            @include('errors.error')
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="payment-method-item">
                            <div class="form-group row">
                                    <label for="eventName" class="col-sm-3 col-form-label"><strong>File Data</strong></label>
                                    <div class="col-sm-9">
                                        <input type="file" name="file" required value="" class="form-control" id="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                                        @if ($errors->has('file'))
                                            <p class="text-danger">{{ $errors->first('file') }}</p>
                                        @endif
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Import</button>
                    </div>
                </form>
            </div>
        </div>


    </div>



@endsection


@section('script')
@stop
