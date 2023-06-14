@php

var_dump($acount)
@endphp

<br>
<br>
{{$acount->balances[0]->free}}
<br>
<br>
<p>Maker Commission: {{ $acount->makerCommission }}</p>
<p>Taker Commission: {{ $acount->takerCommission }}</p>
<p>Buyer Commission: {{ $acount->buyerCommission }}</p>
<p>Seller Commission: {{ $acount->sellerCommission }}</p>
<p>Can Trade: {{ $acount->canTrade ? 'Yes' : 'No' }}</p>
<p>Can Withdraw: {{ $acount->canWithdraw ? 'Yes' : 'No' }}</p>
<p>Can Deposit: {{ $acount->canDeposit ? 'Yes' : 'No' }}</p>
<p>Account Type: {{ $acount->accountType }}</p>

@foreach($acount->balances as $balance)
    <p>Asset: {{ $balance->asset }}</p>
    <p>Free: {{ $balance->free }}</p>
    <p>Locked: {{ $balance->locked }}</p>
@endforeach

@foreach($acount->permissions as $permission)
    <p>Permission: {{ $permission }}</p>
@endforeach


