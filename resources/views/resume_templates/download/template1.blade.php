<html>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html {
            height: 100%;
        }

        body {
            min-height: 100%;
            background: #eee;
            font-family: 'DejaVu Sans', sans-serif;
            font-weight: 400;
            color: #222;
            font-size: 14px;
            line-height: 26px;
            padding-bottom: 50px;
        }

        .container {
            max-width: 700px;
            background: #fff;
            margin: 0px auto 0px;
            box-shadow: 1px 1px 2px #DAD7D7;
            border-radius: 3px;
            padding: 40px;
            margin-top: 50px;
        }

        .header {
            margin-bottom: 30px;

            .full-name {
                font-size: 40px;
                text-transform: uppercase;
                margin-bottom: 5px;
            }

            .first-name {
                font-weight: 700;
            }

            .last-name {
                font-weight: 300;
            }

            .contact-info {
                margin-bottom: 20px;
            }

            .email ,
            .phone {
                color: #999;
                font-weight: 300;
            }

            .separator {
                height: 10px;
                display: inline-block;
                border-left: 2px solid #999;
                margin: 0px 10px;
            }

            .position {
                font-weight: bold;
                display: inline-block;
                margin-right: 10px;
                text-decoration: underline;
            }
        }


        .details {
            line-height: 20px;

            .section {
                margin-bottom: 40px;
            }

            .section:last-of-type {
                margin-bottom: 0px;
            }

            .section__title {
                letter-spacing: 2px;
                color: #54AFE4;
                font-weight: bold;
                margin-bottom: 10px;
                text-transform: uppercase;
            }

            .section__list-item {
                margin-bottom: 40px;
            }

            .section__list-item:last-of-type {
                margin-bottom: 0;
            }

            .left ,
            .right {
                vertical-align: top;
                display: inline-block;
            }

            .left {
                width: 60%;
            }

            .right {
                tex-align: right;
                width: 39%;
            }

            .name {
                font-weight: bold;
            }

            a {
                text-decoration: none;
                color: #000;
                font-style: italic;
            }

            a:hover {
                text-decoration: underline;
                color: #000;
            }

            .skills {

            }

            .skills__item {
                margin-bottom: 10px;
            }

            .skills__item .right {
                input {
                    display: none;
                }

                label {
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background: #C3DEF3;
                    border-radius: 20px;
                    margin-right: 3px;
                }

                input:checked + label {
                    background: #79A9CE;
                }
            }
        }
    </style>

    <head></head>

    <body>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <div class="container">
            <div class="header">
                <div class="full-name">
                    <span class="first-name">{{ $first_name }}</span>
                    <span class="last-name">{{ $last_name }}</span>
                </div>
                <div class="contact-info">
                    <span class="email">Email: </span>
                    <span class="email-val">{{ $email }}</span>
                    <span class="separator"></span>
                    <span class="phone">Phone: </span>
                    <span class="phone-val">{{ $phone }}</span>
                    <span class="separator"></span>
                    <span class="email">Age: </span>
                    <span class="email-val">{{ $age }}</span>
                </div>

                <div class="about">
                    <span class="position">{{ $position }}</span>
                    <span class="desc">
                    {{ $description }}
                </span>
                </div>
            </div>
            <div class="details">
                <div class="section">
                    <div class="section__title">Experience</div>
                    @foreach($experience as $key => $exp)
                        @if($exp)
                            <div class="section__list">
                                <div class="section__list-item">
                                    <div class="left">
                                        <div class="name">{{$exp[2]}}</div>
                                        <div class="duration">{{$exp[3]}}</div>
                                    </div>
                                    <div class="right">
                                        <div class="name">{{$exp[0]}}</div>
                                        <div class="desc">{{ $exp[1]}}</div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                </div>
            </div>
            <div class="section">
                <div class="section__title">Education</div>
                <div class="section__list">
                    <div class="section__list-item">
                        {{ $education }}
                    </div>
                </div>

            </div>
            <div class="section">
                <div class="section__title">Projects</div>
                <div class="section__list">
                    @for($i=0;$i<2;$i++) @if($project[$i])
                        <div class="section__list-item">
                            <div class="name">{{$project[$i]['name']}}</div>
                            <div class="text">{{$project[$i]['description']}}</div>
                        </div>
                    @endif @endfor
                </div>
            </div>
            <div class="section">
                <div class="section__title">Skills</div>
                <div class="skills">
                    @foreach($skills as $key => $skill)
                        @if($skill)
                            <div class="skills__item">
                                <div class="left"><div class="name">
                                        {{ $skill }}
                                    </div></div>
                                <div class="right">
                                    <input  id="ck1" type="checkbox" checked/>

                                    <label for="ck1"></label>
                                    <input id="ck2" type="checkbox" checked/>

                                    <label for="ck2"></label>
                                    <input id="ck3" type="checkbox" />

                                    <label for="ck3"></label>
                                    <input id="ck4" type="checkbox" />
                                    <label for="ck4"></label>
                                    <input id="ck5" type="checkbox" />
                                    <label for="ck5"></label>

                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="section">
                    <div class="section__title">
                        Interests
                    </div>
                    <div class="section__list">
                        <div class="section__list-item">
                            {{ $about_me }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
