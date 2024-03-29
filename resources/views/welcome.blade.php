﻿@extends('page')
@section('content')
    <div class="center_box cb">
        <div class="uo_tabs cf">
            <a href="#" class="active" ><span>Profile</span></a>
            <a href="#"><span>Reviews</span></a>
            <a href="#"><span>Orders</span></a>
            <a href={{route('addresses.index')}}><span>My Address</span></a>
            <a href="#"><span>Settings</span></a>
        </div>
        <div class="page_content bg_gray">
            <div class="uo_header">
                <div class="wrapper cf">
                    <div class="wbox ava">
                        <figure><img src="{{ asset('imgc/user_ava_1_140.jpg') }}" alt="Helena Afrassiabi" /></figure>
                    </div>
                    <div class="main_info">
                        <h1>Helena Afrassiabi</h1>
                        <div class="midbox">
                            <h4>560 points</h4>
                            <div class="info_nav">
                                <a href="#">Get Free Points</a>
                                <span class="sepor"></span>
                                <a href="#">Win iPad</a>
                            </div>
                        </div>
                        <div class="stat">
                            <div class="item">
                                <div class="num">30</div>
                                <div class="title">total orders</div>
                            </div>
                            <div class="item">
                                <div class="num">14</div>
                                <div class="title">total reviews</div>
                            </div>
                            <div class="item">
                                <div class="num">0</div>
                                <div class="title">total gifts</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
