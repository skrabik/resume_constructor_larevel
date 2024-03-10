<!-- FONTS -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<style>
    // MIXINS
    //Dummy Variable
$x = false;
    // The top, left, right, and bottom are optional
    setup(display, position, margin, top = null, right = null, bottom = null, left = null)
    display display
    position position
    margin margin
    top top
    left left
    right right
    bottom bottom

    font(font-family, font-size, letter-spacing, font-weight, line-height = 1)
    font-family font-family
    font-size font-size
    letter-spacing letter-spacing
    font-weight font-weight
    line-height line-height

    // GENERAL FONTS AND CLASSES AND SETUP STUFF
       * {box-sizing: border-box; transition: 0.35s ease;}

    .rela-block
    setup(block, relative, auto)
    .rela-inline
    setup(inline-block, relative, auto)
    .floated
    setup(inline-block, relative, $x)
    float left

    .abs-center
    setup($x, absolute, $x, 50%, $x, $x, 50%)
    transform translate(-50%, -50%)
    text-align center
    width 88%

    // --- COLORS ---

    // --- PAGE STYLINGS ---
       body
    font('Open Sans',18px,0px,400,28px)
    background: url('http://kingofwallpapers.com/leaves/leaves-016.jpg') right no-repeat
                                                                         background-size: cover
                                                                         &:before
                                                                         content ""
    setup($x,fixed,0,0,0,0,0)
    background-color rgba(255,255,255,0.92)

    .caps {text-transform: uppercase;}
    .justified {text-align: justify;}
    p.light {color: #777;}
    h2 {font('Open Sans',30px,5px,600,40px); color: black}
    h3 {font('Open Sans',21px,1px,600,28px); color: black}

    .page
    width 90%
    max-width 1200px
                  margin 80px auto
                           background-color white
                           box-shadow 6px 10px 28px 0px rgba(0,0,0,0.4)

    .top-bar
    height 220px
              background-color #848484
              color white

              .name
    setup($x,absolute,$x,$x,0,0,calc(350px + 5%))
    height 120px
              text-align center
    font('Raleway',58px,8px,100,60px)
    & div {width: 94%}

    .side-bar
    setup($x,absolute,$x,60px,$x,0,5%)
    width 350px
             background-color #F7E0C1
             padding 320px 30px 50px

                                  .mugshot
    setup($x,absolute,$x,50px,$x,$x,70px)
    height 210px
              width 210px
                       & .logo {margin: -23px;}

    .logo
    $midSize = 250px;    // Controls overall size
    setup($x,absolute,$x,0,$x,$x,0)
    z-index 100
    margin 0
    color black
    height $midSize
    width $midSize
    & .logo-svg
    height 100%
    width 100%
    stroke black
    cursor pointer
    & .logo-text
    setup($x, absolute, $x, 58%, 16%)
    cursor pointer
    font("Montserrat", $midSize/5 + $midSize/50, 0px, 400, $midSize/5 + $midSize/30)

    .social
    padding-left 60px
                   margin-bottom 20px
                                   cursor pointer
                                   &:before
                                   content ""
    setup($x,absolute,$x,-4px,$x,$x,10px)
    height 35px
             width 35px
                     background-size cover !important
    &.twitter:before{background: url('https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Twitter-07-128.png') center no-repeat}
    &.pinterest:before{background: url('https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Pinterest-23-128.png') center no-repeat}
    &.linked-in:before{background: url('https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_LinkedIn-128.png') center no-repeat;}

    .side-header
    font('Open Sans',18px,4px,600,28px)
    margin 60px auto 10px
                       padding-bottom 5px
                                       border-bottom 1px solid #888

                                                      .list-thing {padding-left: 25px; margin-bottom: 10px}

    .content-container
    margin-right 0
    width calc(95% - 350px)
    padding 25px 40px 50px
                        & > * {margin: 0 auto 25px}
    & > h3 {margin: 0 auto 5px}
    & > p.long-margin {margin: 0 auto 50px}

    .title{width: 80%; text-align: center}

    .separator
    width 240px
             height 2px
                     background-color #999

                     .greyed
                     background-color #DDD
                     width 100%
    max-width 580px
                 text-align center
    font('Open Sans',18px,6px,600,28px)

    @media screen and (max-width: 1150px)
    .name {color: white; font('Raleway',38px,6px,100,48px)}
</style>

<!-- PAGE STUFF -->
<div class="rela-block page">
    <div class="rela-block top-bar">
        <div class="caps name"><div class="abs-center">Kyle J Shanks</div></div>
    </div>
    <div class="side-bar">
        <div class="mugshot">
            <div class="logo">
                <svg viewbox="0 0 80 80" class="rela-block logo-svg">
                    <path d="M 10 10 L 52 10 L 72 30 L 72 70 L 30 70 L 10 50 Z" stroke-width="2.5" fill="none"/>
                </svg>
                <p class="logo-text">kj</p>
            </div>
        </div>
        <p>123 My Place Drive</p>
        <p>Astoria, New York 11105</p>
        <p>1-800-CALLPLZ</p>
        <p>emailsareforsquares@gmail.com</p><br>
        <p class="rela-block social twitter">Twitter stuff</p>
        <p class="rela-block social pinterest">Pinterest things</p>
        <p class="rela-block social linked-in">Linked-in man</p>
        <p class="rela-block caps side-header">Expertise</p>
        <p class="rela-block list-thing">HTML</p>
        <p class="rela-block list-thing">CSS (Stylus)</p>
        <p class="rela-block list-thing">JavaScript & jQuery</p>
        <p class="rela-block list-thing">Killer Taste</p>
        <p class="rela-block caps side-header">Education</p>
        <p class="rela-block list-thing">Advanced potion making</p>
        <p class="rela-block list-thing">Degree in popping and locking</p>
        <p class="rela-block list-thing">Knitting game on point</p>
        <p class="rela-block list-thing">Culinary af</p>
    </div>
    <div class="rela-block content-container">
        <h2 class="rela-block caps title">Jr Front-End Developer</h2>
        <div class="rela-block separator"></div>
        <div class="rela-block caps greyed">Profile</div>
        <p class="long-margin">Retro DIY quinoa, mixtape williamsburg master cleanse bushwick tumblr chillwave dreamcatcher hella wolf paleo. Knausgaard semiotics truffaut cornhole hoodie, YOLO meggings gochujang tofu. Locavore ugh kale chips iPhone biodiesel typewriter freegan, kinfolk brooklyn kitsch man bun. Austin neutra etsy, lumbersexual paleo cornhole sriracha kinfolk meggings kickstarter. </p>
        <div class="rela-block caps greyed">Experience</div>

        <h3>Job #1</h3>
        <p class="light">First job description</p>
        <p class="justified">Plaid gentrify put a bird on it, pickled XOXO farm-to-table irony raw denim messenger bag leggings. Hoodie PBR&B photo booth, vegan chillwave meh paleo freegan ramps. Letterpress shabby chic fixie semiotics. Meditation sriracha banjo pour-over. Gochujang pickled hashtag mixtape cred chambray. Freegan microdosing VHS, 90's bicycle rights aesthetic hella PBR&B. </p>

        <h3>Job #2</h3>
        <p class="light">Second Job Description</p>
        <p class="justified">Beard before they sold out photo booth distillery health goth. Hammock franzen green juice meggings, ethical sriracha tattooed schlitz mixtape man bun stumptown swag whatever distillery blog. Affogato iPhone normcore, meggings actually direct trade lomo plaid franzen shoreditch. Photo booth pug paleo austin, pour-over banh mi scenester vice food truck slow-carb. Street art kogi normcore, vice everyday carry crucifix thundercats man bun raw denim echo park pork belly helvetica vinyl. </p>

        <h3>Job #3</h3>
        <p class="light">Third Job Description</p>
        <p class="justified">Next level roof party lo-fi fingerstache skateboard, kogi tumblr. Shabby chic put a bird on it chambray, 3 wolf moon swag beard brooklyn post-ironic taxidermy art party microdosing keffiyeh marfa. Put a bird on it 3 wolf moon cliche helvetica knausgaard. Mumblecore fingerstache lomo, artisan freegan keffiyeh paleo kinfolk kale chips street art blog flannel.</p>
    </div>
</div>
