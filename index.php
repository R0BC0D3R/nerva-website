<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159854683-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-159854683-1');
    </script>
    <title>Nerva - Advanced Ideas. Simple Hardware.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="NERVA (XNV) is a cryptocurrency that you can mine on the computer you're using to read this website.">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link href="css/style.css" rel="stylesheet">
    <?php require_once './version.php';?>

</head>
<script src="./js/paperwallet/languages.js"></script>
<script src="./js/paperwallet/paperwallet.js"></script>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-xl">
                        <a class="navbar-brand" href="#">
                            <img class="img-fluid nerva-logo-icon-white" alt="nerva-logo-white"
                                src="images/png-nerva-logo-white-256x256.png">
                            <img src="images/logo.png" class="img-fluid" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#our-mission">MISSION</a> </li>
                                <li class="nav-item"><a class="nav-link" href="#nerva-map">NODES</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#exchanges">TRADE</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#mining">MINE</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#paper-wallet">PAPER WALLET</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="https://docs.getnerva.org">WIKI</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="https://getnerva.org/explorer">EXPLORER</a> </li>
                                <li class="nav-item nav-item-btn"><a href="#downloads" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Downloads</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <div class="spacer-2x"></div>
            <div class="spacer-2x hidden-xs"></div>
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <img src="images/nerva-network-1.png" alt="nerva-chain" class="img-fluid img-rotate nerva-nodes">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="spacer hidden-xs"></div>
                        <h1 class="page-intro">
                            NERVA (XNV)<br>is an untraceable and secure cryptocurrency aiming to be GPU and ASIC
                            resistant via the new Cryptonight Adaptive POW algorithm.
                        </h1>
                        <p class="mb-4 white-text">NERVA offers true privacy and fungibility, is totally untraceable and
                            unlinkable, with users and transfer amounts hidden from the public</p>
                    </div>
                </div>
            </div>
            <div class="spacer-2x"></div>
            <div class="spacer"></div>
            <div class="spacer-2x hidden-xs"></div>
        </div>
    </header>

    <div class="section light-bg" id="features">
        <div class="container">
            <div class="section-title">
                <span class="fa fa-list-alt gradient-fill fa-3x"></span>
                <div class="spacer"></div>
                <h2>Features you love</h2>
                <div class="spacer hidden-xs"></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="fa fa-code fa-2x gradient-fill mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">A new POW algorithm</h4>
                                    <p class="card-text">NERVA utilizes the brand new and exclusive Cryptonight Adaptive
                                        algorithm, with the aim of promoting decentralization and a preference for CPU miners</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="fa fa-dollar-sign fa-3x gradient-fill mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">No ICO</h4>
                                    <p class="card-text">NERVA believes facing the issues in crypto are far more
                                        important than the personal wealth of individuals.
                                        There was no ICO, just a fair launch for those who want to help provide a
                                        brighter future for crypto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="far fa-lightbulb fa-3x gradient-fill mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Energy efficient</h4>
                                    <p class="card-text">No need to run separate GPU mining rigs or other specialized
                                        hardware. Mine coins on your current computer with no additional software.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>
            <div class="spacer"></div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="far fa-clock fa-3x gradient-fill mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Fast transactions</h4>
                                    <p class="card-text">A one minute block time and stable blockchain mean your funds
                                        quickly arrive at their destination. Fast transactions,
                                        combined with low fees, allow you to send and receive NERVA quickly and cost
                                        effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="fa fa-lock fa-3x gradient-fill mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Secure</h4>
                                    <p class="card-text">Based on the Monero, NERVA combines cryptonote's first class
                                        privacy and fungibility with an emphasis towards decentralization.
                                        Parties to each transaction remain anonymous and keep their transaction
                                        histories hidden with NERVA.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="far fa-thumbs-up fa-3x gradient-fill mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Fair distribution</h4>
                                    <p class="card-text">An emphasis on CPU mining and no additional mining software means anyone can get involved quickly and easily.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="our-mission">
        <div class="container">
            <div class="section-title">
                <span class="fa fa-hand-holding-heart gradient-fill fa-3x"></span>
                <div class="spacer"></div>
                <h2>Our Mission</h2>
            </div>
            <div class="spacer visible-xs"></div>
            <div class="row">

                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled">
                        <li class="media mt-4">
                            <div class="media-body">
                                <h5>
                                    <div class="circle-icon mr-4 float-left">1</div>Crypto for everyone
                                </h5>
                                <p> Crypto should be for everyone, not just those who can afford the hardware to mine
                                    it.
                                    NERVA allows you to mine on standard desktop computers, without elaborate hardware or software configurations.
                                    Because if crypto is going to be our future, then we all need to be able to be a
                                    part of it.
                                    <span class="mb-0">
                                        <span class="a-color collapsed cursor-pointer" type="" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Read More
                                        </span>
                                    </span>
                                </p>
                            </div>
                        </li>
                        <div class="accordion" id="accordion">
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <p> We are following up on this mission. We are actively working every day to produce
                                    software that is easy to use for everyone.
                                    We have API's in .NET and PHP to allow other developers to integrate NERVA into
                                    their web and software projects. We also decided
                                    to start work on our own GUI (currently in Beta) to build these ideals of simplicity
                                    and ease of use into a lean, tidy cross platform package.</p>
                                <p> NERVA also enjoys a substantial following on Discord, Telegram and Reddit. So there
                                    is always someone available to chat to or get help from.
                                    Community is a big part of NERVA. This is truly a community focused and driven coin.
                                    Where every miner, trader or hodler is treated equally.
                                    The NERVA community all share a common ideal. To take crypto back from big
                                    corporations and organised mining operations and give it back to the people.
                                    The way crypto was designed and the way it was intended.</p>
                                <div class="spacer"></div>
                            </div>
                        </div>

                        <li class="media mt-4">
                            <div class="media-body">
                                <h5>
                                    <div class="circle-icon mr-4 float-left">2</div>On the cutting edge
                                </h5>
                                <p> NERVA is widely known as an experimental coin. But that's just cause we're doing
                                    things a bit differently.
                                    With a custom Proof of Work algorithm, the focus on solo CPU mining and the
                                    accelerated emission curve, NERVA
                                    is changing the way people think about cryptocurrencies and how they are mined and
                                    traded.
                                    <span class="mb-0">
                                        <span class="a-color collapsed cursor-pointer" type="" data-toggle="collapse"
                                            data-target="#collapsetwo" aria-expanded="false"
                                            aria-controls="collapsetwo">
                                            Read More
                                        </span>
                                    </span>
                                </p>
                            </div>
                        </li>
                        <div class="accordion" id="accordion">
                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
                                data-parent="#accordion">
                                <p> As well as being a solid coin that is easy to mine on any old computer, NERVA is
                                    also engaged in some more experimental aspects of crypto.
                                    NERVA was the first coin to demonstrate a self adjusting algorithm by changing some
                                    algorithm parameters every block. Now Cryptonight
                                    Adaptive is in v5 and every single hash relies on different, randomly selected data
                                    from the blockchain. This reliance on blockchain data improves resistance of the network,
                                    to ASIC and FPGA attack.
                                    The algorithms reliance on stored blockchain data also put NERVA at the forefront
                                    of resistance to rented hash services like NiceHash and Mining Rig Rentals, which
                                    also makes NERVA the best available coin for resisting 51% attacks
                                    that have compromised the integrity of many blockchains before. NERVA is a coin you
                                    can have total confidence in as a method of payment and as store of wealth in the
                                    short or long term.</p>
                                <p> The other talking point of NERVA is the rapid coin emission, with all coins due to
                                    be emitted within 3 years of the genesis block. But why? Monero and it's fork coins
                                    (of which NERVA is one)
                                    rely on the principle of the 'tail emission' after the last of the coins are
                                    emitted. A flat block reward that is aimed to replace lost coins and keep miners
                                    incentivised. But does it work?
                                    Well no one actually knows. No Cryptonight POW blockchain has come to the end of its
                                    work. NERVA is going to do that before any other. NERVA will be the project that
                                    other
                                    projects look to for answers and an example of how to manage that transition. So by
                                    being a part of NERVA, you are getting into a project that will have the world's
                                    attention on it in a couple of years.</p>
                                <p> Overall, NERVA defies the conventional wisdom of crypto and challenges people to
                                    think differently about how cryptocurrency is mined and traded and how blockchains
                                    are secured now and into the future.</p>
                                <div class="spacer"></div>
                            </div>
                        </div>

                        <li class="media mt-4">
                            <div class="media-body">
                                <h5>
                                    <div class="circle-icon mr-4 float-left">3</div>A simple use case
                                </h5>
                                <p> Our use case is simple. To provide a stable blockchain with fast, low fee transfers
                                    usable by anyone with a straightforward, no nonsense interface.
                                    To provide the tools and resources to assist developers to integrate NERVA into
                                    their systems and use NERVA as an alternate payment method.
                                    <span class="mb-0">
                                        <span class="a-color collapsed cursor-pointer" type="" data-toggle="collapse"
                                            data-target="#collapsethree" aria-expanded="false"
                                            aria-controls="collapsethree">
                                            Read More
                                        </span>
                                    </span>
                                </p>
                            </div>
                        </li>
                        <div class="accordion" id="accordion">
                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                data-parent="#accordion">
                                <p> One person, or even one community as passionate as ours can't really change the
                                    world. But we can take the first steps.
                                    We provide tools and assistance to anyone who wants to help us revolutionise the way
                                    people shop online and the currency they use to pay for goods and services.
                                    Our WooCommerce plugin allows you to accept NERVA on your ecommerce site, just like
                                    PayPal or credit cards. Our API's allow you to integrate NERVA
                                    into your next ecommerce or analytics site. Maybe you'd like to make a new online
                                    game and use NERVA as an in game currency. The possibilities are endless.
                                    And when you base your next development on NERVA, or accept it as payment on your
                                    store, you're basing it on a fast paced, extremely decentralized and stable
                                    blockchain.</p>
                                <p> But what about if you're not a developer? Don't worry, we've got you covered. We
                                    have very active development on multiple fronts,
                                    creating more and more ways for you to trade and use NERVA. We are actively seeking
                                    additional exchanges to list on to expand your
                                    choices for buying and selling NERVA and actively working on bringing you great ways
                                    to spend those coins you mine and buy.</p>
                                <div class="spacer"></div>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="col-md-4">
                    <img src="images/nerva-mission-colored.png" alt="mountain" class="img-fluid">
                </div>

            </div>
        </div>
    </div>


    <div class="section light-bg" id="nerva-map">
        <div class="container">
			<div class="section-title">
				<div class="spacer"></div>
				<h2>Node Map</h2>
				<p>
					Nerva is decentralized due to the single-CPU mining approach.
					<br />
					1 CPU = 1 Vote as Satoshi mentioned in his whitepaper.
				</p>
			</div>
			<div class="row">			
				 <div class="col-sm-12">
					<div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">
					  <div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive" src="https://map.getnerva.org/" allowfullscreen=""></iframe>
					  </div>
					</div>
				</div>
			<div class="spacer-2x hidden-xs"></div>
			</div>
		</div>	
    </div>


	<div class="section" id="satoshi-wp">
        <div class="container">
			<div class="section-title">
				<div class="spacer"></div>
				<h2>Satoshi Whitepaper</h2>
				<p>
					According to the Satoshi whitepaper, bitcoin was supposed to be mined by CPUs only.
				</p>				
			</div>
			<div class="row">
				  <div class="col-sm-12 text-center">
					<p><img src="images/satoshi-whitepaper.jpg"></p>
				</div>
				<div class="spacer-2x hidden-xs"></div>
			</div>
	    </div>	
    </div>


    <div class="section light-bg" id="exchanges">
        <div class="container">
            <div class="spacer-2x hidden-xs"></div>
            <div class="section-title">
                <span class="fa fa-file-contract gradient-fill fa-3x"></span>
                <div class="spacer"></div>
                <h2>Exchanges</h2>
            </div>
            <div class="row">						
                <div class="col-12 col-lg-4">
                    <div class="card exchanges">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p><img src="images/tradeogre-logo.png" height="64"></p>
                                    <h4 class="card-title">Tradeogre</h4>
                                    <p class="card-text">Shrek loves crypto too!</p>
                                    <a class="btn btn-primary" href="https://tradeogre.com/exchange/BTC-XNV"
                                        target="_blank" rel="nofollow"><span class="fa fa-exchange-alt"></span> &nbsp;
                                        Buy Nerva</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="col-12 col-lg-4">
					<div class="card exchanges">
						<div class="card-body">
							<div class="media">
								<div class="media-body">
									<p><img src="images/uniswap.png" height="64"></p>
									<h4 class="card-title">Uniswap</h4>
									<p class="card-text">Wrapped Nerva coming soon on Uniswap</p>
									<a class="btn btn-primary" href="https://uniswap.org/" target="_blank" rel="nofollow"><span class="fa fa-exchange-alt"></span> &nbsp;
										Buy Nerva</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="card exchanges">
						<div class="card-body">
							<div class="media">
								<div class="media-body">
									<p><img src="images/honeyswap-decentralized-exchange.png" height="64"></p>
									<h4 class="card-title">Honeyswap</h4>
									<p class="card-text">Wrapped Nerva coming soon on Honeyswap</p>
									<a class="btn btn-primary" href="https://app.honeyswap.org/" target="_blank" rel="nofollow"><span class="fa fa-exchange-alt"></span> &nbsp;
										Buy Nerva</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
            </div>
			
            <div class="spacer hidden-xs"></div>
			
        </div>
    </div>

    <div class="section" id="mining">
        <div class="container">
            <div class="spacer-2x hidden-xs"></div>
            <div class="row">
                <div class="col-md-6 text-center justify-content-center align-self-center">
                    <span class="fas fa-project-diagram  gradient-fill fa-3x"></span>
                    <div class="spacer"></div>
                    <h2>Start Mining</h2>
                    <p class="mb-4">Nerva is super easy to mine. No extra software or looking up pools. Just download
                        the software and go</p>
                    <a href="https://www.reddit.com/r/Nerva/comments/9r32vj/how_to_mine_nerva_video_walkthrough_for_beginners/"
                        class="btn btn-primary">Mining Tutorial</a>
                    <div class="spacer"></div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <img src="images/nerva-start-mining-colored.png" alt="dual phone" class="img-fluid">
                </div>
            </div>
            <div class="spacer-2x hidden-xs"></div>
        </div>
    </div>

    <div class="section light-bg" id="downloads">
        <div class="container">
            <div class="section-title">
                <span class="fa fa-download gradient-fill fa-3x"></span>
                <div class="spacer"></div>
                <h2>Downloads</h2>
                <div class="spacer"></div>
                <p>Current CLI Version <?php echo CLI_VERSION; ?>: <?php echo CLI_CODENAME; ?></p>
                <p>Current GUI Version <?php echo GUI_VERSION; ?>: <?php echo GUI_CODENAME; ?></p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4" style="z-index: 1001">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="big-icon fab fa-linux gradient-fill"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Linux</h4>
                                    <p class="card-text">CLI and GUI for Linux x64</p>
                                    <p><a class="btn btn-primary" href="<?php echo LINUX_CLI_LINK; ?>"><span class="fa fa-download"></span> &nbsp; CLI</a></p>
                                    <p><a class="btn btn-primary" href="<?php echo LINUX_GUI_LINK; ?>"><span class="fa fa-download"></span> &nbsp; GUI</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="big-icon fab fa-windows gradient-fill"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Windows</h4>
                                    <p class="card-text">CLI and GUI for Windows x64</p>
                                    <p><a class="btn btn-primary" href="<?php echo WINDOWS_CLI_LINK; ?>"><span class="fa fa-download"></span> &nbsp; CLI</a></p>
                                    <p><a class="btn btn-primary" href="<?php echo WINDOWS_GUI_LINK; ?>"><span class="fa fa-download"></span> &nbsp; GUI</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="big-icon fab fa-apple gradient-fill"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Mac</h4>
                                    <p class="card-text">CLI and GUI for Mac OS</p>
                                    <p><a class="btn btn-primary" href="<?php echo MAC_CLI_LINK; ?>"><span class="fa fa-download"></span> &nbsp; CLI</a></p>
                                    <p><a class="btn btn-primary" href="<?php echo MAC_GUI_LINK; ?>"><span class="fa fa-download"></span> &nbsp; GUI</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer hidden-xs"></div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="big-icon fas fa-swatchbook gradient-fill"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Ledger Nano S</h4>
                                    <p class="card-text">Requires: <br />
                                        Nerva <?php echo LEDGER_VERSION . "+" ?><br />
                                        Python installation</p>
                                    <p><a class="btn btn-primary" href="<?php echo LEDGER_LINK; ?>"><span class="fa fa-download"></span> &nbsp; All Platforms</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="big-icon fab fa-bitbucket gradient-fill"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Source Code</h4>
                                    <p class="card-text">Nerva related repositories</p>
                                    <p><a class="btn btn-primary" href="https://bitbucket.org/nerva-xnv/"><span class="fab fa-bitbucket"></span> &nbsp; BitBucket</a></p>
                                    <p><a class="btn btn-primary" href="https://github.com/angrywasp/nerva/"><span class="fab fa-github"></span> &nbsp; Github (Mirror)</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="big-icon far fa-file-archive gradient-fill"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Other</h4>
                                    <p class="card-text">Other stuff</p>
                                    <p><a class="btn btn-primary" href="<?php echo QUICKSYNC_LINK; ?>"><span class="fas fa-archive"></span> &nbsp; QuickSync</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="paper-wallet">
        <div class="container">
            <div class="spacer-2x hidden-xs"></div>
            <div class="row">
                <div class="col-md-6 text-center justify-content-center align-self-center">
                    <span class="fa fa-file-contract  gradient-fill fa-3x"></span>
                    <div class="spacer"></div>
                    <h2>Paper Wallet</h2>
                    <p class="mb-4">Just looking to buy some NERVA and looking for a place to stash it? Generate a paper
                        wallet!</p>
                    <button class="btn btn-primary" type="button" id="generate_paper_wallet">
                        <span class="fa fa-search"></span> Generate
                    </button>
                    <div class="spacer"></div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <img src="images/nerva-paper-wallet.png" alt="dual phone" class="img-fluid hide-below-768">
                </div>
            </div>
            <div class="spacer-2x hidden-xs"></div>
            <div id="paperwallet_result"></div>
        </div>
    </div>

    <div class="section light-bg" id="reviews">
        <div class="container">
            <div class="section-title">
                <span class="fa fa-file-contract gradient-fill fa-3x"></span>
                <div class="spacer"></div>
                <h2>Reviews</h2>
            </div>
        <iframe src="https://revain.org/widget-v2/review-carousel?companyType=Project&companySlug=nerva&consumer=https%3A%2F%2Fgetnerva.org&contentLines=4&elevationLevel=2&writeReviewAt=3&sortBy=recent&perPage=6&bg=neutral.0&reviewLocale=en&ratingProgressFill=%23eb9c35&blockchainLinkColor=%231f89e5&showMoreLinkColor=%231f89e5&dataSource=null&locale=en&theme=default" width="100%" height="400" style="border: none; display: block"></iframe>
        </div>
    </div>

	<div class="section" id="stay-tuned">
        <div class="container">
            <div class="spacer"></div>
            <div class="section-title">
                <h2>Follow us and stay tuned</h2>
            </div>
            <div class="row">
                <div class="social-channels testimonials-single">
					<p>The most active channel (including Support):<br /> 
						<a href="https://discord.gg/jsdbEns" class="fab fa-discord fa-2x box-icon gradient-fill"></a>					
					</p>
					<p>Other channels to stay tuned:<br /> 
						<a href="http://twitter.com/NervaCurrency" class="fab fa-twitter fa-2x box-icon gradient-fill"></a>
						<a href="https://www.reddit.com/r/Nerva/" class="fab fa-reddit fa-2x box-icon gradient-fill"></a>
						<a href="https://t.me/NervaXNV" class="fab fa-telegram fa-2x box-icon gradient-fill"></a>
						<a href="https://bitbucket.org/nerva-xnv" class="fab fa-bitbucket fa-2x box-icon gradient-fill"></a>
					</p>
                </div>
            </div>
        </div>
    </div>


	<div class="section light-bg" id="faq">
        <div class="container">
            <div class="section-title">              
                <h2>FAQ - Frequently asked questions</h2>
            </div>
			<style>

				.accordion_one .panel-group {
					border: 1px solid #f1f1f1;
				}

				.accordion_one .panel {
					background-color: transparent;
					box-shadow: none;
					border-bottom: 0 solid transparent;
					border-radius: 0;
					margin: 0;
				}

				.accordion_one .panel-default {
					border: 0;
				}

				.accordion-wrap .panel-heading {
					padding: 0px;
					border-radius: 0;
				}

				.accordion_one .panel .panel-heading a.collapsed {
					color: #999999;
					display: block;
					padding: 12px 30px;
					border-top: 0;
				}

				.accordion_one .panel .panel-heading a {
					display: block;
					padding: 12px 30px;
					background: #fff;
					color: #313131;
					border-bottom: 1px solid #f1f1f1;
				}

				.accordion-wrap .panel .panel-heading a {
					font-size: 14px
				}

				.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
					border-top: 0;
					padding-top: 0;
					padding: 25px 30px 30px 35px;
					background: #fff;
					color: #999999;
					margin-bottom: 10px;
				}

				.accordion_one .panel .panel-heading a.collapsed:after {
					content: "\2b";
					color: #999999;
					background: #f1f1f1;
				}

				.accordion_one .panel {
					background-color: transparent;
					box-shadow: none;
					border-bottom: 0 solid transparent;
					border-radius: 0;
					margin: 0;
				}

				.accordion_one .panel-default {
					border: 0;
				}

				.accordion-wrap .panel-heading {
					padding: 0;
					border-radius: 0;
				}

				.accordion_one .panel .panel-heading a.collapsed {
					color: #999999;
					display: block;
					padding: 12px 30px;
					border-top: 0;
				}

				.accordion_one .panel .panel-heading a {
					display: block;
					padding: 12px 30px;
					background: #fff;
					color: #313131;
					border-bottom: 1px solid #f1f1f1;
				}

				.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
					border-top: 0;
					padding-top: 0;
					padding: 25px 30px 30px 35px;
					background: #fff;
					color: #999999;
					margin-bottom: 10px;
				}

				.accordion_one .panel .panel-heading a.collapsed:after {
					content: "\2b";
					color: #999999;
				}

				.accordion_one .panel .panel-heading a:after,
				.accordion_one .panel .panel-heading a.collapsed:after {
					font-family: 'FontAwesome';
					font-size: 20px;
					width: 26px;
					text-align: center;
					background: #fff;
					float: left;
					margin: -4px 0 0 -31px;
				}

				.accordion_one .panel .panel-heading a:after {
					content: "\2212";
				}

				#accordionFourLeft .panel-title {
					font-size: 14px;
				}
			</style>

			<div class="accordion_one">
				<div class="panel-group" id="accordionFourLeft">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftone" aria-expanded="false" class="collapsed"> Where can i find the Documentation of Nerva </a> </h3>
						</div>
						<div id="collapseFiveLeftone" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
							<div class="panel-body">

								<div class="text-accordion">
									<p>Please refer to the documentation: <a href="https://docs.getnerva.org/">Nerva Wiki</a> </p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftTwo" aria-expanded="false"> How can i check the balance of a paper wallet? </a> </h3>
						</div>
						<div id="collapseFiveLeftTwo" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
							<div class="panel-body">

								<div class="text-accordion">
									<p>
									To check a paper wallets balance you have to restore the wallet: <a href="https://docs.getnerva.org/guides/cli/#restoring-a-wallet">Restoring a wallet</a>
									<br />
									There is no way to check a balance offline because nerva is a privacy coin. 
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftThree" aria-expanded="false"> How can I calculate my mining costs? </a> </h3>
						</div>
						<div id="collapseFiveLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
							<div class="panel-body">
								<div class="text-accordion">
									<p> Use the <a href="https://www.cryptunit.com/coin/XNV">Mining Calculator from Cryptunit</a>
									 </p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftFour" aria-expanded="false"> Are there any video tutorials to start mining? </a> </h3>
						</div>
						<div id="collapseFiveLeftFour" class="panel-collapse collapse" aria-expanded="false" role="tablist">
							<div class="panel-body">
								<div class="text-accordion">
									<p> Yes, checkout the <a href="https://www.youtube.com/channel/UC84v_i1iNZrLUUA9XbhuCAQ/playlists">Nerva Youtube channel</a>
									<br />
									or the <a href="https://bittube.tv/profile/NervaCurrency">Nerva Bittube channel</a></p>
								</div>
							</div>
						</div>
					</div>	

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftFive" aria-expanded="false"> Is there any other chart then the one from TradeOgre for Nerva (XNV)? </a> </h3>
						</div>
						<div id="collapseFiveLeftFive" class="panel-collapse collapse" aria-expanded="false" role="tablist">
							<div class="panel-body">
								<div class="text-accordion">
									<p> Yes, checkout the <a href="https://charts.cointrader.pro/charts.html?coin=NERVA%3ABTC">Nerva Coin Chart on Cointrader</a></p>
								</div>
							</div>
						</div>
					</div>	

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftSix" aria-expanded="false">What's the max supply of Nerva? </a> </h3>
						</div>
						<div id="collapseFiveLeftSix" class="panel-collapse collapse" aria-expanded="false" role="tablist">
							<div class="panel-body">
								<div class="text-accordion">
									<p> There will be around 18.5 million coins issued before "tail emission" occurs, which is a small 1% annual inflation to keep miners incentivized, replace lost coins and provide future liquidity.</p>
								</div>
							</div>
						</div>
					</div>	

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftSeven" aria-expanded="false">Where on my machine is the Nerva Blockchain stored? </a> </h3>
						</div>
						<div id="collapseFiveLeftSeven" class="panel-collapse collapse" aria-expanded="false" role="tablist">
							<div class="panel-body">
								<div class="text-accordion">
									<p> Windows: c:\ProgramData\nerva
									<br />
									Linux: ~/.nerva</p>
								</div>
							</div>
						</div>
					</div>	

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftEight" aria-expanded="false">My question is not covered here - what should i do? </a> </h3>
						</div>
						<div id="collapseFiveLeftEight" class="panel-collapse collapse" aria-expanded="false" role="tablist">
							<div class="panel-body">
								<div class="text-accordion">
									<p> Please join our <a href="https://discord.gg/jsdbEns">active discord forum</a> and ask for help.</p>
								</div>
							</div>
						</div>
					</div>	
					
				</div>
				<!--end of /.panel-group-->
			</div>
        </div>
    </div>	


    <footer class="my-5 text-center">
        <small>
            <div class="spacer"></div>
            <p>© COPYRIGHT <a href="http://www.getnerva.org/">NERVA</a></p>
        </small>
    </footer>

    <!-- jQuery and Bootstrap -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script>
        var publicAddress = $("#public_address");

        currentPage = {
            destroy: function () {
            },
            init: function () {
                $("#paperwallet_result").hide();
            },
            update: function () {
            }
        };

        $("#show_reviews").click(function () {

        });

        $("#validate_address").click(function () {
            if (!publicAddress.val()) {
                alertError("Fill all fields!");
                return;
            }

            var a = publicAddress.val();

            try {
                var res = cnUtil.decode_address(a);
                if (!res)
                    alertError('Could not decode address');
                else {
                    var msg = 'Address is valid!<br />' +
                        'Type:' + res.type.address_type + '<br />' +
                        'View:' + res.view + '<br />' +
                        'Spend:' + res.spend;

                    if (res.type.address_type == "Integrated")
                        msg += '<br />PayID:' + res.intPaymentId;

                    alertSuccess(msg);
                }
            }
            catch (e) {
                alertError("Could not decode address:<br />" + e);
            }
        });

        $("#generate_paper_wallet").click(function () {
            seed = cnUtil.sc_reduce32(cnUtil.rand_32());
            keys = cnUtil.create_address(seed);
            var mnemonic = mn_encode(seed, "english");

            $("#paperwallet_result").empty();

            $("#paperwallet_result").append(
                '<div><br/>' +
                '<strong>Address</strong><br/>' +
                '<p>' + cnUtil.pubkeys_to_string(keys.spend.pub, keys.view.pub) + '</p>' +
                '<strong>Mnemonic Seed</strong><br/>' +
                '<p>' + mnemonic + '</p>' +
                '<strong>View Keys</strong><br/>' +
                '<p>Public: ' + keys.view.pub + '</p>' +
                '<p>Secret: ' + keys.view.sec + '</p>' +
                '<strong>Spend Keys</strong><br/>' +
                '<p>Public: ' + keys.spend.pub + '</p>' +
                '<p>Secret: ' + keys.spend.sec + '</p>' +
                '<p class="alert-danger">NOTICE: Please be sure to verify the paper wallet before transferring funds. Funds cannot be recovered if the paper wallet is incorrect.</p>' +
                '</div>'
            );

            $("#paperwallet_result").show();
        });
    </script>
</body>

</html>