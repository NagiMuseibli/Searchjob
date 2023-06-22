@extends('Emp-Cond.app')

@section('view.admin.post-job')
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Vakansiya əlavə et!</h3>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- <div class="text">Ready to jump back in?</div> --}}
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>Post Job</h4>
                            </div>

                            <div class="widget-content">

                                <div class="post-job-steps">
                                    <div class="step">
                                        <span class="icon flaticon-briefcase"></span>
                                        <h5>İşin tipi</h5>
                                    </div>

                                    <div class="step">
                                        <span class="icon flaticon-money"></span>
                                        <h5>Əmək haqqı</h5>
                                    </div>

                                    <div class="step">
                                        <span class="icon flaticon-checked"></span>
                                        <h5>Təsdiq</h5>
                                    </div>
                                </div>

                                <form action="{{ route('create_job') }}" method="post" class="default-form">
                                    @csrf
                                    <div class="row">
                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Vakansiyanın başlığı</label>
                                            <input type="text" name="job_title" placeholder="Başlıq">
                                            @if ($errors->any())
                                                <div style="color: red;">
                                                    @error('job_title')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>İşin təsviri</label>
                                            <textarea name="job_description" placeholder="İşin təsviri..."></textarea>
                                            @if ($errors->any())
                                                <div style="color: red;">
                                                    @error('job_description')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Tələblər</label>
                                            <textarea name="job_requirements" placeholder="Tələblər..."></textarea>
                                            @if ($errors->any())
                                                <div style="color: red;">
                                                    @error('job_requirements')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Kateqoriya</label>
                                            <select name="job_category" class="chosen-select">
                                                <option value="">Seç</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach


                                            </select>
                                            @if ($errors->any())
                                                <div style="color: red;">
                                                    @error('job_category')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>İş qrafiki</label>
                                            <select name="work_hour" class="chosen-select">
                                                <option value="">Seç</option>
                                                <option value="Tam ştat">Tam ştat</option>
                                                <option value="Yarım ştat">Yarım ştat</option>
                                                <option value="Freelance">Freelance</option>
                                                <option value="Distant">Distant</option>

                                            </select>
                                            @if ($errors->any())
                                                <div style="color: red;">
                                                    @error('work_hour')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Təklif olunan Əmək haqqı</label>
                                            <select name="salary" class="chosen-select">
                                                <option value="">Seç</option>
                                                <option value="Razılaşma yolu ilə">Razılaşma yolu ilə</option>
                                                <option value="300-500">300-500</option>
                                                <option value="500-1000">500-1000</option>
                                                <option value="1000-1500">1000-1500</option>
                                                <option value="1500-2000">1500-2000</option>
                                                <option value="2000-2500">2000-2500</option>
                                                <option value="2500-3000">2500-3000</option>
                                                <option value="3000+">3000+</option>
                                            </select>
                                            @if ($errors->any())
                                                <div style="color: red;">
                                                    @error('salary')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>İş Stajı</label>
                                            <select name="exp_year" class="chosen-select">
                                                <option value="">Seç</option>
                                                <option value="Tələb olunmur">Tələb olunmur</option>
                                                <option value="0-1">0-1 il</option>
                                                <option value="1-3">1-3 il</option>
                                                <option value="3-5">3-5 il</option>
                                                <option value="5+">5 ildən çox</option>
                                            </select>
                                            @if ($errors->any())
                                                <div style="color: red;">
                                                    @error('exp_year')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Şəhər</label>
                                            <select name="city" class="chosen-select">
                                                <option value="">Seç</option>
                                                <option value="Ağdaş">Ağdaş</option>
                                                <option value="Ağcabədi">Ağcabədi</option>
                                                <option value="Ağstafa">Ağstafa</option>
                                                <option value="Ağsu">Ağsu</option>
                                                <option value="Astara">Astara</option>
                                                <option value="Bakı">Bakı </option>
                                                <option value="Balakən">Balakən </option>
                                                <option value="Bərdə">Bərdə </option>
                                                <option value="Beyləqan">Beyləqan </option>
                                                <option value="Biləsuvar">Biləsuvar </option>
                                                <option value="Füzuli">Füzuli </option>
                                                <option value="Qəbələ">Qəbələ </option>
                                                <option value="Gəncə">Gəncə </option>
                                                <option value="Göranboy">Göranboy</option>
                                                <option value="Göyçay">Göyçay</option>
                                                <option value="Göygöl">Göygöl </option>
                                                <option value="Hacıqabul">Hacıqabul </option>
                                                <option value="İmişli">İmişli </option>
                                                <option value="İsmayıllı">İsmayıllı </option>
                                                <option value="Cəbrayıl">Cəbrayıl </option>
                                                <option value="Cəlilabad">Cəlilabad </option>
                                                <option value="Xaçmaz">Xaçmaz </option>
                                                <option value="Xankəndi">Xankəndi </option>
                                                <option value="Xanlar">Xanlar </option>
                                                <option value="Kürdəmir">Kürdəmir </option>
                                                <option value="Lənkəran">Lənkəran </option>
                                                <option value="Laçın">Laçın </option>
                                                <option value="Lerik">Lerik </option>
                                                <option value="Masallı">Masallı </option>
                                                <option value="Mingəçevir">Mingəçevir </option>
                                                <option value="Naftalan">Naftalan </option>
                                                <option value="Naxçıvan">Naxçıvan </option>
                                                <option value="Neftçala">Neftçala </option>
                                                <option value="Oğuz">Oğuz </option>
                                                <option value="Ordubad">Ordubad </option>
                                                <option value="Qəbələ">Qəbələ </option>
                                                <option value="Qax">Qax </option>
                                                <option value="Qazax">Qazax </option>
                                                <option value="Quba">Quba </option>
                                                <option value="Qubadlı">Qubadlı </option>
                                                <option value="Qusar">Qusar </option>
                                                <option value="Saatlı">Saatlı </option>
                                                <option value="Sabirabad">Sabirabad </option>
                                                <option value="Şabran">Şabran </option>
                                                <option value="Şəki">Şəki </option>
                                                <option value="Şamaxı">Şamaxı </option>
                                                <option value="Şəmkir">Şəmkir </option>
                                                <option value="Şirvan">Şirvan </option>
                                                <option value="Şuşa">Şuşa </option>
                                                <option value="Siyəzən">Siyəzən </option>
                                                <option value="Sumqayıt">Sumqayıt </option>
                                                <option value="Tartar">Tartar</option>
                                                <option value="Tovuz">Tovuz </option>
                                                <option value="Ucar">Ucar </option>
                                                <option value="Yardımlı">Yardımlı </option>
                                                <option value="Yevlax">Yevlax </option>
                                                <option value="Zəngilan">Zəngilan </option>
                                                <option value="Zaqatala">Zaqatala </option>
                                                <option value="Siyəzən">Siyəzən </option>
                                                <option value="Zərdab">Zərdab </option>
                                            </select>
                                            @if ($errors->any())
                                                <div style="color: red;">
                                                    @error('city')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12 text-right">
                                            <button class="theme-btn btn-style-one">Təsdiq et</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
