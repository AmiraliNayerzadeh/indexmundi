@component('.admin.layout.master')
    @section('content')
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>ایجاد آیتم جدید</h6>

                    <ol class="breadcrumb  mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5" href="{{route('admin.categories.index')}}">آیتم ها</a></li>
                        <li class="breadcrumb-item text-sm active" aria-current="page">ایجاد</li>
                    </ol>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="{{route('admin.categories.store')}}" method="post" autocomplete="off">
                        @csrf
                        @method('POST')
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h5 class="text-primary fw-bold">
                                                <li class="fa fa-info mx-2"></li>
                                                جزئیات کلی
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="{{ route('admin.items.store') }}" method="POST">
                                                        @csrf



                                                        <div class="form-group my-3">
                                                            <label for="category">category</label>
                                                            <select name="category" id="category" class="form-control" required>
                                                                @foreach(\App\Models\Category::all() as $category)
                                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group my-3">
                                                            <label for="year">Year</label>
                                                            <input type="number" name="year" id="year" class="form-control" placeholder="Enter year" required>
                                                        </div>

                                                        <div class="form-group my-3">
                                                            <label for="month">Month</label>
                                                            <select name="month" id="month" class="form-control" required>
                                                                <option value="January">January</option>
                                                                <option value="February">February</option>
                                                                <option value="March">March</option>
                                                                <option value="April">April</option>
                                                                <option value="May">May</option>
                                                                <option value="June">June</option>
                                                                <option value="July">July</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                                <option value="October">October</option>
                                                                <option value="November">November</option>
                                                                <option value="December">December</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group my-3">
                                                            <label for="sale_price_average">Sale Price Average</label>
                                                            <input type="number" step="0.01" name="sale_price_average" id="sale_price_average" class="form-control" placeholder="Enter sale price average" required>
                                                        </div>

                                                        <div class="form-group my-3">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @section('script')

            <script>
                jalaliDatepicker.startWatch();
            </script>

            <script>
                $('#lfm').filemanager('image');
            </script>

        @endsection

    @endsection
@endcomponent
