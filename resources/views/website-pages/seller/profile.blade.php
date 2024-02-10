@extends('website-pages.seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Seller Profile')
@section('seller')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('seller.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ !empty($profileData->photo) ? url('upload/seller_images/' . $profileData->photo) : url('upload/no_image.png') }}"
                                        alt="Profile Picture">
                                </div>

                                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                                <p class="text-muted text-center text-uppercase">{{ Auth::user()->role }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Followers</b> <a class="float-right">1,322</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b> <a class="float-right">543</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Friends</b> <a class="float-right">13,287</a>
                                    </li>
                                </ul>

                                {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#profile"
                                            data-toggle="tab">Profile</a></li>

                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="#changepassword" data-toggle="tab">Change
                                        Password</a>
                                </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="profile">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control"
                                                        placeholder="{{ Auth::user()->name }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ Auth::user()->username }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control"
                                                        placeholder="{{ Auth::user()->email }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ Auth::user()->address }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control"
                                                        placeholder="{{ Auth::user()->phone }}" disabled>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Join Date &
                                                    Time</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ Auth::user()->created_at }}" disabled>
                                                </div>
                                            </div>


                                        </form>


                                    </div>


                                    <div class="tab-pane" id="settings">
                                        <form method="POST" action="{{ route('seller.profile.store') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $profileData->name }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="username"
                                                        pattern="[a-z]*" value="{{ $profileData->username }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ $profileData->email }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="phone"
                                                        value="{{ $profileData->phone }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience"
                                                    class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="address"
                                                        value="{{ $profileData->address }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Photo</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-lable" name="photo"
                                                        id="image">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <img id="showImage" class="profile-user-img img-fluid img-circle"
                                                        src="{{ !empty($profileData->photo) ? url('upload/seller_images/' . $profileData->photo) : url('upload/no_image.png') }}"
                                                        alt="Profile Picture">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="changepassword">
                                        <form method="POST" action="{{route('seller.update.password')}}" class="form-horizontal"
                                            enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row">
                                                <label for="oldpass" class="col-sm-2 col-form-label">Old
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password"
                                                        class="form-control @error('old_password') is-invalid @enderror"
                                                        name="old_password" id="old_password"
                                                        placeholder="Enter Your Old Password">

                                                    @error('old_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="newpass" class="col-sm-2 col-form-label">New
                                                    Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password"
                                                            class="form-control @error('new_password') is-invalid @enderror"
                                                            name="new_password" id="new_password"
                                                            placeholder="Enter Your New Password">

                                                        @error('new_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cpassword" class="col-sm-2 col-form-label">Confirm
                                                    Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password"
                                                            class="form-control"
                                                            name="new_password_confirmation" id="new_password_confirmation"
                                                            placeholder="Confirm Your New Password">


                                                    </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Update
                                                        Password</button>
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


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
