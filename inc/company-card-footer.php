<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<nav class="c-cardbtn">
    <ul class="c-cardbtn--list">
        <li class="c-cardbtn--item">
            <a href="/message/" class="c-cardbtn--link <?php if ($str[1] == "message") { echo ' c-cardbtn--link__active '; } ?>">代表ごあいさつ
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/company-profile/" class="c-cardbtn--link <?php if ($str[1] == "company-profile") { echo ' c-cardbtn--link__active '; } ?>">会社概要
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/history/" class="c-cardbtn--link <?php if ($str[1] == "history") { echo ' c-cardbtn--link__active '; } ?>">沿　革
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/iso/" class="c-cardbtn--link <?php if ($str[1] == "iso") { echo ' c-cardbtn--link__active '; } ?>">ISO認証取得
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/qualified-person/" class="c-cardbtn--link <?php if ($str[1] == "qualified-person") { echo ' c-cardbtn--link__active '; } ?>">有資格者
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/business-base/" class="c-cardbtn--link <?php if ($str[1] == "business-base") { echo ' c-cardbtn--link__active '; } ?>">営業拠点
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="" class="c-cardbtn--link">環境方針
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
    </ul>
</nav>