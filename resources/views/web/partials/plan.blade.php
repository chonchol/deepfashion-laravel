<div class="plan-wrap">
    <div class="plan-area">
        <h2>{{ $planName }} <small data-toggle="modal" data-target=".bd-example-modal-xl">Change Plan</small></h2>
    </div>
    <div class="plan-middle">
        <div class="dropdown">
            <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
{{--                Billed <b class="month">Monthly</b> <b class="year">Yearly</b>--}}
                <strong class="month">Billed Monthly</strong>
                <strong class="year">Billed Yearly</strong>
            </span>
            <li class="list-inline-item">${{ $amountMonthly }}<small>/mo</small></li>
            <div id="myDropdown" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item act-item monthly" href="#">Monthly
                    <span><img src="{{ asset('assets/images/blue-tick.svg') }}" alt=""></span>
                </a>
                <a class="dropdown-item yearly" href="#">Yearly
                    <span><img src="{{ asset('assets/images/blue-tick.svg') }}" alt=""></span>
                </a>
            </div>
        </div>

        <ul class="list">
            <li>{{ $feature[1] }}</li>
            <li>{{ $feature[2] }}</li>
            <li>{{ $feature[3] }}</li>
        </ul>
    </div>
    <div class="plan-bottom">
        <h4 class="for-monthly">Total Payable <span>${{ $totalPayable }}.00</span></h4>
        <h4 class="for-yearly">Total Payable <span>${{ $amountYearly }}.00</span></h4>
    </div>
</div>
