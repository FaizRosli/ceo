@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Bank account info</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/bank/update/{{$data_bank->id}}" method ="post">
                        @csrf
                        <label for="basic-url">Bank Name :</label>
                        <select class="form-control" name="bank_name" >
                                    <option value="maybeng">maybeng</option>
                                    <option value="cimbeng">cimbeng</option>
                                    <option value="agro beng">agro beng</option>
                                    
                       </select>
                        @error('package')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       <br>
                        <label for="basic-url">Bank Account Number :</label>
                        <input type="text" class="form-control" placeholder="Bank Account Number" aria-label="email" aria-describedby="basic-addon1" name = "bank_account_number" value ="{{$data_bank->bank_account_number}}">
                        <br>
                        <label for="basic-url">Bank Account Holder :</label>
                        <input type="text" class="form-control" placeholder="Bank Account Holder" aria-label="email" aria-describedby="basic-addon1" name = "bank_account_holder" value ="{{$data_bank->bank_account_holder}}">
                        <br>
                       <input type="submit" class="btn btn-primary" value = "Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

