@component('.admin.layout.main.master')
    @section('content')
        <form action="{{route('admin.user.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="card my-3">
                <div class="card-header"><h3>ایجاد کاربر جدید</h3></div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">نام:</label>
                                <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}"
                                       required>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="family">نام خانوادگی:</label>
                                <input class="form-control" type="text" name="family" id="family"
                                       value="{{old('family')}}" required>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="gender">جنسیت:</label>
                                <select class="form-control" name="gender" id="gender" required>
                                    <option value="female">خانم</option>
                                    <option value="male">آقا</option>
                                    <option value="unknown">نامشخص</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="phone">شماره تلفن:</label>
                                <input class="form-control" type="text" name="phone" id="phone" value="{{old('phone')}}"
                                       required>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="email">ایمیل:</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}">
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="position">سمت:</label>
                                <input class="form-control" type="text" name="position" id="position" value="{{old('position')}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="is_main">عضو هیئت مدیره:</label>
                                <select class="form-control" name="is_main" id="is_main">
                                    <option value="0">خیر</option>
                                    <option value="1">بله</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="nationalCode">کدملی:</label>
                                <input class="form-control" type="number" name="nationalCode" id="nationalCode"
                                       value="{{old('nationalCode')}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="birthday">تاریخ تولد:</label>
                                <input class="form-control" type="date" name="birthday" id="birthday"
                                       value="{{old('birthday')}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="address">آدرس:</label>
                                <textarea class="form-control" name="address" id="address" cols="30"
                                          rows="1">{{old('address')}}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="postalCode">کد پستی:</label>
                                <input class="form-control" type="number" name="postalCode" id="postalCode"
                                       value="{{old('postalCode')}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="postalCode">تصویر:</label>
                                <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> انتخاب
                                 </a>
                               </span>
                                    <input id="thumbnail" class="form-control" type="text" name="avatar" value="{{old('avatar')}}">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="postalCode">دسترسی ادمین:</label>
                                <select class="form-control" name="is_admin" id="is_admin">
                                    <option value="0">خیر</option>
                                    <option value="1">بله</option>
                                </select>
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="instagram">اینستاگرام:</label>
                                <input class="form-control" type="text" name="instagram" id="instagram" value="{{old('instagram')}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="linkedin">لینکدین:</label>
                                <input class="form-control" type="text" name="linkedin" id="linkedin" value="{{old('linkedin')}}">
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="web">وب سایت:</label>
                                <input class="form-control" type="text" name="web" id="web" value="{{old('web')}}" >
                            </div>
                        </div>




                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-success" type="submit">ثبت کاربر جدید</button>
                </div>
            </div>
        </form>

        @section('script')
            <script>
                $('#lfm').filemanager('image');

            </script>
        @endsection

    @endsection
@endcomponent