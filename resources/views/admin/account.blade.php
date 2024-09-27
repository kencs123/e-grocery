@include('header')
@include('navbar')
<div class="container">
    <table align="center" width="500px">
        <tr>
            <td align="center">{{ __('Account') }}</td>
            <td align="center">{{ __('Action') }}</td>
        </tr>
        @foreach ($accounts as $account)
            <tr>
                <td align="center" style="border: 1px solid black;">{{ $account->first_name . ' ' . $account->last_name }}
                    -
                    {{ ucwords($account->role->role_name) }}</td>
                <td align="center" style="border: 1px solid black;">
                    <a href="/updateRole/{{ $account->id }}">{{ __('Update') }}</a>
                    <a href="/delete/{{ $account->id }}">{{ __('Delete') }}</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@include('footer')
