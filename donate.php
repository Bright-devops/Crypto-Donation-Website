
<?php include('./includes/header.php'); ?>
<main>

<section class="donate">
       <div class="row justify-content-center mt-5 text-left " data-aos="fade-up" data-aos-delay="150">

        <div class="col-12 col-sm-12 col-md-10 col-lg-8">
            <ul class="nav nav-pills nav-justified mb-3  " id="donate" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="donate-paypal-tab" data-bs-toggle="pill" data-bs-target="#donate-paypal"
                        type="button" role="tab" aria-controls="donate-paypal" aria-selected="true">Metamask</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="donate-crypto-tab" data-bs-toggle="pill" data-bs-target="#donate-crypto" type="button"
                        role="tab" aria-controls="donate-crypto" aria-selected="false">Crypto</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="donate-etransfer-tab" data-bs-toggle="pill" data-bs-target="#donate-etransfer"
                        type="button" role="tab" aria-controls="donate-etransfer" aria-selected="false">E-transfer</button>
                </li>

               
                <!-- <li class="nav-item" role="presentation">
                    <a class="nav-link" id="donate-aid-tab" href="./offer-aid.html"
                        type="button" role="tab" aria-controls="donate-aid" aria-selected="false">Aid</a>
                </li> -->
            </ul>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="donate-content">

                        <div class="tab-pane fade show active" id="donate-paypal" role="tabpanel" aria-labelledby="donate-paypal-tab">

                            <div class="row justify-content-center col-12">
                                <div class="col-12 text-center">
                                    
                                    
                                        <button class="btn btn-primary btn-sm col-12" id="connect-button">
                                            Connect Metamask
                                        </button>
										<br>
										<br>
										<button class="btn btn-warning bt-sm" id="send-button">Donate up to 0.01ETH</button>
										
										<script>
      document.getElementById('connect-button').addEventListener('click', event => {
        let account;
        let button = event.target;
        ethereum.request({method: 'eth_requestAccounts'}).then(accounts => {
          account = accounts[0];
          console.log(account);
          button.textContent = account;

          ethereum.request({method: 'eth_getBalance' , params: [account, 'latest']}).then(result => {
            console.log(result);
            let wei = parseInt(result,16);
            let balance = wei / (10**18);
            console.log(balance + " ETH");
          });
        });
      });

	  if(window.ethereum.networkVersion == 10){
	  document.getElementById('send-button').addEventListener('click', event =>{
let transactionParam = {
  to: '0x1D81e2495035C08e51533308055068407FFad817',
  from: account,
  value: '0x38D7EA4C68000'
};


ethereum.request({method: 'eth_sendTransaction', params:[transactionParam]}).then(txhash => {
    console.log(txhash);
	checkTransactionconfirmation(txhash).then(r => alert(r));
  });
	  });
	}

	  function checkTransactionconfirmation(txhash) {

let checkTransactionLoop = () => {
  return ethereum.request({method:'eth_getTransactionReceipt',params:[txhash]}).then(r => {
	if(r != null) return 'confirmed';
	else return checkTransactionLoop();
  });
};

return checkTransactionLoop();
}



    </script>  
                                </div>
                            </div>

                            <!-- <button type="submit" class="btn btn-primary btn-lg">
                                <img class="" src="./assets/img/icons/paypal.svg" alt="..."
                                    style="height:22px; max-height:initial;margin-top:-2px;"><span class="ms-2 "
                                    style="font-size:1.2rem;">Donate</span>
                            
                            </button> -->

                           
                           
                        </div>

                        <div class="tab-pane fade" id="donate-crypto" role="tabpanel" aria-labelledby="donate-crypto-tab">
                        
                        
                            <div class="row justify-content-center mb-4">
                                <div class="col-12 col-sm-12 text-">
                                    <label class="form-label fw-bold">BTC:</label>
                                </div>
                        
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border  border-gray-800-50"
                                        value="bc1quy65q9q2ucgnry5l6u7hdrkde35ugedhzxxlsz" readonly>
                        
                                </div>
                        
                        
                            </div>
                        
                            <div class="row justify-content-center mb-4">
                                <div class="col-12 col-sm-12 text-">
                                    <label class="form-label fw-bold">ETH:</label>
                                </div>
                        
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border  border-gray-800-50"
                                        value="0x99Cefc1a26191747073Af9B04F43992caf4035B4" readonly>
                        
                                </div>
                        
                        
                            </div>
                        
                            <div class="row justify-content-center mb-4">
                                <div class="col-12 col-sm-12 text-">
                                    <label class="form-label fw-bold">TRX:</label>
                                </div>
                        
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border  border-gray-800-50"
                                        value="TFJJfGTdYztjSZcM7NpBFyZnWWn64bLdL1" readonly>
                        
                                </div>
                        
                        
                            </div>

                            <div class="row justify-content-center mb-4">
                                <div class="col-12 col-sm-12 text-">
                                    <label class="form-label fw-bold">USDT(TRC20):</label>
                                </div>
                            
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border  border-gray-800-50"
                                        value="TFJJfGTdYztjSZcM7NpBFyZnWWn64bLdL1" readonly>
                            
                                </div>
                            
                            
                            </div>
                        
                        
                        
                            <div class="row justify-content-center mt-6">
                        
                        
                        
                        
                                <p>
                                    <a class="btn btn-primary-soft" data-bs-toggle="collapse" href="#collapseMoreCrypto" role="button"
                                        aria-expanded="false" aria-controls="collapseMoreCrypto">
                                        View More Crypto Options
                                    </a>
                        
                                </p>
                                <div class="collapse" id="collapseMoreCrypto">
                        
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-12 col-sm-12 text-">
                                            <label class="form-label fw-bold">NEAR:</label>
                                        </div>
                        
                                        <div class="col-12 col-sm-12">
                                            <input type="text" class="form-control border  border-gray-800-50"
                                                value="2c759046d21ba9faf504a78a5fe052de6ab55408cd75d515570690ccf275a096" readonly>
                        
                                        </div>
                        
                        
                                    </div>
                        
                        
                        
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-12 col-sm-12 text-">
                                            <label class="form-label fw-bold">AVAX:</label>
                                        </div>
                        
                                        <div class="col-12 col-sm-12">
                                            <input type="text" class="form-control border  border-gray-800-50"
                                                value="0x99Cefc1a26191747073Af9B04F43992caf4035B4" readonly>
                        
                                        </div>
                        
                        
                                    </div>
                        
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-12 col-sm-12 text-">
                                            <label class="form-label fw-bold">BNB:</label>
                                        </div>
                        
                                        <div class="col-12 col-sm-12">
                                            <input type="text" class="form-control border  border-gray-800-50"
                                                value="0x99Cefc1a26191747073Af9B04F43992caf4035B4" readonly>
                        
                                        </div>
                        
                        
                                    </div>
                        
                                  
                        
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-12 col-sm-12 text-">
                                            <label class="form-label fw-bold">DOGE:</label>
                                        </div>
                        
                                        <div class="col-12 col-sm-12">
                                            <input type="text" class="form-control border  border-gray-800-50"
                                                value="DQqP4pqn4E6Yi6zi6FCxe73dRNPDX9SyKo" readonly>
                        
                                        </div>
                        
                        
                                    </div>
                        
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-12 col-sm-12 text-">
                                            <label class="form-label fw-bold">SOL:</label>
                                        </div>
                        
                                        <div class="col-12 col-sm-12">
                                            <input type="text" class="form-control border  border-gray-800-50"
                                                value="8e6KrFNiPBFjShDQWcBD2Nrz5j82Zgmurp33n2hUq1na" readonly>
                                        </div>
                                    </div>
                                    
                        
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-12">
                                    <div class="mt-5 pt-4 border-top border-gray-300">
                        
                                        <small class="text-muted lh-1">
                                            If you run into any issues, please contact us at <a
                                                href="mailto:support@aljazeeracharitynetwork.com">support@aljazeeracharitynetwork.com</a>.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        
                        </div>

                        
                        <div class="tab-pane fade" id="donate-etransfer" role="tabpanel" aria-labelledby="donate-etransfer-tab">
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-10 text-center">
                                    <label class="form-label"><strong>Canadian residents</strong> can send donations as an e-transfer to:</label>
                                    
                                </div>

                                <div class="col-12 col-sm-8">
                                    <input type="text" class="form-control border  border-gray-800-50" value="support@aljazeeracharitynetwork.com" readonly
                                       >
                                    
                                </div>

                                <div class="col-12 col-sm-10">
                                    <div class="mt-5 pt-4 border-top border-gray-300">

                                        <small class="text-muted lh-1">
                                        If you run into any issues, please contact us at <a href="mailto:support@aljazeeracharitynetwork.com">support@aljazeeracharitynetwork.com</a>.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="donate-aid" role="tabpanel" aria-labelledby="donate-aid-tab">...</div> -->
        
                      

                    </div>
                </div>
            </div>
           
        </div>
        <div class="col-12 mt-4">
            <p class="text-center ">
                <small class="text-muted lh-1">
                    In addition, <a href="offer-aid.html">bulk equipment donations</a> are needed as well.
                </small>
            </p>
        </div>
    </div>
<!--row-->
</section>

			
<section class="trans" id="trans">
              <div class="container trans__container">

                <div class="trans__table">
                  <div class="trans__table-head">
                    <div class="trans__table-hash">
                      <div class="trans__text">TxHash</div>
                    </div>
                    <div class="trans__table-block">
                      <div class="trans__text">Block</div>
                    </div>
                    <div class="trans__table-from">
                      <div class="trans__text">From</div>
                    </div>
                    <div class="trans__table-empty"></div>
                    <div class="trans__table-to">
                      <div class="trans__text">To</div>
                    </div>
                    <div class="trans__table-age">
                      <div class="trans__text">Age</div>
                    </div>
                    <div class="trans__table-value">
                      <div class="trans__text">Value</div>
                    </div>
                    <div class="trans__table-fee">
                      <div class="trans__text">Fee</div>
                    </div>
                    <div class="trans__table-status">
                      <div class="trans__text">Status</div>
                    </div>
                  </div>

                  <div class="trans__table-row">
                    <div class="trans__table-hash">
                      <div class="trans__text">66b67ac732...</div>
                    </div>
                    <div class="trans__table-block">
                      <div class="trans__text">616558</div>
                    </div>
                    <div class="trans__table-from">
                      <div class="trans__text">
                        14ZmH...
                      </div>
                      <div class="trans__text">
                        14ZmH...
                      </div>
                    </div>
                    <div class="trans__table-empty">
                      <img class="trans__confirm" src="img/trans__confirm.svg" alt="CONFIRM">
                    </div>
                    <div class="trans__table-to">
                      <div class="trans__text">
                        14ZmH...
                      </div>
                      <div class="trans__text">
                        14ZmH...
                      </div>
                    </div>
                    <div class="trans__table-age">
                      <div class="trans__text">
                        right now
                      </div>
                      <div class="trans__text">
                        right now
                      </div>
                    </div>
                    <div class="trans__table-value">
                      <div class="trans__text">
                        11.28 BTC
                      </div>
                      <div class="trans__text">
                        5.64 BTC
                      </div>
                    </div>
                    <div class="trans__table-fee">
                      <div class="trans__text">
                        0.058052
                      </div>
                    </div>
                    <div class="trans__table-status trans__table-status-text">
                      Completed
                    </div>
                  </div>

                </div>
              </div>
            </section>

            <!-- team start-->
				<section class="section team">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="heading heading--primary"><span class="heading__pre-title">Team</span>
									<h2 class="heading__title no-margin-bottom"><span>Meet</span> <span>our Team</span></h2>
								</div>
							</div>
						</div>
						<div class="row margin-bottom">
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_1.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Faisal Al-Kasim</div>
										<div class="team-item__position">Al Jazeera Charity Network</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_2.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Khadija Bengana</div>
										<div class="team-item__position">Al Jazeera Charity Network</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_3.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Mhamed Krichen</div>
										<div class="team-item__position">Al Jazeera Charity Network</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_4.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Ahmed Mansour</div>
										<div class="team-item__position">Al Jazeera Charity Network</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_5.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Ched Kurtsovski</div>
										<div class="team-item__position">Al Jazeera Charity Network</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_6.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Fairouz Ziani</div>
										<div class="team-item__position">Al Jazeera Charity Network</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_7.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Abdelkader Aiad</div>
										<div class="team-item__position">Al Jazeera Charity Network</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<!-- iteam start-->
								<div class="team-item team-item--rounded">
									<ul class="team-item__socials">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
									<div class="team-item__img-holder">
										<div class="team-item__img"><img class="img--bg" src="img/team_8.jpg" alt="teammate"/></div>
									</div>
									<div class="team-item__description">
										<div class="team-item__name">Jalal Chahda</div>
										<div class="team-item__position">Al Jazeera Charity Network</div>
									</div>
								</div>
								<!-- iteam end-->
							</div>
						</div>
						
						
						
					</div>
				</section>
				<!-- team end-->

				</main>

				


				<?php include('./includes/footer.php'); ?>