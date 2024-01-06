<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <!--<div class="search">-->
    <!--    <label>-->
    <!--        <input type="text" placeholder="Search here">-->
    <!--        <ion-icon name="search-outline"></ion-icon>-->
    <!--    </label>-->
    <!--</div>-->

    <div class="user">
        <img src="{{asset('backend/assets/imgs/customer01.jpg')}}" alt="">
    </div>
</div>
<!-- ======================= Cards ================== -->
<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">{{$totalAppointmentsCount}}</div>
            <div class="cardName">Appointments</div>
        </div>

        <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">{{$totalSubscriptionsCount}}</div>
            <div class="cardName">Subscriptions</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">{{$totalContactsCount}}</div>
            <div class="cardName">Contacts</div>
        </div>

        <div class="iconBx">
            <ion-icon name="chatbubbles-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">{{$totalUserCount}}</div>
            <div class="cardName">Users</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </div>
</div>