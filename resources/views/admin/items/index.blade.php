@component('.admin.layout.master')
    @section('content')
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>لیست آیتم ها</h6>
                    <a class="btn btn-primary btn-sm" href="{{route('admin.items.create')}}">
                        <li class="fa fa-plus"></li>
                        ایجاد آیتم  جدید
                    </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>دسته بندی</th>
                                <th>سال</th>
                                <th>ماه</th>
                                <th>قیمت</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <th>{{$item->id}}</th>

                                    <td>{{$item->category->title}}</td>

                                    <td>{{$item->year}}</td>

                                    <td>{{$item->month}}</td>

                                    <td>{{$item->sale_price_average}}</td>

                                    <td>
                                        <a class="btn btn-warning" href="{{route('admin.items.edit' , $item)}}">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endsection
@endcomponent