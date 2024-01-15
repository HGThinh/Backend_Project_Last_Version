@extends('public.layout')
@section('slogan')
    <div class="container ">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="detail-box">
                    <h1>
                        Vietnamese cuisine
                    </h1>
                    <p>
                        one of the best cuisine in the world!
                    </p>
                </div>
                <div class="find_container ">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form>
                                    <div class="form-row ">
                                        <div class="form-group col-lg-5">
                                            <input type="text" class="form-control" id="inputFoodName"
                                                placeholder="Food Name">
                                        </div>
                                        <div class="form-group col-lg-5">
                                            <select name="categories[]" class="form-control" multiple required>
                                                <option value="" disabled selected>Categories</option>
                                                <option value="category1">Breakfast</option>
                                                <option value="category2">Lunch</option>
                                                <option value="category3">Dinner</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <div class="btn-box">
                                                <button type="submit" class="btn ">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider_container">
        <div class="item">
            <div class="img-box">
                <img src="images/slider-img1.png" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="images/slider-img2.png" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="images/slider-img3.png" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="images/slider-img4.png" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="images/slider-img1.png" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="images/slider-img2.png" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="images/slider-img3.png" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="images/slider-img4.png" alt="" />
            </div>
        </div>
    </div>
@endsection
