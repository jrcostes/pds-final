 {{-- @extends('welcome') --}}

@extends('layouts.app')
@section('temp')

        <div class="container">
            {{-- <div id="app">
                <nav class="navbar navbar-inverse navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            {{-- {{ config('app.name', 'Laravel') }}
                            Personal Data Sheet C3
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>

                <main class="py-4">
                    @yield('content')
                </main>
            </div> --}}
            <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col-sm-10">User No.</th>
                            <th scope="col-lg-8"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $sheet)
                            <tr>
                                <td>{{ $sheet->id }}</td>
                                <td>
                                    <form method="get" action="/excelprint" autocomplete="off" class="form-horizontal" onsubmit="return submitForm(this);">
                                        <input type="hidden" id="orgnameAddress1" name="orgnameAddress1" value="{{$sheet->orgnameAddress1}}">
                                        <input type="hidden" id="orgdateFrom1" name="orgdateFrom1" value="{{$sheet->orgdateFrom1}}">
                                        <input type="hidden" id="orgdateTo1" name="orgdateTo1" value="{{$sheet->orgdateTo1}}">
                                        <input type="hidden" id="orgnumHours1" name="orgnumHours1" value="{{$sheet->orgnumHours1}}">
                                        <input type="hidden" id="orgPosition1" name="orgPosition1" value="{{$sheet->orgPosition1}}">
                                        <input type="hidden" id="orgnameAddress2" name="orgnameAddress2" value="{{$sheet->orgnameAddress2}}">
                                        <input type="hidden" id="orgdateFrom2" name="orgdateFrom2" value="{{$sheet->orgdateFrom2}}">
                                        <input type="hidden" id="orgdateTo2" name="orgdateTo2" value="{{$sheet->orgdateTo2}}">
                                        <input type="hidden" id="orgnumHours2" name="orgnumHours2" value="{{$sheet->orgnumHours2}}">
                                        <input type="hidden" id="orgPosition2" name="orgPosition2" value="{{$sheet->orgPosition2}}">
                                        <input type="hidden" id="orgnameAddress3" name="orgnameAddress3" value="{{$sheet->orgnameAddress3}}">
                                        <input type="hidden" id="orgdateFrom3" name="orgdateFrom3" value="{{$sheet->orgdateFrom3}}">
                                        <input type="hidden" id="orgdateTo3" name="orgdateTo3" value="{{$sheet->orgdateTo3}}">
                                        <input type="hidden" id="orgnumHours3" name="orgnumHours3" value="{{$sheet->orgnumHours3}}">
                                        <input type="hidden" id="orgPosition3" name="orgPosition3" value="{{$sheet->orgPosition3}}">
                                        <input type="hidden" id="orgnameAddress4" name="orgnameAddress4" value="{{$sheet->orgnameAddress4}}">
                                        <input type="hidden" id="orgdateFrom4" name="orgdateFrom4" value="{{$sheet->orgdateFrom4}}">
                                        <input type="hidden" id="orgdateTo4" name="orgdateTo4" value="{{$sheet->orgdateTo4}}">
                                        <input type="hidden" id="orgnumHours4" name="orgnumHours4" value="{{$sheet->orgnumHours4}}">
                                        <input type="hidden" id="orgPosition4" name="orgPosition4" value="{{$sheet->orgPosition4}}">
                                        <input type="hidden" id="orgnameAddress5" name="orgnameAddress5" value="{{$sheet->orgnameAddress5}}">
                                        <input type="hidden" id="orgdateFrom5" name="orgdateFrom5" value="{{$sheet->orgdateFrom5}}">
                                        <input type="hidden" id="orgdateTo5" name="orgdateTo5" value="{{$sheet->orgdateTo5}}">
                                        <input type="hidden" id="orgnumHours5" name="orgnumHours5" value="{{$sheet->orgnumHours5}}">
                                        <input type="hidden" id="orgPosition5" name="orgPosition5" value="{{$sheet->orgPosition5}}">
                                        <input type="hidden" id="orgnameAddress6" name="orgnameAddress6" value="{{$sheet->orgnameAddress6}}">
                                        <input type="hidden" id="orgdateFrom6" name="orgdateFrom6" value="{{$sheet->orgdateFrom6}}">
                                        <input type="hidden" id="orgdateTo6" name="orgdateTo6" value="{{$sheet->orgdateTo6}}">
                                        <input type="hidden" id="orgnumHours6" name="orgnumHours6" value="{{$sheet->orgnumHours6}}">
                                        <input type="hidden" id="orgPosition6" name="orgPosition6" value="{{$sheet->orgPosition6}}">
                                        <input type="hidden" id="orgnameAddress7" name="orgnameAddress7" value="{{$sheet->orgnameAddress7}}">
                                        <input type="hidden" id="orgdateFrom7" name="orgdateFrom7" value="{{$sheet->orgdateFrom7}}">
                                        <input type="hidden" id="orgdateTo7" name="orgdateTo7" value="{{$sheet->orgdateTo7}}">
                                        <input type="hidden" id="orgnumHours7" name="orgnumHours7" value="{{$sheet->orgnumHours7}}">
                                        <input type="hidden" id="orgPosition7" name="orgPosition7" value="{{$sheet->orgPosition7}}">

                                        <input type="hidden" id="orgnameAddress8" name="orgnameAddress8" value="{{$sheet->orgnameAddress8}}">
                                        <input type="hidden" id="orgdateFrom8" name="orgdateFrom8" value="{{$sheet->orgdateFrom8}}">
                                        <input type="hidden" id="orgdateTo8" name="orgdateTo8" value="{{$sheet->orgdateTo8}}">
                                        <input type="hidden" id="orgnumHours8" name="orgnumHours8" value="{{$sheet->orgnumHours8}}">
                                        <input type="hidden" id="orgType8" name="orgType8" value="{{$sheet->orgType8}}">
                                        <input type="hidden" id="orgnameSponsor8" name="orgnameSponsor8" value="{{$sheet->orgnameSponsor8}}">
                                        <input type="hidden" id="orgnameAddress9" name="orgnameAddress9" value="{{$sheet->orgnameAddress9}}">
                                        <input type="hidden" id="orgdateFrom9" name="orgdateFrom9" value="{{$sheet->orgdateFrom9}}">
                                        <input type="hidden" id="orgdateTo9" name="orgdateTo9" value="{{$sheet->orgdateTo9}}">
                                        <input type="hidden" id="orgnumHours9" name="orgnumHours9" value="{{$sheet->orgnumHours9}}">
                                        <input type="hidden" id="orgType9" name="orgType9" value="{{$sheet->orgType9}}">
                                        <input type="hidden" id="orgnameSponsor9" name="orgnameSponsor9" value="{{$sheet->orgnameSponsor9}}">
                                        <input type="hidden" id="orgnameAddress10" name="orgnameAddress10" value="{{$sheet->orgnameAddress10}}">
                                        <input type="hidden" id="orgdateFrom10" name="orgdateFrom10" value="{{$sheet->orgdateFrom10}}">
                                        <input type="hidden" id="orgdateTo10" name="orgdateTo10" value="{{$sheet->orgdateTo10}}">
                                        <input type="hidden" id="orgnumHours10" name="orgnumHours10" value="{{$sheet->orgnumHours10}}">
                                        <input type="hidden" id="orgType10" name="orgType10" value="{{$sheet->orgType10}}">
                                        <input type="hidden" id="orgnameSponsor10" name="orgnameSponsor10" value="{{$sheet->orgnameSponsor10}}">
                                        <input type="hidden" id="orgnameAddress11" name="orgnameAddress11" value="{{$sheet->orgnameAddress11}}">
                                        <input type="hidden" id="orgdateFrom11" name="orgdateFrom11" value="{{$sheet->orgdateFrom11}}">
                                        <input type="hidden" id="orgdateTo11" name="orgdateTo11" value="{{$sheet->orgdateTo11}}">
                                        <input type="hidden" id="orgnumHours11" name="orgnumHours11" value="{{$sheet->orgnumHours11}}">
                                        <input type="hidden" id="orgType11" name="orgType11" value="{{$sheet->orgType11}}">
                                        <input type="hidden" id="orgnameSponsor11" name="orgnameSponsor11" value="{{$sheet->orgnameSponsor11}}">
                                        <input type="hidden" id="orgnameAddress12" name="orgnameAddress12" value="{{$sheet->orgnameAddress12}}">
                                        <input type="hidden" id="orgdateFrom12" name="orgdateFrom12" value="{{$sheet->orgdateFrom12}}">
                                        <input type="hidden" id="orgdateTo12" name="orgdateTo12" value="{{$sheet->orgdateTo12}}">
                                        <input type="hidden" id="orgnumHours12" name="orgnumHours12" value="{{$sheet->orgnumHours12}}">
                                        <input type="hidden" id="orgType12" name="orgType12" value="{{$sheet->orgType12}}">
                                        <input type="hidden" id="orgnameSponsor12" name="orgnameSponsor12" value="{{$sheet->orgnameSponsor12}}">
                                        <input type="hidden" id="orgnameAddress13" name="orgnameAddress13" value="{{$sheet->orgnameAddress13}}">
                                        <input type="hidden" id="orgdateFrom13" name="orgdateFrom13" value="{{$sheet->orgdateFrom13}}">
                                        <input type="hidden" id="orgdateTo13" name="orgdateTo13" value="{{$sheet->orgdateTo13}}">
                                        <input type="hidden" id="orgnumHours13" name="orgnumHours13" value="{{$sheet->orgnumHours13}}">
                                        <input type="hidden" id="orgType13" name="orgType13" value="{{$sheet->orgType13}}">
                                        <input type="hidden" id="orgnameSponsor13" name="orgnameSponsor13" value="{{$sheet->orgnameSponsor13}}">
                                        <input type="hidden" id="orgnameAddress14" name="orgnameAddress14" value="{{$sheet->orgnameAddress14}}">
                                        <input type="hidden" id="orgdateFrom14" name="orgdateFrom14" value="{{$sheet->orgdateFrom14}}">
                                        <input type="hidden" id="orgdateTo14" name="orgdateTo14" value="{{$sheet->orgdateTo14}}">
                                        <input type="hidden" id="orgnumHours14" name="orgnumHours14" value="{{$sheet->orgnumHours14}}">
                                        <input type="hidden" id="orgType14" name="orgType14" value="{{$sheet->orgType14}}">
                                        <input type="hidden" id="orgnameSponsor14" name="orgnameSponsor14" value="{{$sheet->orgnameSponsor14}}">

                                        <input type="hidden" id="orgnameSkill1" name="orgnameSkill1" value="{{$sheet->orgnameSkill1}}">
                                        <input type="hidden" id="orgnameDistinct1" name="orgnameDistinct1" value="{{$sheet->orgnameDistinct1}}">
                                        <input type="hidden" id="orgnameMembership1" name="orgnameMembership1" value="{{$sheet->orgnameMembership1}}">
                                        <input type="hidden" id="orgnameSkill2" name="orgnameSkill2" value="{{$sheet->orgnameSkill2}}">
                                        <input type="hidden" id="orgnameDistinct2" name="orgnameDistinct2" value="{{$sheet->orgnameDistinct2}}">
                                        <input type="hidden" id="orgnameMembership2" name="orgnameMembership2" value="{{$sheet->orgnameMembership2}}">
                                        <input type="hidden" id="orgnameSkill3" name="orgnameSkill3" value="{{$sheet->orgnameSkill3}}">
                                        <input type="hidden" id="orgnameDistinct3" name="orgnameDistinct3" value="{{$sheet->orgnameDistinct3}}">
                                        <input type="hidden" id="orgnameMembership3" name="orgnameMembership3" value="{{$sheet->orgnameMembership3}}">
                                        <input type="hidden" id="orgnameSkill4" name="orgnameSkill4" value="{{$sheet->orgnameSkill4}}">
                                        <input type="hidden" id="orgnameDistinct4" name="orgnameDistinct4" value="{{$sheet->orgnameDistinct4}}">
                                        <input type="hidden" id="orgnameMembership4" name="orgnameMembership4" value="{{$sheet->orgnameMembership4}}">
                                        <input type="hidden" id="orgnameSkill5" name="orgnameSkill5" value="{{$sheet->orgnameSkill5}}">
                                        <input type="hidden" id="orgnameDistinct5" name="orgnameDistinct5" value="{{$sheet->orgnameDistinct5}}">
                                        <input type="hidden" id="orgnameMembership5" name="orgnameMembership5" value="{{$sheet->orgnameMembership5}}">
                                        <input type="hidden" id="orgnameSkill6" name="orgnameSkill6" value="{{$sheet->orgnameSkill6}}">
                                        <input type="hidden" id="orgnameDistinct6" name="orgnameDistinct6" value="{{$sheet->orgnameDistinct6}}">
                                        <input type="hidden" id="orgnameMembership6" name="orgnameMembership6" value="{{$sheet->orgnameMembership6}}">


                                        <button type="submit" class="btn btn-dark">EXCEL</button>
                                    </form>
                                    <form method="get" action="/pdfprint" autocomplete="off" class="form-horizontal" onsubmit="return submitForm1(this);">
                                        <input type="hidden" id="orgnameAddress1" name="orgnameAddress1" value="{{$sheet->orgnameAddress1}}">
                                        <input type="hidden" id="orgdateFrom1" name="orgdateFrom1" value="{{$sheet->orgdateFrom1}}">
                                        <input type="hidden" id="orgdateTo1" name="orgdateTo1" value="{{$sheet->orgdateTo1}}">
                                        <input type="hidden" id="orgnumHours1" name="orgnumHours1" value="{{$sheet->orgnumHours1}}">
                                        <input type="hidden" id="orgPosition1" name="orgPosition1" value="{{$sheet->orgPosition1}}">
                                        <input type="hidden" id="orgnameAddress2" name="orgnameAddress2" value="{{$sheet->orgnameAddress2}}">
                                        <input type="hidden" id="orgdateFrom2" name="orgdateFrom2" value="{{$sheet->orgdateFrom2}}">
                                        <input type="hidden" id="orgdateTo2" name="orgdateTo2" value="{{$sheet->orgdateTo2}}">
                                        <input type="hidden" id="orgnumHours2" name="orgnumHours2" value="{{$sheet->orgnumHours2}}">
                                        <input type="hidden" id="orgPosition2" name="orgPosition2" value="{{$sheet->orgPosition2}}">
                                        <input type="hidden" id="orgnameAddress3" name="orgnameAddress3" value="{{$sheet->orgnameAddress3}}">
                                        <input type="hidden" id="orgdateFrom3" name="orgdateFrom3" value="{{$sheet->orgdateFrom3}}">
                                        <input type="hidden" id="orgdateTo3" name="orgdateTo3" value="{{$sheet->orgdateTo3}}">
                                        <input type="hidden" id="orgnumHours3" name="orgnumHours3" value="{{$sheet->orgnumHours3}}">
                                        <input type="hidden" id="orgPosition3" name="orgPosition3" value="{{$sheet->orgPosition3}}">
                                        <input type="hidden" id="orgnameAddress4" name="orgnameAddress4" value="{{$sheet->orgnameAddress4}}">
                                        <input type="hidden" id="orgdateFrom4" name="orgdateFrom4" value="{{$sheet->orgdateFrom4}}">
                                        <input type="hidden" id="orgdateTo4" name="orgdateTo4" value="{{$sheet->orgdateTo4}}">
                                        <input type="hidden" id="orgnumHours4" name="orgnumHours4" value="{{$sheet->orgnumHours4}}">
                                        <input type="hidden" id="orgPosition4" name="orgPosition4" value="{{$sheet->orgPosition4}}">
                                        <input type="hidden" id="orgnameAddress5" name="orgnameAddress5" value="{{$sheet->orgnameAddress5}}">
                                        <input type="hidden" id="orgdateFrom5" name="orgdateFrom5" value="{{$sheet->orgdateFrom5}}">
                                        <input type="hidden" id="orgdateTo5" name="orgdateTo5" value="{{$sheet->orgdateTo5}}">
                                        <input type="hidden" id="orgnumHours5" name="orgnumHours5" value="{{$sheet->orgnumHours5}}">
                                        <input type="hidden" id="orgPosition5" name="orgPosition5" value="{{$sheet->orgPosition5}}">
                                        <input type="hidden" id="orgnameAddress6" name="orgnameAddress6" value="{{$sheet->orgnameAddress6}}">
                                        <input type="hidden" id="orgdateFrom6" name="orgdateFrom6" value="{{$sheet->orgdateFrom6}}">
                                        <input type="hidden" id="orgdateTo6" name="orgdateTo6" value="{{$sheet->orgdateTo6}}">
                                        <input type="hidden" id="orgnumHours6" name="orgnumHours6" value="{{$sheet->orgnumHours6}}">
                                        <input type="hidden" id="orgPosition6" name="orgPosition6" value="{{$sheet->orgPosition6}}">
                                        <input type="hidden" id="orgnameAddress7" name="orgnameAddress7" value="{{$sheet->orgnameAddress7}}">
                                        <input type="hidden" id="orgdateFrom7" name="orgdateFrom7" value="{{$sheet->orgdateFrom7}}">
                                        <input type="hidden" id="orgdateTo7" name="orgdateTo7" value="{{$sheet->orgdateTo7}}">
                                        <input type="hidden" id="orgnumHours7" name="orgnumHours7" value="{{$sheet->orgnumHours7}}">
                                        <input type="hidden" id="orgPosition7" name="orgPosition7" value="{{$sheet->orgPosition7}}">

                                        <input type="hidden" id="orgnameAddress8" name="orgnameAddress8" value="{{$sheet->orgnameAddress8}}">
                                        <input type="hidden" id="orgdateFrom8" name="orgdateFrom8" value="{{$sheet->orgdateFrom8}}">
                                        <input type="hidden" id="orgdateTo8" name="orgdateTo8" value="{{$sheet->orgdateTo8}}">
                                        <input type="hidden" id="orgnumHours8" name="orgnumHours8" value="{{$sheet->orgnumHours8}}">
                                        <input type="hidden" id="orgType8" name="orgType8" value="{{$sheet->orgType8}}">
                                        <input type="hidden" id="orgnameSponsor8" name="orgnameSponsor8" value="{{$sheet->orgnameSponsor8}}">
                                        <input type="hidden" id="orgnameAddress9" name="orgnameAddress9" value="{{$sheet->orgnameAddress9}}">
                                        <input type="hidden" id="orgdateFrom9" name="orgdateFrom9" value="{{$sheet->orgdateFrom9}}">
                                        <input type="hidden" id="orgdateTo9" name="orgdateTo9" value="{{$sheet->orgdateTo9}}">
                                        <input type="hidden" id="orgnumHours9" name="orgnumHours9" value="{{$sheet->orgnumHours9}}">
                                        <input type="hidden" id="orgType9" name="orgType9" value="{{$sheet->orgType9}}">
                                        <input type="hidden" id="orgnameSponsor9" name="orgnameSponsor9" value="{{$sheet->orgnameSponsor9}}">
                                        <input type="hidden" id="orgnameAddress10" name="orgnameAddress10" value="{{$sheet->orgnameAddress10}}">
                                        <input type="hidden" id="orgdateFrom10" name="orgdateFrom10" value="{{$sheet->orgdateFrom10}}">
                                        <input type="hidden" id="orgdateTo10" name="orgdateTo10" value="{{$sheet->orgdateTo10}}">
                                        <input type="hidden" id="orgnumHours10" name="orgnumHours10" value="{{$sheet->orgnumHours10}}">
                                        <input type="hidden" id="orgType10" name="orgType10" value="{{$sheet->orgType10}}">
                                        <input type="hidden" id="orgnameSponsor10" name="orgnameSponsor10" value="{{$sheet->orgnameSponsor10}}">
                                        <input type="hidden" id="orgnameAddress11" name="orgnameAddress11" value="{{$sheet->orgnameAddress11}}">
                                        <input type="hidden" id="orgdateFrom11" name="orgdateFrom11" value="{{$sheet->orgdateFrom11}}">
                                        <input type="hidden" id="orgdateTo11" name="orgdateTo11" value="{{$sheet->orgdateTo11}}">
                                        <input type="hidden" id="orgnumHours11" name="orgnumHours11" value="{{$sheet->orgnumHours11}}">
                                        <input type="hidden" id="orgType11" name="orgType11" value="{{$sheet->orgType11}}">
                                        <input type="hidden" id="orgnameSponsor11" name="orgnameSponsor11" value="{{$sheet->orgnameSponsor11}}">
                                        <input type="hidden" id="orgnameAddress12" name="orgnameAddress12" value="{{$sheet->orgnameAddress12}}">
                                        <input type="hidden" id="orgdateFrom12" name="orgdateFrom12" value="{{$sheet->orgdateFrom12}}">
                                        <input type="hidden" id="orgdateTo12" name="orgdateTo12" value="{{$sheet->orgdateTo12}}">
                                        <input type="hidden" id="orgnumHours12" name="orgnumHours12" value="{{$sheet->orgnumHours12}}">
                                        <input type="hidden" id="orgType12" name="orgType12" value="{{$sheet->orgType12}}">
                                        <input type="hidden" id="orgnameSponsor12" name="orgnameSponsor12" value="{{$sheet->orgnameSponsor12}}">
                                        <input type="hidden" id="orgnameAddress13" name="orgnameAddress13" value="{{$sheet->orgnameAddress13}}">
                                        <input type="hidden" id="orgdateFrom13" name="orgdateFrom13" value="{{$sheet->orgdateFrom13}}">
                                        <input type="hidden" id="orgdateTo13" name="orgdateTo13" value="{{$sheet->orgdateTo13}}">
                                        <input type="hidden" id="orgnumHours13" name="orgnumHours13" value="{{$sheet->orgnumHours13}}">
                                        <input type="hidden" id="orgType13" name="orgType13" value="{{$sheet->orgType13}}">
                                        <input type="hidden" id="orgnameSponsor13" name="orgnameSponsor13" value="{{$sheet->orgnameSponsor13}}">
                                        <input type="hidden" id="orgnameAddress14" name="orgnameAddress14" value="{{$sheet->orgnameAddress14}}">
                                        <input type="hidden" id="orgdateFrom14" name="orgdateFrom14" value="{{$sheet->orgdateFrom14}}">
                                        <input type="hidden" id="orgdateTo14" name="orgdateTo14" value="{{$sheet->orgdateTo14}}">
                                        <input type="hidden" id="orgnumHours14" name="orgnumHours14" value="{{$sheet->orgnumHours14}}">
                                        <input type="hidden" id="orgType14" name="orgType14" value="{{$sheet->orgType14}}">
                                        <input type="hidden" id="orgnameSponsor14" name="orgnameSponsor14" value="{{$sheet->orgnameSponsor14}}">

                                        <input type="hidden" id="orgnameSkill1" name="orgnameSkill1" value="{{$sheet->orgnameSkill1}}">
                                        <input type="hidden" id="orgnameDistinct1" name="orgnameDistinct1" value="{{$sheet->orgnameDistinct1}}">
                                        <input type="hidden" id="orgnameMembership1" name="orgnameMembership1" value="{{$sheet->orgnameMembership1}}">
                                        <input type="hidden" id="orgnameSkill2" name="orgnameSkill2" value="{{$sheet->orgnameSkill2}}">
                                        <input type="hidden" id="orgnameDistinct2" name="orgnameDistinct2" value="{{$sheet->orgnameDistinct2}}">
                                        <input type="hidden" id="orgnameMembership2" name="orgnameMembership2" value="{{$sheet->orgnameMembership2}}">
                                        <input type="hidden" id="orgnameSkill3" name="orgnameSkill3" value="{{$sheet->orgnameSkill3}}">
                                        <input type="hidden" id="orgnameDistinct3" name="orgnameDistinct3" value="{{$sheet->orgnameDistinct3}}">
                                        <input type="hidden" id="orgnameMembership3" name="orgnameMembership3" value="{{$sheet->orgnameMembership3}}">
                                        <input type="hidden" id="orgnameSkill4" name="orgnameSkill4" value="{{$sheet->orgnameSkill4}}">
                                        <input type="hidden" id="orgnameDistinct4" name="orgnameDistinct4" value="{{$sheet->orgnameDistinct4}}">
                                        <input type="hidden" id="orgnameMembership4" name="orgnameMembership4" value="{{$sheet->orgnameMembership4}}">
                                        <input type="hidden" id="orgnameSkill5" name="orgnameSkill5" value="{{$sheet->orgnameSkill5}}">
                                        <input type="hidden" id="orgnameDistinct5" name="orgnameDistinct5" value="{{$sheet->orgnameDistinct5}}">
                                        <input type="hidden" id="orgnameMembership5" name="orgnameMembership5" value="{{$sheet->orgnameMembership5}}">
                                        <input type="hidden" id="orgnameSkill6" name="orgnameSkill6" value="{{$sheet->orgnameSkill6}}">
                                        <input type="hidden" id="orgnameDistinct6" name="orgnameDistinct6" value="{{$sheet->orgnameDistinct6}}">
                                        <input type="hidden" id="orgnameMembership6" name="orgnameMembership6" value="{{$sheet->orgnameMembership6}}">

                                        <button type="submit" class="btn btn-dark">Download in PDF</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

                </tbody>


            </table>
            {{ $products->onEachSide(2)->links() }}
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="sweetalert/sweetalert.all.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script>
            function submitForm(form) {
                swal({
                    title: "Are you sure?",
                    text: "Do you want to download an Excel Version?",
                    icon: "info",
                    buttons: true,
                    dangerMode: false
                })
                .then(function (isOkay) {
                    if (isOkay) {
                        swal({
                             icon: "success",
                             text: "Your download will start soon"
                        });
                        form.submit();
                    }
                });
                return false;
            }
        </script>
        <script>
            function submitForm1(form) {
                swal({
                    title: "Are you sure?",
                    text: "Do you want to download a PDF Version?",
                    icon: "info",
                    buttons: true,
                    dangerMode: false
                })
                .then(function (isOkay) {
                    if (isOkay) {
                        swal({
                             icon: "success",
                             text: "Your download will start soon"
                        });
                        form.submit();
                    }
                });
                return false;
            }
        </script>



