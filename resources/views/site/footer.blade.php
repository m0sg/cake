<footer id="footer">
    <nav>
        <div>
            <h3>Поиск</h3>
            {!! Form::open(['url' => 'search']) !!}
            {{ Form::text('search', '', ['placeholder' => 'Запрос']) }}
            {{ Form::submit('Поиск') }}
            {!! Form::close() !!}

        </div>
        <div>
            <h3>Popular links</h3>
            <ul>
                <li><a href="index.htm" >Your Account</a></li>
                <li><a href="index.htm" >View Order</a></li>
                <li><a href="index.htm" >Privacy Policy</a></li>
                <li><a href="index.htm" >Terms &amp; Conditions</a></li>
            </ul>
        </div>
        <div>
            <h3>Contact info</h3>
            <ul class="vcard" itemscope itemtype="http://schema.org/Organization">
                <li class="fn org" itemprop="name">Justshop Store</li>
                <li class="a"><a href="tel:5554567890" class="tel" itemprop="telephone">(555)-456-7890</a></li>
                <li class="b"><a class="email" itemprop="email">email//oursite/com</a></li>
                <li class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span class="street-address" itemprop="streetAddress">222 Baker Street</span>, <span class="locality" itemprop="addressLocality">London</span></li>
            </ul>
        </div>

                <h3>Закажи обратный звонок</h3>
        {!! Form::open(['url' => 'send-mail']) !!}
        {{ Form::text('name', '', ['placeholder' => 'Ваше имя']) }}
        {{ Form::text('phone', '', ['placeholder' => 'Ваш номер телефона']) }}
        {{ Form::submit('Отправить') }}
        {!! Form::close() !!}
    </nav>
    <ul class="social-a">
        <li class="bh"><a rel="external" href="index.htm" >Behace</a></li>
        <li class="fb"><a rel="external" href="index.htm" >Facebook</a></li>
        <li class="fl"><a rel="external" href="index.htm" >Flickr</a></li>
        <li class="in"><a rel="external" href="index.htm" >Instagram</a></li>
        <li class="gl"><a rel="external" href="index.htm" >Google+</a></li>
        <li class="tm"><a rel="external" href="index.htm" >Tumblr</a></li>
        <li class="tw"><a rel="external" href="index.htm" >Twitter</a></li>
    </ul>
    <p>All Rights Reserved @  Cakery Theme <span class="date">2014</span><br> Designed by <a rel="external" href="index.htm" >Templatation</a></p>
</footer>