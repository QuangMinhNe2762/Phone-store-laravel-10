<div class="col-lg-9 col-md-8 col-12">
    <div class="p-6 p-lg-10">
        <div class="mb-6">
            @include('User.alert')
            <h2 class="mb-0">Profile Setting</h2>
        </div>
        <div>
            <!-- heading -->
            <h5 class="mb-4">Profile details</h5>
            <div class="row">
                <div class="col-lg-12">
                    <!-- form -->
                    <form action="{{route('home.updateProfile')}}" method="POST">
                        @csrf
                        <!-- Form fields go here -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name', $user->name) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email', $user->email) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="number" name="phone" id="phone" class="form-control"
                                    value="{{ $user->details->phone != '' ? old('phone', $user->details->phone) : '' }}"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <textarea name="address" id="address" class="form-control"
                                required>{{ $user->details->address != '' ? old('address', $user->details->address) : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>