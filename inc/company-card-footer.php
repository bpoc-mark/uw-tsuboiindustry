<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<nav class="c-cardbtn">
    <ul class="c-cardbtn--list">
        <li class="c-cardbtn--item">
            <a href="/company/message/" class="c-cardbtn--link <?php if ($str[2] == "message") { echo ' c-cardbtn--link__active '; } ?>">代表ごあいさつ
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt="矢印アイコン"></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/company/profile/" class="c-cardbtn--link <?php if ($str[2] == "company-profile") { echo ' c-cardbtn--link__active '; } ?>">会社概要
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt="矢印アイコン"></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/company/history/" class="c-cardbtn--link <?php if ($str[2] == "history") { echo ' c-cardbtn--link__active '; } ?>">沿　革
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt="矢印アイコン"></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/company/iso/" class="c-cardbtn--link <?php if ($str[2] == "iso") { echo ' c-cardbtn--link__active '; } ?>">ISO認証取得
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt="矢印アイコン"></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/company/qualified-person/" class="c-cardbtn--link <?php if ($str[2] == "qualified-person") { echo ' c-cardbtn--link__active '; } ?>">有資格者
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt="矢印アイコン"></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/company/business-base/" class="c-cardbtn--link <?php if ($str[2] == "business-base") { echo ' c-cardbtn--link__active '; } ?>">営業拠点
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt="矢印アイコン"></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/company/environment-policy/" class="c-cardbtn--link <?php if ($str[2] == "environment-policy") { echo ' c-cardbtn--link__active '; } ?>">環境方針
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt="矢印アイコン"></span>
            </a>
        </li>
    </ul>
</nav>