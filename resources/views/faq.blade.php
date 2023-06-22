@extends('layouts.master')

@section('title', __('FAQ'))

@section('content')

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Ask <span>Question</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- faq-area -->
    <section class="faq-area pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item active">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is buying power?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Buying power refers to a trader's true capacity to use margin and leverage potential in their trades. It represents the amount by which a trader can increase their trading capacity using borrowed funds. In a Funded Program like the one offered by Orfinex, understanding your buying power becomes crucial because you're trading not only with your own money but also with the funds provided. Maximizing your potential profits relies on understanding and utilizing your buying power effectively.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What is a Daily Maximum Loss Limit?


                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A Daily Maximum Loss Limit is a predefined amount of loss that is allowed on a funded trading account within a single trading day. It serves as a safeguard, protecting traders from substantial losses and preventing them from falling too far down during a series of losing trades. This limit is calculated based on the previous day's equity and is reset at midnight every day. Understanding and adhering to Daily Maximum Loss Limits is crucial for effective risk management in trading.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is a Maximum Loss Limit?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A Maximum Loss Limit is a predefined cap on the allowable total loss for a funded trading account. It acts as a safety net, protecting traders from experiencing substantial losses. The limit is typically calculated based on the highest recorded balance in the account, ensuring that even during rough trading days, the account balance remains protected. By implementing a Maximum Loss Limit, traders can effectively manage potential losses and preserve the health of their funded accounts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What is a Profit Target?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A Profit Target in trading refers to a specific profit goal that traders aim to achieve in their Funded Accounts. It serves as a finish line and determines when traders can access the withdrawal section of their account. Reaching the Profit Target not only demonstrates trading proficiency but also enables traders to withdraw and split the profits with the account provider. It represents a milestone and symbolizes the trader's success and ability to enjoy the rewards of their efforts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What is Weekend Trade Holding, and what are the associated risks?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Weekend Trade Holding refers to the practice of keeping a trade open from Friday through to Monday. It involves the decision to hold a trade over the weekend, taking advantage of potential price gaps that may occur due to news or events. While it can present opportunities for profits, there are also risks involved. Price gaps can work against the trade, leading to potential losses at the beginning of the week. Traders need to assess these risks and their trading platform's policies before deciding to hold a trade over the weekend.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What instruments can I trade at Challenge or Funded Accounts?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>You have the freedom to trade a wide range of instruments, including Forex, Indices, Commodities, Stocks, and Crypto, among others. There are no limitations on the instruments you can trade. 
                                        Similarly, there are no restrictions on the trading strategies you can employ. Whether it's optional trading, hedging, algorithmic trading, or using EAs, Orfinex allows you to implement any legitimate trading strategy that respects real market conditions. 
                                        Visit this Spreadsheet to Find all available Instruments on Challenge or Funded Accounts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        What is the difference between Orfinex and Orfinex Fund?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Orfinex is a regulated Forex Broker that has been serving a diverse range of clients since 2015. It provides liquidity and technology solutions in the Forex industry, and traders can open regular trading accounts at Orfinex.com. On the other hand, Orfinex Fund, operating under the same trusted brand name, is a prop-trading company that offers unique solutions at OrfinexFund.com. It combines the expertise of tech entrepreneurs, brokerage professionals, and experienced traders, aiming to provide traders with exceptional products and quality education to thrive in the trading world.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

@endsection
