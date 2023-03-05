@extends("user.layout")
@section("main_content")
    <section class="loan-deatils-area bg_disable pt-130 pb-120"style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="stepper-widget mt-sm-5 px-3 px-sm-0">
                        <ul>
                            <li class=" complete  mt-0"><a href="{{url("/loan")}}">
                                    <div class="number"><i class="icon_check"></i> <span>1</span></div> Chi tiết khoản vay
                                </a>
                            </li>
                            <li class="active"><a href="{{url("/personal")}}">
                                    <div class="number"><i class="icon_check"></i> <span>2</span></div>
                                    Thông tin cá nhân
                                </a>
                            </li>
                            <li><a href="{{url("/documantUp")}}">
                                    <div class="number"><i class="icon_check"></i> <span>3</span></div>
                                    Tải lên tài liệu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="loan-details-widget bg_white">
                        <form action="{{url("/documantUp")}}">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label class="label" for="fName">Họ*</label>
                                    <input id='fName' class="form-control" type="text" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="label" for="lName">Tên*</label>
                                    <input id='lName' class="form-control" type="text" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="label" for="dob-d">Ngày sinh*</label>
                                    <div class="dob d-flex">
                                        <select id="dob-d">
                                            <option value="">Ngày</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>

                                        <select id="dob-m">
                                            <option value="">Tháng</option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>

                                        <select class="me-0" id="dob-y">
                                            <option value="">năm</option>

                                            <option value="1970">1970</option>
                                            <option value="1971">1971</option>
                                            <option value="1972">1972</option>
                                            <option value="1973">1973</option>
                                            <option value="1974">1974</option>
                                            <option value="1975">1975</option>
                                            <option value="1976">1976</option>
                                            <option value="1977">1977</option>
                                            <option value="1978">1978</option>
                                            <option value="1979">1979</option>
                                            <option value="1980">1980</option>
                                            <option value="1981">1981</option>
                                            <option value="1982">1982</option>
                                            <option value="1983">1983</option>
                                            <option value="1984">1984</option>
                                            <option value="1985">1985</option>
                                            <option value="1986">1986</option>
                                            <option value="1987">1987</option>
                                            <option value="1988">1988</option>
                                            <option value="1989">1989</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="label" for="emailName">Email</label>
                                    <input class="form-control" type="email" id='emailName'
                                           placeholder="loan@gmail.com" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="label" for="inputPhoneNumber">Số điện thoại*</label>
                                    <input id="inputPhoneNumber" class="form-control w-100" type="number">
                                </div>

                                <div class="col-md-12">
                                    <label class="label" for="pAddress">Địa chỉ*</label>
                                    <input id="pAddress" class="form-control" type="text">
                                </div>


                            </div>
                            <div class="row mt-60">
                                <div class="col-md-12">
                                    <div class="nav-btn d-flex flex-wrap justify-content-between">
                                        <a href="{{url("/loan")}}"
                                           class=" prev-btn theme-btn-primary_alt theme-btn"><i
                                                class="arrow_left"></i>Quay lại
                                        </a>
                                        <button type="submit"
                                                class=" next-btn theme-btn-primary_alt theme-btn ">Tiếp theo<i
                                                class="arrow_right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
