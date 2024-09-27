@include('header')

<h3 class="mx-3 my-4"><u>Login</u></h3>
@if (session('status'))
    <div class="mx-3 my-4 alert alert-info w-25">{{ session('status') }}</div>
@endif
<form action="/login" class="mx-3 my-4" method="post">
    @csrf
    <table>
        <div class="container mb-3">

            <tr>
                <td>
                    <label for="email">{{ __('Email') }}</label>
                </td>

                <td><input type="text" name="email" /></td>

            </tr>
            <tr>
                <td>
                    <label for="password">{{ __('Password') }}:</label>
                </td>
                <td><input type="password" name="password" id="password" /></td>
            </tr>




            <td colspan="4" align="center"><button type="submit"
                    class="btn btn-warning">{{ __('Submit') }}</button>
                <br>
                <a href="/register">{{ __("Don't have an account? click here to sign up") }}</a>
            </td>



        </div>
    </table>
</form>
@include('footer')
