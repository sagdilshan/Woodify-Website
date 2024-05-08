@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Edit Contact')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('manage.all.products') }}">Back</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.conta iner-fluid -->
        </section>

        <!-- Main content -->
        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">



                                    <div class="active tab-pane">
                                        <form method="POST"
                                            action="{{ route('update.contact', ['id' => $contacts->id]) }}"
                                            class="form-horizontal">
                                            @csrf
                                            <h3 class="text-center"><a class=" text-danger text-bold" href="mailto:{{ $contacts->email }}" >{{ $contacts->email }}</a></h3>
<br>
                                            <input type="hidden" class="form-control" name="id"
                                                value="{{ $contacts->id }}">





                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">User ID</label>
                                                    <div class="col-sm-10">
                                                        {{-- <input type="text" class="form-control " name="name" readonly
                                                            value="{{ $contacts->user_id }}" > --}}
                                                            <input type="text" class="form-control {{ empty($contacts->user_id) ? 'is-invalid' : '' }}" name="name" readonly
                                                            value="{{ $contacts->user_id ?? '' }}">

                                                     @if(empty($contacts->user_id))
                                                         <div class="invalid-feedback">
                                                             Danger: This is Unregistered User.
                                                         </div>
                                                     @endif

                                                    </div>
                                                </div>



                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control " name="name" readonly
                                                            value="{{$contacts->name}}" >


                                                    </div>
                                                </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " name="phone" readonly
                                                        value="{{$contacts->phone}}" required>


                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Subject</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " name="subject" readonly
                                                        value="{{$contacts->subject}}" required>


                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Message</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control" name="message" readonly>{{ old('message', $contacts->message) }}</textarea>



                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Answer</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control" name="answer" required autofocus></textarea>



                                                </div>
                                            </div>












                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>







@endsection
