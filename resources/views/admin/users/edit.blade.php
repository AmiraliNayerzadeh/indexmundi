@component('.admin.layout.main.master')
    @section('content')
        <form action="{{route('admin.user.update', $user)}}" method="post">
            @csrf
            @method('PUT')
            <div class="card my-3">
                <div class="card-header"><h3>ویرایش اطلاعات کاربر
                        {{$user->name}} {{$user->family}}
                    </h3>
                    <div>
                        <img class="img-fluid rounded-circle" src="{{$user->avatar}}" alt="{{$user->name}}"
                             style="max-height: 7rem">
                    </div>

                </div>
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">نام:</label>
                                <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}"
                                       required>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="family">نام خانوادگی:</label>
                                <input class="form-control" type="text" name="family" id="family"
                                       value="{{$user->family}}" required>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="gender">جنسیت:</label>
                                <select class="form-control" name="gender" id="gender" required>
                                    <option {{$user->gender == 'female' ? 'selected' : ''}} value="female">خانم</option>
                                    <option {{$user->gender == 'male' ? 'selected' : ''}} value="male">آقا</option>
                                    <option {{$user->gender == 'unknown' ? 'selected' : ''}} value="unknown">نامشخص
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="phone">شماره تلفن:</label>
                                <input class="form-control" type="text" name="phone" id="phone" value="{{$user->phone}}"
                                       required>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="email">ایمیل:</label>
                                <input class="form-control" type="email" name="email" id="email"
                                       value="{{$user->email}}">
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="position">سمت:</label>
                                <input class="form-control" type="text" name="position" id="position"
                                       value="{{$user->position}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="is_main">عضو هیئت مدیره:</label>
                                <select class="form-control" name="is_main" id="is_main">
                                    <option {{$user->is_main == 0 ?'selected' : ''}} value="0">خیر</option>
                                    <option {{$user->is_main == 1 ?'selected' : ''}} value="1">بله</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="nationalCode">کدملی:</label>
                                <input class="form-control" type="number" name="nationalCode" id="nationalCode"
                                       value="{{$user->nationalCode}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="birthday">تاریخ تولد:</label>
                                <input class="form-control" type="date" name="birthday" id="birthday"
                                       value="{{$user->birthday}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="address">آدرس:</label>
                                <textarea class="form-control" name="address" id="address" cols="30"
                                          rows="1">{{$user->address}}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="postalCode">کد پستی:</label>
                                <input class="form-control" type="number" name="postalCode" id="postalCode"
                                       value="{{$user->postalCode}}">
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
                                    <input id="thumbnail" class="form-control" type="text" name="avatar"
                                           value="{{$user->avatar}}">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="postalCode">دسترسی ادمین:</label>
                                <select class="form-control" name="is_admin" id="is_admin">
                                    <option {{$user->is_admin == '0' ? 'selected' : ''}} value="0">خیر</option>
                                    <option {{$user->is_admin == '1' ? 'selected' : ''}} value="1">بله</option>
                                </select>
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="instagram">اینستاگرام:</label>
                                <input class="form-control" type="text" name="instagram" id="instagram"
                                       value="{{$user->instagram}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="linkedin">لینکدین:</label>
                                <input class="form-control" type="text" name="linkedin" id="linkedin"
                                       value="{{$user->linkedin}}">
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="web">وب سایت:</label>
                                <input class="form-control" type="text" name="web" id="web" value="{{$user->web}}">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-success" type="submit">بروزرسانی اطلاعات کاربر</button>
                </div>
            </div>
        </form>

        <div class="row">
            @foreach($attach as $attachments)
                <div class="col-lg-3">
                    <div class="card card-primary">
                        <div class="card-header">{{$attachments->type}}</div>
                        <div class="card-body">
                            <img class="img-fluid" src="{{$attachments->path}}" alt="{{$attachments->type}}">
                        </div>
                        <div class="card-footer">
                            {{$attachments->description}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <form action="{{route('admin.attachment.store')}}" method="post">
            @csrf
            @method('POST')
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="card">
                <div class="card-header bg-primary"><h4>ایجاد ضمیمه جدید</h4></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="title">عنوان ضمیمه:</label>
                                <select class="form-control" name="type" id="type">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option value="شناسنامه">شناسنامه</option>
                                    <option value="کارت ملی">کارت ملی</option>
                                    <option value="دیگر">دیگر</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="attach">تصویر:</label>
                                <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="attachment" data-input="attachments" data-preview="attachmentHolder"
                                    class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> انتخاب
                                 </a>
                               </span>
                                    <input id="attachments" class="form-control" type="text" name="path">
                                </div>
                                <div id="attachmentHolder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                <textarea class="form-control" name="description" id="description" cols="30"
                                          rows="1">{{old('description')}}</textarea>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success" type="submit">ثبت ضمیمه</button>
                </div>
            </div>
        </form>


        @section('script')
            <script>
                $('#lfm').filemanager('user');
                $('#attachment').filemanager('user');
            </script>
        @endsection

    @endsection
@endcomponent