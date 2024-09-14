@component('.admin.layout.main.master')
    @section('content')
        <div class="card my-2">
            <div class="card-header">
                <h3>کاربران</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-hover">
                        <tr>
                            <th>#id</th>
                            <th>عکس</th>
                            <th>نام و نام خانوادگی</th>
                            <th>سمت</th>
                            <th>شماره تلفن</th>
                            <th>ایمیل</th>
                            <th>کدملی</th>
                            <th>تولد</th>
                            <th>ثبت نام</th>
                            <th>ویرایش</th>
                        </tr>
                        @foreach($user as $users)
                            <tr>
                                <td>{{$users->id}}</td>
                                <td>
                                    @if(!is_null($users->avatar))
                                        <img src="{{$users->avatar}}" class="img-circle elevation-2" alt="User Image"
                                             style="height: 50px">
                                    @else
                                        <img src="/adminPanel/img/user.png" class="img-circle elevation-2"
                                             alt="User Image" style="height: 50px">
                                    @endif
                                </td>
                                <td>{{$users->name}} {{$users->family}}</td>
                                <td>{{$users->position}}</td>
                                <td>{{$users->phone}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->nationalCode}}</td>
                                <td>{{jdate($users->birthday)}}</td>
                                <td>{{jdate($users->created_at)->ago()}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-warning mx-2" href="{{route('admin.user.edit', $users)}}">
                                        ویرایش</a>
                                    <form action="{{route('admin.user.destroy' , $users)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    @endsection
@endcomponent