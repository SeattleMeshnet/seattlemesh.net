<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/global.css" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@seattlemeshnet">
    <meta name="twitter:title" content="Seatttle Meshnet">
    <meta name="twitter:image:src" content="https://seattlemesh.net/assets/img/seattlemeshnet.gif">
    <meta name="twitter:description" content="The Seattle Meshnet project is building a decentralized mesh network across the Seattle area">
</head>
<body>
    <?php if(!isset($map)) { ?><div id="wrap"><? } ?>
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
              <li><a href="https://lists.projectmesh.net/cgi-bin/mailman/listinfo/seattle">Mailing List</a></li>
            </ul>
          </div>
        </div>
