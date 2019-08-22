<div class="form-group">
    <label for="name">Name:</label>
    <input class="form-control" type="text" name="name" value="{{old('name')?? $customer->name}}">
</div>
<div>
    {{ $errors->first('name') }}
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input class="form-control" type="email" name="email" value="{{old('email') ?? $customer->email}}">
</div>
<div>
    {{ $errors->first('email') }}
</div>

<div class="form-group">
    <label for="active">Customer status</label>
    <select id="active" name="active" class="form-control">
        <option value="" disabled>Select customer status</option>
        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{$customer->active == $activeOptionKey ?'selected' : ''}}>{{$activeOptionValue}}</option>
            @endforeach

    </select>
</div>
<div>
    {{ $errors->first('active') }}
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select id="company_id" name="company_id" class="form-control">
        @foreach($companies as $company)
            <option value="{{$company->id}}" {{$company->id==$customer->company_id ? 'selected' : ''}}>{{$company->name}}</option>
        @endforeach
    </select>
</div>
<div>
    {{ $errors->first('company_id') }}
</div>


@csrf