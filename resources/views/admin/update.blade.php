@include('header')
@include('navbar')
<div class="container">
    <form action="/updateRole/{{ $account->id }}" method="POST">
        @csrf
        <h3>{{ $account->first_name . ' ' . $account->last_name }}</h3>
        <label for="Role">Role</label>
        <select name="role" id="">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}" @if ($account->roles_id == $role->id) selected @endif>
                    {{ ucwords($role->role_name) }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-warning">Save</button>
    </form>
</div>
@include('footer')
