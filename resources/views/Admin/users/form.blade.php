@extends('admin.layouts.app')

@section('content')
    <section id="number-tabs">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{!! $form['heading'] !!}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST" action="{!! $form['action'] !!}" class="number-tab-steps wizard-circle" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="{{$data->id}}" >
                                @csrf
                                <input type="hidden" name="_method" value="{!! $form['method'] !!}">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">First Name *</label>
                                                <input type="text" id="name" name="name" value="{{ old('name', $data->name) }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">Last Name *</label>
                                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $data->last_name) }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">DOB *</label>
                                                <input type="date" id="dob" name="dob" value="{{ old('dob', $data->dob) }}"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">Phone *</label>
                                                <input type="text" id="phone" name="phone" value="{{ old('phone', $data->phone) }}"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">Email *</label>
                                                <input type="email" id="email" name="email" value="{{ old('email', $data->email) }}" disabled class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="description">Address</label>
                                                <textarea type="text" name="address"  class="form-control">{{ old('address', $data->address) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Save Changes</button>
                                        <a href="{!! $form['cancel_url'] !!}" class="btn btn-danger mr-1 mb-1 waves-effect waves-light" style="color: white">Cancel</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
