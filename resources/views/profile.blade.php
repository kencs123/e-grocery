@include('header')
@include('navbar')
<div class="container">
    <div class="row mx-5 my-5">
        <div class="col-3 px-2">
            <img src="{{ asset('/storage/' . $user->display_picture_link) }}" width="250px">
        </div>

        <div class="col-9">
            @if (session('errors'))
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/profile" method="post" enctype="multipart/form-data">
                @csrf
                <table>
                    <tr>
                        <td>{{ __('First Name') }}</td>
                        <td><input type="text" name="first_name" value="{{ $user->first_name }}"></td>
                        <td>{{ __('Last Name') }}</td>
                        <td><input type="text" name="last_name" value="{{ $user->last_name }}"></td>

                    </tr>
                    <tr>
                        <td>{{ __('Email') }}</td>
                        <td> <input type="email" name="email" value="{{ $user->email }}"></td>
                        <td>{{ __('Role') }}</td>
                        <td><input type="text" value="{{ ucwords($user->role->role_name) }}" disabled></td>
                    </tr>
                    <tr>
                        <td>{{ __('Gender') }}</td>
                        <td>
                            @foreach ($genders as $gender)
                                <input type="radio" name="genders_id" value="{{ $gender->id }}"
                                    @if ($gender->id == $user->genders_id) checked @endif>{{ $gender->gender_desc }}
                            @endforeach
                        </td>
                        <td>{{ __('Display Picture') }}</td>
                        <td><input type="file" name="display_picture_link"></td>
                    </tr>

                    <tr>
                        <td>{{ __('Password') }}</td>
                        <td><input type="password" name="password" value=""></td>
                        <td>{{ __('Confirm Password') }}</td>
                        <td><input type="password" name="password_confirmation" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="1"><button type="submit" class="btn btn-warning">{{ __('Save') }}</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@include('footer')
