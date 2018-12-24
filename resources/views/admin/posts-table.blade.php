{{--@php var_dump($users); @endphp--}}
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <tr>
            {{--<td class="media-middle text-center">--}}
                {{--<input type="checkbox">--}}
            {{--</td>--}}
            {{--<th>Title:</th>--}}
            {{--<th>Author:</th>--}}
            {{--<th>Date:</th>--}}
            {{--<th>Categories:</th>--}}
            {{--<th>Status:</th>--}}
            <th>Имя</th>
            <th>Email</th>
            <th>Активация</th>
            <th>Дата регистрации</th>
        </tr>
        @foreach($users as $user)
        <tr class="item-editable">

            {{--<td class="media-middle text-center">--}}
            {{--<input type="checkbox">--}}
            {{--</td>--}}
            <td class="media-middle">
                <h5>{{ $user['user_name'] }}</h5>
            </td>
            <td class="media-middle">
                <h5>{{ $user['email'] }}</h5>
            </td>
            <td class="media-middle">
                <h5>{{ $user['is_active'] }}</h5>
            </td>
            <td class="media-middle">
                <h5>{{ $user['created_at'] }}</h5>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<!-- .table-responsive -->