@include('header')

<h3 class="mx-3 my-4"><u>{{ __('Register') }}</u></h3>

<table align="center">
    <form action="/register" method="post" enctype="multipart/form-data">
        @csrf
        @if (session('errors'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container mb-3">

            <tr>
                <td>
                    <label for="">{{ __('First Name') }}:</label>

                </td>

                <td>
                    <input type="text" name="first_name" required />
                </td>
                <td>
                    <label for="">{{ __('Last Name') }}:</label>
                </td>
                <td><input type="text" name="last_name" required /></td>
            </tr>

            <tr>
                <td>
                    <label for="">{{ __('Email') }}:</label>
                </td>
                <td><input type="email" name="email" required /></td>
                <td>
                    <label for="">{{ __('Role') }}:</label>
                </td>
                <td>
                    <select name="roles_id" id="" required>
                        <option value=""></option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ ucwords($role->role_name) }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">{{ __('Gender') }}:</label>
                </td>
                <td>
                    @foreach ($genders as $gender)
                        <input type="radio" name="genders_id"
                            value="{{ $gender->id }}" />{{ $gender->gender_desc }}
                    @endforeach
                </td>
                <td>
                    <label for="">{{ __('Display Picture') }}</label>
                </td>
                <td><input type="file" name="display_picture_link" required /></td>
            </tr>
            <tr>
                <td>
                    <label for="">{{ __('Password') }}:</label>
                </td>
                <td><input type="password" name="password" required /></td>
                <td>
                    <label for="">{{ __('Confirm Password') }}:</label>
                </td>
                <td><input type="password" name="password_confirmation" required /></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><button class="btn btn-warning"
                        type="submit">{{ __('Submit') }}</button></td>
            </tr>
        </div>
    </form>
</table>
@include('footer')
