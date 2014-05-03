<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/global.css" />
</head>
<body>
    <? if(!isset($map)) { ?><div id="wrap"><? } ?>
        <div class="navbar<? if(isset($navbarclass)) {echo " ".$navbarclass;} ?>">
          <div class="navbar-inner">
            <a class="brand" href="/">Seattle Meshnet</a>
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li><a href="/map">Node Map</a></li>
              <li><a href="/coverage">Coverage Map</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="http://chat.efnet.org:9090/?channels=%23seattlemeshnet">Chat</a></li>
              <li><a href="/cjdns">Software</a></li>
              <li><a href="http://pics.meshwith.me/">Node Pics</a></li>
            </ul>
          </div>
        </div>
