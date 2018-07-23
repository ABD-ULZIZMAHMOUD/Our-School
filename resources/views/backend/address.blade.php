@extends('backend.layout.master')

@section('content')

<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">اضافه عنوان</h5>
                            </div>
                            <div class="card-body">
                              <form method="post" action="http://localhost/OurSchool/public/addAddress">
                                  {{csrf_field()}}
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>رقم الشقه</label>
                                              <input type="number" name="flatnum" class="form-control" placeholder="" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>رقم المنزل</label>
                                              <input type="number" name="bulidingnum"class="form-control" placeholder="" >
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>اسم الشارع</label>
                                                <input type="text" name="street" class="form-control" placeholder="" >
                                            </div>
                                        </div>
                                    </div>
                                  <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>اسم المنطقه</label>
                                                <input type="text"name="region" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                  <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>اسم المحافظه</label>
                                                <input type="text"name="governorate" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                  <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>اسم البلد</label>
                                                  <input type="text" name="country" class="form-control" placeholder="" >
                                              </div>
                                          </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                      <input type="submit" value="حفظ العنوان ">
                                                </div>
                                            </div>
                                      </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection
